<?php
/**
 * Author: zhouyt (freezestart)
 * Date: 12-6-2
 * Time: 下午10:21
 * Dual licensed under the Apache or MIT licenses: http://todolist.ledbk.com/license.txt
 * http://todolist.ledbk.com/
 * zhouyt.kai7@gmail.com
 */
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index()
    {

        $this->load->view('login');
    }

    public function login_sub()
    {
        if($this->input->post('username')&&$this->input->post('password'))
        {
            if($this->login_model->login($this->input->post('username'),$this->input->post('password')))
            {
                echo '<script>alert(1111)</script>';
            }
            else
            {
                echo '<script>alert(0000)</script>';
            }
        }
        else
        {
            $this->load->view('login');
        }
    }

    public function register()
    {
        if($this->input->post('usernamesignup')&&$this->input->post('emailsignup')&&$this->input->post('passwordsignup')&&$this->input->post('passwordsignup_confirm'))
        {

            if($this->login_model->register($this->input->post('usernamesignup'),$this->input->post('emailsignup'),$this->input->post('passwordsignup')))
            {
                echo 'success';
            }
            else
            {
                echo 'fail';
            }
        }
        else
        {
            $this->load->view('login');
        }
    }
}