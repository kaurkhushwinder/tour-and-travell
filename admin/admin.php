
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
}
/* body
{
  font-family: 'Oswald', sans-serif;
  overflow: hidden;
  color: #4242424A;
} */
html::-webkit-scrollbar{
width:10px;

}
body{
  background: url(image/bg.jpeg);
  /* background-size: cover; */
    background-position: center;
  background-repeat: no-repeat;
}
header{
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  padding: 0 249px;
  background-color: red;
  /* border-bottom: 1px solid #dbdbdb; */
}
header ul li{
  display: inline-block;
  list-style: none;
  margin: 0 30px;
}
header ul li:last-child{
  margin-right:0;
}
header ul li a{
  text-decoration: none;
  color: #42424a;
  padding: 22px 0;
  display: inline-block;
  transition: all ease 0.3s;
  font-size: 18px;
}
header ul li a:hover{
  color: #ff8a00;
}
/*submenu style*/
header ul .submenu{
  position: absolute;
  width: 200px;
  background-color: white;
  box-shadow: 0 20px 45px black;
  margin-top: -50px;
  opacity: 0;
  z-index: -999;
  transition: all ease 0.9s;
}
header ul li:hover .submenu{
  z-index: 99;
  opacity: 1;
  margin-top: 0;
}
header ul .submenu li{
  margin: 0;
  width: 100%;
}
header ul .submenu li a{
  padding: 15px 20px;
  display: inline-block;
width: 100%;
}


</style>
<body>
    
   <header>
    <div class="logo">
      <a href=""></a>
    </div>
    <nav>
      <ul>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="">Add Detail</a>
          <ul class="submenu">
          <li><a href="admin.php?insert_tour_table">Add Tour</a></li>
           
            <li><a href="admin.php?insert_tour_gallery">Add Tour Gallery</a></li>
            <li><a href="admin.php?insert_cab_table">Add Cab</a></li>
            <li><a href="admin.php?insert_hotel_table">Add Hotel</a></li>
            <li><a href="admin.php?insert_hotel_gallery">Add Hotel Gallery</a></li>
          
          </ul>
        </li>
        <li><a href="">Edit Detail</a>
          <ul class="submenu">
          <li><a href="admin.php?insert_display_tour">Edit Tour</a></li>
           
            <li><a href="admin.php?insert_display_cab_table">Edit Cab</a></li>
            <li><a href="admin.php?insert_display_hotel">Edit Hotel</a></li>
            
          </ul>
        </li>
        <li><a href="">Check Booking Detail</a>
          <ul class="submenu">
          <li><a href="admin.php?insert_display_check_tour_booking">Check Tour Booking</a></li>
            <li><a href="admin.php?insert_display_payment">Check Payment</a></li>
            <li><a href="admin.php?check_cab_booking">Check Cab Booking</a></li>
            <li><a href="admin.php?insert_display_check_tour_booking">Check Hotel Booking</a></li>
           
           
             
          </ul>
        </li>
        <li><a href="">Check Request</a>
          <ul class="submenu">
          <li><a href="admin.php?insert_display_feedback">Check Feedback</a></li>
            </ul>
        </li>
        <li><a href="">Setting</a>
          <ul class="submenu">
        
            <li><a href="../user_login.php">Logout</a></li> </ul> 
          </ul>
        </li>
      </ul>
    </nav>
   </header>
  








  <!-- <header>
  <div class="logo">
    <a href="#"></a>
  </div>
    <nav>
      
        <ul >
        <li><a href="admin.php">Admin</a></li>
          <li>
            <a href="#" >Add Detail</a>
            
            <ul class="submenu">
           
            </ul>
          </li>
          <li>
            <a href="#" >Edit Detail</a>
          
            <ul class="submenu">
           </ul>
              </li>
           
          
              

              <li>
            <a href="#" >Check Booking Detail</a>
            
            <ul class="submenu">
             </li>

              <li>
            <a href="#" ></a>
           <ul class="submenu">
            </ul>
             </li>



             <li>
            <a href="#" >Setting</a>
            
            <ul class="submenu">
            
             </li>


        </ul>
     
     
    </nav>

  
   -->
<!-- php -->

<?php 
            if(isset($_GET['insert_tour_table']))
            {
              include('Add_tour.php');
            }
            if(isset($_GET['insert_tour_details']))
            {
              include('Add_tour_details.php');
            }
            if(isset($_GET['insert_tour_gallery']))
            {
                include('Add_tour_gallery.php');
            }
            
            if(isset($_GET['insert_hotel_table']))
            {
                include('Add_hotel.php');
            }
            if(isset($_GET['insert_hotel_gallery']))
            {
                include('Add_hotel_gallery.php');
            }
            
            if(isset($_GET['insert_cab_table']))
            {
                include('Add_cab.php');
            }
           
           
            if(isset($_GET['insert_display_cab_table']))
            {
                include('display_cab.php');
            }

            if(isset($_GET['insert_display_hotel']))
            {
                include('display_hotel.php');
            }
            if(isset($_GET['insert_display_tour']))
            {
                include('display_tour.php');
            }
            
            if(isset($_GET['insert_display_tour_detail']))
            {
                include('display_tour_detail.php');
            }
            if(isset($_GET['insert_display_check_tour_booking']))
            {
              include('display_check_tour_booking.php');
            }
  
            if(isset($_GET['insert_display_feedback']))
            {
              include('display_feedback.php');
            }
            if(isset($_GET['insert_display_payment']))
            {
              include('display_payment.php');
            }
            if(isset($_GET['check_cab_booking']))
            {
              include('check_cab_booking.php');
            }
            if(isset($_GET['insert_display_check_hotel_booking']))
            {
              include('display_check_hotel_booking.php');
            }
            

  
  
            ?>




</body>
</html>














