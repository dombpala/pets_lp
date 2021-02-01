<?php
    include './components/login.php';
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <!-- ... -->
</head>
<body>
  <?php
    echo(
      '<main class="h-screen bg-white grid gap-4 grid-cols-6">
        <div class="col-span-3">
            '.Login().'
        </div>
        <div class="col-span-3 pt-16 bg-indigo-900">
            <h1 class="text-5xl text-center mt-5 font-bold text-white">
              CENTRO DE MASCOTAS  
            </h1>
            <p class="font-light text-white text-center p-2">
              Sistema de gestión de recursos y adopción de mascotas.
            </p>
            <div class="p-4 flex content-center items-center justify-center">
              <img src="./assets/void.svg" alt="" class="w-96 h-96 object-center">
            </div>
        </div>
      </main>'
    )
  ?>
</body>
</html>
