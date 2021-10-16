<?php 
    $title = 'String Manipulation';
    include 'include/header.php'
    ?>
<body>
    <h1>String Manipulation</h1>
    <?php
        //Concatenation of strings
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with rock";
        $name = "jovoni taylor";
        echo $phrase1." ".$phrase2;
        echo '<br/>';
        echo '<hr/>';

        //String Transformation
        echo ' Uppercase first letter: '.ucfirst($name).'<br/>';
        echo ' Uppercase first letter of each word: '.ucwords($name).'<br/>';
        echo ' Upper case: '.strtoupper($name).'<br/>';
        echo ' Lower case: '.strtolower("UPPERCASE to LOWERCASE").'<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a',10) .'<br/>';
        echo 'Repeat String - Nested Function: '.strtoupper(str_repeat('a',10)) .'<br/>';
        echo 'Get a Substring: ' . substr($name, 5, 5).'<br/>';

        
        echo 'Get position of string: ' .strpos($name,'j').'<br/>';

        echo 'Find Character "J": ' . strchr($name,'j').'<br/>';
        echo 'Find Character "I": ' . strchr($name,'i').'<br/>';
        echo 'Find Character "T": ' . strchr($name,'t').'<br/>';
        echo 'Find Character "R": ' . strchr($name,'r').'<br/>';

        echo 'Find Length of String: '.strlen($name) .'<br/>';
        
        echo 'Without Trim: '. "A" . "B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim("B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the left: '. "A" . ltrim("B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the right: '. "A" . rtrim("B C D ") . "E" . '<br/>';

        echo 'Replace string with another: '. str_replace("stand","sit",$phrase2). '<br/>';

    ?>
    
    <?php require 'include/footer.php' ?>