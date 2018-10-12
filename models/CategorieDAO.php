<?php
require_once(PATH_MODELS.'DAO.php');

class CategorieDAO extends DAO {
    function getCategories() {
        return $this::queryAll("SELECT catId, nomCat FROM Categorie");
    }

    function getCategorie($id) {
        return $this::queryAll("SELECT catId, nomCat FROM Categorie WHERE catId=".$id);
    }
}