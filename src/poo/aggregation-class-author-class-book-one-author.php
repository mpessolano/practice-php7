<?php
declare(strict_types=1);

require './../../vendor/autoload.php';

class Author
{
    private string $name;
    private string $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}

class Book
{
    private string $name;
    private float  $price;
    private Author $author;

    public function __construct(string $name, float $price, Author $author)
    {
        $this->name = $name;
        $this->price = $price;
        $this->author = $author;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }
}

$author = new Author('J.K. Rowling', 'jkrowling@scholastic.com');
$book = new Book('Harry Potter and the Chamber of Secrets', 12.25, $author);

// Print book info
println($book->getName());
println((string) $book->getPrice());
// println(strval($book->getPrice()));
// println(sprintf('%.2f', $book->getPrice()));

// Print book author info
println($book->getAuthor()->getName());
println($book->getAuthor()->getEmail());

//------------------------------------------------------------------------------
// Output for PHP >=7.4.0 / PHP 8
//------------------------------------------------------------------------------
// Harry Potter and the Chamber of Secrets
// 12.25
// J.K. Rowling
// jkrowling@scholastic.com
//------------------------------------------------------------------------------
