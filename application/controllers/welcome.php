<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
        $this->load->model('changelog_model');
        $data['last_version'] = $this->changelog_model->last_version();
        $data['changes'] = $this->changelog_model->changes();
		$this->load->view('welcome_message',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */