import { NavUser } from '@/components/nav-user';
import {
  Sidebar,
  SidebarContent,
  SidebarFooter,
  SidebarGroup,
  SidebarGroupContent,
  SidebarGroupLabel,
  SidebarHeader,
  SidebarMenu,
  SidebarMenuButton,
  SidebarMenuItem,
} from '@/components/ui/sidebar';
import { type NavItem } from '@/types';

import { useSidebarMenu } from '@/pages/home/hooks/useSidebarMenu';
import { BookOpen, Folder, LayoutGrid } from 'lucide-react';
import AppLogo from './app-logo';

const mainNavItems: NavItem[] = [
  {
    title: 'Dashboard',
    href: '/dashboard',
    icon: LayoutGrid,
  },
];

const footerNavItems: NavItem[] = [
  {
    title: 'Repository',
    href: 'https://github.com/laravel/react-starter-kit',
    icon: Folder,
  },
  {
    title: 'Documentation',
    href: 'https://laravel.com/docs/starter-kits#react',
    icon: BookOpen,
  },
];

export function AppSidebar() {
  const { sideBarMenu, currentMenu, setNewSidebarMenu } = useSidebarMenu();
  return (
    <Sidebar collapsible="icon" variant="floating">
      <SidebarHeader>
        <SidebarMenu>
          <SidebarMenuItem>
            <SidebarMenuButton size="lg" asChild>
              <div>
                <AppLogo />
              </div>
            </SidebarMenuButton>
          </SidebarMenuItem>
        </SidebarMenu>
      </SidebarHeader>
      <SidebarContent>
        {Object.values(sideBarMenu).map((group) => (
          <SidebarGroup key={group.title}>
            <SidebarGroupLabel className="text-primary">{group.title}</SidebarGroupLabel>
            <SidebarGroupContent>
              <SidebarMenu>
                {group.items.map((item) => (
                  <SidebarMenuItem key={item.name}>
                    <SidebarMenuButton
                      onClick={() => setNewSidebarMenu(item.name)}
                      isActive={currentMenu === item.name}
                      className="w-full justify-start transition-colors hover:bg-primary/5 data-[active=true]:bg-primary/10 data-[active=true]:text-primary"
                      tooltip={item.label}
                    >
                      <item.icon className="h-4 w-4" />
                      <span>{item.label}</span>
                      {/*  {item.name === "notifications" && (
                                    <AnimatedNotificationBadge count={3} className="ml-auto" />
                                  )} */}
                    </SidebarMenuButton>
                  </SidebarMenuItem>
                ))}
              </SidebarMenu>
            </SidebarGroupContent>
          </SidebarGroup>
        ))}
      </SidebarContent>

      <SidebarFooter>
        <NavUser />
      </SidebarFooter>
    </Sidebar>
  );
}
