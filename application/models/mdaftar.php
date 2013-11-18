<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	Class mdaftar extends CI_Model
	{
		public function siswa()	
		{
		$query = $this->db->get("siswa");
		return $query->result_array();
		}
		public function simpan($data)
		{
		$masukan = array(
					"olah1"    	=> $data ["olah1"],
					"olah2"    	=> $data ["olah2"],
					"idnp"     	=> $data ["idnp"],
					"nama"      => $data ["nama"],
					"jkelamin"  => $data ["jkelamin"],
					"tlps"  => $data ["tlps"],
					"ttgl"    	=> $data ["ttgl"],
					"agama"     => $data ["agama"],
					"alamat"    => $data ["alamat"],
					"golda"  	=> $data ["golda"],
					"email"  	=> $data ["email"],
					"anak"   	=> $data ["anak"],
					"js"   		=> $data ["js"],
					"thntmt"    => $data ["thntmt"],
					"asl"    	=> $data ["asl"],
					"jnk"     	=> $data ["jnk"],
					"bhs"      	=> $data ["bhs"],
					"sttb"  	=> $data ["sttb"],
					"not" 		=> $data ["not"],
					"pnot"    	=> $data ["pnot"],
					"almtor"    => $data ["almtor"],
					"hpor"    	=> $data ["hpor"],
					"agamaor"  	=> $data ["agamaor"],
					"pkrj"   	=> $data ["pkrj"], 
					"mtrp"    	=> $data ["mtrp"],
					"pend"    	=> $data ["pend"],
					"org"     	=> $data ["org"],
					"nw"      	=> $data ["nw"],
					"almtw"  	=> $data ["almtw"],
					"pkrjw" 	=> $data ["pkrjw"],
					"tlpw"    	=> $data ["tlpw"],
					"eks"		=>$data	 ['eks'], 
					"nl"		=>$data  ['nl'],
					"jn"		=>$data  ['jn'],
					"pres"		=>$data  ['pres'], 
					"pen"		=>$data  ['pen'], 
					"peny"		=>$data  ['peny'],
					"ln"		=>$data  ['ln'],
					"userfile"		=>$data  ['userfile'],
					  );
		$this->db->insert("siswa", $masukan);			
	}
	function getsiswa($id)
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('idnp',$id);		
		$Q = $this->db->get();
		if( $Q->num_rows() > 0)
		{
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;			
	}
	public function getAllData($table)
	{
		return $this->db->get($table);
	}
	public function getAllDataLimited($table,$limit,$offset)
	{
		return $this->db->get($table, $limit, $offset);
	}
	function tampil_dosen_limit($nama)
	{
		$q = $this->db->query("select * from siswa where nama like '%$nama%' LIMIT 5");
		return $q;
	}
	function getsisw($id)
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('idnp',$id);		
		$Q = $this->db->get();
		if( $Q->num_rows() > 0)
		{
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;			
	}
	function getAllDataid($table,$id)
	{
		$this->db->select('*');
		$this->db->where('idnp',$id);	
		return $this->db->get($table);
	}
	function getAllDataLimitedid($table,$id,$limit,$offset)
	{
		$this->db->select('*');
		$this->db->where('idnp',$id);
		return $this->db->get($table, $limit, $offset);
		 
	}
	function hapus($id)
	{
		$this->db->where("idnp",$id);
		$this->db->delete("siswa");
	} 
	    
	function ambildata($id)
	{
		$data = array();
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('idnp',$id);		
		$Q = $this->db->get();
		if( $Q->num_rows() > 0)
		{
			$data = $Q->row_array();
		}
		$Q->free_result();
		//return $data;
		return $Q->result_array();
	}
	function set_data($set) {
	return $this->db->insert('siswa',$set);
	}
}	