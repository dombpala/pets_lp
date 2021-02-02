<?php
    function tablePatrocinadores ($props=[]){
        return <<<HTML

        <div class="grid grid-cols-5 gap-y-5 my-10 ml-10 ">
            <div class="flex flex-col">
                <div class="text-3xl text-center font-medium text-gray-800 mr-6">3</div>
                <div class="text-3xl text-center font-medium text-gray-800 mr-6">Patrocinadores</div>
            </div>
            <div class="flex flex-col col-span-4 gap-y-5">
                <div class="grid grid-cols-4">
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Cédula</div>
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Nombre</div>
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Apellido</div>
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Fecha de Nacimiento</div>
                </div>

                <div class="grid grid-cols-4">
                    <div class="font-medium text-center bg-gray-300 py-4">0955647382</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Rodrigo</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Saraguro</div>
                    <div class="font-medium text-center bg-gray-300 py-4">30/07/1980</div>
                </div>

                <div class="grid grid-cols-4">
                    <div class="font-medium text-center bg-gray-300 py-4">0967123312</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Daniel</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Pino</div>
                    <div class="font-medium text-center bg-gray-300 py-4">25/10/1986</div>
                </div>

            </div>

        </div>

        HTML;
    }
?>