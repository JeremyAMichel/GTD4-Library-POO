<?php

use Classes\Library;
use Classes\Book;

require_once './Classes/Book.php';
require_once './Classes/Library.php';


$library = new Library();

$book = new Book("Test titre", "test autheur", 100, "aaa");
$book2 = new Book("Test2 titre", "test autheur", 100, "bbb");

$library->addBook($book);
$library->addBook($book2);

// $library->removeBook("aaa");

$library->listBooks();

// var_dump($library);