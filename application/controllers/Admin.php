<?php 
	class Admin extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('Model');
			if(!$this->session->userdata('username')){
				redirect('login');
			}
		}
		public function index(){
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$data=array(
				'title'=>'Home',
				'active'=>'home',
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/home');
			$this->load->view('admin/_footer');
		}
		public function slideshow(){
			$lang=$this->uri->segment(3);
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$getslide=$this->Model->get_slide('', $lang);
			$data=array(
				'title'=>'Slideshow',
				'active'=>'slideshow',
				'slideshow'=>$getslide->result(),
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/slideshow');
			$this->load->view('admin/_footer');
		}
		public function edit_slide($id){
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$getslide=$this->Model->geteditslide($id);
			$data=array(
				'title'=>'Edit Slideshow',
				'active'=>'slideshow',
				'slideshow'=>$getslide->row(),
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/edit_slide');
			$this->load->view('admin/_footer');
		}
		public function proses_slide(){
			$config['upload_path']          = './img/slideshow';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 2000;
	        $config['overwrite']			= TRUE;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto'))
            {
                if(isset($_POST['edit'])){
            		$data=array(
            			'id'=>$_POST['id'],
            			'judul'=>$_POST['judul'],
            			'isi'=>$_POST['isi'],
            			'lang'=>$_POST['lang'],
            			'foto'=>''
            		);
            		$this->Model->edit_slide($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil diubah');
	                redirect('admin/slideshow');
            	}
            	else{
            		echo "Error! Ukuran gambar terlalu besar";
            	}
            }
            else
            {
                if(isset($_POST['tambah'])){
                	$data=array(
                		'judul'=>$_POST['judul'],
                		'isi'=>$_POST['isi'],
                		'lang'=>$_POST['lang'],
                		'foto'=>$_FILES['foto']['name']
                	);
	                $this->Model->input_slide($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil ditambahakan');
            	}
            	else if(isset($_POST['edit'])){
            		$data=array(
            			'id'=>$_POST['id'],
            			'judul'=>$_POST['judul'],
            			'isi'=>$_POST['isi'],
            			'lang'=>$_POST['lang'],
            			'foto'=>$_FILES['foto']['name']
            		);
            		$this->Model->edit_slide($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil diubah');
            	}
                redirect('admin/slideshow');
            }
		}
		public function del_slide($id){
			$this->Model->del_slide($id);
			$this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
			redirect('admin/slideshow');
		}
		public function galeri(){
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$getgaleri=$this->Model->get_galeri();
			$get_kategori=$this->Model->get_kat();
			$data=array(
				'title'=>'Galeri',
				'active'=>'galeri',
				'galeri'=>$getgaleri->result(),
				'user'=>$getuser->row(),
				'kategori'=>$get_kategori->result()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/galeri');
			$this->load->view('admin/_footer');
		}
		public function edit_galeri($id){
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$getgaleri=$this->Model->get_galeri($id);
			$get_kategori=$this->Model->get_kat();
			$data=array(
				'title'=>'Edit Galeri',
				'active'=>'galeri',
				'galeri'=>$getgaleri->row(),
				'user'=>$getuser->row(),
				'kategori'=>$get_kategori->result()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/edit_galeri');
			$this->load->view('admin/_footer');
		}
		public function proses_galeri(){
			$config['upload_path']          = './img/galeri';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 2000;
	        $config['overwrite']			= TRUE;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto'))
            {
                if(isset($_POST['edit'])){
            		$data=array(
            			'id'=>$_POST['id'],
            			'id_kategori'=>$_POST['id_kategori'],
            			'foto'=>''
            		);
            		$this->Model->edit_gal($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil diubah');
	                redirect('admin/galeri');
            	}
            	else{
            		echo "Error! Ukuran gambar terlalu besar";
            	}
            }
            else
            {
                if(isset($_POST['tambah'])){
                	$data=array(
                		'id_kategori'=>$_POST['id_kategori'],
                		'foto'=>$_FILES['foto']['name']
                	);
	                $this->Model->input_galeri($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil ditambahakan');
            	}
            	else if(isset($_POST['edit'])){
            		$data=array(
            			'id'=>$_POST['id'],
            			'id_kategori'=>$_POST['id_kategori'],
            			'foto'=>$_FILES['foto']['name']
            		);
            		$this->Model->edit_gal($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil diubah');
            	}
                redirect('admin/galeri');
            }
		}
		public function del_galeri($id){
			$this->Model->del_gal($id);
			$this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
			redirect('admin/galeri');	
		}
		public function blog(){
			$lang=$this->uri->segment(3);
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$getblog=$this->Model->get_blog('', $lang);
			$data=array(
				'title'=>'Blog',
				'active'=>'blog',
				'blog'=>$getblog->result(),
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/blog');
			$this->load->view('admin/_footer');
		}
		public function edit_blog($id){
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$getblog=$this->Model->geteditblog($id);
			$data=array(
				'title'=>'Blog',
				'active'=>'blog',
				'blog'=>$getblog->row(),
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/edit_blog');
			$this->load->view('admin/_footer');
		}
		public function proses_blog(){
			$config['upload_path']          = './img/blog';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 2000;
	        $config['overwrite']			= TRUE;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto'))
            {
                if(isset($_POST['edit'])){
            		$data=array(
            			'id'=>$_POST['id'],
            			'foto'=>'',
                		'judul'=>$_POST['judul'],
                		'tanggal'=>$_POST['tanggal'],
                		'penulis'=>$_POST['penulis'],
                		'isi'=>$_POST['isi'],
                		'lang'=>$_POST['lang']
            		);
            		$this->Model->edit_blog($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil diubah');
	                redirect('admin/blog');
            	}
            	else{
            		echo "Error! Ukuran gambar terlalu besar";
            	}
            }
            else
            {
                if(isset($_POST['tambah'])){
                	$data=array(
                		'foto'=>$_FILES['foto']['name'],
                		'judul'=>$_POST['judul'],
                		'tanggal'=>$_POST['tanggal'],
                		'penulis'=>$_POST['penulis'],
                		'isi'=>$_POST['isi'],
                		'lang'=>$_POST['lang']
                	);
	                $this->Model->input_blog($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil ditambahakan');
            	}
            	else if(isset($_POST['edit'])){
            		$data=array(
            			'id'=>$_POST['id'],
            			'foto'=>$_FILES['foto']['name'],
                		'judul'=>$_POST['judul'],
                		'tanggal'=>$_POST['tanggal'],
                		'penulis'=>$_POST['penulis'],
                		'isi'=>$_POST['isi'],
                		'lang'=>$_POST['lang']
            		);
            		$this->Model->edit_blog($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil diubah');
            	}
                redirect('admin/blog');
            }
		}
		public function del_blog($id){
			$this->Model->del_blog($id);
			$this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
			redirect('admin/blog');
		}
		public function testimoni(){
			$lang=$this->uri->segment(3);
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$get_testi=$this->Model->get_testi('', $lang);
			$data=array(
				'title'=>'Testimoni',
				'active'=>'testimoni',
				'testimoni'=>$get_testi->result(),
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/testimoni');
			$this->load->view('admin/_footer');
		}
		public function edit_testi($id){
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$get_testi=$this->Model->getedittesti($id);
			$data=array(
				'title'=>'Testimoni',
				'active'=>'testimoni',
				'testimoni'=>$get_testi->row(),
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/edit_testi');
			$this->load->view('admin/_footer');
		}
		public function proses_testi(){
			$config['upload_path']          = './img/testimoni';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 2000;
	        $config['overwrite']			= TRUE;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto'))
            {
                if(isset($_POST['edit'])){
            		$data=array(
            			'id'=>$_POST['id'],
            			'foto'=>'',
            			'nama'=>$_POST['nama'],
            			'jabatan'=>$_POST['jabatan'],
            			'isi'=>$_POST['isi'],
            			'lang'=>$_POST['lang']
            		);
            		$this->Model->edit_testi($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil diubah');
	                redirect('admin/testimoni');
            	}
            	else{
            		echo "Error! Ukuran gambar terlalu besar";
            	}
            }
            else
            {
                if(isset($_POST['tambah'])){
                	$data=array(
                		'foto'=>$_FILES['foto']['name'],
                		'nama'=>$_POST['nama'],
                		'jabatan'=>$_POST['jabatan'],
                		'isi'=>$_POST['isi'],
                		'lang'=>$_POST['lang']
                	);
	                $this->Model->input_testi($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil ditambahakan');
            	}
            	else if(isset($_POST['edit'])){
            		$data=array(
            			'id'=>$_POST['id'],
            			'foto'=>$_FILES['foto']['name'],
            			'nama'=>$_POST['nama'],
            			'jabatan'=>$_POST['jabatan'],
            			'isi'=>$_POST['isi'],
            			'lang'=>$_POST['lang']
            		);
            		$this->Model->edit_testi($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil diubah');
            	}
                redirect('admin/testimoni');
            }
		}
		public function del_testi($id){
			$this->Model->del_testi($id);
			$this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
			redirect('admin/testimoni');
		}
		public function pelatihan(){
			$lang=$this->uri->segment(3);
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$get_pel=$this->Model->get_pel('', $lang);
			$data=array(
				'title'=>'Pelatihan',
				'active'=>'pelatihan',
				'pelatihan'=>$get_pel->result(),
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/pelatihan');
			$this->load->view('admin/_footer');
		}
		public function edit_pel($id){
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$get_pel=$this->Model->geteditpel($id);
			$data=array(
				'title'=>'Pelatihan',
				'active'=>'pelatihan',
				'pelatihan'=>$get_pel->row(),
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/edit_pel');
			$this->load->view('admin/_footer');
		}
		public function proses_pel(){
			$config['upload_path']          = './img/pelatihan';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 2000;
	        $config['overwrite']			= TRUE;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto'))
            {
                if(isset($_POST['edit'])){
            		$data=array(
            			'id'=>$_POST['id'],
            			'foto'=>'',
            			'judul'=>$_POST['judul'],
                		'keterangan'=>$_POST['keterangan'],
                		'lang'=>$_POST['lang']
            		);
            		$this->Model->edit_pel($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil diubah');
	                redirect('admin/pelatihan');
            	}
            	else{
            		echo "Error! Ukuran gambar terlalu besar";
            	}
            }
            else
            {
                if(isset($_POST['tambah'])){
                	$data=array(
                		'foto'=>$_FILES['foto']['name'],
                		'judul'=>$_POST['judul'],
                		'keterangan'=>$_POST['keterangan'],
                		'lang'=>$_POST['lang']
                	);
	                $this->Model->input_pel($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil ditambahakan');
            	}
            	else if(isset($_POST['edit'])){
            		$data=array(
            			'id'=>$_POST['id'],
            			'foto'=>$_FILES['foto']['name'],
            			'judul'=>$_POST['judul'],
                		'keterangan'=>$_POST['keterangan'],
                		'lang'=>$_POST['lang']
            		);
            		$this->Model->edit_pel($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil diubah');
            	}
                redirect('admin/pelatihan');
            }
		}
		public function del_pel($id){
			$this->Model->del_pel($id);
			$this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
			redirect('admin/pelatihan');
		}
		public function tutor(){
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$get_tutor=$this->Model->get_tutor();
			$data=array(
				'title'=>'Tutor',
				'active'=>'tutor',
				'tutor'=>$get_tutor->result(),
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/tutor');
			$this->load->view('admin/_footer');
		}
		public function edit_tutor($id){
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$get_tutor=$this->Model->get_tutor($id);
			$data=array(
				'title'=>'Tutor',
				'active'=>'tutor',
				'tutor'=>$get_tutor->row(),
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/edit_tutor');
			$this->load->view('admin/_footer');
		}
		public function proses_tutor(){
			$config['upload_path']          = './img/tutor';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 2000;
	        $config['overwrite']			= TRUE;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto'))
            {
                if(isset($_POST['edit'])){
            		$data=array(
            			'id'=>$_POST['id'],
            			'nama'=>$_POST['nama'],
            			'foto'=>'',
                		'jabatan'=>$_POST['jabatan'],
                		'fb'=>$_POST['fb'],
                		'ig'=>$_POST['ig'],
                		'linkedin'=>$_POST['linkedin']
            		);
            		$this->Model->edit_tut($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil diubah');
	                redirect('admin/tutor');
            	}
            	else{
            		echo "Error! Ukuran gambar terlalu besar";
            	}
            }
            else
            {
                if(isset($_POST['tambah'])){
                	$data=array(
                		'nama'=>$_POST['nama'],
                		'foto'=>$_FILES['foto']['name'],
                		'jabatan'=>$_POST['jabatan'],
                		'fb'=>$_POST['fb'],
                		'ig'=>$_POST['ig'],
                		'linkedin'=>$_POST['linkedin']
                	);
	                $this->Model->input_tut($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil ditambahakan');
            	}
            	else if(isset($_POST['edit'])){
            		$data=array(
            			'id'=>$_POST['id'],
            			'nama'=>$_POST['nama'],
                		'foto'=>$_FILES['foto']['name'],
                		'jabatan'=>$_POST['jabatan'],
                		'fb'=>$_POST['fb'],
                		'ig'=>$_POST['ig'],
                		'linkedin'=>$_POST['linkedin']
            		);
            		$this->Model->edit_tut($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil diubah');
            	}
                redirect('admin/tutor');
            }
		}
		public function job_place(){
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$get_job=$this->Model->get_job();
			$data=array(
				'title'=>'Job Placement Officer',
				'active'=>'job_place',
				'placement'=>$get_job->result(),
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/job_place');
			$this->load->view('admin/_footer');
		}
		public function edit_jobplace($id){
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$get_job=$this->Model->get_job($id);
			$data=array(
				'title'=>'Job Placement Officer',
				'active'=>'job_place',
				'placement'=>$get_job->row(),
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/edit_jobplace');
			$this->load->view('admin/_footer');
		}
		public function proses_job(){
			$config['upload_path']          = './img/job_place';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 2000;
	        $config['overwrite']			= TRUE;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto'))
            {
                if(isset($_POST['edit'])){
            		$data=array(
            			'id'=>$_POST['id'],
            			'nama'=>$_POST['nama'],
            			'foto'=>'',
                		'jabatan'=>$_POST['jabatan'],
                		'fb'=>$_POST['fb'],
                		'ig'=>$_POST['ig'],
                		'linkedin'=>$_POST['linkedin']
            		);
            		$this->Model->edit_job($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil diubah');
	                redirect('admin/job_place');
            	}
            	else{
            		echo "Error! Ukuran gambar terlalu besar";
            	}
            }
            else
            {
                if(isset($_POST['tambah'])){
                	$data=array(
                		'nama'=>$_POST['nama'],
                		'foto'=>$_FILES['foto']['name'],
                		'jabatan'=>$_POST['jabatan'],
                		'fb'=>$_POST['fb'],
                		'ig'=>$_POST['ig'],
                		'linkedin'=>$_POST['linkedin']
                	);
	                $this->Model->input_job($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil ditambahakan');
            	}
            	else if(isset($_POST['edit'])){
            		$data=array(
            			'id'=>$_POST['id'],
            			'nama'=>$_POST['nama'],
                		'foto'=>$_FILES['foto']['name'],
                		'jabatan'=>$_POST['jabatan'],
                		'fb'=>$_POST['fb'],
                		'ig'=>$_POST['ig'],
                		'linkedin'=>$_POST['linkedin']
            		);
            		$this->Model->edit_job($data);
	                $this->session->set_flashdata('berhasil', 'Data berhasil diubah');
            	}
                redirect('admin/job_place');
            }
		}
		public function del_jobplace($id){
			$this->Model->del_job($id);
			$this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
			redirect('admin/job_place');
		}
		public function del_tutor($id){
			$this->Model->del_tut($id);
			$this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
			redirect('admin/tutor');
		}
		public function pendaftar(){
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$get_pend=$this->Model->get_pend();
			$data=array(
				'title'=>'Peminat',
				'active'=>'pendaftar',
				'peminat'=>$get_pend->result(),
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/pendaftar');
			$this->load->view('admin/_footer');
		}
		public function del_dftr($id){
			$this->Model->del_dftr($id);
			$this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
			redirect('admin/pendaftar');
		}
		public function cetak(){
			$id1=$_POST['id1'];
			$id2=$_POST['id2'];
			$getpend=$this->db->query("SELECT * FROM pendaftar WHERE id>='$id1' AND id<='$id2'");
			$data=array(
				'pendaftar'=>$getpend->result()
			);
			$this->load->view('admin/cetak', $data);
		}
		public function pesan(){
			$user=$this->session->userdata('username');
			$getuser=$this->Model->get_user($user);
			$get_pesan=$this->Model->get_pesan();
			$data=array(
				'title'=>'Pesan Masuk',
				'active'=>'pesan',
				'pesan'=>$get_pesan->result(),
				'user'=>$getuser->row()
			);
			$this->load->view('admin/_header', $data);
			$this->load->view('admin/page/pesan');
			$this->load->view('admin/_footer');
		}
		public function del_pesan($id){
			$this->Model->del_pesan($id);
			$this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
			redirect('admin/pesan');
		}
	}
 ?>