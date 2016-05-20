<?php
	require_once('connect.php')
?>
<html>
<head>
<title>Home</title>
<?php
	include ("index.php");
?>
<link href="stil.css" rel="stylesheet" media="screen" type="text/css">
</head>
<body>
<div class="content">

	<div class="first">
<center>
	<?php
		$sql = mysql_query("SELECT * FROM books");
		$numrows  = mysql_num_rows($sql);
	if ($numrows != 0) {

		echo "<table class=\"root\"> <tr><th>ID</th><th>TITLE</th><th>AUTHOR</th><th>COVER</th><th>ISBN</th><th>CATEGORY</th></tr>";
		while ($row=mysql_fetch_assoc($sql)) {
			echo "<tr>
							<td>".$row['id']."</td>
							<td>".$row['title']."</td>
							<td>".$row['author']."</td>
							<td><a download=\"".$row['cover']."\" href=\"".$row['cover']."\"><img src=\"".$row['cover']."\" class=\"image\" /></a></td>
							<td>".$row['isbn']."</td>
							<td>".$row['category']."</td>
							</tr>";
							"</table>";
		}
	}
	else {
		echo "<p class=\"message\">No results found!</p>";
	}
	?>
</center>
</div>
</div>
</body>
</html>
