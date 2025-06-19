import { useForm } from '@inertiajs/react';
import { Eye, EyeOff, Lock, Mail } from 'lucide-react';
import { FormEventHandler } from 'react';

import { Button } from '@/components/ui/button';
import { AnimatedGradientButton, BackgroundGradient, HoverBorderGradient } from '@/components/ui/customTheme';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { useRoute } from 'ziggy-js';

type LoginForm = {
  email: string;
  password: string;
  remember: boolean;
};

interface LoginProps {
  status?: string;
  canResetPassword: boolean;
}

export default function Login({ status, canResetPassword }: LoginProps) {
  const { data, setData, post, processing, errors, reset } = useForm<Required<LoginForm>>({
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
    <main className="relative flex min-h-screen items-center justify-center overflow-hidden bg-background">
      <div className="absolute inset-0 bg-gradient-to-br from-primary/5 via-background to-primary/10" />
      {/* Contenedor principal */}
      <div className="relative z-10 mx-4 w-full max-w-md">
        <BackgroundGradient className="rounded-[22px] bg-white p-4 sm:p-10 dark:bg-zinc-900">
          <div className="border-0 bg-transparent shadow-none">
            <section className="space-y-4 text-center">
              <div className="flex justify-center">
                <div className="relative overflow-hidden rounded-2xl bg-primary p-4">
                  <div className="relative z-10 h-12 w-12 text-white" />
                  <div className="absolute inset-0 h-full w-full" />
                </div>
              </div>
              <div>
                <h2 className="text-3xl font-bold">{import.meta.env.VITE_APP_NAME}</h2>
                <p className="mt-2 text-lg">Sistema de Gestión</p>
              </div>
              <div>
                <h3 className="text-2xl">Iniciar Sesión</h3>
                <p>Accede a tu cuenta para continuar</p>
              </div>
            </section>

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
                      {false ? <EyeOff className="h-4 w-4 text-muted-foreground" /> : <Eye className="h-4 w-4 text-muted-foreground" />}
                    </Button>
                  </div>
                </div>

                <div className="space-y-3">
                  <HoverBorderGradient className="w-full rounded-md">
                    <AnimatedGradientButton type="submit" className="w-full" onClick={(e) => route('dashboard')}>
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
          </div>
        </BackgroundGradient>
      </div>
    </main>
  );
}
