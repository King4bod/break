

<?php
// Fetch qurai all *

$conn = new mysqli('localhost','root','','mydatabase');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $records = mysqli_query($conn,"select * from add_resravtion"); // fetch data from database
        while($data = mysqli_fetch_array($records))
      {   ?>
      <div class="col">
        <div class="card h-100 bg-dark text-white " >
          <img src="..\image\b2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">New Resrvation</h5>
            <p class="card-text">  <?php
        echo "id=";
        echo $data[0].'<br>'  ;
        echo "Break name :";
        echo $data[1].'<br>';
        echo "Location ";
        echo $data[2].'<br>';
        echo "Price :"; 
        echo $data[3].'<br>';
        echo "phone number :" ;
        echo $data[4].'<br>'; 
       ?> </p> 
      <a href="#" class="btn btn-primary">Go somewhere</a>

       <?php
      }

    }
?>