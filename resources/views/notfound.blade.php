<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>404 Error Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta https-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="style.css" />
  <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet">
  {{-- <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
</head>
<style>
  
.page_404{ padding:40px 0; background:#fff; min-height: 100vh; display: flex; flex-direction: column; justify-content: center; align-content: center}

.page_404  img{ width:100%;}

.four_zero_four_bg{
 
 background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
 background-repeat: no-repeat;
    height: 400px;
    background-position: center;
 }
 
 
 .four_zero_four_bg h1{
 font-size:80px;
 }
 
  .four_zero_four_bg h3{
       font-size:80px;
       }
       
       .link_404{      
  color: #fff!important;
    padding: 10px 20px;
    background: #39ac31;
    margin: 20px 0;
    display: inline-block;}
  .contant_box_404{ margin-top:-50px;}
.container {max-width: 1200px; margin:0  auto;}
</style>
<body>

    <section class="page_404">
        <div class="container">
          <div class="row"> 
          <div class="col-sm-12 ">
          <div class="col-sm-10 mx-auto text-center">
          <div class="four_zero_four_bg">
            <h1 class="text-center ">404</h1>
          
          
          </div>
          
          <div class="contant_box_404">
          <h3 class="h2">
          Look like you're lost
          </h3>
          
          <p>the page you are looking for not avaible!</p>
          
          <a href="<?php echo url('/'); ?>" class="link_404">Go to Home</a>
        </div>
          </div>
          </div>
          </div>
        </div>
      </section>
  
</body>
</html>