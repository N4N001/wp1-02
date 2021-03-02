<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $firstname = "Jaroslav";
    $lastname = "Kašák";
    $age = "17";
    $profession= "student";
    $city = "Kolín";
    $avatar = "parzival.jpg";
    ?>
<h1>Výpis profil</h1>
<ul>
    <li>Jméno: <?php echo $firstname; ?></li>
    <li>Příjmení: <?php echo $lastname; ?></li>
    <li>Věk: <?php echo $age; ?></li>
    <li>Profese: <?php echo $profession; ?></li>
    <li>Město bydliště: <?php echo $city; ?></li> 
    <img src="<?php echo $avatar;?>" alt="Avatar uživatele">
    




</body>
</html>