<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TodoList.F</title>
    <meta name="viewport" content="width=1000px">
    <link rel="stylesheet" href="css/welcome.css">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700,400italic" rel="stylesheet" type="text/css">
</head>
<body>

<div id="content" role="main">
    <!--[if IE]>
<a style="top:8px;left: 10px;position: absolute;">Using the chrome browser to get the best experience</a>
    <![endif]-->
    <header>
        <div class="centre">
            <h1>TodoList.F</h1>
            <h2><strong>TodoList.F</strong> is A friendly & usefully open source TodoList tool using <em>PHP with CodeIgniter 2.1</em> by Zhouyt *</h2>
            <a id="print" href="login" title="login">login</a>
        </div>
    </header>

    <div id="main">
        <div class="centre clearfix">

            <ul>
                <li>CodeIgniter 2.1.0</li>
                <li>CSS3 compliant</li>
                <li>HTML5 compliant</li>
                <li><a href="license.txt" target="_blank">Apache and MIT licenses</a></li>
                <li>jQuery and bootstrap</li>
                <li>Multi user Multi Language</li>
            </ul>

            <div id="code">
                <p>
                    Changelog:
                </p>
                <?php foreach($changes as $change) {?>
                <p>
                    <?php echo date('Y-m-d',$change->time).' >> '. $change->change?>
                </p>
                <?php }?>


            </div>

            <div id="download">

                <h3>Try TodoList.F now!</h3>

                <a id="download-dev" class="resource" href="https://github.com/freezestart/TodoList.F" target="_blank">View on GitHub <span>Git version (fork me!)</span></a>
                <a id="download-pro" class="resource" href="login">Live Demo <span>Last version(under used)</span></a>

                <h4>Current Release: v<?php echo $last_version?></h4>

            </div>

            <div id="social">
                <div class="twitter">
                    <a href="mailto:zhouyt.kai7@gmail.com" target="_blank">Email me</a>
                </div>
<!--                <div class="google">-->
<!--                    <g:plusone size="medium"></g:plusone>-->
<!--                </div>-->
            </div>

        </div>
    </div>

</div><!--/#content-->

<footer role="contentinfo">
    <div class="centre clearfix">
        <div class="col1">
            <h3>* Some thing...</h3>
            <p>Taiwan and South China Sea islands is an inalienable part of China's sacred territory</p>
            <p>台湾和南海诸岛是中国神圣领土不可分割的一部分</p>
            <p>台灣と南シナ海諸島は中国神聖不可分の</p>
            <p>Taiwan at South China Sea isla ay isang hindi maikakait na bahagi ng banal na teritoryo ng Tsina</p>
            <p>대만과 중국 남해 섬은 중국의 신성한 영토의 양도할 수없는 부분입니다</p>
        </div>
        <div class="col2">
            <h3>About the author</h3>
            <p><strong>TodoList.F</strong> is A friendly & usefully open source TodoList tool using <em>PHP with CodeIgniter 2.1 </em> by Zhouyt (freezestart)</p>
            <p>I am researching the best way to note todo , so send me your feedback!</p>
            <p>I graduated from the JIT Civil Engineering Major , soon switch to a programmer.</p>
            <a href="http://www.ledbk.com" data-text-color="#ffffff" data-link-color="#53c565" >My Blog</a>
            <p><small>Copyright &copy; 2012 <a rel="me" title="Zhouty(freezestart)" href="http://www.ledbk.com">Zhouyt (freezestart)</a></small></p>
        </div>
    </div>
</footer>

<script src="/js/jquery-1.7.2.min.js"></script>

</body>
</html>