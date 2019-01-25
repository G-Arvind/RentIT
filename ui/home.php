<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="./static/scripts/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./static/scripts/homejs.js"></script>
  <style type="text/css">
  	._dark{
  		background-color: black;
  		color: white;
  	}
  </style>
</head>
<body background="bg.jpg">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a  data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-log-in" ></span> Signup</a></li>
      <li><a  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
    </ul>
  </div>
</nav>
  

 <div class="grid" style="margin-top: 2%">


 	<center>

 		<h2 style="color: white;font-family: Arial">RentIT</h2>



      <div class="form__field" style="margin-top: 5%">
        <input type="search" name="key" id="key" placeholder="Enter city name" class="form-control" size="40" style="width: 40%;"><br>
        <button type="submit" id="search" class="btn btn-danger" onclick="search()">Search</button>
      </div>


    </center>

  </div>


  <!-- Modal0 -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background: grey">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body" style="background: grey">
        
         <center>
                    E-MAIL:<br>
                    <input type="text" id="email" name="email"><br><br>
                    PASSWORD:<br>
                    <input type="password" id="pass" name="pass"><br><br>

                    <button class="btn btn-danger" value="submit" onclick="login()">login</button>
                    </center>

      </div>
      <div class="modal-footer" style="background: grey">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal1 -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background: grey">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Signup</h4>
      </div>
      <div class="modal-body" style="background: grey">

      	<center>

      	 <form id="signform" method="POST">
                    Name:<br>
                    <input type="text" id="fname" name="fname"><br><br>
     
                    Email:<br>
                    <input type="text" id="email" name="email"><br><br>

                    Phone:<br>
                    <input type="text" id="phno" name="phno"><br><br>


                    <input type="radio" name="g1" id="cust" value="cust">Customer &emsp;
                    <input type="radio" name="g1" id="retail" value="retail">Retailer<br><br>

                   
                    password:<br>
                    <input type="password" id="pass" name="pass"><br><br>
 
                    <button class="btn btn-danger"  onclick="return signup()">signup</button>

                    </form>

                    </center>
        
         
         

      </div>
      <div class="modal-footer" style="background: grey">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



</body>
</html>
