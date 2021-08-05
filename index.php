<?php
declare(strict_types=1); // helps with type declarations and stricter code.
include 'includes/class-autoload.inc.php'
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$usersObj = new UsersView();
$usersObj->showUser("Hugh");

/*$usersObj2 = new UsersController();
$usersObj2->createUser("Patrick", "John");*/
?>
</body>
</html>