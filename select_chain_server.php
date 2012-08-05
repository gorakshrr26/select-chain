<?php
   //connection
   $con = mysql_connect("localhost", "MYSQL_USERNAME", "MYSQL_PASSWORD");
   mysql_select_db("MYSQL_DATABASE_NAME", $con);  

   //variables
   $requested_state = $_POST['state_id'];
   $requested_district = $_POST['district_id'];
   $requested_taluka = $_POST['taluka_id'];

   //processes
   if(isset($requested_state)) {
      $query = "SELECT * FROM district WHERE state_id = ".$requested_state;
      $result = mysql_query($query);
      $r = array();
      while($row = mysql_fetch_array($result)) {
         $r[] = array('district_id'=>$row['district_id'],'district_name'=>$row['district_name']);
         //$r[] = array($row);
      }
      echo json_encode($r);
   }
   
   if(isset($requested_district)) {
      $query = "SELECT * FROM taluka WHERE district_id = ".$requested_district;
      $result = mysql_query($query);
      $r = array();
      while($row = mysql_fetch_array($result)) {
         $r[] = array('taluka_id'=>$row['taluka_id'],'taluka_name'=>$row['taluka_name']);
      }
      echo json_encode($r);
   }

   if(isset($requested_taluka)) {
      $query = "SELECT * FROM village WHERE taluka_id = ".$requested_taluka;
      $result = mysql_query($query);
      $r = array();
      while($row = mysql_fetch_array($result)) {
         $r[] = array('village_id'=>$row['village_id'],'village_name'=>$row['village_name']);
      }
      echo json_encode($r);
   }
?>