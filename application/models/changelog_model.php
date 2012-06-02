<?php
/**
 * Author: zhouyt (freezestart)
 * Dual licensed under the Apache or MIT licenses: http://todolist.ledbk.com/license.txt
 * http://todolist.ledbk.com/
 * zhouyt.kai7@gmail.com
 */

class Changelog_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function last_version()
    {
        $this->db->select('version');
        $this->db->from('f_changelogs');
        $this->db->order_by('time','desc');
        $this->db->limit(1);
        return $this->db->get()->row()->version;
    }

    function changes()
    {
        $this->db->select('*');
        $this->db->from('f_changelogs');
        $this->db->order_by('time','desc');
        $this->db->limit(4);
        return $this->db->get()->result();
    }
    function add_version($version,$change)
    {
        $this->db->insert('f_changelogs',array('version'=>$version,'change'=>$change,'time'=>time()));
    }
}