<!DOCTYPE html>
<html>    <link rel="stylesheet" href="../css/log-reg.css">

<?php  include "header.php";?>
<title>Login</title>

   <!--   <title>Login</title>
   
    Bootstrap core CSS 
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

-->


<body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script><body>
    ,<Main>
 
 
  <br>
  <br>
  <h1> Login </h1>
  <article style="display: flex; justify-content: center; margin-top: 30px;"> 
 
  
  <div class="warning">
    
    <img  src="../image/break 44.png" width="150px" height="150px" class="img" >
            
            <form action="../php/Login.php" method="post">
                <label for="email "class="form-label" >Email </label> <!--البريد الألكتوني-->
                <img  src="../image/email.png" width="30px" height="30px" class="email" >
                <input class="form-control "
                  type="text"
                 class="box"
                  id="email"
                  name="email"
                  placeholder="name@example.com"
                  />
             
                <label for="password"class="form-label" >Password </label> <!--كلمة المرور-->
                <img  src="../image/key.png" width="30px" height="30px" class="key" >
            
                <input class="form-control"
                  type="password"
                 class="box"
                  id="password"
                  name="password"
                  placeholder="password"
                  />
                 <br>
                
                 <button type="submit" class="button">submit</button>
          
                </form>
       
  
          </div>
       
      
        </article>
      </Main> 
      <br>       <br>
      <br>
      <br>
      <br>
      <br>
      <br>

<?php  include "footer.php"; ?>
      
  </body>