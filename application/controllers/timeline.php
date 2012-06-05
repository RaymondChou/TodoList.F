<?php
/**
 * Author: zhouyt (freezestart)
 * Date: 12-6-5
 * Time: 下午9:17
 * Dual licensed under the Apache or MIT licenses: http://todolist.ledbk.com/license.txt
 * http://todolist.ledbk.com/
 * zhouyt.kai7@gmail.com
 */
class Timeline extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->common_model->header();
        $this->load->view('timeline');
        $this->common_model->footer();
    }

    public function json()
    {
        if(1==1)
        {
            echo '
{
    "timeline":
    {
        "headline":"The Kitchen Sink",
        "type":"default",
		"startDate":"2011,9,1",
		"text":"An example of the different kinds of stuff you can do.",
        "date": [
            {
                "startDate":"2012,1,26",
                "headline":"Sh*t Politicians Say",
                "text":"<p>Sh*t Politicians Say landed just hours before Thursday night’s Republican presidential debate and stars actor Joe Leon. In true political fashion, his character rattles off common jargon heard from people running for office.</p><p>Do these ring a bell? Moral fiber, family values, trust me, three-point plan, earmarks, tough question, children are our future, Washington outsider, jobs, my opponent — all sound familiar.</p>",
                "asset":
                {
                    "media":"http://youtu.be/u4XpeU9erbg",
                    "credit":"",
                    "caption":""
                }
            },
            {
                "startDate":"2012,1,10",
                "headline":"Sh*t Nobody Says",
                "text":"<p>Have you ever heard someone say “can I burn a copy of your Nickelback CD?” or “my Bazooka gum still has flavor!” Nobody says that.</p>",
                "asset":
                {
                    "media":"http://youtu.be/f-x8t0JOnVw",
                    "credit":"",
                    "caption":""
                }
            },





			{
                "startDate":"2012,1,18",
                "headline":"Sh*t New Yorkers Say",
                "text":"",
                "asset":
                {
                    "media":"http://youtu.be/yRvJylbSg7o",
                    "credit":"",
                    "caption":"Directed and Edited by Matt Mayer, Produced by Seth Keim, Written by Eliot Glazer. Featuring Eliot and Ilana Glazer, who are siblings, not married."
                }
            }
        ]
    }
}';
        }
    }
}