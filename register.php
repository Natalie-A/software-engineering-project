<!DOCTYPE html>
<html>
    <head>
        <title>Registration page</title>
        <link rel="stylesheet" href="register.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<form id="signUp">
			<div class="body">
				<h1>Registration Page</h1>
				<p>
					<input type="text" name="fullName" placeholder="Full Name" class="txt" required autocomplete="off" value="abc">
				</p>
				<p>
					<input type="email" name="email" placeholder="Email address" class="txt" required  autocomplete="off" value="abc@gmail.com">
				</p>
				<p>
					<input type="password" name="password" placeholder="Create Password" class="txt" required  autocomplete="off" value="abc">
				</p>
				<p>
					<button type="submit" name="register" class="btn">Submit</button>
					<input type="hidden" name="event" value="register">
				</p>
			</div>
		</form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="processRegister.js"></script>
	</body>
</html>