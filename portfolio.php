<?php 
$class="work";
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

$badgeColors = [
    'HTML' => '#0d5356',
    'CSS' => '#82066d',
    'Bootstrap' => '#886518',
    'JS' => '#7598e8', 
    'PHP' => '#e89075'
]


?>

<?php require ('inc/header.tpl.php') ?>
<?php require ('inc/portfolio.tpl.php') ?>
<?php require ('inc/footer.tpl.php') ?>