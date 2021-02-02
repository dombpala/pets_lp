<?php
    function tableVoluntarios ($props=[]){
        return <<<HTML

        <div class="grid grid-cols-5 gap-y-5 my-10 ml-10 ">
            <div class="flex flex-col">
                <div class="text-3xl text-center font-medium text-gray-800 mr-6">2</div>
                <div class="text-3xl text-center font-medium text-gray-800 mr-6">Voluntarios</div>
            </div>
            <div class="flex flex-col col-span-4 gap-y-5">
                <div class="grid grid-cols-5">
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Cédula</div>
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Nombre</div>
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Apellido</div>
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Fecha de Nacimiento</div>
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Tipo</div>
                </div>

                <div class="grid grid-cols-5">
                    <div class="font-medium text-center bg-gray-300 py-4">0955647382</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Luis</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Cajas</div>
                    <div class="font-medium text-center bg-gray-300 py-4">02/03/1993</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Veterinario</div>
                </div>

                <div class="grid grid-cols-5">
                    <div class="font-medium text-center bg-gray-300 py-4">0967123312</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Hugo</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Vásquez</div>
                    <div class="font-medium text-center bg-gray-300 py-4">06/08/1996</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Cuidador</div>
                </div>

            </div>

        </div>

        HTML;
    }
?>