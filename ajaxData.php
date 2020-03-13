<?php
//Include database configuration file
include('connection.php');

if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){
    //Get all district data
    $result = mysqli_query($connection, "SELECT * FROM vuoto_districts where stateid=".$_POST["state_id"]);

    //Count total number of rows

    $rowCount=mysqli_num_rows($result);
    //Display districts list
    if($rowCount > 0){
        echo '<option value="">---Select a District---</option>';
       while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
            echo '<option value="'.$row['distid'].'">'.$row['distname'].'</option>';
        }
    }else{
        echo '<option value="">District not available</option>';
    }
}

if(isset($_POST["dist_id"]) && !empty($_POST["dist_id"])){
    //Get all branch data
     $result = mysqli_query($connection, "SELECT * FROM vuoto_stations where distid=".$_POST["dist_id"]);

    //Count total number of rows
    $rowCount=mysqli_num_rows($result);

    //Display cities list
    if($rowCount > 0){
		$i=0;
         while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
		 {
			 if( $i && ($i % 3 === 0)) { echo '<div class="col-sm-12">';}
			 ?>
             <div class="col-lg-4 station_col">
  <div class="station_inner">
    <p class="stn_name"><?php echo $row["stnname"];?></p>
    <div class="gmap_div">
    <iframe class="gmap_frame" src="<?php echo $row["gmaploc"];?>" style="border:0" allowfullscreen="" width="100%" height="100%" frameborder="0"></iframe>
    <div class="overlay_div"></div>
    </div>
    <p>     
        <?php echo ($row["Address1"])?$row["Address1"]:'';?><br>
             <?php echo ($row["Address2"])?$row["Address2"]:'';?><br>
             <?php echo ($row["State"])?$row["State"]:'';?><br>
             <?php echo ($row["Pincode"])?'Pin: '.$row["Pincode"]:'';?><br>
</p>
    <p><?php echo ($row["phone1"])?'Contact No:'.$row["phone1"]:'';?></p>
    <p> <?php echo ($row["phone2"])?'Contact No:'.$row["phone2"]:'';?></p>
  </div>
</div>
            <?php /*?> <div class="col-lg-12 station_col">
                <div class="station_inner">
                	<p class="stn_name"><?php echo $row["stnname"];?>.</p>
                	<div class="gmap_div">
                        <iframe class="gmap_frame" src="<?php echo $row["gmaploc"];?>" style="border:0" allowfullscreen="" width="100%" height="100%" frameborder="0"></iframe>
                        <div class="overlay_div"></div>
                     </div>
                	 <p><?php echo $row["stnaddress"];?>.</p>
                	 <p>Contact No1: <?php echo $row["phone1"];?></p>
               		 <p>Contact No2: <?php echo $row["phone2"];?></p>
            	</div>
             </div><?php */?>
             <?php
			 if( $i && ($i % 6 === 0)) {$i=0; echo '</div>';}
			 $i++;
		 }
    }else{
        echo '<option value="">Branches not available</option>';
    }
}
?>
