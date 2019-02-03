<html>
<head>
    <meta charset="utf-8" />
    <script type="text/javascript" src="./static/scripts/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="notes.css" />
    <script type="text/javascript" src="./static/scripts/adminDbJS.js"></script>
    <script type="text/javascript">   
    function getval(){

  if (sessionStorage.getItem('username')==null) {window.location="home.php"; }

  hide();
}
</script>  
<style type="text/css">
    body{
        padding: 0;
        margin: 0;
        border: none;
    height: 95vh;
    width: 95vw;
}
.leftcontainer{ 
   position: absolute;
   width: 25%;
   height: 100%;
   background:#3c4554;
}
.maincontainer{
   margin-left: 25%;
   position: absolute;
   width: 75%;
   height: 100%;
   background: #3d353a;
}

#showShops{
  display: flex;
  flex-wrap: wrap;
  position: absolute;
  top:5%;
  left: 5%;
  background: transparent;
  width: 80%;
  height: 90vh;
  align-content: flex-start;
}
.content{
  padding: 10px;
  width: 30%;
  height: 45%;
  border: 5px solid grey;
  background: white;
  box-sizing: border-box;
}
ul{
    padding: 0px;
    margin: 0px;
    list-style: none;
    font-size: 30px;
    font-family: Arial, Helvetica, sans-serif;
}
li{
    margin-top: 2%;
    margin-bottom: 2%;
    border-bottom: 1px solid grey;
    color: white;
    padding: 15px 20px;
}
li:hover{
    background:#3d353a;
}
#addShopForm{
    display: none;
}
#addShopForm:target {
  font-family: arial;
  color: white;
  position: absolute;
  margin-top: 5%;
  margin-left: 30%;
  display: table;
}
form button{
    margin-top: 5%;
    color: white;
    height: 40px;
    width: 50%;
    background: red;
    margin-left: 20%;
    border: none;
    border-radius: 20px;
}

#addVehicleForm {
  font-family: arial;
  color: white;
  position: absolute;
  margin-top: 5%;
  margin-left: 30%;

}
#addVehicle{
    font-family: arial;
     margin-left: 30%;
    color: white;
    margin-top: 5%;
}
.hide{
  display: none;
}

li > a{
    margin-left: 5%;
    color: white;
    text-decoration: none;
}
</style>
</head>

<body onload="getval()">

    <div class="leftcontainer">    
    <ul id="list"> 
        <li><a href="#">Home</a></li>
        <li><a href="#addShopForm" onclick="hide()">Add Shop</a></li>
        <li><a href="#showShops" onclick="showShops()">Show shops</a></li>
        <li><a href="#">Log out</a></li>
    </ul>
    </div>

    <div class="maincontainer">

    <div id="addShopForm">

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
 
                    <button type="submit">Add Shop</buton>

                    </form>
  
</div>
  <div id="shopscontainer">
  <div id="showShops">
  </div>
</div>
  
  <div id="addVehicleForm">

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
 
                    <button type="submit">Add Vehicle</button>

                    </form>

  
</div>
  
</div>
    
</div>
    
</body>
</html>