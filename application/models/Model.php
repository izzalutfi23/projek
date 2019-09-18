<?php 
	class Model extends CI_Model{
		public function get_slide($id=null, $lang=null){
			if($id!=null){
				$this->db->where('id', $id);
			}
			if($lang=='en'){
				$this->db->where('lang', $lang);
			}
			else{
				$this->db->where('lang', 'id');
			}
			return $this->db->get('slideshow');
		}
		public function geteditslide($id=null, $lang=null){
			if($id!=null){
				$this->db->where('id', $id);
			}
			return $this->db->get('slideshow');
		}
		public function input_slide($data){
			$this->db->insert('slideshow', $data);
		}
		public function edit_slide($data){
			$foto=$data['foto'];
			if($foto!=null){
				$tampung=array(
					'judul'=>$data['judul'],
					'isi'=>$data['isi'],
					'lang'=>$data['lang'],
					'foto'=>$foto
				);
			}
			else{
				$tampung=array(
					'judul'=>$data['judul'],
					'isi'=>$data['isi']
				);	
			}
			$this->db->set($tampung);
			$this->db->where('id', $data['id']);
			$this->db->update('slideshow', $tampung);
		}
		public function del_slide($id){
			$this->db->where('id', $id);
			$this->db->delete('slideshow');
		}
		public function cek_login($user, $pass){
			return $this->db->get_where('admin', array('username'=>$user, 'password'=>$pass));
		}
		public function get_user($user){
			$this->db->where('username', $user);
			return $this->db->get('admin');
		}
		public function get_galeri($id=null){
			if($id!=null){
				$this->db->where('id', $id);
			}
			$this->db->join('kategori_galeri', 'galeri.id_kategori=kategori_galeri.id_kategori');
			return $this->db->get('galeri');
		}
		public function input_galeri($data){
			$this->db->insert('galeri', $data);
		}
		public function get_kat(){
			return $this->db->get('kategori_galeri');
		}
		public function edit_gal($data){
			$foto=$data['foto'];
			if($foto!=null){
				$tampung=array(
					'id_kategori'=>$data['id_kategori'],
					'foto'=>$foto
				);
			}
			else{
				$tampung=array(
					'id_kategori'=>$data['id_kategori']
				);	
			}
			$this->db->set($tampung);
			$this->db->where('id', $data['id']);
			$this->db->update('galeri', $tampung);
		}
		public function del_gal($id){
			$this->db->where('id', $id);
			$this->db->delete('galeri');
		}
		public function get_blog($id=null, $lang=null){
			if($id!=null){
				$this->db->where('id', $id);
			}
			if($lang=='en'){
				$this->db->where('lang', $lang);
			}
			else{
				$this->db->where('lang', 'id');
			}
			return $this->db->get('blog');
		}
		public function geteditblog($id=null){
			if($id!=null){
				$this->db->where('id', $id);
			}
			return $this->db->get('blog');
		}
		public function get_bloghome($id=null, $lang=null){
			if($id!=null){
				$this->db->where('id', $id);
			}
			if($lang=='en'){
				$this->db->where('lang', $lang);
			}
			else{
				$this->db->where('lang', 'id');
			}
			$this->db->order_by('id', 'desc');
			return $this->db->get('blog', 4, 0);
		}
		public function input_blog($data){
			$this->db->insert('blog', $data);
		}
		public function edit_blog($data){
			$foto=$data['foto'];
			if($foto!=null){
				$tampung=array(
					'foto'=>$_FILES['foto']['name'],
					'judul'=>$_POST['judul'],
					'tanggal'=>$_POST['tanggal'],
					'penulis'=>$_POST['penulis'],
					'isi'=>$_POST['isi'],
					'lang'=>$_POST['lang']
				);
			}
			else{
				$tampung=array(
					'judul'=>$_POST['judul'],
					'tanggal'=>$_POST['tanggal'],
					'penulis'=>$_POST['penulis'],
					'isi'=>$_POST['isi'],
					'lang'=>$_POST['lang']
				);	
			}
			$this->db->set($tampung);
			$this->db->where('id', $data['id']);
			$this->db->update('blog', $tampung);
		}
		public function del_blog($id){
			$this->db->where('id', $id);
			$this->db->delete('blog');
		}
		public function get_testi($id=null, $lang=null){
			if($id!=null){
				$this->db->where('id', $id);
			}
			if($lang=='en'){
				$this->db->where('lang', $lang);
			}
			else{
				$this->db->where('lang', 'id');
			}
			return $this->db->get('testimoni');
		}
		public function getedittesti($id=null){
			if($id!=null){
				$this->db->where('id', $id);
			}
			return $this->db->get('testimoni');
		}
		public function input_testi($data){
			$this->db->insert('testimoni', $data);
		}
		public function edit_testi($data){
			$foto=$data['foto'];
			if($foto!=null){
				$tampung=array(
					'foto'=>$foto,
					'nama'=>$data['nama'],
					'jabatan'=>$data['jabatan'],
					'isi'=>$data['isi'],
					'lang'=>$data['lang']
				);
			}
			else{
				$tampung=array(
					'nama'=>$data['nama'],
					'jabatan'=>$data['jabatan'],
					'isi'=>$data['isi'],
					'lang'=>$data['lang']
				);	
			}
			$this->db->set($tampung);
			$this->db->where('id', $data['id']);
			$this->db->update('testimoni', $tampung);
		}
		public function del_testi($id){
			$this->db->where('id', $id);
			$this->db->delete('testimoni');
		}
		public function get_pel($id=null, $lang=null){
			if($id!=null){
				$this->db->where('id', $id);
			}
			if($lang=='en'){
				$this->db->where('lang', $lang);
			}
			else{
				$this->db->where('lang', 'id');
			}
			return $this->db->get('pelatihan');
		}
		public function geteditpel($id=null){
			if($id!=null){
				$this->db->where('id', $id);
			}
			return $this->db->get('pelatihan');
		}
		public function input_pel($data){
			$this->db->insert('pelatihan', $data);
		}
		public function edit_pel($data){
			$foto=$data['foto'];
			if($foto!=null){
				$tampung=array(
					'judul'=>$data['judul'],
					'keterangan'=>$data['keterangan'],
					'foto'=>$foto,
					'lang'=>$data['lang']
				);
			}
			else{
				$tampung=array(
					'judul'=>$data['judul'],
					'keterangan'=>$data['keterangan'],
					'lang'=>$data['lang']
				);	
			}
			$this->db->set($tampung);
			$this->db->where('id', $data['id']);
			$this->db->update('pelatihan', $tampung);
		}
		public function del_pel($id){
			$this->db->where('id', $id);
			$this->db->delete('pelatihan');
		}
		public function get_galhome(){
			$this->db->order_by('id', 'desc');
			$this->db->join('kategori_galeri', 'galeri.id_kategori=kategori_galeri.id_kategori');
			return $this->db->get('galeri');
		}
		public function getblog($par, $lang=null){
			if($lang=='en'){
				$this->db->where('lang', $lang);
			}
			else{
				$this->db->where('lang', 'id');
			}
			$this->db->order_by('id', 'desc');
			return $this->db->get('blog', $par['perpage'], $par['start']);
		}
		public function recentblog($lang=null){
			if($lang=='en'){
				$this->db->where('lang', $lang);
			}
			else{
				$this->db->where('lang', 'id');
			}
			$this->db->order_by('id', 'desc');
			return $this->db->get('blog', 10, 0);
		}
		public function galhom(){
			$this->db->order_by('id', 'desc');
			return $this->db->get('galeri', 8, 0);
		}
		public function get_tutor($id=null){
			if($id!=null){
				$this->db->where('id', $id);
			}
			return $this->db->get('tutor');
		}
		public function get_job($id=null){
			if($id!=null){
				$this->db->where('id', $id);
			}
			return $this->db->get('job_place');
		}
		public function input_job($data){
			$this->db->insert('job_place', $data);
		}
		public function edit_job($data){
			$foto=$data['foto'];
			if($foto!=null){
				$tampung=array(
					'nama'=>$data['nama'],
					'foto'=>$foto,
					'jabatan'=>$data['jabatan'],
					'fb'=>$data['fb'],
					'ig'=>$data['ig'],
					'linkedin'=>$data['linkedin']
				);
			}
			else{
				$tampung=array(
					'nama'=>$data['nama'],
					'jabatan'=>$data['jabatan'],
					'fb'=>$data['fb'],
					'ig'=>$data['ig'],
					'linkedin'=>$data['linkedin']
				);	
			}
			$this->db->set($tampung);
			$this->db->where('id', $data['id']);
			$this->db->update('job_place', $tampung);
		}
		public function input_tut($data){
			$this->db->insert('tutor', $data);
		}
		public function edit_tut($data){
			$foto=$data['foto'];
			if($foto!=null){
				$tampung=array(
					'nama'=>$data['nama'],
					'foto'=>$foto,
					'jabatan'=>$data['jabatan'],
					'fb'=>$data['fb'],
					'ig'=>$data['ig'],
					'linkedin'=>$data['linkedin']
				);
			}
			else{
				$tampung=array(
					'nama'=>$data['nama'],
					'jabatan'=>$data['jabatan'],
					'fb'=>$data['fb'],
					'ig'=>$data['ig'],
					'linkedin'=>$data['linkedin']
				);	
			}
			$this->db->set($tampung);
			$this->db->where('id', $data['id']);
			$this->db->update('tutor', $tampung);
		}
		public function del_tut($id){
			$this->db->where('id', $id);
			$this->db->delete('tutor');
		}
		public function del_job($id){
			$this->db->where('id', $id);
			$this->db->delete('job_place');
		}
		public function add_peminat($data){
			$tampung=array(
				'nama'=>$data['nama'],
				'email'=>$data['email'],
				'alamat'=>$data['alamat'],
				'no_hp'=>$data['no_hp'],
				'j_kel'=>$data['j_kel'],
				'kegiatan'=>$data['kegiatan']
			);
			$this->db->insert('pendaftar', $tampung);
		}
		public function get_pend($id=null){
			if($id!=null){
				$this->db->where('id', $id);
			}
			$this->db->order_by('id', 'desc');
			return $this->db->get('pendaftar');
		}
		public function del_dftr($id){
			$this->db->where('id', $id);
			$this->db->delete('pendaftar');
		}
		public function get_pesan(){
			return $this->db->get('pesan');
		}
		public function del_pesan($id){
			$this->db->where('id', $id);
			$this->db->delete('pesan');
		}
		public function add_pesan($data){
			$tampung=array(
				'nama'=>$data['nama'],
				'email'=>$data['email'],
				'subjek'=>$data['subjek'],
				'isi'=>$data['isi'],
			);
			$this->db->insert('pesan', $tampung);
		}
	}
 ?>