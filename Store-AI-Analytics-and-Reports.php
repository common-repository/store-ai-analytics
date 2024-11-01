<?php
/**
 * Plugin Name:       Store AI Analytics and Reports
 * Plugin URI:        https://cloudhiti.ai/store-ai-analytics-and-reports
 * Description:       Store AI Analytics & Reports is a flexible analytics solution built on WordPress. Visualize and improve perfomance of your WooCommerce store with us.
 * Version:           1.0.0
 * Author:            ClouDhiti.ai
 * Author URI:        https://cloudhiti.ai/
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

function SAI_activation() {
}
register_activation_hook(__FILE__, 'SAI_activation');

function SAI_deactivation() {
	}
register_deactivation_hook(__FILE__, 'SAI_deactivation');


function SAI_add_Scripts_and_styles()
{
	wp_enqueue_style( 'SAI_bootstrap_stylesheet', plugins_url( 'includes/css/SAI_bootstrap.css', __FILE__ ) );
	wp_enqueue_script( 'SAI_bootstrap_script', plugins_url( 'includes/js/SAI_bootstrap.js', __FILE__ ));

}

add_action( 'admin_enqueue_scripts', 'SAI_add_Scripts_and_styles' );
add_action("admin_menu","SAI_add_menu");
function SAI_add_menu()
{
	add_menu_page('Store AI Analytics','Store AI Analytics','manage_options','Store-AI-Analytics','embed_SAI',plugin_dir_url( __FILE__ ) . 'includes/images/icon.ico');
}


function SAI_Redirect($url, $permanent = 303)
{
    header('Location: ' . $url, true, $permanent);
	die();
}


function SAI_registration_form( $username, $password, $email, $first_name, $last_name ) {
	echo '<style>
	.cloudhiti-logo{
		height: 50%;
		width: 16%;
		margin-left: 1%;
	}
	.cloudhiti-mail-logo {
		height: 30%;
		width: 2.5%;
		margin-left: 55%;
	}
	.cloudhiti-call-logo {
		height: 30%;
		width: 3%;
		margin-left: 1%;
	}	
	.cloudhiti-banner{
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
		width: 100%;
		margin-top: 2%;
		z-index: 20;
		opacity: 1;
		visibility: inherit;
	}
	.login-Card{
		margin-left: 20% !important;
	}
	.cloudhiti-contact{
		margin-left: 1%;
		color: white;
		font-size: 12px;
	}
	.cloudhiti-privacy{
		margin-left: 10px; 
		cursor: pointer !important;
		color: #007bff !important;
	}
	.cloudhiti-privacy:hover{
		color: #20a8d8 !important;
		text-decoration: underline !important;
	}
	.cloudhiti-banner-text {
		position: absolute;
		top: 550px;
		left: 37px;
		color: white;
	}
	.banner{
		font-family: Roboto;
	}

	.sidenav {
		height: 52%;
		width: 0;
		position: fixed;
		top: 0;
		right: 0;
		background-color: #e4e5e6;
		overflow-x: hidden;
		transition: 0.5s;
		padding-top: 60px;
		margin-top: 7.5%;
	}
	
	pre 
	{
		font-family: Roboto;
		font-size:14px;
	}
	.sidenav a {
		padding: 8px 8px 8px 32px;
		text-decoration: none;
		font-size: 25px;
		color: black;
		display: block;
		transition: 0.3s
	}
	
	.sidenav a:hover, .offcanvas a:focus {
		color: black;
	}
	
	.sidenav .closebtn {
		position: absolute;
		top: 0;
		right: 25px;
		font-size: 36px;
		margin-left: 50px;
	}

	body { padding: 2em; }
	
	/* Shared */
	.loginBtn {
		box-sizing: border-box;
		position: relative;
		/* width: 13em;  - apply for fixed size */
		margin: 0.2em;
		padding: 0 15px 0 46px;
		border: none;
		text-align: left;
		line-height: 34px;
		white-space: nowrap;
		border-radius: 0.2em;
		font-size: 16px;
		color: #FFF;
	}
	.loginBtn:before {
		content: "";
		box-sizing: border-box;
		position: absolute;
		top: 0;
		left: 0;
		width: 34px;
		height: 100%;
	}
	.loginBtn:focus {
		outline: none;
	}
	.loginBtn:active {
		box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
	}
	.card-img-top {
		width: 110%;
		height: 15vw;
	}

	
	.gradient-button {
		margin: 10px;
		font-family: "Arial Black", Gadget, sans-serif;
		font-size: 15px;
		padding: 15px;
		text-align: center;
		text-transform: uppercase;
		transition: 0.5s;
		background-size: 200% auto;
		color: #FFF;
		box-shadow: 0 0 20px #eee;
		border-radius: 10px;
		width: 150px;
		box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		transition: all 0.3s cubic-bezier(.25,.8,.25,1);
		cursor: pointer;
		display: inline-block;
		border-radius: 25px;
	}
	.gradient-button:hover{
		box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
		margin: 8px 10px 12px;
	}
	.gradient-button-1 {background-image: linear-gradient(to right, #DD5E89 0%, #F7BB97 51%, #DD5E89 100%)}
	.gradient-button-1:hover { background-position: right center; }

	.gradient-button-2 {background-image: linear-gradient(to right, #2BC0E4 0%, #EAECC6 51%, #2BC0E4 100%)}
	.gradient-button-2:hover { background-position: right center; }

	.gradient-button-3 {background-image: linear-gradient(to right, #7474BF 0%, #348AC7 51%, #7474BF 100%)}
	.gradient-button-3:hover { background-position: right center; }

	.gradient-button-4 {background-image: linear-gradient(to right, #00d2ff 0%, #3a7bd5 51%, #00d2ff 100%)}
	.gradient-button-4:hover { background-position: right center; }

	
	.half{
		width:50%
	} 
	#registrationform {
		display: none;
		}
		
	</style>
	<!-- CSS IMPORTING ENDS HERE -->
	';
	

	echo'<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<nav class="navbar navbar-expand-sm " style="height: 80px;background-color: #000000; font-family: Roboto;">
		<img class="login-logo cloudhiti-logo" src='.plugin_dir_url( __FILE__ ) .'includes/images/cloudhiti-new-logo.png />
		<img class="cloudhiti-mail-logo" src='.plugin_dir_url( __FILE__ ) .'includes/images/mail.png ></i>
		<span class="cloudhiti-contact"cloudhiti-contact>results@cloudhiti.ai</span>
		<img class="cloudhiti-call-logo" src='.plugin_dir_url( __FILE__ ) .'includes/images/call.png ></i>
		<span class="cloudhiti-contact" style="margin-left: 1%;">408-462-5257</span>
	</nav>

	<div class="app-body" style="font-family: Roboto; z-index: 500;">
		<main class="main d-flex align-items-center">
			<div id ="optionsfor" style="margin-left:20%">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="card" style="width:300px;box-shadow: 7px 7px #dbcccb;background-color:#EEEFF4;">
							<img class="card-img-top" src="'.plugin_dir_url( __FILE__ ) .'includes/images/new.png" alt="..." >
								<div class="card-body text-center">
									<h4 class="card-title">New User</h4>
									<a class="gradient-button gradient-button-4" onclick="SAI_display_div()">Sign Up</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card" style="width:300px;box-shadow: 7px 7px #dbcccb;background-color:#EEEFF4;">
							<img class="card-img-top" src="'.plugin_dir_url( __FILE__ ) .'includes/images/existing.png" alt="..." >
							<div class="card-body text-center">
									<h4 class="card-title">Existing User</h4>
									<a class="gradient-button gradient-button-4" onclick="SAI_redirect_home()">Sign In</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="registrationform">
			<div>
				<div class="row" style="padding:5px;">
					<form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
						<div class="container" style="margin-left: 25px;margin-top: 10px;">
							<h1>Register</h1>
							<hr>						
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-lg-4">
									<label for="email" >User E-mail</label>
								</div>
								<div class="col-xs-4 col-sm-4 col-lg-4">
									<label for="firstname" >First Name </label>
								</div>
								<div class="col-xs-4 col-sm-4 col-lg-4">
									<label for="lastname" >Last Name </label>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-lg-4">
									<input type="email" name="email"  value="" required>
								</div>
								<div class="col-xs-4 col-sm-4 col-lg-4">
									<input type="text" name="fname"  value="" required>
								</div>
								<div class="col-xs-4 col-sm-4 col-lg-4">
									<input type="text" name="lname"  value="" required>										
								</div>
							</div>
							
							<div class="row" style="margin-top: 3%;">									
								<div class="col-xs-4 col-sm-4 col-lg-4">
									<label for="password" >Password </label>
								</div>
								<div class="col-xs-4 col-sm-4 col-lg-4">
									<label for="confirmpassword" >Confirm Password </label>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-lg-4">
									<input type="password" name="password"  value="" required>
								</div>
								<div class="col-xs-4 col-sm-4 col-lg-4">
									<input type="password" name="confirmpassword"  value="" required>
								</div>
							</div>
							<hr>
							<button type="submit" class="registerbtn" name="submit" value="Register">Register</button>
							<p style="font-size:17px;margin-top: 1%;">Already registered ? Click here to <a href="https://analytics.cloudhiti.ai/login">Login</a>.</p>														
						</div>													
					</form>
				</div>
				</div>
			</div>					
		</main>
	</div>	  
	<div class="banner">
	<img class="cloudhiti-banner" src="'.plugin_dir_url( __FILE__ ) .'includes/images/cloudhiti-banner-1.jpg">
		<div class="cloudhiti-banner-text">
			<span>© 2020 ClouDhiti or its affiliates. All rights reserved.</span>
		</div>
	</div>	
	<script>
		function SAI_display_div() {
			document.getElementById("optionsfor").style.display = "none";
			document.getElementById("registrationform").style.display = "block";
		}
	</script>
	<script>
		function SAI_redirect_home()
			{				
				window.location.replace("https://analytics.cloudhiti.ai/login");
			}
	</script>	
		';
}

function SAI_registration_validation($password, $confirmpassword, $email, $first_name, $last_name ){

	global $reg_errors;
	$reg_errors = new WP_Error;
	if ( empty( $password ) || empty( $email ) || empty($confirmpassword)) {
		$reg_errors->add('field', 'Required form field is missing');
	}

	if ( $password != $confirmpassword ) {
		$reg_errors->add('password', 'Password do not match with Confirm Password');
	}

	if ( 5 > strlen( $password ) ) {
        $reg_errors->add( 'password', 'Password length must be greater than 5' );
	}

	if ( is_wp_error( $reg_errors ) ) {
 
		foreach ( $reg_errors->get_error_messages() as $error ) {
		 
			echo '<div style="color:red">';
			echo '<strong> ERROR </strong>:';
			echo $error . '<br/>';
			echo '</div>';					 
		}
	}
	
}


function SAI_complete_registration() {
	global $reg_errors, $password, $confirmpassword, $email, $first_name, $last_name;
	
    if ( 1 > count( $reg_errors->get_error_messages() ) ) {
        $userdata = array(
        'user_email'    =>   $email,
		'user_pass'     =>   $password,
		'site_url'		=>	 get_option('siteUrl'),
        'first_name'    =>   $first_name,
        'last_name'     =>   $last_name
        );

		$args = array(
			'method'      => 'POST',
			'headers'   => array('Content-Type' => 'application/json; charset=utf-8'),
			'timeout'     => 45,			
			'body'        => json_encode($userdata),
			'data_format' => 'body'
		);

		$url = 'https://analytics.cloudhiti.ai/admin/woocomm-install';
		$response = wp_remote_post( $url, $args);

		if ( is_wp_error( $response ) ) {
			$error_message = $response->get_error_message();
			echo "Something went wrong: $error_message";
		 } 
		 else 
		 {
			$body     = wp_remote_retrieve_body( $response );
			$http_code = wp_remote_retrieve_response_code( $response );

			$obj = json_decode($body);
			$auth_url = $obj->url;  
			
			if ($auth_url == "error"){
				echo '<script>alert("Error Encountered. Please Try Again")</script>'; 
			} 
			else{
				SAI_Redirect($auth_url, false);
			}
		 }
    }
}


function embed_SAI() {

    if ( isset($_POST['submit'] ) ) {
			
        SAI_registration_validation(
		$_POST['password'],
		$_POST['confirmpassword'],
        $_POST['email'],
        $_POST['fname'],
        $_POST['lname']
        );
         
        // sanitize user form input
        global  $password, $confirmpassword, $email,  $first_name, $last_name;
		$password   =   esc_attr( $_POST['password'] );
		$confirmpassword = esc_attr( $_POST['confirmpassword'] );
        $email      =   sanitize_email( $_POST['email'] );
        $first_name =   sanitize_text_field( $_POST['fname'] );
        $last_name  =   sanitize_text_field( $_POST['lname'] );
			
        // call @function SAI_complete_registration to create the user
        // only when no WP_error is found
        SAI_complete_registration(
		$password,
		$confirmpassword,
        $email,
        $first_name,
        $last_name
		);		
	}
	
	SAI_registration_form(
		$password,
		$confirmpassword,
		$email,
		$first_name,
		$last_name
		);    
}

?>