<?php
include "db.php";
$query="SELECT * FROM dbShnkr23stud2.tbl_39_books WHERE id=".$_GET['id']."";
$result=mysqli_query($connection,$query);
if(!$result)
{
   die ("DB query failed.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body id="book-body">

    <h1 id="h1-book">Book details</h1>
    <section id="book-detail">
     <?php
       $row=mysqli_fetch_assoc($result);
       echo "<section id='detail'>";
       echo "<span>name of book:</span>";
       echo "<span>".$row['name']."</span>";
       echo "<br>";
       echo "<span>category:</span>";
       echo "<span>".$row['category']."</span>";
       echo "<br>";
       echo "</section>";
       echo "<section id='images'>";
       echo "<img src='".$row['image_1']."'>";
       echo "<img src='".$row['image_2']."'>";
       echo "</section>";
       echo "</section>";
     ?>
    
</body>
<script src="js/book.js"></script>
</html>