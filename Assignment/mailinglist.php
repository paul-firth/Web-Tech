<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0">
		<link rel="stylesheet" type="text/css" media="(max-device-width: 450px)" href="mobile.css" />
		<link rel="stylesheet" type="text/css" media="(min-device-width: 451px)" href="stylesheet.css" />

		
		<title>Sunshine Beach Resort </title>
		
		
		<?php
    		require_once "queryDb.php";
    		$searchCust = $_GET['searchCust'];
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
    	           
					<form action="mailinglist.php" method="get">
          		      <fieldset id="search">
       					<p><legened><span>Search Customers</span></legened></p>
               			<label = "search">
                   		<input type="text" name="searchCust" id="searchCust"/>
                   		<input type="submit" name="search" id="search" value="Search"/>
                    	</label>
                    	<p>You may search for a user by searching by Name, Address or phone number.</p>
					</fieldset>
                 
             	</form>
             
             	<form action="mailinglistdel.php" method="get">
                 		<fieldset id="delete">
                 			<p><legened><span>Delete Customer</span></legened></p>

                 			<label = "delete">
                         	<input type="text" name="deleteCust" id="deleteCust"/>
                        	<input type="submit" name="delCust" id="delCust" value="Delete"/>
                        	
                     		</label>
                     		<p>To delete user enter their Customer ID and click delete.</p>
                     	</fieldset>
             	</form>
             
    	      	<form action="mailinglistadd.php" method="get">
                 		<fieldset id="add">
                 				<p><legened><span>Add Customer</span></legened></p>
                 				<label = "firstname"> <p>First Name <input type="text" name="name_firstCust" id="name_firstCust"/> </label></p>
                 				<label = "lastname"><p>Last Name <input type="text" name="name_lastCust" id="name_lastCust"/> </label></p>
                 				<label = "address"><p>Address <input type="text" name="addressCust" id="addressCust"/> </label></p>
                 				<label = "phnumber"><p>Phone Number <input type="text" name="phnumberCust" id="phnumberCust"/> </label></p>
                      		 	<input type="submit" name="addCust" id="addCust" value="Add Customer"/>
                 		</fieldset>
                 </form>    
             		
             		
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