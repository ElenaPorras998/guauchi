<?php

$faces=[
    'J'=>'jack', 
    'K'=>'king',
    'Q'=>'queen'
];

$types=['heart', 'spade', 'club', 'diamond'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card</title>

    <link rel="stylesheet" href="card.css">
</head>
<body>
    <section id="cards"></section>
    <?php foreach($types as $type):?>    
        <?php foreach($faces as $key => $face):?>
            <div class="card">
                <div class="small upper <?php echo $type?>"><p> <?php echo $key ?> </p><img class="icon" src="faces-suits/<?php echo $type?>s.png"></div>
                <div class="center"><img class="face" src="faces-suits/face-<?php echo $face.'-'.$type?>.png"></div>
                <div class="small lower <?php echo $type?>"><p> <?php echo $key ?> </p><img class="icon" src="faces-suits/<?php echo $type?>s.png"></div>
            </div>
        <?php endforeach;?>
    <?php endforeach;?>        
</body>
</html>