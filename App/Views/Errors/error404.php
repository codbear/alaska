<?php ob_start() ?>

<div id="container-404">
	<div class="error-message">
		<h2 class="center-align grey-text text-lighten-4">Ces contrées sont trop sauvages pour l'homme...</h2>
		<div class="center-align"><a href="/" class="waves-effect waves-light btn-large">Revenir à l'accueil</a></div>
	</div>
</div>

<?php $content = ob_get_clean() ?>

<?php require_once('../App/Views/template.php') ?>