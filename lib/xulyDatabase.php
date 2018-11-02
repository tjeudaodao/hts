<?php
	class xulyDatabase{
		private $db;

		public function __construct(){
			$this->db = new Database;
		}
		public function layMotHang($tenbang,$tencot,$giatri){
			$this->db->query("SELECT * FROM $tenbang WHERE $tencot = :giatri");
			$this->db->bind('giatri',$giatri);
			$row = $this->db->single();
			return $row;
		}
		public function locTheoMaTong($kitu){
			$this->db->query("SELECT * FROM bangkhuyenmai WHERE matong LIKE :kitu ORDER BY matong LIMIT 12");
			$this->db->bind('kitu',$kitu."%");
			$row = $this->db->resultSet();
			return $row;
		}
	}

?>