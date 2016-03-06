<?

	class textProvider {
		private $_texts = array();

		function textProvider($documentRoot, $lang) {
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

		function get($key) {
			if (!array_key_exists($key, $this->_texts)) {
				throw new Exception('Invalid key');
			}

			return $this->_texts[$key];
		}

	}

?>