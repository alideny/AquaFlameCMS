<?phpclass Language{		public $lang;		function __construct()	{		$this->lang = &$_SESSION['local'];		if(isset($_GET['local'])) $this->lang = $_GET['local'];		else if($this->lang == "") $this->lang = 'en-us';				$langs = Array("en-us", "ro-ro", "en-db", "it-it", "de-de", "es-es", "bu-bg", "es-mx", "gr-gr", "ru-ru", "zh-cn", "zh-tw", "fr-fr");		if(in_array($this->lang,$langs)) require_once("/langs/".$this->lang.".php");		else require_once("/langs/en-us.php");	}}?>