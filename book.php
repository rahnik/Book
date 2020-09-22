<?php

require_once 'autoload.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$oBook = Book::findById($id);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $oBook->title;?></h1>
    <a href="editform.php?id=<?php echo $oBook->id; ?>">Edit</a>
    <a href="delete.php?id=<?php echo $oBook->id; ?>">Delete</a>
</body>
</html>