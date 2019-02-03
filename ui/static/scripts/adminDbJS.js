 var shoprid=-1;

 function addShop(){

  var uid=sessionStorage.getItem('uid');

  var signform=document.getElementById("addShop");

  var rname=signform.rname.value;
  var remail=signform.remail.value;
//  alert(email);
  var rdesc=signform.rdesc.value;
  var rphno=signform.rphno.value;
  
  var rno=signform.rno.value;
  var rstreet=signform.rstreet.value;
  var rarea=signform.rarea.value;
  var rcity=signform.rcity.value;
  var rpin=signform.rpin.value;


  $.ajax({

            url: "http://localhost:5555/addShop",
            data:JSON.stringify({'uid':uid,"rname":rname,'remail':remail,'rdesc':rdesc,'rphno':rphno,'rno':rno,'rstreet':rstreet,'rarea':rarea,'rcity':rcity,'rpin':rpin}),
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

        $("#addShop").trigger("reset")
return false;

}

function showShops(){

  hide();
  var div=document.getElementById("shopscontainer");
div.classList.remove("hide");

   var uid=sessionStorage.getItem('uid');
   var url="http://localhost:5555/admin/"+uid+"/shops";

$.ajax({
           url:url,
           contentType: "application/json",

           headers: { 'Access-Control-Allow-Origin': '*' },
           type: 'GET',
           crossDomain: true,
           dataType: 'json',
           success: function(result) {
           console.log(result);
           var output = " ";
           for(var i in result["result"])
                   {
                     output+='<div class="content">';
                     output += "<p><h2>" + result['result'][i].rname + "</h2></p>";
                     output+="<p><h3>" + result['result'][i].description + "</h3></p>";
                     output+="<p><h4>" + result['result'][i].remail + "</h4></p>";  
                     output+="<p><h4>" + result['result'][i].rphno + "</h4></p>";
                     output+="<p><h5>" + result['result'][i].rno + ",";
                     output+=result['result'][i].rstreet +result['result'][i].rarea +","+result['result'][i].rcity + ",</h5></p>";
                     output+="<p><h5>" + result['result'][i].rzip ;
                     output+="<p><button data-shopid="+result['result'][i].rid+" onclick='displayform(this)'>Add</button> ";
   output +="<p><button data-shopid="+result['result'][i].rid+" onclick='editDetails()'>Edit</button> "+
                              "  <button  data-shopid='"+result['result'][i].rid+"' data-addressid='"+result['result'][i].aid+"' onclick='deleteShop(this)'>Delete</button></p>";
                     output+='</div>';
                   }
                   $('#showShops').html(output);

           }
        });
}

var contentlistner = document.getElementsByClassName("content");


function displayform(a){

   hide();

  var shopid=$(a).attr("data-shopid");

  console.log("iffffDISP",shopid);

  shoprid=shopid;

  var div=document.getElementById("addVehicleForm");

  var shopdiv=document.getElementById("shopscontainer");

  hide();

  div.classList.remove("hide");

  //shopdiv.style.display="none";

 // div.style.display="block";


 // addVehicle(shopid);
  
}

function deleteShop(a){

  //console.log(a)
  var addressid=$(a).attr("data-addressid");
  var shopid=$(a).attr("data-shopid");
  //console.log(addressid,shopid);
  //alert(shopid)

  //salert(shopid);

  $.ajax({
            url: "http://localhost:5555/deleteShop/"+shopid+"/"+addressid,
            data:JSON.stringify({}),
            contentType: "application/json",
            
            headers: { 'Access-Control-Allow-Origin': '*' },
            type: 'DELETE',
            crossDomain: true,
            dataType: 'json',
                     }) .done(function (json){
                      console.log(json)
                      if(json["message"]=="success"){
                        alert("Success")
                        showShops();
                      }
                      else{
                        alert("Error")
                      }
            
        }).fail(function(xhr,status,errorThrow){
          console.log('error'+errorThrow)
        });
}

function addVehicle(){

 if(shoprid==-1){

  alert("error");
  return;

 }

  //var rid=rid;

  var uid=sessionStorage.getItem('uid');

  var vehicleform=document.getElementById("addVehicle");

  var vno=vehicleform.vno.value;

  var vavail=vehicleform.vavail.value;

  var vtype=vehicleform.vtype.value;

  var vrent=vehicleform.vrent.value;

  //desc
  
  var vname=vehicleform.vname.value;

  var vman=vehicleform.vman.value;

  var vcolor=vehicleform.vcolor.value;

  var vmode=vehicleform.vmode.value;

  var vcc=vehicleform.vcc.value;


  $.ajax({

            url: "http://localhost:5555/addVehicle",
            data:JSON.stringify({"rid":shoprid,"uid":uid,"vno":vno,'vavail':vavail,'vtype':vtype,
              'vrent':vrent,'vname':vname,'vman':vman,'vcolor':vcolor,'vmode':vmode,'vcc':vcc}),
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

        //$("#addVehicle").trigger("reset")
return false;

}

function hide(){

   var form=document.getElementById("addVehicleForm");

   form.classList.add("hide");

   var shopscard=document.getElementById("shopscontainer");

   //console.log(shopscard);


    console.log("IFFFFF",shopscard);
   shopscard.classList.add("hide");



}