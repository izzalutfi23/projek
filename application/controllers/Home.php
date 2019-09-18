<?php 
	class Home extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('Model');
		}
		public function index(){
			$getslide=$this->Model->get_slide();
			$get_pel=$this->Model->get_pel();
			$get_blog=$this->Model->get_bloghome();
			$get_testi=$this->Model->get_testi();
			$get_galeri=$this->Model->galhom();
			$data=array(
				'title'=>'Home - Excellent Hospitality College',
				'active'=>'home',
				'slideshow'=>$getslide->result(),
				'pelatihan'=>$get_pel->result(),
				'blog'=>$get_blog->result(),
				'testimoni'=>$get_testi->result(),
				'galeri'=>$get_galeri->result()
			);
			$this->load->view('_header', $data);
			$this->load->view('page/home');
			$this->load->view('_footer');
		}
		public function profil(){
			$get_tutor=$this->Model->get_tutor();
			$get_job=$this->Model->get_job();
			$data=array(
				'title'=>'Profil - Excellent Hospitality College',
				'active'=>'profil',
				'tutor'=>$get_tutor->result(),
				'placement'=>$get_job->result()
			);
			$this->load->view('_header', $data);
			$this->load->view('page/profil');
			$this->load->view('_footer');
		}
		public function galeri(){
			$get_kat=$this->Model->get_kat();
			$get_gal=$this->Model->get_galhome();
			$data=array(
				'title'=>'Galeri - Excellent Hospitality College',
				'active'=>'galeri',
				'kategori'=>$get_kat->result(),
				'galeri'=>$get_gal->result()
			);
			$this->load->view('_header', $data);
			$this->load->view('page/galery');
			$this->load->view('_footer');
		}
		public function blog(){
			
			$row=$this->Model->get_blog()->num_rows();

			$config['base_url'] = base_url('home/blog');
			$config['total_rows'] = $row;
			$config['per_page'] = 3;

			$config['first_link']       = 'First';
			$config['last_link']        = 'Last';
			$config['next_link']        = 'Next';
			$config['prev_link']        = 'Prev';
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination pull-left">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']  = '</span>Next</li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']  = '</span></li>';

			$start=$this->uri->segment(3);
			$this->pagination->initialize($config);

			$par=array(
				'perpage'=>$config['per_page'],
				'start'=>$start
			);

			$blog=$this->Model->getblog($par);

			$get_recentblog=$this->Model->recentblog();
			$data=array(
				'title'=>'Blog - Excellent Hospitality College',
				'active'=>'blog',
				'blog'=>$blog->result(),
				'recent'=>$get_recentblog->result()
			);
			$this->load->view('_header', $data);
			$this->load->view('page/blog');
			$this->load->view('_footer');
		}
		public function blog_read($id){
			$blog=$this->Model->get_blog($id);
			$get_recentblog=$this->Model->recentblog();
			$data=array(
				'title'=>'Blog - Excellent Hospitality College',
				'active'=>'blog',
				'blog'=>$blog->row(),
				'recent'=>$get_recentblog->result()
			);
			$this->load->view('_header', $data);
			$this->load->view('page/blog_read');
			$this->load->view('_footer');
		}
		public function kontak(){
			$data=array(
				'title'=>'Kontak - Excellent Hospitality College',
				'active'=>'kontak'
			);
			$this->load->view('_header', $data);
			$this->load->view('page/kontak');
			$this->load->view('_footer');
		}
		public function admission(){
			$data=array(
				'title'=>'Pendaftaran - Excellent Hospitality College',
				'active'=>'admission'
			);
			$this->load->view('_header', $data);
			$this->load->view('page/admisi');
			$this->load->view('_footer');
		}
		public function add_peminat(){
			$input=$this->input->post(NULL, true);
			$this->Model->add_peminat($input);
			$this->session->set_flashdata('berhasil', 'Data berhasil diinputkan, kami akan segera menghubungi anda');
			redirect('home/admission');
		}
		public function add_pesan(){
			$input=$this->input->post(NULL, true);
			$this->Model->add_pesan($input);
			$this->session->set_flashdata('berhasil', 'Pesan berhasil dikirim');
			redirect('home/kontak');
		}
	}
 ?>