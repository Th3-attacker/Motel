<?php
	use App\controllers\HomeController;

	require_once 'Autoload.php';

require_once './public/includes/header.php';?>

<?php
	App\Autoload::register(); // appel register a chaque instanciation
	new HomeController();     // instanciation
?>

<?php require_once './public/includes/footer.php';?>


