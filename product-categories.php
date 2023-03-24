<html>
    <head>    

        <style>
            @import url('https://fonts.googleapis.com/css?family=Raleway|Roboto&display=swap');

body{
  background-color: #1a1a1a !important;
}

.container{
  margin-top: 50px;
}

h1, .card-title, a, #toast{
  font-family: 'Roboto', sans-serif;
}

h1{
  color: #5dd25e !important;
}

.card{
  /* box-shadow: 0px 15px 35px -5px rgba(50, 88, 130, 0.32); */
  border-radius: 15px;
  transition: transform .2s;
  background-color: #1a1a1a !important;
}

.card-body{
  padding: 10px;
  margin-top: -50px;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  transition: all 1s ease-in-out;
}

.card-body a{
    text-decoration:none;
    background:#000000;
    padding:10px;
    width:10px;
}

.heart{
  color: #989898;
  margin-top: 15px;
  margin-left: 230px;
  font-size: 30px;
  position: absolute;
  width: 40px;
  height: 40px;
  border-radius: 30px;
  padding: 0px;
  text-align: center;
  cursor: pointer;
}

.heart-active{
  color: #C50707;
}

.heart:hover{
  color: red;
  background-color: #f9f9f9;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  transition: all 1s ease-in-out;
}



.card:hover > .card-body{
  margin-top: -0px;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  transition: all 1s ease;
}

.card:hover{
  transform: scale(1.02);
}


.first-image{
  width: 100%;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.cart, .wish{
  padding: 5px;
  width: 50px;
  height: 50px;
  margin-left: -24px;
  margin-top: 0px;
  margin-right: 3px;
  background-color: #fff !important;
  color: #5C7CFA !important;
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
  text-align: center;
  -ms-display: flex;
  display: flex;
  align-items: center;
  justify-content: center;
}

.wish{
  color: #C50707 !important;
}

#toast, #toast-cart{
  padding: 10px;
  padding-left: 5px;
  position: fixed;
  width: 230px;
  height: 50px;
  top: 0;
  left: 80%;
  transform:translate(-50%);
  background-color: #EFF2FF !important;
  color: #76777E !important;
  padding: 1px;
  border-radius: 8px;
  text-align:center;
  z-index: 1;
  box-shadow: 0 0 20px rgba(0,0,0,0.3);
  visibility: hidden;
  opacity: 0;
  -ms-display: flex;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
}
#toast.show, #toast-cart.show{
  visibility:visible;
  animation:fadeInOut 3s;
}

@keyframes fadeInOut{
  5%,95%{opacity:1;top:50px}
  15%,85%{opacity:1;top:30px}
}

a{
  z-index: -1;
}
            </style>
                    <link rel="stylesheet" href="css/header.css">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    </head>
    <body>
    <?php require "controllers/includes/header.php" ?>
    <div id="toast"></div>
<div id="toast-cart"></div>
<div class="container">
  <h1 align="center">What are you looking for?</h1>
  <hr>
  <br>
  <div class="row">
  <div class="col-lg-4">
    <div class="card" style="width: 18rem;" onclick="redirectTo('pants')">
        <img onclick="redirectTo('pants')" src="https://images.unsplash.com/photo-1473966968600-fa801b869a1a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80   " class="first-image">
        <div class="card-body">
        <center>
            <a href="products.php?cat='pants'"><h5 class="card-title">Pants</h5></a>
        </center>
  </div>
</div>
</div>
      <div class="col-lg-4">
    <div class="card" style="width: 18rem;"  onclick="redirectTo('tshirt')">
      <span id="heart-second" value="So" class="heart"><i onclick="wishList()" class="fas fa-heart"></i></span>
  <img src="https://images.unsplash.com/photo-1549062572-544a64fb0c56?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="first-image">
  <div class="card-body">
    <center>
    <a href="products.php?cat='tshirt'"><h5 class="card-title">T-shirt</h5></a>
    </center>
  </div>
</div>
</div>
    <div class="col-lg-4">
    <div class="card" style="width: 18rem;"  onclick="redirectTo('shoes')">
      <span id="heart-third" class="heart"><i onclick="wishList()" class="fas fa-heart"></i></span>
  <img src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=398&q=80" class="first-image">
  <div class="card-body">
    <center>
    <a href="products.php?cat='shoes'"><h5 class="card-title">shoes</h5></a>
    </center>
  </div>
</div>
</div>
  </div>
</div>
<script>
    // function redirectTo(cat){
    //     console.log("clicked");
    //     var xmlhttp = new XMLHttpRequest();
    //     xmlhttp.onreadystatechange = function () {
    //         if (this.readyState == 4 && this.status == 200) {
    //             var myObj = JSON.parse(this.responseText);
    //             console.log(myObj[0]);
    //             document.getElementsByTagName("body").innerHTML = myObj[0];
                
    //         }
    //     };
    //     xmlhttp.open("GET", "products.php?cat=" + cat, true);
    //     xmlhttp.send();
    // }
    </script>
    </body>
</html>