<?php 
    $title = 'For Loop';
    include 'include/header.php'
    ?>
<body>
    <h1> FOR LOOP</h1>
    <?php
        //For Loops
        for($count = 0; $count < 10; $count++){
            echo '<p>Hello World</p>';
        }

        for($count = 0;$count<10; $count++){
            echo "<p>The Count is: $count</p>";
            
        }
    ?>
<?php require 'include/footer.php' ?>