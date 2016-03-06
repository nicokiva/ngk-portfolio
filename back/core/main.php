<?
	error_reporting(E_ALL); 
	ini_set('display_errors', 1);

	include_once('class/configuration.php');
	include_once('class/resourceLoader.php');
	include_once('class/templateLoader.php');
	include_once('class/textProvider.php');

	include_once('class/request.php');
	include_once('class/response.php');
	include_once('class/application.php');
	include_once('class/controller.php');

	include_once('../external/mailer/mailer.php');

	$params = array_merge ($_GET, $_POST);
	unset($params['controller']);
	unset($params['action']);

	$configuration = new configuration($_SERVER['DOCUMENT_ROOT']);
	$resourceLoader = new resourceLoader($configuration->getKey('url_prefix'));
	$textProvider = new textProvider($_SERVER['DOCUMENT_ROOT'], strtolower($params['lang']));
	$templateLoader = new templateLoader($_SERVER['DOCUMENT_ROOT'], $resourceLoader, $textProvider);
	


	$external = array('mailer' => new mailer($configuration));

	$request = new request($_GET['controller'], $_GET['action'], $params);
	$app = new application($configuration, $resourceLoader, $templateLoader, $textProvider);
	$app->run($request, $external);
?>