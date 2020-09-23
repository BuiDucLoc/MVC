<?php 
class App{
	protected $controller = "Home";
	protected $action = "SayHi";
	protected $param = [];
	function __construct(){
		$arr = $this->UrlProcess();
		//xư lý controllers
		if(file_exists("./mvc/controllers/".$arr[0].".php")) {
			$this->controller = $arr[0];
			// unset($arr[0]);
		}
		require_once"./mvc/controllers/".$this->controller.".php";
		$this->controller = new $this->controller;
		//xử lý action
		if (isset($arr[1])) {
			if (method_exists($this->controller, $arr[1])) {//hàm kiểm tra xem tồn tại controller có hàm action ko?
				$this->action = $arr[1];
			}
				// unset($arr[1]); 
		}
		// xu ly param
		// if(array_values($arr)) {
		// 	$this->param = $arr;
		// }
		// else{
		// 	$this->param =[];
		// }
		$this->param = $arr?array_values($arr):[];
		call_user_func_array([$this->controller,$this->action], $this->param);//gọi fuction trong file controller 
	}
	function UrlProcess(){
		if (isset($_GET["url"])) {
			return explode("/", filter_var(trim($_GET["url"], "/")));
			
	}
}
}
?>