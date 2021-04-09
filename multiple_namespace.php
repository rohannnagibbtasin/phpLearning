<?php
    namespace Product1;
        const NUM = 3.1415;
        function disp(){
            echo "Inside product1<br>";
        }
        class Laptop{
            function __construct()
            {
                echo "Inside product1<br>";
            }
        }
    namespace Product2;
    const NUM = 3.1415;
        function disp(){
            echo "Inside product2<br>";
        }
        class Laptop{
            function __construct()
            {
                echo "Inside product2<br>";
            }
        }
        
?>