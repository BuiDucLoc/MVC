<?php 
	class SinhVienModel extends DB{
		public function GetSV(){
			return "nguyen van a";
		}
		public function data($b, $c){
			return $b + $c;
		}
		public function hi(){
			return $a = 5;
		}
		public function dulieu(){
			$qr = "SELECT * FROM sinhvien";
			return mysqli_query($this->con, $qr);
		}
	}
?>