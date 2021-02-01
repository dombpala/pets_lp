<?php
    include "../components/tableDonaciones.php";
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
                        <h1 class="text-5xl font-bold ml-10">Donaciones</h2>
                        <p class="text-gray-400 py-2 ml-10">Visualiza el estado de tus recursos</p>
                        '.tableDonaciones().'
                        <div class="grid grid-cols-6">
                            <div class="col-start-1 col-end-2 rounded-full bg-gray-900 text-white text-xl text-center ml-10 py-3 px-3">
                                <a href="./menu.php" class=""><i class="fas fa-arrow-circle-left mr-3" style="color: white;"></i>
                                    Regresar
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                </main>'
            );
        ?>
        
    </body>
    
</html>