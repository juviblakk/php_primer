<?php 
    $title = 'Date & Time Manipulation';
    include 'include/header.php'
    ?>
<body>
    <h2>Date & Time Manipulation</h2>

    <?php

         $datenow = getdate();
        // echo "Today's Date: <br/>";
        // echo $datenow['mday'].'<br/>';
        // echo $datenow['mon'].'<br/>';
        // echo $datenow['year'].'<br/>';

        echo "Today's Date: ". $datenow['mon'] . '/' . $datenow['mday'] . '/' . $datenow['year'] . '<br/>';
        echo time(). '<br/>';

        echo date("m/d/y G.i:s<br>", time()) . '<br/>';
        echo date("j of F Y, \a\t g.i a", time());
        
    ?>
    
    <?php require 'include/footer.php' ?>