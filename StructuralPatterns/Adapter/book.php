<?php

"""
Convert the interface of a class into another interface clients expect.
Adapter lets classes work together that couldn't otherwise because of incompatible interfaces
"""

class Book {
	private $author;
	private $title;
	
	function __construct($author, $title){
		$this->author = $author;
		$this->title = $title;
	}
	
	function getAuthor(){
		return $this->author;
	}
	
	function getTitle(){
		return $this->title;
	}
}

class BookAdapter {
	private $book;
	
	function __construct(Book $book){
		$this->book = $book;
	}
	
	function getAuthorAndTitle(){
		return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
	}
}

// Client

$book = new Book("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");
$bookAdapter = new BookAdapter($book);
echo $bookAdapter->getAuthorAndTitle();
