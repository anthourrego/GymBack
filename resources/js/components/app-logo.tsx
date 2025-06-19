import AppLogoIcon from './app-logo-icon';

export default function AppLogo() {
  return (
    <>
      <div className="flex aspect-square size-8 items-center justify-center rounded-md bg-sidebar-primary text-sidebar-primary-foreground">
        <AppLogoIcon className="size-5 fill-current text-white dark:text-black" />
      </div>
      <div className="ml-1 grid flex-1 text-left text-sm">
        <div className="relative z-10">
          <span className="bg-gradient-to-r from-primary to-primary/70 bg-clip-text font-bold text-transparent text-xl">{import.meta.env.VITE_APP_NAME}</span>
        </div>
      </div>
    </>
  );
}
