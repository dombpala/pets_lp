<?php
    include "../components/menuCard.php";
    include "../components/sidebar.php";
?>

<!doctype html>
<html>
    <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width-device-width, initial-scale=1.0"/>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    </head>

    <body>
        <?php
            echo(
                '<main class="h-screen bg-white grid gap-4 grid-cols-7">
                    <div class="col-span-1">
                        '.Sidebar(array("username"=>"Camilo", "active_menu"=>"Menu")).'
                    </div>
                    <div class="col-span-6 p-5">
                        <h1 class="text-5xl font-bold ml-10">Menú</h2>
                        <p class="text-gray-400 py-2 ml-10">Selecciona un recurso</p>
                        '.menuCard().'
                    </div>
                </main>'
            );
        ?>
    </body>
    
</html>
