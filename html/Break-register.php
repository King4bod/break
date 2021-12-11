<!DOCTYPE html>
<html>  
   <link rel="stylesheet" href="../css/log-reg.css">
<?php  include "header.php";?>
<title>Register</title>

 <!--
      <title>Register</title>
    Required meta tags 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport"content="width=device-width,initial-scale=1.0"> 
  
   

   
   <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
   

    <br>
    <br>
  -->
  <body>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script><body>
      
   


   
    <h1> New Account </h1>
    <article style="display: flex; justify-content: center; margin-top: 30px;"> 
    <div class="warning">
     <!--<div class="container">--> 
  
      <form action="../php/Register.php" method="post">
       <img src="../image/break 44.png" width="150px" height="150px" class="img" >
       <br> 
       <label for="firstName"  class="form-label">  First name  </label> <!--الاسم الاول-->
                <input
           
                type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                  placeholder="your Name"
                 
                  />
               
                <label for="lastName" class="form-label">Last name</label> <!--الأسم الأخير-->
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                  placeholder="your lastName"
                  />
                
                <label for="type" class="form-label">Type</label> 
                
                <select  name ="type" class="form-select" id="floatingSelect" aria-label="Floating label select example" >
                  <option selected>Account type</option>
                  <option  value="Client">Client</option>
                  <option  value="Owner">Owner</option>
              
                </select>
            
   
                <label for="floatingSelect"  class="form-label"></label>
            
                <label for="email"  class="form-label">Email</label> <!--البريد الألكتوني-->
                <img  src="../image/email.png" width="30px" height="30px" class="email" >
                <input class="form-control"
                  type="text"
                  id="email"
                  name="email"
                  placeholder="name@example.com"
                  />
               
                

                <label for="password"  class="form-label">Password</label> <!--كلمة المرور-->
                <img  src="../image/key.png" width="30px" height="30px" class="key" >
                <input class="form-control"
                  type="password"
                  id="password"
                  name="password"
                  placeholder="password"
               
                  />
               
           
                <label for="number" class="form-label">Phone number</label> <!--رقم الجوال-->
                <img  src="../image/phone.png" width="30px" height="30px" class="phone" >
                <input class="form-control"
                  type="number"
                  id="number"
                  name="number"
                  placeholder="+966 5..."
                  />
                <br>
                <button type="submit" class="button">submit</button>

            </form> 
          </div>
          </div>

        </body>
      </article> 
      <br>       <br>
      <br>
      <br>
      <br>
      <br>
      <br>

      <?php  include "footer.php"; ?>

  </html>
