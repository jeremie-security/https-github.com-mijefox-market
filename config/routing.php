<?php


//route des liens de sites stats_cdf_weibull
function routing($twig){
  $page = 'home'; //instanciation de la variable page par defaut
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }

  //rendu client
  switch ($page) {
    case 'home':
      echo $twig->render('index.html');
      break;

    case 'about':
      echo $twig->render('about.html');
      break;

    case 'contact':
      echo $twig->render('contact.html');
      break;

    case 'produits':
      echo $twig->render('product.html');
      break;

    case 'custum':
      echo $twig->render('custum.html');
      break;

    default:
      header('HTTP/A.0 404 Not Found');
      echo $twig->render('404.html');
      break;
  }

}
