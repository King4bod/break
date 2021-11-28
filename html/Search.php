<!DOCTYPE html>
<html>
  <head>
<?php
include "../html/header.php";
?>
    
    <title>
        Search
    </title>
    
    <link rel="stylesheet" href="../css/search.css">


      <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

	

</head>


<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script><body>
    
  

<h1> Search </h1>
  <article style="display: flex; justify-content: center; margin-top: 30px;"> 
 
  
  <div class="warning">
    
    <img src="../image/break 44.png"class="img">
            
            <form action="../php/Search.php" method="post">
                <label for="email "class="form-label">Name </label> 
                <input class="form-control"
                  type="text"
                 class="box"
                  id="Search"
                  name="Search"
                  placeholder="Search for name"
                  />
                  <br>
                
                  <label name="Search2" id ="Search2" class="form-label">Location </label> 
    <img src="../image/ico.png"  class="shr" >
   

                  <select class="form-select" name="Search2" id="Search2">
                   <option value="alriath">الرياض</option>
                   <option value="saab">جدة</option>
                   <option value="opel">الدمام</option>
                   <option value="audi">جازان</option>
                   </select>
                   <br>
                 <button type="submit" class="btn btn-warning">بحث</button>
                </form>
       
  
          </div>
        </article>      
  </body>
</html>