import { AnimatedGradientButton, HoverBorderGradient } from "@/components/ui/customTheme";
import { Button } from "@/components/ui/button";
import { EyeOff, Lock, Mail } from "lucide-react";
import { FormEventHandler } from 'react';
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { router, useForm } from "@inertiajs/react";
import { useRoute } from 'ziggy-js';

type LoginForm = {
  email: string;
  password: string;
  remember: boolean;
};

export function AuthForm() {
  const { data, setData, post, reset } = useForm<Required<LoginForm>>({
    email: '',
    password: '',
    remember: false,
  });

  const submit: FormEventHandler = (e) => {
    e.preventDefault();

    post(route('login'), {
      onFinish: () => reset('password'),
    });
  };

  const route = useRoute();

  return (
    <section className="space-y-6">
      <form onSubmit={submit} className="space-y-4">
        {/* Campo de email */}
        <div className="space-y-2">
          <Label htmlFor="email" className="flex items-center gap-2">
            <Mail className="h-4 w-4 text-primary" />
            Correo Electrónico
          </Label>
          <Input
            id="email"
            type="email"
            placeholder="admin@fitwinner.com"
            value={data.email}
            onChange={(e) => setData({ ...data, email: e.target.value })}
            className="transition-colors focus-within:border-primary/50"
            required
          />
        </div>

        {/* Campo de contraseña */}
        <div className="space-y-2">
          <Label htmlFor="password" className="flex items-center gap-2">
            <Lock className="h-4 w-4 text-primary" />
            Contraseña
          </Label>
          <div className="relative">
            <Input
              id="password"
              type={'password'}
              placeholder="••••••••"
              value={data.password}
              onChange={(e) => setData({ ...data, password: e.target.value })}
              className="pr-10 transition-colors focus-within:border-primary/50"
              required
            />
            <Button
              type="button"
              variant="ghost"
              size="sm"
              className="absolute top-0 right-0 h-full px-3 py-2 hover:bg-transparent"
              onClick={() => console.log()}
            >
              <EyeOff className="h-4 w-4 text-muted-foreground" />
              {/* {false ?  : <Eye className="h-4 w-4 text-muted-foreground" />} */}
            </Button>
          </div>
        </div>

        <div className="space-y-3">
          <HoverBorderGradient className="w-full rounded-md">
            <AnimatedGradientButton type="submit" className="w-full" onClick={() => router.visit(route('home'))}>
              <div className="flex items-center gap-2">
                <Lock className="h-4 w-4" />
                Iniciar Sesión
              </div>
            </AnimatedGradientButton>
          </HoverBorderGradient>

          <div className="flex flex-col space-y-2 text-center">
            <div className="text-sm text-muted-foreground">
              ¿Necesitas ayuda?{' '}
              <Button type="button" variant="link" className="h-auto p-0 text-sm text-primary hover:text-primary/80">
                Contactar soporte
              </Button>
            </div>
          </div>
        </div>
      </form>
    </section>
  );
}
