<?php
/**
 * Author: zhouyt (freezestart)
 * Date: 12-6-3
 * Time: 上午9:52
 * Dual licensed under the Apache or MIT licenses: http://todolist.ledbk.com/license.txt
 * http://todolist.ledbk.com/
 * zhouyt.kai7@gmail.com
 */

class Todo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->common_model->header();
        $this->load->view('todo/index');
        $this->common_model->footer();

    }

    public function add()
    {
        if($this->session->userdata('login')=='true')
        {
            $db_data['title'] = $this->input->post('title');
            $db_data['body'] = $this->input->post('body');
            $db_data['hot'] = $this->input->post('degree');
            $db_data['begin_time'] = $this->input->post('begin_time');
            $db_data['create_time'] = time();

            $this->load->model('todo/add_model');
            if($this->add_model->insert($db_data))
            {
                redirect('todo');
            }
            else
            {
                echo 'error';
            }

        }
        else
        {
            redirect('login');
        }
    }
}