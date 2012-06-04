<?php
/**
 * Author: zhouyt (freezestart)
 * Date: 12-6-4
 * Time: 下午5:36
 * Dual licensed under the Apache or MIT licenses: http://todolist.ledbk.com/license.txt
 * http://todolist.ledbk.com/
 * zhouyt.kai7@gmail.com
 */

class Add_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public  function insert($db_data)
    {
        if($this->db->insert('f_todo',$db_data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}