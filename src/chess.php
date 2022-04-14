<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
</head>
<body>
    <table style="width: 400px;" border="1" >
    <?php
    
    for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=black></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=white></td>";
          }
          }
          echo "</tr>";
    }
          ?>
    </table>
    
</body>
</html>