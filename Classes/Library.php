<?php

namespace Classes;

class Library
{
    private array $books = [];

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function removeBook(string $isbn): void
    {
        foreach ($this->books as $index => $book) {
            if ($book->getIsbn() === $isbn) {
                unset($this->books[$index]);
                echo "Book with ISBN $isbn has been removed from the library.";
                return;
            }
        }
        echo "Book with ISBN $isbn was not found in the library.";
    }

    public function listBooks(): void
    {
        foreach ($this->books as $book) {
            echo $book;
        }
    }

    public function getBooks(): array
    {
        return $this->books;
    }

    public function setBooks(array $books): void
    {
        $this->books = $books;
    }
}