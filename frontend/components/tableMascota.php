<?php

function tableMascotas () {
    return <<<HTML
        <div class="grid grid-cols-5 gap-4 ml-10">

            <div class="col-span-1"></div>
            <div class="font-extrabold text-center text-lg">Nombre</div>
            <div class="font-extrabold text-center text-lg">Tipo</div>
            <div class="font-extrabold text-center text-lg">Edad</div>
            <div class="col-span-1"></div>

            
            <img src="../assets/perro.svg" class="rounded-full w-20 h-20 place-self-center bg-indigo-300" alt="">
            <div class="font-medium capitalize place-self-center">trueno</div>
            <div class="font-medium capitalize place-self-center">perro</div>
            <div class="font-medium place-self-center">8</div>
            <form action="./formularioAdopcion.php" class="place-self-center">
                <button type="submit "class="font-medium border-black bg-black rounded-md text-white w-28 p-2 border-2">Adoptar</button>
            </form>
        
            <img src="../assets/gato.svg" class="rounded-full w-20 h-20 place-self-center bg-indigo-300">
            <div class="font-medium capitalize place-self-center">trueno</div>
            <div class="font-medium capitalize place-self-center">gato</div>
            <div class="font-medium place-self-center">8</div>
            <form action="./formularioAdopcion.php" class="place-self-center">
                <button class="place-self-center font-medium border-black rounded-md w-28 p-2 border-2">Adoptar</button>
            </form>
        </div>
    HTML;
}

?>