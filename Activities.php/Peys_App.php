<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css/peysapp.css">
    <title>Peys App</title>
</head>
<body>
    <h1>Peys App</h1>
    <form  method = get>
    Select photo size : <input type="range" id="ImgSize" name="ImgSize" value = "60" min="10" max="100" step="10">
    <br>
    <br>
    Select Border Color: <input type="color" id="BorderColor" name="BorderColor" value="#000000">
    <br>
    <br>
    <input type="submit" name="ProcessBtn">
    <br>
    <br>
    <?php
    if(isset($_GET['ProcessBtn'])){
         $ImageRangeSize = 60;
         $ImageRangeSize = $_GET['ImgSize'];
         $border = $_GET['BorderColor'];
     }
     ?>
  
  <div>
  <img src="Dizon.jpg" style="width: <?php echo $ImageRangeSize . '%'; ?>;border-color: <?php echo $border; ?>;border-width: 4px; border-style: solid;">
  </div>
  
   

    </form>


    <script type="text/javascript" href="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" href="js/bootstrap.js"></script>


</body>
</html>