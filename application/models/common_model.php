<?php
/**
 * Author: zhouyt (freezestart)
 * Date: 12-6-3
 * Time: 上午10:53
 * Dual licensed under the Apache or MIT licenses: http://todolist.ledbk.com/license.txt
 * http://todolist.ledbk.com/
 * zhouyt.kai7@gmail.com
 */
class Common_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function lang_select($file)
    {
        $lang = $this->session->userdata('lang');
        if($lang!=null)
        {
            $this->lang->load($file, $lang);
        }
    }

    public function header()
    {
        if($this->session->userdata('login')!='true') redirect('login');
//        $this->common_model->lang_select();
        $data['username']=$this->session->userdata('username');
        $this->load->view('header',$data);
    }

    public function footer()
    {
        $this->load->view('footer');
    }
}