<?php 
    require_once('install.php');
    global $install;
    
    if(!isset( $_SESSION['advanced_finished']) && $_SESSION['advanced_finished'] != "advanced_map"){
    	header('Location:advanced_mail_server.php');
    }
    
    $header = $install->_include_html_header();
    print $header;
 ?>
<body>
<div id="ushahidi_login_container" class="advanced">
    <div id="ushahidi_login_logo"><img src="../media/img/admin/logo_login.gif" /></div>
    <div id="ushahidi_login">
	<ol class="progress-meter clearfix">
		<li class=""><span>Database</span></li>
		<li class=""><span>General</span></li>
		<li class=""><span>Mail Server</span></li>
		<li class=""><span>Map</span></li>
		<li class="active last"><span>Finished</span></li>
	</ol>

        	<form method="POST" name="frm_install" action="process.php" style="line-height: 100%; margin-top: 0; margin-bottom: 0;">  
                <div class="feedback success">
                	<h2>Installation Successful!</h2>
				</div>
                <p>To login to your site, go to http://[websiteurl]/admin and use the following credentials:<br /><br />
                <strong>Username:</strong> admin<br />
                <strong>Password:</strong> admin</p>
                <p><strong>Other next steps...</strong></p>
             
                <ul>
                    <li><a href="http://<?php echo $_SERVER['SERVER_NAME']."/".$install->_get_base_path($_SERVER["REQUEST_URI"]);?>/">View your website</a></li>
                    <li><a href="http://<?php echo $_SERVER['SERVER_NAME']."/".$install->_get_base_path($_SERVER["REQUEST_URI"]);?>/admin/reports/edit">Upload report data</a></li>
                    <li><a href="http://<?php echo $_SERVER['SERVER_NAME']."/".$install->_get_base_path($_SERVER["REQUEST_URI"]);?>/admin/settings/sms">setup your SMS server</a></li>                        
                </ul>
           
  </div>
</div>
<?php
	// clear all set sessions
	$_SESSION['advanced_mail_server_settings'];
	// send the database info to the next page for updating the settings table.
	$_SESSION['select_map_provider'];
	$_SESSION['map_provider_api_key'];
	         
?>
</body>
</html>
