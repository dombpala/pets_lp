<?php
    include './pages/LoginPage.php';
    include './pages/HomePage.php';
    include './pages/AdoptionPage.php';
    function display($state,$callback){
        return(
            '<!doctype html>
            <html>
                <head>
                    <meta charset="UTF-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
                    <!-- ... -->
                </head>
                <body>
                    '.$callback($state).'
                </body>
            </html>'
        );
    }
    
    function App($state = []){
        return display($state["state"],$state["callback"]);
    }


    function showHome($username){
        return array(
            "state"=>array("username"=>$username,"active_menu"=>"Inicio"),
            "callback"=>function($state){
                return HomePage($state);
            }
        );
    }

    function showLogin(){
        return array(
            "state"=>null,
            "callback"=>function($state){
                return LoginPage($state);
            }
        );
    }

    function getData($data_parameter){
        switch ($data_parameter) {
            case 'pet':
                return json_decode(file_get_contents('http://localhost:5000/mascotas/'),true);
                break;
        }
        
    }

    function adoptionAction($showCallback){
        $datos = getData('pet');
        $username = json_decode($_COOKIE['sessionuser'])->{'username'};
        return $showCallback($username,$datos);
    }

    function showAdoption($username,$pet_list){
        return array(
            "state"=>array("username"=>$username,"active_menu"=>"Adopcion","pet_list"=>$pet_list),
            "callback"=>function($state){
                return AdoptionPage($state);
            }
        );
    }

    function useState(){
        if(isset($_GET['page'])){
            switch ($_GET['page']) {
                case 'logout':
                    setcookie("sessionuser", "", time() - 3600);
                    return showLogin();
                case 'adoption':
                    return adoptionAction(function($username,$pet_list){return showAdoption($username,$pet_list);});
            }
        }else{
            if(isset($_COOKIE['sessionuser'])){
                $username = json_decode($_COOKIE['sessionuser'])->{'username'};
                return showHome($username);
            }else{
                return showLogin();
            }
        }
    }

    $state = useState();
    echo App($state);
?>
