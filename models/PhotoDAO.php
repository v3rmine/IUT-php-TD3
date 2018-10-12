<?php
require_once(PATH_MODELS.'DAO.php');

class PhotoDAO extends DAO {
	function getPhotos($cat = null) {
		$req = 'SELECT nomFich, description, photoId FROM Photo';
		if ($cat != null and $cat != 'null') {
			$req = $req." WHERE catId = ?";
            return $this::queryAll($req, array($cat));
		} else {
			return $this::queryAll($req);
		}
	}

	function getPhoto($id) {
        $req = 'SELECT * FROM Photo WHERE photoId = '.$id;
        return $this::queryAll($req, array($id));
    }
}