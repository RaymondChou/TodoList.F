<?php
/**
 * Author: zhouyt (freezestart)
 * Date: 12-6-2
 * Time: 下午8:21
 * Dual licensed under the Apache or MIT licenses: http://todolist.ledbk.com/license.txt
 * http://todolist.ledbk.com/
 * zhouyt.kai7@gmail.com
 */
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function add_version()
    {
        if($this->input->post('version')||$this->input->post('change'))
        {
            $this->load->model('changelog_model');
            $this->changelog_model->add_version($this->input->post('version'),$this->input->post('change'));
        }

        $this->load->view('admin');
    }
}