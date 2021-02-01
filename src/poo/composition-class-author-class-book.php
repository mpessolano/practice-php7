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
    private array $authors = array(); // Using array to allow multiple authors

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
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

    public function addAuthor(string $name, string $email): void
    {
        $this->authors[] = new Author($name, $email);
    }

    public function getAuthors(): array
    {
        return $this->authors;
    }
}

$book = new Book('PHP Cookbook', 18.03);
$book->addAuthor('Adam Trachtenberg', 'adam.trachtenberg@oreilly.com');
$book->addAuthor('David Sklar', 'david.sklar@oreilly.com');

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
