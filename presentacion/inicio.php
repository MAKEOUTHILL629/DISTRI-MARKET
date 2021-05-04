

<main class="mb-8  bg-primary">
    <div class="grid grid-cols-1  ">

           <div class="-mt-20 mx-auto " >
                <img src="img/logo_transparent.png" class="img-fluid" alt="Logo de Distri-Market"  style="height: 400px">
            </div>


            <div class="bg-white w-11/12 md:w-5/6 lg:w-8/12 rounded-2xl mx-auto shadow-2xl xl:w-1/3 lg:w-5/6 2xl:w-auto 2xl:my-auto xl:my-auto md:my-auto  -mt-20 mb-10 md:mb-12 md:px-2 px-4 py-12 lg:px-20 lg:py-20 lg:mb-18 xl:-mt-10 xl:mb-36 2xl:mb-40 text-center ">
                <h3 class="mb-8  text-2xl font-bold text-gray-800 tracking-wider ">Bienvenido</h3>
                <?php
                if(isset($_GET["error"])){
                    ?>
                    <div class="animate-bounce text-red-500 mb-2" role="alert">
                        <strong>Correo o Contraseña incorrecta</strong>
                        <p class="opacity-80"> Vuelve a intentarlo </p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                ?>
                <form action="index.php?pid=<?php echo base64_encode("presentacion/autenticar.php") ?>" method="post">
                    <input type="email" name="correo" class="w-11/12  xl:w-11/12  h-12 rounded-xl border border-secondary text-gray-700 py-2 px-6 focus:outline-none focus:shadow-2xl hover:bg-secondary "  placeholder="Correo electrónico" required>
                    <input type="password" name="clave" class="w-11/12  xl:w-11/12 h-12 rounded-xl mt-4 border border-secondary text-gray-700 py-2 px-6 focus:outline-none focus:shadow-2xl hover:bg-secondary"  placeholder="Introduce tu contraseña"  required>
                    <button type="submit" class="w-11/12 mt-4 h-14 xl:w-3/4 2xl:w-1/2 shadow-lg bg-secondary font-semibold text-xl text-gray-700 rounded-xl block px-6 py-2 mx-auto hover:shadow-none  hover:text-quaternary hover:bg-tertiary focus:outline-none focus:shadow-md">Iniciar sesión</button>

                </form>

            </div>



                        

    </div>
</main>



