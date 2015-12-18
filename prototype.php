<?php 


class P {

	public $page = 'index';
	public $stylesheet = 'screen.css';
	public $layout = 'dev';
	public $components = null;
	public $dev = false;

	function __construct() {
		if(isset($_GET['page'])) {
			$this->page = $_GET['page'];
		}		
		include('pages/' . $this->page . '.php');
		$this->components = $components;
		if(isset($layout)) {
			$this->layout = $layout;
		}
		if(isset($dev)) {
			$this->dev = $dev;
		}		
		if(isset($stylesheet)) {
			$this->stylesheet = $stylesheet;
		}
	}

	public static function url($page) {
		if(DEV === true) {
			return $page;
		} else {
			return 'index.php?page=' . $page;
		}		
	}

	public static function string($string, $dev_string = false) {
		if($dev_string !== false && DEV === true) {
			return '{{' . $dev_string . '}}';
		} else {
			return $string;
		}
	}

	public function section($section) {
		if($this->components[$section]) {
			foreach ($this->components[$section] as $components) {
				include('components/' . $components . '.php');	
				if (DEV === true) {
					ob_start();
					include('components/' . $components . '.php');
					$html = ob_get_clean();
					echo '<div class="view-code"><button>Show code</button><div class="code"><pre class="brush: php">' . htmlspecialchars($html) . '</pre></div></div>';
				}						
			}
		}		
	}

	public function layout($page) {
		include('layouts/' . $page->layout . '.php');
	}

}



















