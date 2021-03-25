<html>
<head>
<title>Even Odd</title>
</head>	
    <body style="text-align:center;"> 
<h1>To check whether the number is odd or even?</h1>	
    <form action="" method="post">
        <h2>Enter a number!</h2>
        <input type="number" name="number"> <br><br>
<input type="reset" value="RESET">	
<a href="">RESET</a>		
<button type="submit">
		SUBMIT</button>
    </form>  
    
    <?php   
        if($_POST){  
            $number = $_POST['number'];   
            if(($number % 2) == 0){  
                echo "$number is an Even number";  
            }else{  
                echo "$number is Odd number";  
            }  
        }  
    ?>  </body>  
    </html>  