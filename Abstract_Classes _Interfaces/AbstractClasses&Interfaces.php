<center>
     <style>
        body{
            background-color: lightcoral;
            font-size: 20px;
        }
        h1{
            background-color: cyan;
            border-radius: 10px 5px;
            width: 400px;
        }
        fieldset{
            background-color: darkgoldenrod;
        }
        legend{
            color: whitesmoke;
            font-size: 30px;
            font-family: cursive;
        }
    </style>
    <?php
echo "<h1>Abstract Class</h1>";
abstract class Book
{
    protected $title;
    protected $author;
    public function __construct($title, $author)
    {
        $this->title  = $title;
        $this->author = $author;
    }
    abstract public function showbook();
}
class LibraryBook extends Book
{
    public function showbook()
    {
        echo "<h2>Book Information</h2>";
        echo "Title: ".$this->title."<br>";
        echo "Author: ".$this->author."<br>";
    }
}
    $book = new LibraryBook("PHP Programming","Aviyaan Raj");
    $book->showbook();
?>
<hr/>
<?php
echo "<h1>interface</h1>";
interface Libraryinterface
{
    public function issueBook();
    public function returnBook();
}

class Bookclass implements Libraryinterface
{
    public function issueBook()
    {
        echo "Book Issued Successfully<br>";
    }

    public function returnBook()
    {
        echo "Book Returned Successfully<br>";
    }
}

$book = new Bookclass();

$book->issueBook();
$book->returnBook();

?>
</center>