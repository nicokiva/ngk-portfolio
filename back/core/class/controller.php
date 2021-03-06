<?

	abstract class controller {
		protected $_configuration;
		private $_textProvider;
		private $_controllerName;
		private $_currentAction;
		private $_resourceLoader;
		private $_templateLoader;

		private $_defaultOptions = array(
			'includeHeader' => true,
			'includeFooter' => true
		);

		static function loadController ($controller, $configuration, $resourceLoader, $templateLoader, $textProvider, $external = null) {
			if (!isset($controller) || empty($controller)) {
				throw new Exception("Controller is missing");
			}

			if (!isset($configuration) || empty($configuration)) {
				throw new Exception("Configuration is missing");
			}

			if (!isset($resourceLoader) || empty($resourceLoader)) {
				throw new Exception("Resource Loader is missing");
			}

			if (!isset($templateLoader) || empty($templateLoader)) {
				throw new Exception("Template Loader is missing");
			}

			if (!isset($textProvider) || empty($textProvider)) {
				throw new Exception("Text Provider is missing");
			}

			$file = '../controller/' . $controller . '.php';
			// glob return all files with specific pattern
			foreach (glob("../controller/*.php") as $filename) {
				if (strtolower($filename) == strtolower($file)) {
			    	include $filename;

			    	$controller .= 'Controller';
			    	return new $controller($configuration, $resourceLoader, $templateLoader, $textProvider, $external);
			    }
			}
		}

		public function __construct($configuration, $resourceLoader, $templateLoader, $textProvider) {
			$this->_configuration = $configuration;			
			$this->_controllerName = str_replace('controller', '', strtolower(get_class($this))); // get each controller's name
			$this->_resourceLoader = $resourceLoader;
			$this->_templateLoader = $templateLoader;
			$this->_textProvider = $textProvider;
		}

		public function setAction($action) {
			$this->_currentAction = $action;
		}

	 	public function showView($view = null, $data = null, $options = null) {
	 		if (!isset($view) || empty($view)) {
	 			$view = $this->_currentAction;
	 		}

	 		$displayOptions = $this->_defaultOptions;
	 		if ($options != null && count($options) > 0) {
	 			$displayOptions = array_merge($displayOptions, $options);
	 		} 

	 		if (array_key_exists('includeHeader', $displayOptions) && $displayOptions['includeHeader'] == true) {
	 			// this header includes the HTML begin tags. This must only be the nav bar
	 			$this->showHeader();
	 		}

	 		echo '
	 			<script type="text/javascript">
	 				var urlPrefix = "' . $this->_configuration->getKey('url_prefix') . '";
	 			</script>
	 		';


	 		$this->show('../../front/view/' . $this->_controllerName .'/' . $view . '.php', $data);

	 		if (array_key_exists('includeFooter', $displayOptions) && $displayOptions['includeFooter'] == true) {
	 			$this->showFooter();
	 		}
	 	}

	 	private function showHeader() {
	 		$this->show('../../front/view/general/header.php');
	 	}

	 	private function showFooter() {
	 		$this->show('../../front/view/general/footer.php');
	 	}

	 	private function show($file, $data = null) {
	 		if (!file_exists($file)) {
	 			throw new Exception('View: ' . $file . ' not exists.');
	 		}

	 		$resourceLoader = $this->_resourceLoader;
	 		$templateLoader = $this->_templateLoader;
	 		$textProvider = $this->_textProvider;

	 		include($file);
	 	}

	}

?>