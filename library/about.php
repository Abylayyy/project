<?php
	require_once('connect.php')
?>
<html>
<head>
<title>Add books</title>
<?php
  include("man.php");
 ?>
 <link href="style2.css" rel="stylesheet" media="screen" type="text/css">
 <script src="query.js" type="text/javascript"></script>
 <script src="jquery.js" type="text/javascript"></script>
</head>
<body>
<div class="continent">
  <div class="five">
  <center style="font-family:MV Boli;font-size:17px;font-weight:bold;">

		<?php
			if (isset($_GET['Table'])) {
				$sql="SELECT * FROM main where id = 1";
				$result=mysql_query($sql);

					while ($content=mysql_fetch_array($result)) {
						echo '
						'.$content["content"].'
						 ';
					}
			}
	?>
<a id="1" href="?Table"><div class="new"><img src="0.png" /></div></a>
  </center>
  </div>
  </div>
</body>
</html>
