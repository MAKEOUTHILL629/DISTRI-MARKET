<?php
$administrador = new Administrador($_SESSION["id"]);
$administrador -> consultar();
?>

<header x-data="{ mobileMenuOpen : false }" class="flex flex-wrap flex-row justify-between md:items-center md:space-x-4 bg-quaternary py-4 px-6 relative">
    <a href="index.php?pid=<?php echo base64_encode("presentacion/sesionAdministrador.php")?>" class="block text-white text-3xl font-bold h-6 md:h-8 font-mono" title="Logo de Distri-Market">
       DISTRI-MARKET
       <!-- <img  class="h-16 w-28"  src="./img/logo_transparent.svg" alt="Logo de Distri-Market" title="Themes.dev Logo">-->
    </a>
    <button @click="mobileMenuOpen = !mobileMenuOpen" class="inline-block md:hidden w-8 h-8 bg-gray-200 text-gray-600 p-1">
        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <nav class="absolute md:relative top-16 left-0 md:top-0 z-20 md:flex flex-col md:flex-row md:space-x-6 font-semibold w-full md:w-auto bg-white shadow-md rounded-lg md:rounded-none md:shadow-none md:bg-transparent p-6 pt-0 md:p-0"
         :class="{ 'flex' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}"  @click.away="mobileMenuOpen = false">

        <div  x-data="{ open: false }">
            <button @click="open = true" type="button" class="focus:shadow-lg md:bg-quaternary-dark md:w-24 block py-1 md:text-white md:italic md:shadow-lg md:hover:text-gray-800 focus:outline-none"  id="admin-menu-producto" aria-expanded="false" aria-haspopup="true">
                Producto</button>
            <div x-show="open" @click.away="open = false"  class="md:origin-top-right md:absolute md:right-24 md:mt-2 w-48 md:rounded-md md:shadow-lg md:py-1 md:bg-white md:ring-1 md:ring-black md:ring-opacity-5 md:focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="admin-menu-producto" tabindex="-1">

                <a href="index.php?pid=<?php echo base64_encode("presentacion/producto/crearProducto.php")?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-0">Crear</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-1">Consultar</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-2">Buscar</a>
            </div>
        </div>


        <div  x-data="{ open: false }">
            <button @click="open = true" type="button" class="focus:shadow-lg md:bg-quaternary-dark md:w-24 block py-1 md:text-white md:italic md:shadow-lg md:hover:text-gray-800 focus:outline-none"  id="admin-menu-cliente" aria-expanded="false" aria-haspopup="true">
                Cliente</button>
            <div x-show="open" @click.away="open = false"  class="md:origin-top-right md:absolute md:right-12 md:mt-2 w-48 md:rounded-md md:shadow-lg md:py-1 md:bg-white md:ring-1 md:ring-black md:ring-opacity-5 md:focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="admin-menu-cliente" tabindex="-1">

                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-0">Crear</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-1">Consultar</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-2">Buscar</a>
            </div>
        </div>


        <div x-data="{ open: false }" class="ml-3 relative">
            <div>

                <button @click="open = true" type="button" class="md:text-center md:focus:shadow-lg md:bg-gray-800 md:flex md:text-sm md:rounded-full md:focus:outline-none md:focus:ring-2 md:focus:ring-offset-2 md:focus:ring-offset-gray-800 md:focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                   <!-- <span class="md:ssr-only md:hidden">Abrir Menu de Usuario</span>-->
                    <p class="md:hidden -ml-3 text-gray-700"><?php echo $administrador -> getNombre() . " " . $administrador -> getApellido() ?></a></p>
                    <img class="md:h-8 md:w-8 md:rounded-full  h-0 w-0" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
            </div>


            <div x-show="open" @click.away="open = false" class="md:origin-top-right md:absolute md:right-0 md:mt-2 md:w-48 md:rounded-md md:shadow-lg md:py-1 md:bg-white md:ring-1 md:ring-black md:ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <p class="block px-4 py-2 text-sm text-gray-700 text-center font-bold">Administrador</p>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-0">Editar Perfil</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-1">Cambiar Clave</a>
                <a href="index.php?sesion=false" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-2">Cerrar Sesion</a>

            </div>
        </div>
    </nav>

</header>





