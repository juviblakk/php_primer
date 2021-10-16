
    <?php 
    $title = 'index';
    include 'include/header.php'
    ?>

    <h1>HOME</h1>
    <?php
        echo 'Hello PHP';
        echo '<br/>';
        echo ' second line';
        echo '<br/>';
     ?>

     <?php
        $name = 'Jovoni Taylor';
        $age = 28;
        echo $name;
        echo '<h1> My name is: '.$name.' </h1>';
        echo '<h1> My age is: '.$age.' </h1>';
        echo " <h1> my name is: $name </h1>"
     ?>

    <button type="button" class="btn btn-dark">Click Me!</button>
    <?php require 'include/footer.php' ?>