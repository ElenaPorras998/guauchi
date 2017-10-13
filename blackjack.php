<?php 
include 'page_header.php';
require_once 'deck/list.php';
require_once 'deck/card.php';

shuffle($cards);
?>
<body>
<?php// echo $instructions; ?>    
    <div class="board">
        <div id="upper">
            <div id="bank" class="area">
                <h4>HOUSE<br>Total $$$</h4>
            </div>
            <div id="deck">
                <?php
                foreach($cards as $card)
                {
                    $item= new card($card['value'], $card['type']);
                    echo $item;
                }
                ?>
            </div>
        </div>

        <h3>TURN HOUSE</h3>

        <div id="house" class="area">     
            <div class="deck">
                <h5>House Deck</h5>
            </div>
            <div class="deck">
                <h5>House Deck</h5>
            </div>    
        </div>

        <h3>1 PLAYER</h3>
        <div id="player" class="area">
            <div class="deck">
                <h5>Player Deck </h5>
            </div>
        
            <div class="deck">
                <h5>Player Deck </h5> 
            </div>
        </div>
    </div>
</body>
</html>