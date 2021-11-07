<!DOCTYPE html>
<html>
  <head>
    <title>Break</title>
     <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="../css/Break2.css"> -->
    <link rel="stylesheet" href="../css/backgraund.css">
  </head>
  <body>

  <?php require "header.php" ?>

    <div class="backg">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100  bg-secondary  text-white  " >
          <img src="..\image\b1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">استراحه الماسه</h5>
            <p class="card-text">تعريف عن الاستراحه</p>
            <a href="#" class="btn btn-warning">المزيد من التفاصيل</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-secondary    text-white " >
          <img src="..\image\b2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">استراحه اليوم</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-warning">المزيد من التفاصيل</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-secondary  text-white " >
          <img src="..\image\b2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">استراحه الريف</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn btn-warning">المزيد من التفاصيل</a>
          </div>
        </div>
      </div>

            <?php include "../php/Fetch.php";?>
          

          </div>
        </div>
      </div>
    </div>
</div>
  
  </body>
</html>
