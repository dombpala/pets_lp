<?php
    function tableMenuMascotas ($props=[]){
        return <<<HTML

        <div class="grid grid-cols-5 gap-y-5 my-10 ml-10 ">
            <div class="flex flex-col">
                <div class="text-3xl text-center font-medium text-gray-800 mr-6">2</div>
                <div class="text-3xl text-center font-medium text-gray-800 mr-6">Mascotas</div>
            </div>
            <div class="flex flex-col col-span-4 gap-y-5">
                <div class="grid grid-cols-3">
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Nombre</div>
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Especie</div>
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Edad</div>
                </div>

                <div class="grid grid-cols-3">
                    <div class="font-medium text-center bg-gray-300 py-4">Trueno</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Perro</div>
                    <div class="font-medium text-center bg-gray-300 py-4">8</div>
                </div>

                <div class="grid grid-cols-3">
                    <div class="font-medium text-center bg-gray-300 py-4">Tetsu</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Gato</div>
                    <div class="font-medium text-center bg-gray-300 py-4">3</div>
                </div>

            </div>

        </div>

        HTML;
    }
?>