<?php
include 'deck.php';
include 'page_header.php';
include 'functions.php';
?>
<body>
<div class="menu">
    <h1>Mini BlackJack</h1>
</div>
<div class="house_area">
    <h2>The House Area</h2>
    <?php 
    $hand_value =0;
    new_card($deck);
    if($card_value2>0){echo '<br>card optional Value : ' . $total1;}
    $hand_value+=$total;
    new_card($deck);
    if($card_value2>0){echo '<br>card Optional Value : ' . $total1;}
    $hand_value+=$total;
    echo "<br>This hand has a value of : ".$hand_value;
   
    ?>
    </div>
    <div class="player_area">
    <h2>The Player Area</h2>
    <?php 
    $hand_value =0;
    new_card($deck);
    if($card_value2>0){echo '<br>card optional Value : ' . $total1;}
    $hand_value+=$total;
    new_card($deck);
    if($card_value2>0){echo '<br>card Optional Value : ' . $total1;}
    $hand_value+=$total;
    echo "<br>This hand has a value of : ".$hand_value;
    //below 17 always draws a card over or equal he stops
    //hit, stand, round 1,2,3
    echo count($deck);
    ?>
    
    </div>
    <button>Start Game</button>
    <button>HIT!</button>
    <button>Stand...</button>
    <button>Finish Game</button>
</body>
</html>