<?php

namespace Classes;

use PDO;

require_once 'Library.php';

class LibraryDB extends Library
{
    private \PDO $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addBookToDB(Book $book): void
    {
        $query = 'INSERT INTO books (title, author, pages, isbn) VALUES (:title, :author, :pages, :isbn)';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            'title' => $book->getTitle(),
            'author' => $book->getAuthor(),
            'pages' => $book->getPages(),
            'isbn' => $book->getIsbn()
        ]);
    }

    public function removeBookFromDB(string $isbn): void
    {
        $query = 'DELETE FROM books WHERE isbn = :isbn';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['isbn' => $isbn]);
        echo "Book with ISBN $isbn has been removed from the database." . PHP_EOL;
    }

    public function listBooksFromDB(): void
    {
        $query = 'SELECT * FROM books';
        $stmt = $this->pdo->query($query);
        parent::setBooks($stmt->fetchAll(PDO::FETCH_ASSOC));

        // ameliorable
        foreach (parent::getBooks() as $book) {
            echo "Title: {$book['title']}, Author: {$book['author']}, Pages: {$book['pages']}, ISBN: {$book['isbn']}" . PHP_EOL;
        }

        
    }
}