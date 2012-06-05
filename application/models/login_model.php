<?php
/**
 * Author: zhouyt (freezestart)
 * Date: 12-6-2
 * Time: 下午10:58
 * Dual licensed under the Apache or MIT licenses: http://todolist.ledbk.com/license.txt
 * http://todolist.ledbk.com/
 * zhouyt.kai7@gmail.com
 */
class Login_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function register($username,$email,$password)
    {
        $this->db->from('f_users');
        $this->db->where('email',$email);
        $this->db->or_where('username',$username);
        if($this->db->get()->num_rows()==0)
        {
            $db_data=array('username'=>$username,
                           'password'=>md5($password),
                           'email'=>$email,
                           'regist_time'=>time()
                            );
            if($this->db->insert('f_users',$db_data))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    function login($username,$password)
    {
        $this->db->select('id,username');
        $this->db->from('f_users');
        $this->db->where(array('email'=>$username,'password'=>md5($password)));
        $query=$this->db->get();

        if($query->num_rows()>0)
        {
            return $query->row();
        }
        else
        {
            $this->db->select('id,username');
            $this->db->from('f_users');
            $this->db->where(array('username'=>$username,'password'=>md5($password)));
            $query=$this->db->get();

            if($query->num_rows()>0)
            {
                return $query->row();
            }
            else
            {
                return false;
            }
        }
    }

}