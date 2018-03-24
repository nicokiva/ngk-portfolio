<?

	define('ALIAS_TEMPLATE_URL_PREFIX', 'RESOURCE_URL_');
	define('ROOT_TEMPLATE_URL_ALIAS', 'ROOT');
	class templateLoader {
		private $_template_location;
		private $_resourceLoader;
		private $_textProvider;

		function __construct($documentRoot, $resourceLoader, $textProvider) {
			$this->_template_location = $documentRoot . '/front/view/template';

			if ($resourceLoader == null) {
				throw new Exception('Missing Resource Loader');
			}
			$this->_resourceLoader = $resourceLoader;
	
			if ($textProvider == null) {
				throw new Exception('Missing Text Provider');
			}	
			$this->_textProvider = $textProvider;
		}

		function load($filename, $data = null) {
			if (empty($filename)) {
				throw new Exception('Missing filename');
			}

			$textProvider = $this->_textProvider;
			$resourceLoader = $this->_resourceLoader;
			
			require $this->_template_location . '/' . $filename;
		}

	}

?>