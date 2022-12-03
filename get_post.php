<?php

if (isset($_POST['name'])) {
    $name = htmlentities($_POST['name']);
    echo $name;
    echo '<br>';
    $email = htmlentities($_POST['email']);
    echo $email;

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
    
<form method = "POST" action="get_post.php">
    <div>
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>

  <input type="submit" value="Submit">

</form>

</body>
</html>