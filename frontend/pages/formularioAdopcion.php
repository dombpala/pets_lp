<?php
include '../components/sidebar.php';
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <!-- ... -->
</head>
<body>
    <main class="h-screen bg-white grid gap-4 grid-cols-7">
        <div class="col-span-1">
        <?php 
            echo Sidebar(array("username"=>"Camilo", "active_menu"=>"Inicio"));
        ?>
        </div>

        <div class="col-span-6 p-5">
            <h1 class="font-bold text-5xl mt-12">Datos del Adoptante</h1>
            <form class="grid grid-cols-2">
                <div class="my-7 grid grid-cols-1 w-4/5">
                    <label class="font-bold mb-2">Nombre </label>
                    <input class="rounded-md border-black border-2 h-9 p-2" type="text" required>
                </div>
                
                <div class="my-7 grid grid-cols-1 w-4/5">
                    <label class="font-bold mb-2">Apellido </label>
                    <input class="rounded-md border-black border-2 h-9 p-2" type="text" required>
                </div>

                <div class="mb-10 grid grid-cols-1 w-4/5">
                    <label class="font-bold mb-2">Cedula </label>
                    <input class="rounded-md border-black border-2 h-9 p-2" type="text" required>
                </div>

                <div class="mb-10 grid grid-cols-1 w-4/5">
                    <label class="font-bold mb-2">Fecha de Nacimiento </label>
                    <input class="rounded-md border-black border-2 h-9 p-2" type="date" required>
                </div>

                <div class="col-span-2 place-self-center mr-24">
                    <input type="submit" value="Adoptar" class="font-medium border-black bg-black rounded-md text-white w-36 p-2 border-2">
                </div>
                
                
            </form>
        </div>
</body>
</html>