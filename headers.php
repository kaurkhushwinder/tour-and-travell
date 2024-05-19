<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
html{
  scroll-behavior: smooth;
}
/* .nav1{
  margin-top: %;
} */
/* scrolling background color  */
.BgColour {
  color: black;
  transition: all 1s;
  background-color: #162938;
  border-bottom: 1px solid #162938;
}

/*header menu bar codding*/

header
{
z-index: 999;
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 15vh;
display: flex;
justify-content: space-between;
align-items: center;
padding: 15px 200px;
transition: 0.5s ease;
background-color: transparent;
background-color: #162938;
}


header h2{
  text-transform: uppercase;
  
 
}
.brand 

{
  color: #ffffff;
  font-size: 2.5em;
  font-weight: 900;
  margin-top: 1%;
  margin-left: -11%;
 
text-decoration: none;
}
.brand:hover{
/* background: linear-gradient(100deg,rgb(0, 139, 130),rgb(132, 213, 240)); */
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
}
/* header .navigation
{
  z-index: 999;
  display: flex;
  
 

   margin-top: 2%; 
  height: 70%;

    position: relative;
} */
header .navigation-item {
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
background-color: red;
 margin-left: 20%;
  width: 60vw;
  background-color: transparent;
}

header .navigation .navigation-item a{
  position: relative;
  text-decoration: none;
  color:#fff; 
  /* background-color: red; */
  font-size: 17px; 
}

header .navigation .navigation-item a:hover{
  background: linear-gradient(100deg,rgb(0, 139, 130),rgb(132, 213, 240));
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
}
header .navigation .navigation-item a::after{
  content: '';
  width: 0;
  height: 3px;
  position: absolute;
  bottom: -5px;
  left: 25%;
  transform: rotateX(-50%);
  background: #fff;
  transition: width 0.3s;
}
header .navigation .navigation-item a:hover::after{
  width: 50%;
  }
  
.nav{
  width: 10vw;
  height: 5vh;
  margin-top:-1%;
  margin-left: 9%;
  margin-right: -10%;
}
.nav1{
  display: none;
  width: 10vw;
  height: 5vh;
  margin-top: -9vw;
  margin-left: 96%;
}
</style>
<body>
    
  <header id="navbar">
    <h2  class="brand">Tourist</a></h2>
     
      <div class="menu-btn"></div>

      <div class="navigation">
      <div  class="navigation-item">
      <a  href="home.php">HOME</a>
      <a href="tour.php">Tour</a>
      <a href="cab_booking.php">Cabs</a>
      <a href="hotels.php">Hotel</a>
      <a href="feedback.php">Feedback</a>
      <a  href="admin_login.php">Admin</a>
     
     </div>
      </div>
     
  </header>
</body>
</html>