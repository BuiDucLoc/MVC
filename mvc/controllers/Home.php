<?php 
	class Home extends Controller{
		public $to;
		public $teo;
		public $dulieu;
		function __construct(){
			$this->to = $this->model("SinhVienModel");

		}
		function SayHi(){
			// $to = $this->model("SinhVienModel");
			// $to->hi();
			// $to->dulieu();

			// echo $teo->GetSV();
			$this->view("aodep",["number"=>"aongan","kq"=>$this->to->hi(),"dl"=>$this->to->dulieu()]);
		}
		function Show($a, $b){
			$teo = $this->model("SinhVienModel");
			$dulieu = $teo->data($a,$b);
			$this->view("aodep",["number"=>$dulieu]);
		}
		
	}
	
?>