<?php
require_once(PATH_MODELS.'PhotoDAO.php');
require_once(PATH_MODELS.'CategorieDAO.php');

if($page == 'photo') {
	$photoDAO = new PhotoDAO(false);
	$catDAO = new CategorieDAO(false);
	$id = htmlspecialchars($_GET['id']);
	$data = $photoDAO->getPhoto($id);
	if ($data == null) {
		$alert = array(
			'messageAlert' => "Identifiant de photo incorrect dans l'URL", 
		);
	} else {
		$data = $data[0];
		$cat = $catDAO->getCategorie($data['catId'])[0];
	}
}

require_once(PATH_VIEWS.$page.'.php');