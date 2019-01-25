function search(){

  var key=$('#key').val();
  var tkey=key.toLowerCase();


$.ajax({

            url: "http://localhost:5555/search",
            data:JSON.stringify({"city":key}),
            contentType: "application/json",
            
            headers: { 'Access-Control-Allow-Origin': '*' },
            type: 'POST',
            crossDomain: true,
            dataType: 'json',
                     }) .done(function (json){
            
        }).fail(function(xhr,status,errorThrow){
          console.log('error'+errorThrow)
        });
  //alert(tkey);

}
function login(){


 // var logform=document.getElementById("logform");
 // var email=logform.email.value;
 // var pass=logform.pass.value;

   var email=$('#email').val();
   var pass=$('#pass').val();


  $.ajax({

            url: "http://localhost:5555/login",
            data:JSON.stringify({"username":email,'password':pass}),
            contentType: "application/json",
            
            headers: { 'Access-Control-Allow-Origin': '*' },
            type: 'POST',
            crossDomain: true,
            dataType: 'json',
                     }) .done(function (json){
                     	console.log(json)
                     	if(json["response"]==1){
                     		//alert("Success")
                     		//alert("test"+json["type"])
                     		if(json["type"]=="retail"){

                          var uid=json["uid"];
                         // alert("id"+$uid)

            
                     		sessionStorage.setItem('username',email);
                     		sessionStorage.setItem('password',pass);
                         sessionStorage.setItem('uid',uid);
                     		window.location="admin.php";

                     	}
                     	else{
                            //alert("success")
                            window.location="user.php";
                     	}
                     	}
                     	else{
                     		alert("Error")
                     	}
            
        }).fail(function(xhr,status,errorThrow){
          console.log('error'+errorThrow)
        });


  //alert(email);
}
function signup(){

  var signform=document.getElementById("signform");
  var email=signform.email.value;
//  alert(email);
  var pass=signform.pass.value;
  var fname=signform.fname.value;
  var phno=signform.phno.value; 
  var type=signform.g1.value;

  $.ajax({

            url: "http://localhost:5555/signup",
            data:JSON.stringify({"username":email,'password':pass,'fname':fname,'phno':phno,'type':type}),
            contentType: "application/json",
            
            headers: { 'Access-Control-Allow-Origin': '*' },
            type: 'POST',
            crossDomain: true,
            dataType: 'json',
                     }) .done(function (json){
                     	console.log(json)
                     	if(json["message"]=="success"){
                     		alert("Success")
                     	}
                     	else{
                     		alert("Error")
                     	}
            
        }).fail(function(xhr,status,errorThrow){
          console.log('error'+errorThrow)
        });
return false;

}
