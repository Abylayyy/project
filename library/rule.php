<?php
	require_once('connect.php')
?>
<html>
<head>
<title>Add books</title>
<?php
  include("data.php");
 ?>
 <link href="style2.css" rel="stylesheet" media="screen" type="text/css" />
</head>
<body>
<div class="continent">
	<?php
		if (isset($_POST['button'])) {

			if (!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['file']) && !empty($_POST['isbn']) && !empty($_POST['category']))
			{
				$title = $_POST['title'];
				$author = $_POST['author'];
				$file = $_POST['file'];
				$isbn = $_POST['isbn'];
				$category = $_POST['category'];

				$query = mysql_query("SELECT * FROM books WHERE title ='".$title."'");
				$numrows = mysql_num_rows($query);

			if ($numrows == 0) {
				$sql = "INSERT INTO books(title, author, cover, isbn, category) VALUES('$title','$author','$file','$isbn','$category')";
				$result = mysql_query($sql);

			if($result){
				 $message = "Book is added to database!";
				}

			else {
				 $message = "We can't paste an information!!!";
				}
			}
			else {
				 $message = "The book is already added, try another one!!!";
				}
			}
			else {
				 $message = "All fields must be filled!!!";
		}
	}
	?>
  <div id="five">

		<?php
		if (!empty($message)) {
			echo "<p class=\"false\">" . "MESSAGE: ". $message . "</p>";
		}
		?>

  <div class="adbuk">
    <span id="hol" style="font-family:MV Boli;font-size:18px;font-weight:bold;">Add book to database</span>
  <p><br><hr></p>

  <form action="rule.php" method="post">
  <p><label for="title" style="padding-left:55px;font-style:italic;font-size:17px;font-weight:bold;">Title
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" size="20" name="title" style="height:25px;border-radius:5px;border: 1px solid grey;"></label>
  <p>
    <label for="autor" style="padding-left:55px;font-style:italic;font-size:15px;font-weight:bold;">Author &nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="author" style="padding-left:22px;font-style:italic;font-size:15px;font-weight:bold;">
        <option selected="selected">Select author</option>
        <option>Mukhtar Auezov</option>
        <option>Abay Kunanbaev</option>
        <option>William Sheakspear</option>
				<option>Mukhtar Shahanov</option>
				<option>Magzhan Jumabaev</option>
				<option>A.Conan Doile</option>
				<option>A.S.Pushkin</option>
    </select>
  </label>
  </p>
  <p>
    <label for="file" style="padding-left:55px;font-style:italic;font-size:15px;font-weight:bold;">Book
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="file" name="file" id="file" size="25" accept="application/pdf,image/jpeg,image/gif,application/msword">
    </label>
  <p>
    <label for="id" style="padding-left:55px;font-style:italic;font-size:15px;font-weight:bold;">ISBN
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" size="20" name="isbn" style="height:25px;border-radius:5px;border: 1px solid grey;"></label>
  <p>
    <label for="category" style="padding-left:55px;font-style:italic;font-size:15px;font-weight:bold;">Category
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select style="padding-left:20px;font-style:italic;font-size:15px;font-weight:bold;width:175px;" name="category">
        <option selected="selected">Select Category</option>
        <option>Literature</option>
        <option>History</option>
        <option>Engineering</option>
        <option>Sciense</option>
				<option>Philology</option>
				<option>Law</option>
				<option>Adventure</option>
    </select>
    </label>
    <br><br>
		<center>
			<input type="submit" class="button" name = "button" size="20" value="Add book"
			style="width:175px;height:30px;margin-left:75px;" <?php if ($count == 0) echo 'disabled="disabled"' ?> />
		</center>
</form>
  </div>
  </div>
  </div>
</body>
</html>
