<?php
require_once(PATH_MODELS.'PhotoDAO.php');
require_once(PATH_MODELS.'CategorieDAO.php');

if(!isset($_GET['catId']))
{
    $_GET['catId'] = null;
}

$photoDAO = new PhotoDAO(true);

if ($page == "accueil") {
	$_SESSION['catId'] = htmlspecialchars($_GET['catId']);
	$photos = $photoDAO->getPhotos($_SESSION['catId']);
	
	$catDAO = new CategorieDAO(true);
	$cats = $catDAO->getCategories();
	$alert = array(
		'messageAlert' => count($photos)." photo(s) selectionnée(s)",
		'classAlert' => "success",
	);
}

require_once(PATH_VIEWS.$page.'.php');	