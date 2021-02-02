<?php
    include '../components/sidebar.php'
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>
<body>
  <?php
    echo(
        '<main class="h-screen bg-white grid gap-4 grid-cols-7">
            <div class="col-span-1">
                '.Sidebar(array("username"=>"Camilo", "active_menu"=>"Inicio")).'
            </div>
            <div class="col-span-6 p-5">
                <h1 class="text-5xl text-center mt-5 font-bold text-gray-600">
                    CENTRO DE MASCOTAS LP
                </h1>
                <div class="pt-5 px-10 flex content-center items-center justify-center">
                    <img src="../assets/cats_welcome.svg" alt="">
                </div>
            </div>
        </main>'
    );
  ?>
</body>
</html>