

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpine Ski & Snowboard</title>
    
    <style>


@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    font-family: Verdana, sans-serif;
    display: grid;
    background-color: #4158D0;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0, 0, 0, 0.315)),url(./img/show.jpg);
    background-size: cover;
    align-content: center;
    min-height: 100vh;
    background-position: no-repeat;
}
section{
    min-height: 50vh;
    width: 75vw;
    margin: 0 auto;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 12px
}
.image{
    background-color: #12192c;
    display: flex;
    border-radius: 12px 0 0 12px;
}
.image img{
height:50vh;
margin:50px auto
}
.content{
   
    background-color: #0c142785;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 0  12px 12px 0;
    color: #fff;
}
.content h2{
    text-transform: uppercase;
    font-size: 36px;
    letter-spacing: 6px;
    opacity: 0.9;
    padding-top: 20px;
}
.content span{
    height: 0.5px;
    width: 80px;
    background: #777;
    margin: 30px 0;
}
.content p{
    padding-bottom: 15px;
    font-weight: 300;
    opacity: 0.7;
    width: 60%;
    text-align: center;
    margin: 0 auto;
    line-height: 1.7;
    color:#ffffff
}
.links{
    margin: 15px 0;
}
.links li{
    border: 2px solid #4158D0;
    list-style: none;
    border-radius: 5px;
    padding: 10px 15px;
    width: 160px;
    text-align: center;
}
.links li a{
    text-transform: uppercase;
    color: #fff;
    text-decoration: none;
}
.links li:hover{
    border-color: #C850C0;
}

.vertical-line{
    height: 30px;
    width: 3px;
    background: #C850C0;
    margin: 0 auto;
}
.icons{
    display: flex;
    padding: 15px 0;
}
.icons li{
    display: block;
    padding: 5px;
    margin: 5px;
}
.icons li i{
    font-size: 26px;
    opacity: 0.8;
}
.icons li i:hover{
    color: #C850C0;
    cursor: pointer;
}


/*****************/

@media(max-width: 900px){
    section{
        grid-template-columns: 1fr;
        width: 100%;
        border-radius: none;
    }
    .image{
        height: 100vh;
        border-radius: none;
    }
    .content{
        height: 170vh;
        border-radius: none;
    }
    .content h2{
        font-size: 20px;
        margin-top: 50px;
    }
    .content span{
        margin: 20px 0;
    }
    .content p{
        font-size: 14px;
    }
    .links li a{
        font-size: 14px;
    }
    .links{
        margin: 5px 0;
        padding-bottom: 10px;
    }
    .links li{
        padding: 6px 10px;
    }
    .icons li i{
        font-size: 15px;
    }
}
.credit{
    text-align: center;
    color: #000;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }
  
  .credit a{
    text-decoration: none;
    color:#000;
    font-weight: bold;
  } 




  .mySlides {display: none}
img {vertical-align: middle;
height:500px;
border-radius: 10px;
}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin:20px auto;
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width:auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius:10px;
  user-select: none;
}
.next {
  right: 0;
  border-radius: 10px;
}
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #fff;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #202124;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.credit{
    text-align: center;
    color: #202124;
    padding-top:15px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}



</style>

</head>
<body>
<section>
    

            <div class = "content">
                <h2>About Us</h2>
                <span></span>
                <p> Welcome to our ski shop! We are a group of passionate skiers who are dedicated to providing the best ski equipment
                     and accessories to our customers. Our mission is to help you have the best skiing experience possible, 
                     whether you are a seasoned pro or a beginner hitting the slopes for the first time.
                    Our shop features a wide range of ski equipment, including skis, snowboards, boots, bindings, helmets,
                    goggles, and more. <br> We carry products from some of the most well-known brands in the industry, 
                    and we are always updating our inventory with the latest and greatest gear. <br>
                    Our team is made up of experienced skiers who are passionate about the sport. 
                    
                    We are here to help you find the perfect gear to match your skill level, style, and budget. 
                    Whether you need help choosing the right ski length or figuring out which boot fits best, 
                    we are here to offer our expertise and guidance.
                    <br> At our ski shop, we believe that skiing is more than just a sport - it's a lifestyle. 
                    We want to help you make the most of your time on the mountain and enjoy the thrill of skiing to the fullest. We pride ourselves on providing exceptional customer service and making sure that our customers are satisfied with their purchases.
                   <br> Thank you for choosing our ski shop, and we look forward to helping you have an unforgettable skiing experience!</p>
                
                
                
                <ul class = "links">
                    <li><a href = "index.php">Go back home</a></li>
                </ul>
               
            </div>
        </section><br><br>
       

        <script src="script.js"></script>
</body>
</html>
