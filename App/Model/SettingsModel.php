<?php 

namespace App\Model;

use Core\Model;

class SettingsModel extends Model
{
	public function get_site_name(){
		$sql = 'SELECT value FROM settings WHERE name = "site_name"';
		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

	public function get_settings($type){
		$sql = 'SELECT * FROM settings WHERE type = :type';
		$query = $this->db->prepare($sql);
		$query->bindParam(':type', $type);
		$query->execute();
		return $query->fetchAll();
	}
}