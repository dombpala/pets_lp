<?php
    function menuCard (){
        return ('
            <ul class="grid grid-cols-2 gap-10 m-10">
                <li>
                    <a href="../pages/donaciones.php" class="bg-gray-50 hover:bg-purple-300 hover:border-transparent hover:shadow-lg group block rounded-lg p-4 border border-gray-200">
                        <img class="rounded-full w-40 h-40 mx-auto"" src="../resources/donaciones.jpg" alt="">
                        <h1 class="text-xl text-center font-bold">Donaciones</h1>  
                    </a>
                </li>

                <li>
                    <a href="../pages/patrocinadores.php" class="bg-gray-50 hover:bg-purple-300 hover:border-transparent hover:shadow-lg group block rounded-lg p-4 border border-gray-200">
                        <img class="rounded-full w-40 h-40 mx-auto"" src="../resources/patrocinadores.jpg" alt="">
                        <h1 class="text-xl text-center font-bold">Patrocinadores</h1>  
                    </a>
                </li>

                <li>
                    <a href="../pages/voluntarios.php" class="bg-gray-50 hover:bg-purple-300 hover:border-transparent hover:shadow-lg group block rounded-lg p-4 border border-gray-200">
                        <img class="rounded-full w-40 h-40 mx-auto"" src="../resources/voluntarios.jpg" alt="">
                        <h1 class="text-xl text-center font-bold">Voluntarios</h1>  
                    </a>
                </li>

                <li>
                    <a href="../pages/mascotas.php" class="hover:bg-purple-300 hover:border-transparent hover:shadow-lg group block rounded-lg p-4 border border-gray-200">
                        <img class="rounded-full w-40 h-40 mx-auto"" src="../resources/mascotas.jpg" alt="">
                        <h1 class="text-xl text-center font-bold">Mascotas</h1>  
                    </a>
                </li>
            </ul>
            
        ');
    }
?>