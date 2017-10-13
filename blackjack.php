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
            <div id="first" class="deck">
                <h5>House Deck</h5>
            </div>
            <div id="second" class="deck">
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
        <div id="buttons">
            <button id="start">Start!</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script>

        var card=$('#deck .card').last();
        //card.hide();

        $('#start').click(function()
        {
            var pos=$('#house #first').offset();
            card.animate({'top':pos.top, 'left':pos.left}, 1000);        
        })

    </script>
</body>
</html>