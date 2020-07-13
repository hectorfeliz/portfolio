<?php
$request = $_SERVER['REQUEST_URI'];

if($_SERVER['SERVER_NAME'] == 'localhost'){
    $request = str_replace("/portfolio", "",$request);    
    define("BASE_PATH", 'http://localhost:8080/portfolio/');
}else{
    define("BASE_PATH", 'https://www.hector.tech/'); 
}


include "layout/header.php";


?>
<body class="<?php echo str_replace("/","",$request);?> " >

<?php if($request !== '/work/') {?>
    <span class="toronto">
        <?php echo file_get_contents('assets/svg/toronto.svg');?> 
</span>
<?php } ?>


   

<?php include "layout/nav.php";
 ?>


<?php
switch ($request) {
    case '/' :
        require  'views/home.php';
        break;
    case 'home/' :
        include  'views/home.php';
        break;    
    case '/about/' :
        include  'views/about.php';
        break;
    case '/work/' :
        include  'views/portfolio.php';
        break;
    case '/skills/' :
        require  'views/portfolio.php';
        break;
    case '/contact/' :
        include  'views/contact.php';
        break;
    default:
        http_response_code(404);
        include  'views/404.php';
        break;
} ?>

<?php include "layout/footer.php";