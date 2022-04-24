<head>
    <meta charset="UFT-8">

    <title>Document</title>

    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>

</head>

<body>
<ul>
        <?php
        
        foreach($animals as $animal) {
            echo "<li>$animal</li>";
        }

        ?>


</ul>

<br>

<ul>
    <?php foreach ($animals as $animal) : ?>
        <li>I like <?= $animal ?></li>
    <?php endforeach; ?>
</ul>


</body>