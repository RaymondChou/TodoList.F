<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TodoList.F</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="todolist whit php/codeigniter">
    <meta name="author" content="zhouyt">

    <!-- Le styles -->
    <link href="<?php echo site_url()?>css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    <link href="<?php echo site_url()?>css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_url()?>css/jquery.fileupload-ui.css">
    <link rel="stylesheet" href="<?php echo site_url()?>js/My97DatePicker/skin/WdatePicker.css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo site_url()?>">TodoList.F</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li class="active"><a href="<?php echo site_url('todo')?>">Home</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Day<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Today</a></li>
                            <li><a href="">Tomorrow</a></li>
                            <li><a href="">Day after tomorrow</a></li>
                            <li><a href="">Yesterday</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Week<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">This week</a></li>
                            <li><a href="">Next week</a></li>
                            <li><a href="">Week after next week</a></li>
                            <li><a href="">Last week</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Month<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">This Month</a></li>
                            <li><a href="">Next Month</a></li>
                            <li><a href="">Month after next Month</a></li>
                            <li><a href="">Last Month</a></li>
                        </ul>
                    </li>
                    <li><a href="#">All</a></li>
                    <li><a href="#">TimeLine</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Output <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Daily</a></li>
                            <li><a href="#">Weekly</a></li>
                            <li><a href="#">Monthly</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Total</li>
                            <li><a href="#">By Tags</a></li>
                            <li><a href="#">By Hots</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-search pull-left" action="">
                    <input type="text" class="search-query span2 popover-f" placeholder="Search">
                </form>
                <ul class="nav pull-right">
                    <li><a data-toggle="modal" href="#newtodo"><i class="icon-plus icon-white"></i>New Todo</a></li>
                    <li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="nav-header">Select Language</li>
                            <li><a href="">English</a></li>
                            <li><a href="">Chinese</a></li>
                        </ul>
                    </li>
                    <li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-wrench"></i>Settings</a></li>
                            <li><a href="#"><i class="icon-list-alt"></i>MyTodoStatistics</a></li>
                            <li><a href="#"><i class="icon-eye-open"></i>What's new?</a></li>
                            <li class="nav-header"><?php echo $username?></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('login/logout')?>"><i class="icon-off"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.nav-collapse -->
        </div>
    </div><!-- /navbar-inner -->
</div>


<div class="modal fade hide" id="newtodo">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Add A New Todo</h3>
    </div>
    <div class="modal-body">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#add_default" rel="tooltip" class="tooltip-f" title="Required" data-toggle="tab">Default</a></li>
            <li><a href="#add_image" rel="tooltip" class="tooltip-f" title="Optional" data-toggle="tab">Image</a></li>
            <li><a href="#add_file" rel="tooltip" class="tooltip-f" title="Optional" data-toggle="tab">File</a></li>
            <li><a href="#json" rel="tooltip" class="tooltip-f" title="Optional" data-toggle="tab">JSON</a></li>
        </ul>
        <form class="form-horizontal" action="<?php echo site_url('todo/add')?>" method="post">
        <div class="tab-content">
<!--            <div class="tab-pane" id="add_file">-->
<!--                <fieldset>-->
<!--                    <div class="control-group">-->
<!--                        <form id="fileupload" action="server/php/" method="POST" enctype="multipart/form-data">-->
<!--                            <div class="row fileupload-buttonbar">-->
<!--                                <div class="span5">-->
<!--                <span class="btn btn-success fileinput-button">-->
<!--                    <i class="icon-plus icon-white"></i>-->
<!--                    <span>Add files...</span>-->
<!--                    <input type="file" name="files[]" multiple>-->
<!--                </span>-->
<!--                                    <button type="submit" class="btn btn-primary start">-->
<!--                                        <i class="icon-upload icon-white"></i>-->
<!--                                        <span>Start upload</span>-->
<!--                                    </button>-->
<!--                                    <button type="reset" class="btn btn-warning cancel">-->
<!--                                        <i class="icon-ban-circle icon-white"></i>-->
<!--                                        <span>Cancel upload</span>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="btn btn-danger delete">-->
<!--                                        <i class="icon-trash icon-white"></i>-->
<!--                                        <span>Delete</span>-->
<!--                                    </button>-->
<!--                                    <input type="checkbox" class="toggle">-->
<!--                                </div>-->
<!--                                <div class="span5 fileupload-progress fade">-->
<!--                                    <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">-->
<!--                                        <div class="bar" style="width:0%;"></div>-->
<!--                                    </div>-->
<!--                                    <div class="progress-extended">&nbsp;</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="fileupload-loading"></div>-->
<!--                            <br>-->
<!--                            <table role="presentation" class="table table-striped"><tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody></table>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </fieldset>-->
<!--            </div>-->
            <div class="tab-pane active" id="add_default">
                <fieldset>
                    <div class="control-group">
                        <label  rel="tooltip" title="Title" data-content="A title as simple as possible" class="control-label popover-f" for="input01">Title</label>
                        <div class="controls">
                            <input type="text" name="title" class="input-xlarge" id="input01">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="control-group">
                        <label rel="tooltip" title="Content" data-content="Describe for your todo,but do not too many things" class="control-label popover-f" for="input02">Content</label>
                        <div class="controls">
                            <textarea name="body" class="input-xlarge" rows="5" id="input02"></textarea>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="control-group">
                        <label class="control-label popover-f" rel="tooltip" title="Tag" data-content="Some tags help you to find and output easily">Tag</label>
                        <div class="controls">
                            <ul class="input-xlarge" style="margin-left:0;" id="singleFieldTags"></ul>
                            <input name="tags" id="mySingleField" value="" style="display: none;"  disabled="true">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="control-group">
                        <label rel="tooltip" title="Degree" data-content="Higher is important" class="control-label popover-f" for="select01">Degree</label>
                        <div class="controls">
                            <select id="select01" name="hot">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="control-group">
                        <label rel="tooltip" title="Degree" data-content="Higher is important" class="control-label popover-f" for="select01">Time to Finish</label>
                        <div class="controls">
                            <input class="Wdate" type="text" onclick="WdatePicker({skin:'blueFresh'})">
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="tab-pane" id="add_image">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="input01">Images</label>
                        <div class="controls">
                            <input class="input-file" id="fileInput" type="file">
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="tab-pane" id="json">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="input01">JSON</label>
                        <div class="controls">
                            <textarea  class="input-xlarge" rows="10" id=""></textarea>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>

    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Cancel</a>
        <a href="#" class="btn btn-primary">Save & Next</a>
        <button type="submit" class="btn btn-success">Save</button>
    </div>
    </form>


</div>
