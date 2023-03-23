<?php if (basename($_SERVER['PHP_SELF'], '.php') == "index" || basename($_SERVER['PHP_SELF'], '.php') == "product-categories"|| basename($_SERVER['PHP_SELF'], '.php') == "products"){
    $img_url="images/logo.png";
}
else
$img_url="../images/logo.png";

?>

<header aria-label="Main header" class="main-header__content">
    <nav class="navbar fixed-top navbar-expand-lg" style="background-color:transparent;">
        <div class="container-fluid">
            <div class="brand">
                <a class="navbar-brand" href="../index.php"><img src="<?php echo $img_url; ?>" alt="Logo"><span class="Bname" style="color:#5dd25e;text-align:justify;"><strong>GREEN CLOSET</strong></span>
                </a>
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="navitems">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                       <?php if ( basename($_SERVER['PHP_SELF'], '.php') != "product-categories"){?>
  <a class="nav-link" href="product-categories.php">Store</a><?php }else{?>
    <a class="nav-link" href="index.php">Home</a> <?php
  }?>
                        </li>
                        <li>
                            <a class="nav-link" href="#our_initiative">Our Initiative</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#aboutus">About us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>