<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0">
		<link rel="stylesheet" type="text/css" media="(max-device-width: 450px)" href="mobile.css" />
		<link rel="stylesheet" type="text/css" media="(min-device-width: 451px)" href="stylesheet.css" />

		
		<title>Sunshine Beach Resort </title>
		
		
		<?php
            require_once "queryDb.php";
            $deleteCust = $_GET['deleteCust'];
            delCustomer($deleteCust);
            $data = getCustomers($searchCust);
        ?>
    
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
    				<a href="mailinglist.php"><li>Join Mailing List</li></a>
    			</ul>
    		</div>
    	</nav>
    	
        <div id="mainbody">
            
                <div id="content">
    	         
						<p><h1>Customer Mailing List</h1></p>
		
						<table class="table">
							<thead>
	        					<th>ID Number</th>
	        					<th>First Name</th>
	       						<th>Last Name</th>
	       						<th>Address</th>
	       						<th>Phone</th>
	    					</thead>
        					<?php
               					foreach ($data as $data)
                		    	{
                    		    	echo "<tr>";
                    		    	echo "<td>" . $data["CUSTID"] . "</td>";
                    		    	echo "<td>" . $data["FIRSTNAME"] . "</td>";
                    		    	echo "<td>" . $data["LASTNAME"] . "</td>";
                    		    	echo "<td>" . $data["ADDRESS"] . "</td>";
                    		    	echo "<td>" . $data["PHONE"] . "</td>";
                    		    	echo "</tr>";
                                 }
        	                ?>
						</table>

							   
						<p><a href="mailinglist.php">Return to Mailing List</a></p>
      
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