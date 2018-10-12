<?php require_once(PATH_VIEWS.'header.php');?>
<?php require_once(PATH_VIEWS.'alert.php');?>

<?php if(!isset($alert)) { ?>

<h1 style="font-weight:bold;">Les détails sur cette photo</h1>
<div class="col-md-6 col-sm-6 col-xs-12">
	<img src="<?=PATH_IMAGES . $data['nomFich'] ?>">
</div>
<div class="col-md-6 cold-sm-6 col-xs-12">
	<table class="table table-bordered">
	    <tr>
			<th>Description</th>
	        <td><?=$data['description']?></td>
	    </tr>
		<tr>
			<th>Nom du fichier</th>
	        <td><?=$data['nomFich']?></td>
	    </tr>
		<tr>
			<th>Catégorie</th>
			<td><a href="?catId=<?=$cat['catId']?>"><?=$cat['nomCat']?></a></td>
	    </tr>
	</table>
</div>
<?php } ?>