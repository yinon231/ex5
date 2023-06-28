<?php
include "db.php";
$query="SELECT * FROM dbShnkr23stud2.tbl_39_books";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
<h1>Books List</h1>
<select class="form-select" aria-label="Default select example" id="select">
  <option selected value="All">choose category</option>
</select>
<br>
<div id="flexDiv">
    <?php
   
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<a class='card mb-3' id='a-link' href='book.php?id=".$row['id']."'>"; 
        echo "<section id='flex_section'>";
        echo "<img src='".$row['image_1']."' class='card-img-top'>";
        echo "<img src='".$row['image_2']."' class='card-img-top'>";
        echo "</section>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>".$row['name']."</h5>";
        echo "<p class='card-text'>".$row['category']."</p>";
        echo "</div>";
        echo "</a>";
    }
    ?>
</div>
    
</body>
<script src="js/targil5.js"></script>
</html>
<?php
mysqli_close($connection);
?>