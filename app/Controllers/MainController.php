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
            
            'Nouveau site' => [
                'image_name'=>'ecommerce.jpg',
                'badges'=>['HTML', 'CSS', 'PHP'], 
                'description'=> 'A déterminer',
                'type'=>'ecommerce',
                'url'=>'#'
            ],
            'Nouveau site 2' => [
                'image_name'=>'php.png',
                'badges'=>['HTML', 'CSS', 'PHP'], 
                'description'=> 'A déterminer',
                'type'=>'vitrine_contact',
                'url'=>'#'
                ]
            ];
            $badges = [
                'HTML' => new Skills('HTML', '#0d5356', 80),
                'CSS' => new Skills('CSS', '#82066d', 60),
                'Bootstrap' => new Skills('Bootstrap', '#886518', 60),
                'JS'=> new Skills('JS', '#7598e8', 80),
                'PHP' => new Skills('PHP', '#e89075', 80),
                'POO'=>new Skills('POO', '#a72c2c', 60)
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

    public function homeSubmit() {
        $this->addFlashMessage('Message envoyé!');
        global $router;
        header('Location: '. $router->generate('main-home'));
    }
    public function addFlashMessage($message) {
        
            $_SESSION['infos'][] = $message;
      
    }
    public function show($viewName, $viewVars=[]) {
        $message = $viewVars['message'] ??'';
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