<?php
//Opens DB
   class MyDB extends SQLite3
   {
      function __construct()
      {
            $this->open('1621ICT.db');
      }
   }
// Function to search customers
   function getCustomers($searchTerm = null) {
      
      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }
      if(!$searchTerm) {
         $sql ='SELECT * from CUSTOMERS;';
      } else {
         $sql ='SELECT * FROM CUSTOMERS WHERE FIRSTNAME LIKE "'.$searchTerm.'" OR LASTNAME LIKE "'.$searchTerm.'" OR ADDRESS LIKE "'.$searchTerm.'" OR PHONE  LIKE "'.$searchTerm.'"';
      }
      $ret = $db->query($sql);
      $array = [];
      if(!$ret){
        echo $db->lastErrorMsg();
        return [];
      } else {
         while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $array[] = $row;
         }
         $db->close();
         return $array;
      }
   }
   
//Function to add customers   
   function addCustomer($fname, $lname, $address, $phone) {
      
      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }

      $sql ='INSERT INTO CUSTOMERS (FIRSTNAME, LASTNAME, ADDRESS, PHONE) VALUES ("'.$fname.'", "'.$lname.'", "'.$address.'", "'.$phone.'");';
      $db->query($sql);
   }
   
// My Function Deletes customers from the DB based on their Customer ID Identifier
      function delCustomer($del) {
      
      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }
      $sql ='DELETE FROM CUSTOMERS WHERE CUSTID = ("'.$del.'");';  

      $db->query($sql);
   }
      
?>