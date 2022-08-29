<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
</head>

<body>
	<div class='bold-line'></div>
	<div class='container'>
		<div class='window'>
			<div class='overlay'></div>
			<div class='content'>
				<form action="<?= base_url('userlogin/process'); ?>" method="post" class="login">
					<div class='welcome'>Login!</div>
					<div class='subtitle'>
						<h6><?= $this->session->flashdata('error') ?></h6>
					</div>
					<div class='input-fields'>
						<input type='text' placeholder='Email' class='input-line full-width' name='email'></input>
						<input type='password' placeholder='Password' class='input-line full-width' name='password'></input>
					</div>
					<div class='spacing'>or Back <span class='highlight'><a href="<?php echo base_url(); ?>">Home?</a></span></div>
					<div><button class='ghost-round full-width' type="submit" name="login">Login</button></div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>