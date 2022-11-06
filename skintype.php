<?php
$type='oily';
setcookie("skinType",$type);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="">
   <fieldset>
   <legend>Based on your skintype, what kind of cleanser that you need?</legend>  
   <label for="foam"> Foam cleansers</label>
   <input type="radio" name="cleansers" id="foam" value="foam">
   <label for="cream"> Cream cleansers</label>
   <input type="radio" name="cleansers" id="cream" value="cream">
   <label for="gel"> Gel cleansers</label>
   <input type="radio" name="cleansers" id="gel" value="gel">
   <input type="submit" value="Send My Answer">
    </fieldset>
   
   </form>
  
</body>
</html>