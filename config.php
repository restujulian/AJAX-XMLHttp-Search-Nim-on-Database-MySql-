<?php
	class database{
 
		var $host = "localhost";
		var $uname = "root";
		var $pass = "";
		var $db = "tugas_web_lanjut";
		var $connect = false;
	 
		function __construct(){ //untuk memberi nilai awal dari properti
			$this->connect = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		}
		function searchMahasiswa($id){
			$sql = "SELECT * from mahasiswa WHERE nim LIKE '%$id%'";
			$d= mysqli_query($this->connect, $sql);
			$hasil = array();
			while($row = mysqli_fetch_array($d)){
				$hasil[] = $row;
			}
			return $hasil;
		}
	}
?>