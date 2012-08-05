<?php
//connection
   $con = mysql_connect("localhost", "MYSQL_USERNAME", "MYSQL_PASSWORD");
   mysql_select_db("MYSQL_DATABASE_NAME", $con);   
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<?php
   $query = "SELECT * FROM state";
   $result = mysql_query($query);
   ?>
 <select id="state">
 		<option selected>Select State</option>
<?php
   while($row = mysql_fetch_array($result)) {
   		echo "<option value=\"".$row['state_id']."\">";
   		echo $row['state_name'];
   		echo "</option>";
   }
  ?>
  </select>
<script>
    $(document).ready( function() {
      $("#district, #taluka, #village").attr('disabled', true);  
    });

    // Populate Districts for selected State

  	$("#state").change( function() {

      $("#taluka, #village").attr('disabled', true);

     var state_id = $(this).val();

      $.post("select_chain_server.php", { state_id: state_id }, function(data){
          var toAppend = "<option>Select District</option>";
              for(var i = 0; i < data.length; i++){
                toAppend += '<option value = \"' + data[i].district_id + '\">' + data[i].district_name + '</option>';
              }
              $("#district").empty();
              $("#district").removeAttr('disabled');
              $("#district").html(toAppend);
      }, "json");


      // Populate Talukas for selected District

      $("#district").change( function() {

        $("#village").attr('disabled', true);
     
        var district_id = $(this).val();

        $.post("select_chain_server.php", { district_id: district_id }, function(data){
            var toAppend = "<option>Select Taluka</option>";
                for(var i = 0; i < data.length; i++){
                  toAppend += '<option value = \"' + data[i].taluka_id + '\">' + data[i].taluka_name + '</option>';
                }
                $("#taluka").empty();
                $("#taluka").removeAttr('disabled');
                $("#taluka").html(toAppend);
            }, "json");

            // Populate Villages for selected Taluka

            $("#taluka").change( function() {
     
              var taluka_id = $(this).val();

              $.post("select_chain_server.php", { taluka_id: taluka_id }, function(data){
                  var toAppend = "<option>Select village</option>";
                  for(var i = 0; i < data.length; i++){
                    toAppend += '<option value = \"' + data[i].village_id + '\">' + data[i].village_name + '</option>';
                  }
                  $("#village").empty();
                  $("#village").removeAttr('disabled');
                  $("#village").html(toAppend);
                }, "json");
                
                // Display information of selected Village

                $("#village").change( function() {
                    
                    var village_id = $(this).val();
                    var village_name = $("#village option:selected").text();
                    $("p#village_details").html("village_id = "+village_id+"<br/>village_name = "+village_name);

                }); //END OF $(#village).change()
            
          }); //END OF $(#taluka).change()

      }); //END OF $(#district).change()

    }); //END OF $(#state).change()
</script>

  <select id="district"></select>
  <select id="taluka"></select>
  <select id="village"></select>
  <p id="village_details"></p>
