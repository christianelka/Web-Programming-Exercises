<html>
 	<head>Headings</head>
 	<body>
 	<?php
 		$i=1;
 		do 
 		{
 			if ($i % 2 == 0){ 
			    echo "<h".$i." style='color: red'>Heading ".$i."</h".$i.">";
			}else {
			    echo "<h".$i." style='color: blue'>Heading ".$i."</h".$i.">";
			}
			$i++;
 		} while($i <= 6)
 	?>
 	</body>
</html>
