<?php 
    $title = 'Array';
    include 'include/header.php'
    ?>
<body>
    <h1>Arrays</h1>

    <?php
        // a variable
        $num= 3;

        //array
        $numbers = array(1,2,3,4,5,6,7,8,9,10,20,21,22,23,24,25,26,27,28,29,30);

        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size=count($numbers);

        echo "<p>Array number is size:$size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }


    ?>
    
    <?php require 'include/footer.php' ?>