<?
	class configuration {
		protected $_data;

		function configuration($documentRoot) {
			$this->_data = parse_ini_file($documentRoot . '/configuration.ini');
		}

		function getKey($key) {
			if (!array_key_exists($key, $this->_data)) {
				throw new Exception('Key: ' . $key . ' not exists.');
			}

			return $this->_data[$key];
		}
	}
?>