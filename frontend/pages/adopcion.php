<?php
include '../components/tableMascota.php';
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
      <h1 class="font-bold text-5xl ml-10 mt-12">Adopción</h1>
      <p class="text-gray-400 py-2 ml-10">Selecciona una mascota</p>
      <?php echo tableMascotas();?>
    </div>
  
  
  </main>
    
  
</body>
</html>