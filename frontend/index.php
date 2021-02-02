<?php
    include './components/sidebar.php';
    include './pages/LoginPage.php';
    include './pages/HomePage.php';
    include './pages/AdoptionPage.php';
    include './pages/MenuPage.php';
    include './pages/DonationPage.php';
    include './pages/PatrocinadorPage.php';
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

    function showMenu(){
        $username = json_decode($_COOKIE['sessionuser'])->{'username'};
        return array(
            "state"=>array("username"=>$username,"active_menu"=>"Menu"),
            "callback"=>function($state){
                return MenuPage($state);
            }
        );
    }

    function getData($data_parameter){
        switch ($data_parameter) {
            case 'pet':
                return json_decode(file_get_contents('http://localhost:5000/mascotas/'),true);
                break;
            case 'adoptions':
                return '';
                #return json_decode(file_get_contents('http://localhost:5000/adopciones/'),true);
                break;
            case 'patrocinadores':
                return '';
                #return json_decode(file_get_contents('http://localhost:5000/patrocinadores/'),true);
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

    function donationsAction($showCallback){
        $datos = getData('adoptions');
        $username = json_decode($_COOKIE['sessionuser'])->{'username'};
        return $showCallback($username,$datos);
    }

    function showDonations($username,$donation_list){
        return array(
            "state"=>array("username"=>$username,"active_menu"=>"Menu","donation_list"=>$donation_list),
            "callback"=>function($state){
                return DonationPage($state);
            }
        );
    }


    function patrocinadoresAction($showCallback){
        $datos = getData('patrocinadores');
        $username = json_decode($_COOKIE['sessionuser'])->{'username'};
        return $showCallback($username,$datos);
    }

    function showPatrocinadores($username,$patrocionador_list){
        return array(
            "state"=>array("username"=>$username,"active_menu"=>"Menu","patrocinador_list"=>$patrocionador_list),
            "callback"=>function($state){
                return PatrocinadorPage($state);
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
                case 'menu' :
                    return showMenu();
                case 'donations' :
                    return donationsAction(function($username,$donation_list){return showDonations($username,$donation_list);});
                case 'patrocinadores' :
                    return patrocinadoresAction(function($username,$patrocionador_list){return showPatrocinadores($username,$patrocionador_list);});
                    

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
