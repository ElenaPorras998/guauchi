<?php
require_once 'list.php';
require_once 'card.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        
        <link rel="stylesheet" href="card.css">
    </head>
    <body>
        <section id="cards">
            <?php
                foreach($cards as $card)
                {
                    $item= new card($card['value'], $card['type']);
                    echo $item;
                }
            ?>
    </section>
    
</body>
</html>