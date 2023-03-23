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
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>     
    <?php
        require "../controllers/includes/header.php"
    ?>
    <br>
    <br>
    <div class="signupform" style="background-color:#1a1a1a;margin-bottom:0px;height:1350px;color:#1a1a1a;position:relative;">
    <br><br>
	<h1 style="text-align:center;color:#fff;">Application</h1>
	<form class="register_form" action="../controllers/register_controller.php" method="POST" onsubmit="return validateForm()" style="padding-bottom:100px;">
		<label for="full_name">Brand Name :-</label>
		<input type="text" id="full_name" name="full_name" placeholder="Full Name" >

		<label for="email">Email :-</label>
		<input type="email" id="email" name="email" placeholder="Email" >

		<label for="address">Address :-</label>
		<input type="text" id="address" name="address" placeholder="Username" >

        <label for="gstno">GST Number :-</label>
		<input type="text" id="gstno" name="gstno" placeholder="GST Number" >

		<label for="password">Password</label>
		<input type="password" id="password" name="password" placeholder="Password" >

		<label for="confirm_password">Confirm Password</label>
		<input type="password" id="password" name="password" placeholder="Confirm Password">

        <hr>
        <label style="text-align:left;">Certifications :</label>
        <label >1.Global Organic Textile Standard (G.O.T.S):-</label>
        <input type="text" name="CN1" placeholder="Certificate Number">
        <label >2.Global Recyled Standard (G.R.S):-</label>
        <input type="text" name="CN2" placeholder="Certificate Number">
        <label >3.OEKO-TEX (O.T):-</label>
        <input type="text" name="CN3" placeholder="Certificate Number">
        <label >4.Credle to Cradle (C.T.C):-</label>
        <input type="text" name="CN4" placeholder="Certificate Number">
        <label >5.Blue Sign (B.S):-</label>
        <input type="text" name="CN5" placeholder="Certificate Number">
        <button class="btn btn-success"type="submit" name="submit" value="sumbit">Submit</button>
    </form>
    </section>
    </div>
        <?php require "../controllers/includes/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>