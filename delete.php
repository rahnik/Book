<?php

require_once 'autoload.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$bookAuthors = BookAuthor::findAllByBookId($id);

foreach ($bookAuthors as $o){
    $o->delete();
}

$book = Book::findById($id);
$book->delete();

header('Location: index.php');
exit;