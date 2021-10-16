<?php 
    $title = 'Loops';
    include 'include/header.php'
    ?>
<body>
    <h1> While Loop</h1>

    <?php
        //infinite loop
        // $grade = 0;
        // while($grade < 10){
        //     echo '<p>I am less than 10!</p>';
            
        // }
        $grade = 0;
        while($grade < 10){
            echo '<p>I am less than 10!</p>';
            $grade++;
        }
        echo 'EXIT LOOP!';
    ?>

    <h1>Do-While Loop</h1>

    <?php
        $grade = 0;
        do{
            echo '<p>I AM DO WHILE LOOP</p>';
            $grade++;
        }while($grade <10);
    ?>

<?php require 'include/footer.php' ?>