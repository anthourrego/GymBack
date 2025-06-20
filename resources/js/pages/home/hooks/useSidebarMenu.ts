import { mainItemsSidebarMenu } from "@/common/enums";
import { useSidebarMenuStore } from "@/store/useSidebarMenuStore";
import { Home, User, UserPlus } from "lucide-react";
import { Dashboard } from "../menu/dashboard/screen";
import { Members } from "../menu/members/screen";
import { Register } from "../menu/register/screen";

const sideBarMenu = {
  main:{
    title: 'Principal',
    items:[
      {icon:Home, label:'Dashboard',name:mainItemsSidebarMenu.Dashboard,Component:Dashboard},
      {icon:User, label:'Miembros',name:mainItemsSidebarMenu.Members,Component:Members},
      /* {icon:Home, label:'Accesos',name:mainItemsSidebarMenu.Entries,Component:mainItemsSidebarMenu.Entries},
      {icon:Home, label:'Membresias',name:mainItemsSidebarMenu.Membership,Component:mainItemsSidebarMenu.Membership}, */
      {icon:UserPlus, label:'Registro',name:mainItemsSidebarMenu.Register,Component:Register},
      
      
    ],
    
  },
  other:{
    title:'Other',
    items:[]
  }
}

export function useSidebarMenu(){
  const currentMenu = useSidebarMenuStore((state)=> state.currentMenu);
  const setNewSidebarMenu = useSidebarMenuStore(
    (state) => state.setCurrentSidebarMenu
  );

  // Unir todos los items de todas las secciones
  const allItems = Object.values(sideBarMenu).flatMap(section => section.items);

  // Buscar el componente correspondiente
  const MenuScreenSelected = allItems.find(item => item.name === currentMenu);

  

  return {
    currentMenu,
    MenuScreenSelected,
    sideBarMenu,
    setNewSidebarMenu
  }
}