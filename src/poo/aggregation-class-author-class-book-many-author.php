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
    private float $price;
    private array $authors = array();

    public function __construct(string $name, float $price, Author ...$authors)
    {
        $this->name = $name;
        $this->price = $price;
        $this->authors = $authors;
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

    public function getAuthors(): array
    {
        return $this->authors;
    }
}

$authors = array();
$authors[] = new Author('Adam Trachtenberg', 'adam.trachtenberg@oreilly.com');
$authors[] = new Author('David Sklar', 'david.sklar@oreilly.com');

$book = new Book('PHP Cookbook', 18.03, ...$authors);

// Print book info
println($book->getName());
println((string) $book->getPrice());
// println(strval($book->getPrice()));
// println(sprintf('%.2f', $book->getPrice()));

// Print book's authors info
$authors = $book->getAuthors();
foreach ($authors as $author) {
    println($author->getName());
    println($author->getEmail());
}

//------------------------------------------------------------------------------
// Output for PHP >=7.4.0 / PHP 8
//------------------------------------------------------------------------------
// PHP Cookbook
// 18.03
// Adam Trachtenberg
// adam.trachtenberg@oreilly.com
// David Sklar
// david.sklar@oreilly.com
//------------------------------------------------------------------------------
