<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','betabennett@gmail.com');
	define('MESSAGE_SUBJECT','** Email from my Website **');
	define('REPLY_TO', 'betabennett@gmail.com');
	define('FROM_ADDRESS', 'betabennett@gmail.com');
	define('REDIRECT_URL', 'http://atlantainteractivedesign.com/');
	
	require_once('validation.php');

?>

<!doctype html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>My Contact page</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width,initial-scale=1">
	
		<style type="text/css">
          #home .home-lk,
          #about .about-lk,
          #contact .contact-lk {
            color:red;
            font-weight:bold;
          }
		
			input,textarea,label {display:block;margin-bottom: 15px;}
			label {margin-bottom: 0px;}
			.error{color:red;}
			form{width:300px;}
		</style>
	</head>

	<body id="contact">
      
      <?php include('inc/header.inc.php'); ?>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<fieldset>
				<p>
					<label for="name">Name:</label><?php echo @$name_error; ?>
					<input type="text" id="name" name="name" value="<?php echo @$name ?>" class="required" required />
				</p>
				<p>
					<label for="email">Email:</label><?php echo @$email_error; ?>
					<input type="text" id="email" name="email" value="<?php echo @$email ?>" class="email required" required />
				</p>
				<p>
					<label for="message">Message:</label><?php echo @$message_error; ?>
					<textarea cols="45" rows="7" id="message" name="message" class="required"><?php echo @$message ?></textarea>
				</p>
				<input name="submitted" type="submit" value="Send" />
			</fieldset>
		</form>
      
<?php include('inc/footer.inc.php'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" ></script>
   <script>
     $(document).ready(function(){
		 $('#contact-form').submit(function(e){
			 if($('#name').val==''||$('email').val()==''){
			 alert('Please fill out both the name and email fields');
			 e.preventDefault();
			 }
		 });
		 
		 
	 });
   
   </script>   
	</body>
</html>
