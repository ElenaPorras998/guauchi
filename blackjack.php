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
            <div id="1" class="deck">
                <h5>House Deck</h5>
            </div>
            <div id="2" class="deck">
                <h5>House Deck</h5>
            </div>
        </div>

        <h3>1 PLAYER</h3>
        <div id="player" class="area">
            <div id="3" class="deck">
                <h5>Player Deck </h5>
            </div>

            <div id="4" class="deck">
                <h5>Player Deck </h5>
            </div>

            <div id="5" class="deck">
                <h5>Player Deck </h5>
            </div>
            
        </div>
        <div id="buttons">
            <button id="start">Start!</button>
            <button id="hit">Hit!</button>
            <button id="stand">Stand!</button>            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script>
        var hand=[];
        function store (card, hand)
        {
            hand.push(card);
        }

        $('#start').click(function()
        {
            var pos=$('#house #1').offset();
            var pos2=$('#house #2').offset();
            var pos3=$('#player #3').offset();
            var pos4=$('#player #4').offset();

            var card=$('#deck .card').last();
            store(card,hand);

            card.animate({'top':pos.top, 'left':pos.left}, 1000, function(){
                card.detach();
                $('div#1.deck').append(card);

                card = $('#deck .card').last();
                store(card,hand);            
                card.animate({'top':pos2.top, 'left':pos2.left}, 1000, function(){
                    card.toggleClass('hidden');
                    card.detach();
                    $('div#2.deck').append(card);
                    var hand_house = hand.slice(0);
                    hand=[];
                
                    card=$('#deck .card').last();
                    store(card,hand);            
                    card.animate({'top':pos3.top, 'left':pos3.left}, 1000, function(){
                        card.toggleClass('hidden');
                        card.detach();
                        $('div#3.deck').append(card);
                    
                        card=$('#deck .card').last();
                        store(card,hand);            
                        card.animate({'top':pos4.top, 'left':pos4.left}, 1000, function(){
                            card.toggleClass('hidden');
                            card.detach();
                            $('div#4.deck').append(card);
                            var hand_player=hand.slice(0);
                            hand=[];
                        });
                    });        
                });
                
            });
        });

        $('#hit').click(function(){
            var pos5=$('#player #5').offset();
            card = $('#deck .card').last();
                store(card,hand);            
                card.animate({'top':pos5.top, 'left':pos5.left}, 1000, function(){
                    card.toggleClass('hidden');
                    card.detach();
                    $('div#5.deck').append(card);
                    var hand_house = hand.slice(0);
                    hand=[];
                });
        });        
    </script>
</body>
</html>