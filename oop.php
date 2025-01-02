<?php

class Book {

  // Private properties for title and available copies
  private $title;
  private $availableCopies;

  public function __construct($title, $availableCopies) {
    $this->title = $title;
    $this->availableCopies = $availableCopies;
  }

  // Getters for title and available copies
  public function getTitle() {
    return $this->title;
  }

  public function getAvailableCopies() {
    return $this->availableCopies;
  }

  // Method to borrow a book (decreases available copies)
  public function borrowBook() {
    if ($this->availableCopies > 0) {
      $this->availableCopies--;
      return true;
    } else {
      return false;
    }
  }

  // Method to return a book (increases available copies)
  public function returnBook() {
    $this->availableCopies++;
  }
}

class Member {

  // Private property for member name
  private $name;

  public function __construct($name) {
    $this->name = $name;
  }

  // Getter for member name
  public function getName() {
    return $this->name;
  }

  // Method to borrow a book (takes a Book object as argument)
  public function borrowBook(Book $book) {
    if ($book->borrowBook()) {
      return true;
    } else {
      return false;
    }
  }

  // Method to return a book (takes a Book object as argument)
  public function returnBook(Book $book) {
    $book->returnBook();
  }
}


// Usage

// Create 2 books with properties
$book1 = new Book("' The Great Gatsby '", 5);
$book2 = new Book("' To Kill a Mockingbird '", 3);

// Create 2 members with names
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies for each book
//echo "Available Copies of";
echo "Available Copies of " . $book1->getTitle() . ": " . $book1->getAvailableCopies() . "<br>";
echo "Available Copies of " . $book2->getTitle() . ": " . $book2->getAvailableCopies() . "<br>";

?>