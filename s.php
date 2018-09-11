
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>Image in a Circle</h2>
  <p>The w3-circle class shapes an image to a circle:</p>
  <?php
require 'connect.php';
            $s="select * from propic where name='karthik1' ";
            $res=mysqli_query($con,$s);
            while ($row=mysqli_fetch_assoc($res))
	        {
		    $messages=$row["image"];
	        }
          $filename=explode('.',$messages);
             $fileActualExt = strtolower(end($filename));
             if($fileActualExt=='pdf')
             {
              echo "<a href='$messages'>pdfg</a>";
             }
else
{


	echo "<img src='$messages' class='w3-circle' alt='Norway' style='width:10%'>";
	echo "</div>";
}
            ?>

</body>
</html> 
