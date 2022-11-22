<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
    setcookie("skinType", $_POST['skintype'], time()+60*60*24);
    }
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
    <form action ="skintype.php" method="post">
        <fieldset>
            <legend>Choose your skin type (test)</legend>
            <label for="oily">Oily</label>
            <input type="radio" name="skintype" id="oily" value="oily">
            <label for="normal">Normal</label>
            <input type="radio" name="skintype" id="normal" value="normal">
            <label for="dry">Dry</label>
            <input type="radio" name="skintype" id="dry" value="dry">
            
            <input type="submit" value="Send">
        </fieldset>
    </form>
    
   <form id="question_1" >
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
   <p id="result"></p>
   </form>
  <script>
    
    question_1.addEventListener('submit',function(e){
        e.preventDefault();
        <?php print "var userSkintype='".$_COOKIE['skinType']."';"?>
        var answer = document.querySelector('input[name="cleansers"]:checked').value;
        // console.log(answer);
        if(userSkintype=='oily' && answer=='foam'){
            console.log("You are right!");
            result.innerHTML=" Correct! Your skin type is oily, foam cleansers is right for you."
        }else if(userSkintype=='normal' && answer=='cream'){
            console.log("You are right!");
            result.innerHTML=" Correct! Your skin type is normal, cream cleansers is right for you."
        }else if(userSkintype=='dry' && answer=='gel'){
            console.log("You are right!");
            result.innerHTML=" Correct! Your skin type is dry, gel cleansers is right for you."
        }else{
            console.log("You are wrong!");
        }
        

    })
  </script>
</body>
</html>