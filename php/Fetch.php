

<?php
// Fetch qurai all *

$conn = new mysqli('localhost','root','','mydatabase');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $records = mysqli_query($conn,"select * from break"); // fetch data from database
        while($data = mysqli_fetch_array($records))
      {   ?>
 
 <article style="display: flex; justify-content: center; margin-top: 30px;">
    <div class="card-deck"style="max-width: 1100px;">
    <div class="card h-100 bg-secondary  text-white " >
          <!--<img src="..\image\b2.jpg" class="card-img-top" alt="...">-->
          <?php echo "<img src='../image/".$data['image']."' style='width:645px;height:600px;' >";  ?>   

          <div class="card-body">
            <h5 class="card-title"><?php echo $data[1]; ?></h5>
          
          <p class="card-text"> <?php
        
        echo "Break name :";
        echo $data[1].'<br>';
        echo "Location ";
        echo $data[2].'<br>';
        echo "Price :"; 
        echo $data[3].'<br>';
        echo "phone number :" ;
        echo $data[4].'<br>'; 
       ?> </p> 
      <a href="#" class="btn btn-warning">Go somewhere</a>
  </article>
      
       <?php
      }

    }
?>