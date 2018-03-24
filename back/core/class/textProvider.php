<?

	class textProvider {
		private $_texts = array();

		function __construct($documentRoot, $lang) {
			if ($documentRoot == null) {
				throw new Exception('Document Root Missing');
			}

			if ($lang == null) {
				throw new Exception("Invalid language");
			}

			include_once($documentRoot . '/back/definition/text.php');

			$texts = $languages[$lang];
			foreach($texts as $key => $text) {
				$this->_texts[$key] = $text;
			}
		}

		function get($key, $params = null) {
			if (!array_key_exists($key, $this->_texts)) {
				echo '<pre>';
				throw new Exception('Invalid key "' . $key . '"');
				echo '</pre>';
			}

			if (is_null($params)) {
				$params = array();
			}

			$t = $this->_texts[$key];

			if (count($params) > 0) {
				foreach($params as $pKey => $pValue) {
					$t = str_replace('{{' . $pKey . '}}', $pValue, $t);
				}	
			}

			return $t;
		}

	}

?>