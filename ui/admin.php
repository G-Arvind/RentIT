<html>
<head>
<title>Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="./static/scripts/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./static/scripts/adminDbJS.js"></script>
<script type="text/javascript">
	function getval(){
    // if($_SESSION["uid"]==null){
    //    window.location="home.php"; 
    // }
    // echo("Session value : ". $uid);
	// 	 if(sessionStorage.getItem('username')==null&&sessionStorage.getItem('password')==null){
 //             window.location="home.php"; 
 // }
 if (sessionStorage.getItem('username')==null) {window.location="home.php"; }

}
</script>
<style>
.vertical-menu {
	margin-left: 0%;
	background-color: grey;
	font-family: arial;
  width: 200px; /* Set a width if you like */
  height: 900px;
}

.vertical-menu a {
  background-color: grey; /* Grey background color */
  color: black; /* Black text color */
  display: block; /* Make the links appear below each other */
  padding: 22px; /* Add some padding */
  text-decoration: none; /* Remove underline from links */
}

.vertical-menu a:hover {
  background-color: #ccc; /* Dark grey background on mouse-over */
}

.vertical-menu a.active {
  background-color: black; /* Add a green color to the "active/current" link */
  color: white;
}
#addShopForm {
  display: none;
}
#addShopForm:target {
  position: absolute;
  margin-left: 700px;
  display: table;
}
#showShops {
  display: none;
}
#showShops:target {
  display: flex;
  flex-wrap: wrap;
  position: absolute;
  top:5%;
  left: 12%;
  background: grey;
  width: 80%;
  height: 90vh;
  align-content: flex-start;
}
.content{
  padding: 10px;
  width: 20%;
  height: 40%;
  border: 5px solid grey;
  background: white;
  box-sizing: border-box;
}
#addVehicleForm {
  display: none;
}
#addVehicleForm:target {
  position: absolute;
  margin-top: -200px; 
  margin-left: 700px;
  display: table;
}
</style>
</head>

<body onload="getval()">

<div class="vertical-menu">
  <a href="#" class="active">Home</a>

  <a href="#addShopForm">Add Shop</a>
  <div id="addShopForm">

    <center>

         <form id="addShop" onsubmit="event.preventDefault(); addShop()">
                    Shop Name:<br>
                    <input type="text" id="rname" name="rname"><br><br>
     
                    Shop Email:<br>
                    <input type="text" id="remail" name="remail"><br><br>

                    Shop Phone:<br>
                    <input type="text" id="rphno" name="rphno"><br><br>
                    
                    Shop Description:<br>
                    <input type="text" id="rdesc" name="rdesc"><br><br>

                    Shop Number:<br>
                    <input type="text" id="rno" name="rno"><br><br>

                    Shop Street:<br>
                    <input type="text" id="rstreet" name="rstreet"><br><br>

                    Shop Area:<br>
                    <input type="text" id="rarea" name="rarea"><br><br>

                    Shop City:<br>
                    <input type="text" id="rcity" name="rcity"><br><br>

                    Shop Pincode:<br>
                    <input type="text" id="rpin" name="rpin"><br><br>



 
                    <input type="submit" class="btn btn-danger"  value="Add Shop">

                    </form>

                    </center>
  
</div>


  <a href="#showShops" onclick="showShops()">Show shops</a>
  <div id="showShops">
    <!-- <center>
      <h1>hello</h1>
    </center>
     -->
  </div>


  <a href="#addVehicleForm">Add Vehicle</a>
  
  <div id="addVehicleForm">

    <center>

         <form id="addVehicle" onsubmit="event.preventDefault(); addVehicle()">
                    Vehicle Number:<br>
                    <input type="text" id="vno" name="vno"><br><br>
     
                    Vehicle Pic:<br>
                    <input type="file" accept="image/*" id="vpic" name="vpic"><br><br>

                    Vehicle Availability:<br>
                    <input type="text" id="vavail" name="vavail"><br><br>
                    
                    Vehicle Type(Car/Bike):<br>
                    <input type="text" id="vtype" name="vtype"><br><br>

                    Vehicle Rent:<br>
                    <input type="text" id="vrent" name="vrent"><br><br>

                    <!--vehicle desc-->
                    Vehicle Name:<br>
                    <input type="text" id="vname" name="vname"><br><br>

                    Vehicle Manufacturer:<br>
                    <input type="text" id="vman" name="vman"><br><br>

                    Vehicle Color:<br>
                    <input type="text" id="vcolor" name="vcolor"><br><br>

                    Vehicle Mode(Auto/Manual):<br>
                    <input type="text" id="vmode" name="vmode"><br><br>

                    Vehicle CC(Displacement):<br>
                    <input type="text" id="vcc" name="vcc"><br><br>
 
                    <input type="submit" class="btn btn-danger"  value="Add Vehicle">

                    </form>

                    </center>
  
</div>

  <a href="#">Show Vehicles</a>
  <a href="#">Log out</a>
  
</div>
</body>
</html>
