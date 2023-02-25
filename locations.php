<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slide Show</title>
    
    
    <style>
*{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}
.container {
    position: relative;
    background: #aad5f6;
}
.slide-1 {
    background: url('./img/MG_0275-EDLR1600P.jpg');
}

.slide-2 {
    background: url('./img/ski1.jpg');
}
.slide-3 {
    background: url('./img/ski2.jpg');
}
.slide-4 {
    background: url('./img/ski3.jpg');
}

.slide {
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
    position: relative;
    overflow-x: hidden;
}
.caption {
    background: rgb(0 0 0 / 17%);
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding: 40px 0px;
}
.caption h3 {
    color: #fff;
    text-align: center;
    font-size: 50px;
    padding: 18px;
    letter-spacing: 4px;
    font-style: italic;
    text-transform: uppercase;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: light;
}
.caption p {
    max-width: 600px;
    width: 90%;
    margin: 0px auto;
    color: #fff;
    text-align: center;
    font-size: 18px;
    line-height: 1.5em;
}
.arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    z-index: 100;
    background: rgba(0, 0, 0, .1);
    border-radius: 50%;
    transform: background 500ms;
}
.arrow img {
    width: 50px;
}
.arrow:hover {
    background: rgba(0, 0, 0, .4);
}
.l {
    left: 0;
}
.r {
    right: 0;
}



.navbar{
  color: black;
  width: 100%;
  margin: auto;
  padding: 15px 0;
  display: flex;
  align-items: center;
  justify-content:space-between;   
  background-color: rgba(14, 13, 13, 0.3);
  
}

   .name{
    color: #fff;
    font-size: 25px;
    font-family:sans-serif;
    cursor: none;
    font-weight: bold;
   }
  
   .navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
   }
   .navbar ul li a{
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    letter-spacing: 3px;
   }
   .navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #005f96;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}
.navbar ul li:hover::after{
    width: 100%;
    transition: 0.5s;

}

.logo {
    width: 5%;
    padding-left: 50px;
    padding-top: -50px;
}

    </style>
</head>
<body>
  
    <div class="container">
        <div class="arrow l" onclick="prev()">
            <img src="img/l.png" alt="l">
        </div>    

        <div class="slide slide-1">
          <div class="navbar">
          <img class="logo" src="./img/logo-alpine.png" alt="">
            <ul>
                
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="locations.php">Locations</a></li>
                <li><a href="./loginsystem/login_form.php">Sign In</a></li>
                <li><a href="aboutus.php">About Us</a></li>
            </ul>            
        </div>
              <div class="caption">
                  <h3>Brezovice</h3>
                  <p>Kosove - Brezovica Ski Resort</p>
              </div>
          </div>





          <div class="slide slide-2">
          <div class="navbar">
          <img class="logo" src="./img/logo-alpine.png" alt="">
            <ul>
                
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="locations.php">Locations</a></li>
                <li><a href="./loginsystem/login_form.php">Sign In</a></li>
                <li><a href="aboutus.php">About Us</a></li>
            </ul>            
        </div>
              <div class="caption">
                  <h3>Bansko</h3>
                  <p>Bulgaria - Todorska Ski Slopes</p>
              </div>
          </div>
          <div class="slide slide-3">
          <div class="navbar">
          <img class="logo" src="./img/logo-alpine.png" alt="">
            <ul>
                
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="locations.php">Locations</a></li>
                <li><a href="./loginsystem/login_form.php">Sign In</a></li>
                <li><a href="aboutus.php">About Us</a></li>
            </ul>            
        </div>
              <div class="caption">
                  <h3>Kopaonik</h3>
                  <p>Serbia - Kopaonik Ski Resort</p>
              </div>
        </div>
        <div class="slide slide-4">
        <div class="navbar">
          <img class="logo" src="./img/logo-alpine.png" alt="">
            <ul>
                
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="locations.php">Locations</a></li>
                <li><a href="./loginsystem/login_form.php">Sign In</a></li>
                <li><a href="aboutus.php">About Us</a></li>
            </ul>            
        </div>
              <div class="caption">
                  <h3>Ludlow, Vermont</h3>
                  <p>Okemo Mountain Resort</p>
              </div>
        </div>
      
       <div class="arrow r" onclick="next()">
            <img src="img/r.png" alt="r">
        </div>

        
    </div>
    

    <script>
        let slide = document.querySelectorAll('.slide');
        var current = 0;

        function cls(){
            for(let i = 0; i < slide.length; i++){
                  slide[i].style.display = 'none';
            }
        }

        function next(){
            cls();
            if(current === slide.length-1) current = -1;
            current++;

            slide[current].style.display = 'block';
            slide[current].style.opacity = 0.4;

            var x = 0.4;
            var intX = setInterval(function(){
                x+=0.1;
                slide[current].style.opacity = x;
                if(x >= 1) {
                    clearInterval(intX);
                    x = 0.4;
                }
            }, 100);

        }

        function prev(){
            cls();
            if(current === 0) current = slide.length;
            current--;

            slide[current].style.display = 'block';
            slide[current].style.opacity = 0.4;

            var x = 0.4;
            var intX = setInterval(function(){
                x+=0.1;
                slide[current].style.opacity = x;
                if(x >= 1) {
                    clearInterval(intX);
                    x = 0.4;
                }
            }, 100);

        }

        function start(){
            cls();
            slide[current].style.display = 'block';
        }
        start();
    </script>
</body>
</html>