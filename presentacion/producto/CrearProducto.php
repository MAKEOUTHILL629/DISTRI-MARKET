<?php
include_once "presentacion/menuAdministrador.php";
if (isset($_POST["crear"])) {
    $producto = new Producto("", $_POST["nombre"], $_POST["precio"], $_POST["cantidad"], "", $_SESSION["id"], $_POST["marca"], $_POST["tipoProducto"]);
    $producto->crear();
}
?>
<main class="bg-primary mb-8  pt-20 pb-20">


    <div class="p-6 md:w-1/2 bg-white shadow-2xl mx-auto  rounded-lg my-auto">


        <div class="rounded-lg md:w-full">
            <h2 class="text-center font-bold text-gray-800 text-3xl">Crear Producto</h2>
        </div>
        <?php
            if(isset($_POST["crear"])){
        ?>
        <div class=" text-center">
            <h3 class="text-green-400 font-bold  animate-pulse">Producto Creado Correctamente</h3>
        </div>

        <?php
            }
        ?>

        <div class="relative mx-2 p-6 shadow-lg p-2 bg-white md:bg-transparent rounded-lg -mt-2 ">
            <form action="index.php?pid=<?php echo base64_encode("presentacion/producto/crearProducto.php") ?>"
                  method="post">
                <div class="grid grid-cols-2 text-center ml-12">
                <div class="mb-3 col-span-2 ">
                    <label class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-11/12 shadow-sm sm:text-sm border-gray-300 rounded-md" name="nombre" required="required">
                </div>
                <div class="mb-3 col-span-1 ">
                    <label class="block text-sm font-medium text-gray-700">Precio</label>
                    <input type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-10/12 shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="0.00" name="precio" required="required">
                </div>
                <div class="mb-3 col-span-1 ">
                    <label class="block text-sm font-medium text-gray-700">Cantidad</label>
                    <input type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-10/12 shadow-sm sm:text-sm border-gray-300 rounded-md" name="cantidad" required="required">
                </div>


                <div class="col-span-2 w-11/12">
                    <label class="block text-sm font-medium text-gray-700">
                        Imagen Producto
                    </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                 viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="file-upload"
                                       class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span >Subir Foto</span>
                                    <input id="file-upload" name="imagen" type="file" class="sr-only">
                                </label>
                               <!-- <p class="pl-1">or drag and drop</p>-->
                            </div>
                            <p class="text-xs text-gray-500">
                                PNG, JPG, GIF up to 10MB
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 sm:col-span-1 ">
                    <label class="block text-sm font-medium text-gray-700">Marca</label>
                    <select name="marca" class="mt-1 block w-10/12 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <?php
                        $marca = new Marca();
                        $marcas = $marca->consultarTodos();
                        foreach ($marcas as $marcaActual) {
                            echo "<option value='" . $marcaActual->getId() . "'> {$marcaActual->getNombre()}   </option>";
                        }

                        ?>

                    </select>
                </div>
                <div class="col-span-1 sm:col-span-1 ">
                    <label class="block text-sm font-medium text-gray-700">Tipo Producto</label>
                    <select name="tipoProducto" class="mt-1 block w-10/12 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <?php
                        $tipoProducto = new TipoProducto();
                        $tiposProductos = $tipoProducto->consultarTodos();
                        foreach ($tiposProductos as $tipoProductoActual) {
                            echo "<option value='" . $tipoProductoActual->getId() . "'> {$tipoProductoActual->getNombre()}   </option>";
                        }

                        ?>

                    </select>
                </div>

                </div>
                <div class="px-4 py-3  text-center sm:px-6">
                    <button type="submit" name="crear"  class=" inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Crear</button>
                </div>

            </form>
        </div>

    </div>

</main>

