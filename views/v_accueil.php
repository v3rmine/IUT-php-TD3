<?php
/*
 * DS PHP
 * Vue page index - page d'accueil
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
//  En tête de page
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<h1><?= TITRE_PAGE_ACCUEIL_TOUS ?></h1>

<form method="get" action="" class="form-group">
    <label for="opt">Quelles photos souhaitez-vous afficher ?</label>
    <select name="catId" id="opt">
        <optgroup label="Tous">
            <option value="null" >Toutes les photos</option>
        </optgroup>
        <optgroup label="Filtré">
            <?php
                foreach ($cats as $cat) {
                    $str = '<option value="'. $cat['catId'] ;
                    if($_SESSION['catId'] == $cat['catId']) {
                        $str = $str . ' " selected > ';
                    }
                    else {
                        $str = $str . '" > ';
                    }
                    $str = $str . $cat['nomCat']  .' </option> ';
                    echo $str;
                }
            ?>
        </optgroup>
    </select>

    <?=
    '<button type="submit">Envoyer</button>' ?>
</form>


<div>
	<?php foreach ($photos as $kp => $vp) {
		echo '<a href="?page=photo&id='.$vp['photoId'].'">';
		echo '<img src="'.PATH_IMAGES.$vp['nomFich'].'" alt="'.$vp['description'].'" />';
		echo '</a>';
	} ?>
</div>


<!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
