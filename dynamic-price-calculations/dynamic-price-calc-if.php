<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prac.php" method="post">
No. Of Books <br> <input type="text" name="text"><br><br>
<button type="submit" name="submit">Order Now</button>
    </form>
</body>
</html>
<?php
//php algorithime to allow a user order books and get the total price displayed
$copies= filter_input(INPUT_POST, "text", FILTER_SANITIZE_NUMBER_INT);

if(isset($_POST["submit"])){
    if($copies >= 20){
        echo $copies * 199;
    }
    if($copies >=10 && $copies <=19){
        echo $copies * 299;
    }

    if($copies >=5 && $copies <=9){
        echo $copies * 249;
    }
    if($copies >=1 && $copies <=4){
        echo $copies * 299;
    }

    if($copies <=0){
        echo "Invalid input";
    }
    
}

?>