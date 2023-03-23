<!doctype html>
<html>

<head>
    <title>GreenCloset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="ConsiousCloset, green, sustainable, eco-friendly,eco,environment,trees,organic">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="indexpage">
        <?php require "../controllers/includes/header.php" ?>
        
        <section class="above-fold-section above-fold-section--video-closed">
            <div class="above-fold-section__content">
            <!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="sign-up.css">
	<script src="validate.js"></script>
</head>
<body>
	<h1>Sign Up</h1>
	<form action="signup.php" method="POST" onsubmit="return validateForm()">
		<label for="full_name">Full Name</label>
		<input type="text" id="full_name" name="full_name" placeholder="Full Name">

		<label for="email">Email</label>
		<input type="email" id="email" name="email" placeholder="Email">

		<label for="username">Username</label>
		<input type="text" id="username" name="username" placeholder="Username">

		<label for="password">Password</label>
		<input type="password" id="password" name="password" placeholder="Password">

		<label for="confirm_password">Confirm Password</label>
		<input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">

		<input type="submit" value="Sign Up">
	</form>
</body>
</html>

            </div> 
        </section>

        <?php require "../controllers/includes/footer.php" ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>