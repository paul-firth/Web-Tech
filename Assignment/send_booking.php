<?php
    
        $emailsubject = "Sunshine Room Reservation";
        $email = "paul.firth@griffithuni.edu.au";
        $name_B = $_GET['name_B']; 
        $add_B = $_GET['add_B'];
        $email_B = $_GET['email_B'];
        $phone_B = $_GET['phone_B']; 
        $in_day_B = $_GET['in_day_B']; 
        $out_day_B = $_GET['out_day_B']; 
        $in_month_B = $_GET['in_month_B']; 
        $out_month_B = $_GET['out_month_B']; 
        $room_B = $_GET['room_B']; 
        $comments_B = $_GET['comments_B']; 
        $emailmessage = "Reservation details below.\n\n";
        $emailmessage .= "Name: ".($name_B)."\n";
        $emailmessage .= "Address: ".($add_B)."\n";
        $emailmessage .= "Email: ".($email_B)."\n";
        $emailmessage .= "Phone: ".($phone_B)."\n";
        $emailmessage .= "Check in Day: ".($in_day_B)."\n";
        $emailmessage .= "Check in Month: ".($in_month_B)."\n";
        $emailmessage .= "Check out Day: ".($out_day_B)."\n";
        $emailmessage .= "Check out Month: ".($out_month_B)."\n";
        $emailmessage .= "Apartment: ".($room_B)."\n";
        $emailmessage .= "Comments: ".($comments_B)."\n";
        $headers = 'From: '.$emailfrom."\r\n".
        'Reply-To: '.$emailfrom."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        mail($email, $emailsubject, $emailmessage, $headers);  
?>
 


<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0">
		<link rel="stylesheet" type="text/css" media="(max-device-width: 450px)" href="mobile.css" />
		<link rel="stylesheet" type="text/css" media="(min-device-width: 451px)" href="stylesheet.css" />

		
		<title>Sunshine Beach Resort </title>
	</head>
	<body>

    	<div id="header">
    	       
    	</div>
    	<nav>
    		<div id="nav">
    		
    			<ul>
    				<a href="index.html"><li>Home</li></a>
    				<a href="apartment.html"><li>Apartments</li></a>
    				<a href="resturant.html"><li>Resturant</li></a>
    				<a href="location.html"><li>Location</li></a>
    				<a href="gallery.html"><li>Photo Gallery</li></a>
    				<a href="booking1.html"><li>Booking</li></a>
    				<a href="faq1.html"><li>FAQ</li></a>
    				<a href="contact.html"><li>Contact Us</li></a>
    			</ul>
    		</div>
    	</nav>
    	
        <div id="mainbody">
            
                <div id="content">
    	         
                    <p><h1>Thank you for your Reservation.</h1></p> 
                    <p><h1>Below is a copy of your reservation.</h1></p>

                <?php
                    echo "$emailmessage";
                ?> 
        	
            <p><a href="index.html">Return to Home.</a></p>
    	           
    	 </div>
    	    
    	    
    	        <div id="sidebar">
    	           <p><a href="contact.html"><img src="phone.jpg"></a></p>
    	           <p><a href="booking1.html"><img src="chkavail.jpg"></a></p>
    	           <p><a href="contact.html"><img src="enqnow.jpg"></a></p>
    	           <p><a href="booking1.html"><img src="splpack.jpg"></a></p>
    	           <p><a href="faq1.html"><img src="FAQ.jpg"></a></p>
    	        </div>
    	       
        </div>
    	<div id="wrap">
        <div id="footer">
    	       
    	</div>	
    	</div>
  
	</body>
</html>