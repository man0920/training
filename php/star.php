<html>
<head>
<title>Star pattern</title>
</head>
<body style="margin-left:200px;">
<h1>Star Patten in php</h1>

<h3 >Pattern 1</h3>
    <?php  
    for($i=0;$i<=10;$i++){  
    for($j=10-$i;$j>=1;$j--){  
    echo "&#9996 ";  
    }  
    echo "<br>";  
    }  
    ?>
	<h3>Pattern 2</h3>
	    <?php  
    for($i=0;$i<=10;$i++){  
    for($j=1;$j<=$i;$j++){  
    echo "&#10016 ";  
    }  
    echo "<br>";  
    }  
    ?>
	<h3>Pattern 3</h3> 
 <?php  
    for($i=0;$i<=10;$i++){  
    for($k=10;$k>=$i;$k--){  
    echo "  ";  
    }  
    for($j=1;$j<=$i;$j++){  
    echo "&#10048 ";  
    }  
    echo "<br>";  
    }  
    for($i=9;$i>=1;$i--){  
    for($k=10;$k>=$i;$k--){  
    echo "  ";  
    }  
    for($j=1;$j<=$i;$j++){  
    echo "&#10048 ";  
    }  
    echo "<br>";  
    }  
    ?><center>  <h3>Pattern 4</h3> 
	    <?php  
    for($i=1; $i<=10; $i++){   
    for($j=1; $j<=$i; $j++){   
    echo ' &#10086';   
    }  
    echo '<br>';   
    }  
    for($i=10; $i>=1; $i--){   
    for($j=1; $j<=$i; $j++){  
    echo ' &#10086 ';   
    }   
    echo '<br>';   
    }   
    ?> </center> 
	</body>
	</html>