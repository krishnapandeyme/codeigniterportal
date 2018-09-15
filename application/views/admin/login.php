<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
		form,input{
			font-family: 'Montserrat', sans-serif;
			font-size:20px;
		}
		input{
			padding: 20px;
			margin: 20px;
		}
	</style>
</head>
<body>

	
	<div id="container">
		<div >
			<center>
				<form action="<?php echo base_url('admin/home/adminLogin');?>" method="post">
					<center><h1>HR Admin Login</h1></center>
					<input type="text" placeholder="Name" name="username"  ><br>
					<input type="password" placeholder="Password" name="password" ><br>
					<center><input type="submit" value="login"></center>
				</form>
				<?php echo validation_errors(); ?>
				<?php 
				if($this->session->flashdata("error"))
				echo $this->session->flashdata("error") ?>
			</center>
		</div>

		
	</div>

</body>
</html>