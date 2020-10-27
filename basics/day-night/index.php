<?php 
  date_default_timezone_set('Asia/Kolkata');
  // if(time() >= strtotime("18:00:00")) {
  //   $status = "night";
  // }
  // else{
  //   $status = "day";
  // }
  $status = (time() >= strtotime("19:00:00")) ? "night" :  "day" ;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day/Night Theme</title>
    <style>

      html, body{
        margin: 0;
        padding: 0;
      }

      body{
        min-height: 100vh; 
      }

      h1, h2{
        margin: 0;
      }
      .bg{
        min-height: 100vh; 
        background-position: bottom center;
        background-size: cover;
        background-repeat: no-repeat;
      }

      .bg.night{
        background-image: url('images/night.png');
      }

      .bg.day{
        background-image: url('images/day.png');
      }

      .title{
        text-align: center;
        padding-top: 200px;
      }
      .date{
        text-align: center;
        padding-top: 20px;
      }

      .night .title,
      .night .date{
        color: white;
      }

      .day .title,
      .day .date{
        color: black;
      }
    </style>
  </head>
  <body>
    <div class="bg <?php echo $status; ?>">
      <h1 class="title"><?php echo ucfirst($status); ?>!</h1>
      <h2 class="date"><?php echo date("l jS \of F Y h:i:s A"); ?></h2>
    </div>
  </body>
</html>