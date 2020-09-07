<?php
require_once 'models/Book.php';
require_once 'models/BookAuthor.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$bookAuthors = BookAuthor::findAllByBookId($id);

foreach ( $bookAuthors as $o ) {
    $o->delete();
}

$book = Book::findById($id);
$book->delete();

header('location: index.php');
exit;