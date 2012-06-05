<?php
/**
 * Author: zhouyt (freezestart)
 * Date: 12-6-5
 * Time: 下午1:18
 * Dual licensed under the Apache or MIT licenses: http://todolist.ledbk.com/license.txt
 * http://todolist.ledbk.com/
 * zhouyt.kai7@gmail.com
 */
class Read_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function today()
    {
        return date('Y-m-d');
    }

    function tomorrow()
    {
        return date("Y-m-d",strtotime("+1 day"));
    }

    function day_after_tomorrow()
    {
        return date("Y-m-d",strtotime("+2 day"));
    }

    function yesterday()
    {
        return date("Y-m-d",strtotime("-1 day"));
    }

    function this_week()
    {
        $begin_this_week = date("Y-m-d",strtotime("last Sunday +1 day"));
        $end_this_week = date("Y-m-d",strtotime("next Sunday"));
        return array('begin_this_week'=>$begin_this_week,'end_this_week'=>$end_this_week);
    }
}