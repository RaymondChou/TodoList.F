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
        if($this->session->userdata('login')!='true') redirect('login');
    }

    public function index()
    {
        $this->load->view('todo/index');

    }
}