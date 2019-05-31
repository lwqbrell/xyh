<?php
/* Smarty version 3.1.33, created on 2019-05-31 00:50:25
  from 'D:\program\phpstudy2018\PHPTutorial\WWW\xyh\views\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf009d1266e03_59482364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fffc3e1810bd83075ccdd1212f3e4731eed57823' => 
    array (
      0 => 'D:\\program\\phpstudy2018\\PHPTutorial\\WWW\\xyh\\views\\register.html',
      1 => 1559235022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf009d1266e03_59482364 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Modal Registration Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/css/form-elements.css">
        <link rel="stylesheet" href="/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                        	<a class="logo" href="index.html"></a>
                            <h1><strong>Bootstrap</strong> Modal Registration Form</h1>
                            <div class="description">
                            	<p>
	                            	This is a free responsive modal registration form made with Bootstrap. 
	                            	Download it on <a href="#"><strong>AZMIND</strong></a>, customize and use it as you like!
                            	</p>
                            </div>
                            <div class="top-big-link">
                            	<a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-register">开始注册</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
        <!-- MODAL -->
        <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-register-label">Sign up now</h3>
        				<p>Fill in the form below to get instant access:</p>
        			</div>
        			
        			<div class="modal-body">
        				
	                    <form role="form" action="" method="post" class="registration-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-first-name">First name</label>
	                        	<input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-last-name">Last name</label>
	                        	<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-email">Email</label>
	                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-about-yourself">About yourself</label>
	                        	<textarea name="form-about-yourself" placeholder="About yourself..." 
	                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
	                        </div>
	                        <button type="submit" class="btn">Sign me up!</button>
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>


        <!-- Javascript -->
        <?php echo '<script'; ?>
 src="/assets/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/assets/js/jquery.backstretch.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/assets/js/scripts.js"><?php echo '</script'; ?>
>
        
        <!--[if lt IE 10]>
            <?php echo '<script'; ?>
 src="/assets/js/placeholder.js"><?php echo '</script'; ?>
>
        <![endif]-->

    </body>

</html><?php }
}
