<?php

include 'dbcon.php';

if(isset($_POST['delete'])){
	$sql="delete from record where mobile='".$_POST['phone']."'";
	if (mysqli_query($con, $sql)) {
		?>
		<script>
			alert ("Your ride has been Cancelled"); 
		</script>
		<?php
	} else {
		?>
		<script>
			alert ("No Record Found"); 
		</script>
		<?php
	}	
}



session_start();


if(!isset($_SESSION['username'])){
	header('location:signin.php');
 }


if(isset($_POST['submit'])){
	$pick = $_POST['pick'];	 	 
	$dest = $_POST['dest'];	 
	$date = $_POST['date'];	 
	$phone = $_POST['phone'];
	$time = $_POST['time'];	 

	
	$insertquery = " INSERT INTO record(pickcity, destination, date, mobile, time) values('$pick', '$dest', '$date', '$phone', '$time') ";

	$query = mysqli_query($con, $insertquery);
	

	if($query){
		?>
		<script>
			
    		alert ("Your ride has been booekd"); 
      			  
			
		</script>
		<?php
	}else{
		?>
		<script>
			alert('NOT Inserted');
		
		</script>
		<?php
	
	
	}

}
?>
 <!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<meta name="viewport" content="width=device-width, user-scalable=no"  >
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Asap&display=swap" rel="stylesheet">
	<style type="text/css">
		body{
			  padding:0px;
		      margin:0px;
		      overflow-x: hidden;

		}
		.div1{
			width: 100%;
			height: 100vh;
			background-image: url("bg3.png");

		}
		.div2{
			width: 100%;
			height: 14vh;
			position: sticky;
			top: 0;
			z-index: 1;
			background-color: black;
			opacity: 0.97;
	
			
		}
		.div3{
			width: 50%;
			height: 100%;
		
			
			float: left;
		}
		.div3 img{
			padding-top: 0px;
			padding-left: 20%;
		}
		.div4{
			width: 50%;
			height: 14vh;
			
			
			float: left;
		}
		.btn1{
			height: 40%;
			width: 17%;
			border-radius: 5px;
			background-color: #FFA000;
            margin-left: 25%;
            margin-top: 4%;
            border: none;
            float: left;
            font-size: 14px;
            color: white;
            transition: 0.4s;
            transition-width:2s;
            font-family: 'Concert One', cursive;

					}
			.btn2{
			height: 40%;
			width: 14%;
			border-radius: 5px;
			background-color: #FFA000;
            margin-top: 4%;
            margin-left: 2%;
            border: none;
            font-size: 14px;
            color: white;
             transition: 0.4s;
             transition-width:2s;
             float: left;
             font-family: 'Concert One', cursive;
					}
			.btn1:hover{
				background-color: #757575;
				height: 42%;
			}
			.btn2:hover{
				background-color: #757575;
				height: 42%;
			}
			.div4 i{
				float: left;
				color: #BDBDBD;
				margin-left: 5%;
				margin-top: 6%;
				transition: 0.3s;
				transition-width:2s;
			}
			.div4 i:hover{
                color: white;
			}
			.div5{
				height: 85.8vh;
				width: 100%;
				
				background-image: url("bg3.png");
				background-size: cover;

			}
			.div6{
                   height: 85.8vh;
                   width: 60%;
                   float: left;

			}
			.div61{
				height: 30vh;
				width: 100%;
				margin-top: 12%;
			}
			.spn1{
				color: #FFA000;
			    padding-left: 23%;
				font-size: 65px;
				font-family: 'Francois One', sans-serif;
				letter-spacing: 0.03em;
			}
			.spn2{
				color: white;
		        font-family: 'Asap', sans-serif;
				font-size: 65px;
			}
			.spn3{
				color: white;
		        font-family: 'Asap', sans-serif;
		        font-size: 30px;

			}
			.spn4{
				color: #FFA000;
				font-size: 30px;
				font-family: 'Francois One', sans-serif;
				letter-spacing: 0.08em;
			}
			.div62{
				height: 30vh;
				width: 100%;
			}
			.spn5{
				color: white;
		        font-family: 'Asap', sans-serif;
		        font-size: 20px;
		        padding-left: 28%;	

			}
			.spn6{
				color: #FFA000;
				font-size: 20px;
				font-family: 'Francois One', sans-serif;
				letter-spacing: 0.08em;
			}
			.div7{
				height: 85.8vh;
				width: 39.6%;
				float: left;
				margin-left: 35%;
			}
			.div71{
				height: 78vh;
				width: 69%;
				margin-top: 8%;
				margin-left: 8%;
				background-color: black;
				border-radius: 14px;
				opacity: 0.8;

			}
			.div711{
				height: 5vh;
				width: 100%;
				padding-top: 5%;
				float: left;
				font-size: 20px;
				color: white;
		        font-family:'Concert One', cursive;
		        border-bottom: 4px solid #FFA000;
		        opacity: 1.5;
		        font-size: 25px;
				text-align: center;

			}
			.spn7{
				margin-left: 24%;
				color: white;
			}
            input[type=date]{
            	height: 8%;
            	width: 88%;
            	margin-left: 6%;
                margin-top: 6%;
                background-color: #FFA000;
                border: none;
                border-radius: 8px;
                font-size: 25px;
                opacity: 1;
                text-align: center;	

            }
            input[type="date"]::before{
   				color: #ffffff;
   				content: attr(placeholder) ": ";
    			font-family:'Concert One', cursive;
    			color: black;
				font-size: 25px;
			}
			input[type="date"]:focus::before {
   				content: "" !important;
				   font-size: 25px;
			}
            select{
            	height: 8%;
            	width: 88%;
            	margin-left: 6%;
                margin-top: 6%;
                background-color: #FFA000;
                border: none;
                border-radius: 8px;
                font-size: 20px;
                opacity: 1	;
            }
            ::placeholder 
            {
  			color: black;
            font-family: 'Concert One', cursive;
            text-align: center;
			}
			input[type=number]{
            	height: 8%;
            	width: 88%;
            	margin-left: 6%;
                margin-top: 6%;
                background-color: #FFA000;
                border: none;
                border-radius: 8px;
                font-size: 25px;
                opacity: 1	;
            }
			input[type=text]{
            	height: 10%;
            	width: 88%;
            	margin-left: 6%;
                margin-top: 6%;
                background-color: #FFA000;
                border: none;
                border-radius: 8px;
                font-size: 25px;
                opacity: 1	;
            }
			input[type=password]{
            	height: 8%;
            	width: 88%;
            	margin-left: 6%;
                margin-top: 6%;
                background-color: #FFA000;
                border: none;
                border-radius: 8px;
                font-size: 25px;
                opacity: 1	;
            }
            input[type=time]{
            	height: 8%;
            	width: 88%;
            	margin-left: 6%;
                margin-top: 6%;
                background-color: #FFA000;
                border: none;
                border-radius: 8px;
                font-size: 25px;
                opacity: 1	;
            }
            input[type="Time"]::before{
   				color: #ffffff;
   				content: attr(placeholder) ": ";
    			font-family:'Concert One', cursive;
    			color: black;
			}
			input[type="date"]:focus::before {
   				content: "" !important;
				   font-size: 25px;
			}
          
            .btn3{
			height: 20%;
			width: 88%;
			border-radius: 5px;
			background-color: #FFA000;
            margin-left: 6%;
            margin-top: 8%;
            border: none;
            float: left;
            font-size: 25px;
            color: white;
            transition: 0.4s;
            transition-width:2s;
           font-family: 'Concert One', cursive;
           background-image: linear-gradient(to right, #B71C1C ,#FFC400);
           opacity: 1;

					}
		   .btn3:hover{
		   	 background-image: linear-gradient(to right,#FFC400  , #B71C1C);

		   }
		   .select {
  				
				  height: 8%;
				  width: 88%;
				  margin-left: 6%;
				  margin-top: 6%;
				  background-color: #FFA000;
				  border: none;
				  border-radius: 8px;
				  font-size: 25px;
				  opacity: 1	;
			  }
		   .div8 span{
		   	font-size: 25px;
		   	font-family: 'Concert One', cursive;
		   	float: right;
		   }
		   .div8 img{
                margin-top: 2%;
		   }


 @media(min-width: 360px) and (max-width: 640px) {

body,html{
  padding:0px;
  margin:0px;
  overflow-x: hidden;

}
.div1{
   width: 100%;

}
.div2{
  position: fixed;
  top: 0;
  background-color: black;
  opacity: 1;
  float: left;
  padding-top: 0%;
}
.div3{
	  width: 40%;
	  background-color:black;
	  float: left;
	  padding-top: 0%;
	  background-image: url("cabbazar.png");
	  background-size:contain;
	  background-repeat: no-repeat;
	
}
.div3 img{
  display: none;
}
.div4{
  width: 60%;
  
  background-color: black;
}
.btn1{
height: 40%;
width: 35%;
border-radius: 5px;
background-color: #FFA000;
margin-left: 12%;
margin-top: 13%;
border: none;
float: left;
font-size: 14px;
color: white;
transition: 0.4s;
transition-width:2s;
font-family: 'Concert One', cursive;

}
.div7{
  width: 90%;
  height: 60%;
  padding-top: 150px;
  background-colo:;
  margin-left: 5%;
  
}
.div71{
  margin-right: 50%;
  height: 60vh;
  width: 100%;
  margin-top: 20%;
  background-color:;
  margin-left: 0px;
}

}
		</style>
</head>


<body onload="init()">
<div class="div1">
<div class="div2">
	<div class="div3">
		<a href="index.html">	<img src="cabbazar.png" height="100%" width="120px"> </a>
	</div>
	<div class="div4">
		<a href="logout.php"> <button class="btn1">LOG OUT</button> </a>
		<a href="index.html"> <button class="btn1"> HOME</button> </a> 
		
		
	  </div>
</div>


	<div class="div7">
		<div class="div71"> 
        
		  <div class="div711" id="display"></div> </b>
		  <form action="" method="POST">
		  	
          <select class="select" required id="item1" name="pick">
             	<option value="" disabled selected hidden >ENTER PICKUPCITY</option>
             	<option value="Jaipur">Jaipur</option>
             	<option value="MountAbu">Mount Abu</option>
             </select>
             <select class="select" required id="item2" name="dest">
             	<option value="" disabled selected hidden>ENTER DESTINATION CITY</option>
             	<option value="Ahemdabad">Ahemdabad</option>
             	<option value="Jodhpur">Jodhpur</option>
             </select>
             <input type="date" name="date" min="2019-07-03" id="date" placeholder=" Date" required>
             <input type="number" name="phone" placeholder="Enter Mobile Number" id="number" required>
             <input type="time" name="time" placeholder="Enter Time" id="time" required>
			 <input type="submit" class="btn3" onclick="Getprices()" name="submit" value="BOOK">
			 <input type="submit" class="btn3" onclick="" name="delete" value="CANCEL BOOKING"> 
             
			</form>
		</div>
	</div>
</div>	
</body>

<script type="text/javascript">

function init()
    {
    	 var email = localStorage.getItem("email");
    	 document.getElementById("display").innerHTML = "Hello"+" "+email;
		 
    }

	document.querySelector("#date").valueAsDate = new Date();
    function Getprices(){
    	var a = document.getElementById('item1').value;
    	var b = document.getElementById('item2').value;
    	var c = document.getElementById('number').value;
    	var d = document.getElementById('time').value;
    	var e = document.getElementById('date').value;
    	if (a=="") {
    		alert("Please select PickupCity");
			
    	}
    	else if (b=="") {
    		alert("Please select DestinationCity");
			
    	}
        else if (c=="") {
        	alert("Please Enter Phone Number");
			
        }
        else if (d=="") {
        	alert("Please Enter Time of Your Journey");
			
        }
        if(a=="Jaipur"&& b=="Ahemdabad")
        {
        	alert("Your Cab is booked for the date " + e + " from " +a+ " to " +b+ " at " +d+" Thank you your fare is Rs.6000" );
        }
        else if (a=="MountAbu" && b=="Jodhpur") {
        	alert("Your Cab is booked for the date " + e + " from " +a+ " to " +b+ " at " +d+" Thank you  your fare is Rs.2000" );
        }
        else if (a=="Jaipur" && b=="Jodhpur") {
        	alert("Your Cab is booked for the date " + e + " from " +a+ " to " +b+ " at " +d+" Thank you your fare is Rs.3000");
        }
        else if (a=="MountAbu" && b=="Ahemdabad") {
        	alert("Your Cab is booked for the date " + e + " from " +a+ " to " +b+ " at " +d+" Thank you  your fare is Rs.2500" );
        }
    }
</script>
	
    

</html>


 
