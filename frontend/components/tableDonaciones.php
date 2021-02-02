<?php
    function tableDonaciones ($props=[]){
        return <<<HTML

        <div class="grid grid-cols-6 gap-y-5 my-10 ml-10 ">
            <div class="flex flex-col">
                <div class="text-3xl text-center font-medium text-gray-800 mr-6">3</div>
                <div class="text-3xl text-center font-medium text-gray-800 mr-6">Donaciones</div>
            </div>
            <div class="flex flex-col col-span-5 gap-y-5">
                <div class="grid grid-cols-5">
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Fecha</div>
                    <div class="font-extrabold text-center text-lg  py-2 bg-gray-100">Donante</div>
                    <div class="col-span-2 font-extrabold text-center py-2 text-lg bg-gray-100">Descripción</div>
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Cantidad</div>
                </div>

                <div class="grid grid-cols-5">
                    <div class="font-medium text-center bg-gray-300 py-4">12 Enero 2021</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Domenica Barreiro</div>
                    <div class="col-span-2 font-medium text-center bg-gray-300 py-4">Lata de comida para gatos</div>
                    <div class="font-medium text-center bg-gray-300 py-4">8</div>
                </div>

                <div class="grid grid-cols-5">
                    <div class="font-medium text-center bg-gray-300 py-4">15 Enero 2021</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Camilo Gutiérrez</div>
                    <div class="col-span-2 font-medium text-center bg-gray-300 py-4">Funda de comida para perros Dog Chow 1 Kg</div>
                    <div class="font-medium text-center bg-gray-300 py-4">5</div>
                </div>

                <div class="grid grid-cols-5">
                    <div class="font-medium text-center bg-gray-300 py-4">20 Enero 2021</div>
                    <div class="font-medium text-center bg-gray-300 py-4">Nicole García</div>
                    <div class="col-span-2 font-medium text-center bg-gray-300 py-4">Kit de medicina y shampoo para perros</div>
                    <div class="font-medium text-center bg-gray-300 py-4">6</div>
                </div>

            </div>

        </div>

        HTML;
    }
?>