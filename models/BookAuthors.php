<?php

require_once 'dbconnect.php';

class BookAuthors {
    public function delete () {
        global $pdo;

        $stmt = $pdo->prepare('DELETE FROM book_authors WHERE book_id=:book_id');
        $stmt->setFetchMode()
    }
}