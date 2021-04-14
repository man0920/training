    <?php  
    class classobj  
    {  
            private $a= "Hello Classes and Objects!";  
            public function display()  
            {  
            echo $this->a;  
            }  
    }  
    $obj = new classobj();  
        $obj->display();  
    ?>  <br>
	    <?php  
        class constructor  
        {  
            public function __construct()  
            {  
                echo "Hello constructor!";  
            }  
        }  
        $obj = new constructor();  
    ?>  <br>
	    <?php  
        class destructor  
        {  
            public function destructor()  
            {  
                echo "Hello destructor";  
            }  
        }  
          
        class destructor1 extends destructor  
        {  
            public function __construct()  
            {  
                echo parent::destructor();
				echo "<br>";				
                echo "Hello destructor1";  
            }  
            public function __destruct()  
            {  echo "<br>";
                echo "Destroy";  
            }  
        }  
        $obj= new destructor1();  
    ?>  