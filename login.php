<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<form action="processregister.php" method="post" id="signIn">
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
				</p>
			</div>
		<!-- </form> -->
	</body>
</html>