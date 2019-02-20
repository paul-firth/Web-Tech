<?php
    
        $emailsubject = "Sunshine Resort Contact";
        $email = "paul.firth@griffithuni.edu.au";
        $name = $_GET['name']; 
        $emailfrom = $_GET['email'];
        $phone = $_GET['phone']; 
        $comments = $_GET['comments']; 
        $emailmessage = "Form details below.\n\n";
        $emailmessage .= "First Name: ".($name)."\n";
        $emailmessage .= "Email: ".($emailfrom)."\n";
        $emailmessage .= "Telephone: ".($phone)."\n";
        $emailmessage .= "Comments: ".($comments)."\n";
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
    	         
                    <p><h1>Thank you for your Email.</h1></p> 
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