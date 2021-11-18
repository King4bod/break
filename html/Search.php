<!DOCTYPE html>
<html>
  <head>
<?php
include "../html/header.php";
?>
    
    <title>
        Search
    </title>
    
    <link rel="stylesheet" href="../css/Break1.css">
      <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

	

</head>


<body>
  <h1> Search </h1>
  <article style="display: flex; justify-content: center; margin-top: 30px;"> 
 
  
  <div class="warning">
    
    <img src="../image/break 44.png" width="150px" height="150px" class="logo-icon" >
            
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

                  <select name="Search2" id="Search2">
                   <option value="go">الرياض</option>
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