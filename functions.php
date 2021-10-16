<?php 
    $title = 'Functions';
    include 'include/header.php'
    ?>
<body>
    <h1>Functions</h1>

    <?php
        /**Defining a function */
        function writemessage(){
            echo "I am JUVI <br/>";
            echo "<hr/>";
        }

        /**Calling a function */
        writemessage();

        /**Function with parameter */
        function addFunction($num1,$num2){
            $sum= $num1 + $num2;
            echo "The sum of $num1 and $num2 is $sum <br/>";   
        }

        function changenum(&$num){
            $num =$num + 10;
        }

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        $num = 1200;
        addFunction($num,151);

        changenum($num);
        echo $num . '<br/>';

        $return_value = returnProduct(50,90);
        echo $return_value . '<br/>';

        
    
    ?>

    

<?php require 'include/footer.php' ?>