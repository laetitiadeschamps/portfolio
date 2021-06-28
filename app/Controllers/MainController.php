<?php

namespace App\Controllers;
use App\Models\Skills;

class MainController {
    public function home($params=[]) {
        $sitesWeb = [
            'Securitous'=>[
                'image_name'=>'securitous.jpg',
                'badges'=>['HTML', 'CSS', 'Bootstrap', 'JS', 'PHP'],
                'description'=> 'Site vitrine avec formulaire de contact',
                'type'=>'vitrine_contact',
                'url'=> 'https://securitous.fr'
            
            ],
            'Puissance 4' => [
                'image_name'=>'javascript.png',
                'badges'=>['HTML', 'CSS', 'JS', 'PHP'],
                'description'=> 'Mini-jeu 2 joueurs',
                'type'=>'jeu',
                'url'=>'#'
            ],
            
            'Messagerie' => [
                'image_name'=>'logo-messagerie.png',
                'badges'=>['JS', 'AJAX', 'POO', 'SQL', 'Websockets', 'Security'], 
                'description'=> 'Messagerie en ligne avec système d\'amis et notifications',
                'type'=>'social',
                'url'=>'#'
            ],
            'Carte interactive' => [
                'image_name'=>'map.jpg',
                'badges'=>['API', 'JS', 'API REST', 'SQL'], 
                'description'=> 'Carte interactive basée sur l\'API leaflet',
                'type'=>'map',
                'url'=>'#'
                ]
            ];
            $badges = [
                'HTML' => new Skills('HTML', '#0d5356', 80),
                'CSS' => new Skills('CSS', '#82066d', 60),
                'Bootstrap' => new Skills('Bootstrap', '#886518', 60),
                'JS'=> new Skills('JS', '#7598e8', 80),
                'PHP' => new Skills('PHP', '#e89075', 80),
                'POO'=>new Skills('POO', '#a72c2c', 60),
                'Websockets'=>new Skills('Websockets', '#ffc107', 60),
                'Security'=>new Skills('Security', '#00bcd4', 60),
                'AJAX'=>new Skills('AJAX', '#a72c92', 60),
                'API'=>new Skills('API', '#2c58a7', 60),
                'SQL'=>new Skills('SQL', '#607d8b', 60),
                'API REST'=>new Skills('LUMEN/API REST', '#ffeb3b', 60),

            ];
            $langues = [
                'Anglais' => new Skills('Anglais', '#0d5356', 95),
                'Allemand' => new Skills('Allemand', '#82066d', 80),
                'Espagnol' => new Skills('Espagnol', '#886518', 60),
                'Turc'=> new Skills('Turc', '#7598e8', 20),
                'Italien' => new Skills('Italien', '#e89075', 20),
               
            ];
      
        $this->show('home', [
            'page'=>'home', 
            'sites'=>$sitesWeb, 
            'badges'=>$badges,
            'langues'=>$langues
        ]);
    }
    // method for handling message from contact form
    public function homeSubmit() {
        if(isset($_POST['name'])) {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $email =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING) ;

            if($name && $email && $message) {
                $mainObj= new MainController();
                $sanitizedName= $mainObj->sanitizeValue($name);
                $sanitizedEmail= $mainObj->sanitizeValue($email);
                $sanitizedMessage= $mainObj->sanitizeValue($message);
                $this->addFlashMessage('Message envoyé!');
                $sanitizedName . ' ' . $sanitizedEmail . ' ' . $sanitizedMessage;
            } else {
                $this->addFlashMessage('Veuillez revérifier votre saisie!');
            }   
    
        }
       
        global $router;
        header('Location: '. $router->generate('main-home'));
    }
    public function addFlashMessage($message) {
            $_SESSION['infos'][] = $message;  
    }
    public function show($viewName, $viewVars=[]) {
        // $message = $viewVars['message'] ??'';
        $router = $GLOBALS['router'];
        require_once __DIR__ .'/../views/header.tpl.php';
        require_once __DIR__ .'/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ .'/../views/footer.tpl.php';
    }
    public function sanitizeValue($value) {
        $value=trim($value);
        $value = htmlspecialchars($value);
        return $value;
    }
}