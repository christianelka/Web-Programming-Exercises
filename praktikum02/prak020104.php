<html>
 	<head>Headings</head>
 	<body>
 	<?php
 		$i=1;
 		while($i <= 6){
 			if ($i % 2 == 0){ 
			    echo "<h".$i." style='color: red'>Heading ".$i."</h".$i.">";
			}else {
			    echo "<h".$i." style='color: blue'>Heading ".$i."</h".$i.">";
			}
			$i++;
 		} 		
 	?>
 	</body>
</html>
