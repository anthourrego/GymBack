import { SidebarProvider } from "@/components/ui/sidebar";
import { WrapperHome } from "./components/WrapperHome";
import { useSidebarMenu } from "./hooks/useSidebarMenu";

export default function Home(){
  const {MenuScreenSelected}  = useSidebarMenu()
  return(
    <>
      <SidebarProvider>

        <WrapperHome>
          { MenuScreenSelected
            ?<MenuScreenSelected.Component/>
            : <p>Not Found</p>
          }
        </WrapperHome>
      </SidebarProvider>
    </>
  )
}