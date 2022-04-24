

<!-- // $greeting = 'Hello';

// echo $greeting;
// echo '\n';

// $name = "Jane";

// echo "Hello there, $name"; -->



<h1>Hello Jane</h1>
<h1>
    <?php
        $greeting = 'Hello';
        $name = htmlspecialchars($_GET['name']);
        echo $greeting . ' ' . $name;
    ?>
</h1>