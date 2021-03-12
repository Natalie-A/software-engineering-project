<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<form id="signIn">
			<div class="body">
				<h1>Login Page</h1>
				<p>
					<input type="email" name="email" placeholder="Email address" class="txt" required  autocomplete="off">
				</p>
				<p>
					<input type="password" name="password" placeholder="Password" class="txt" required  autocomplete="off">
				</p>
				<p>
					<button type="submit" name="submit" class="btn">Submit</button>
					<input type="hidden" name="event" value="login">
				</p>
			</div>
		</form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="processLogin.js"></script>
	</body>
</html>