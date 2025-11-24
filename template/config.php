<?php
$pageTitles = [
    'home.php' => 'VectisGames - Home',
    'products.php' => 'VectisGames - Products',
    'product.php' => 'VectisGames - ProductPage',
    'contact.php' => 'VectisGames - Contact',
    'register.php' => 'VectisGames - Register',
];
$currentPage = basename($_SERVER["PHP_SELF"]);
$pageTitle = $pageTitles[$currentPage] ?? 'VectisGames';
?>