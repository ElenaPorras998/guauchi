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
            <div id="9" class="deck">
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

            <div id="6" class="deck">
                <h5>Player Deck </h5>
            </div>
            
            <div id="7" class="deck">
                <h5>Player Deck </h5>
            </div>

            <div id="8" class="deck">
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
            var pos5=$('#player #5').offset();
            var pos6=$('#player #6').offset();

            var card=$('#deck .card').last();
            store(card,hand);

            card.animate({'top':pos.top, 'left':pos.left}, 500, function(){
                card.detach();
                $('div#1.deck').append(card);

                card = $('#deck .card').last();
                store(card,hand);            
                card.animate({'top':pos2.top, 'left':pos2.left}, 500, function(){
                    card.toggleClass('hidden');
                    card.detach();
                    $('div#2.deck').append(card);
                    var hand_house = hand.slice(0);
                    hand=[];
                
                    card=$('#deck .card').last();
                    store(card,hand);            
                    card.animate({'top':pos5.top, 'left':pos5.left}, 500, function(){
                        card.toggleClass('hidden');
                        card.detach();
                        $('div#3.deck').append(card);
                    
                        card=$('#deck .card').last();
                        store(card,hand);            
                        card.animate({'top':pos6.top, 'left':pos6.left}, 500, function(){
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

        var counter=1;
        $('#hit').click(function(){
            var pos=null;
            var card=null;
            switch (counter)
            {
                case 1:
                    pos=$('#player #7').offset();
                    card=$('#deck .card').last();
                    store(card,hand);            
                    card.animate({'top':pos.top, 'left':pos.left}, 500, function(){
                        card.toggleClass('hidden');
                        card.detach();
                        $('div#7.deck').append(card);
                        var hand_player=hand.slice(0);
                    });
                    counter++;
                    break;
                
                case 2:
                    pos=$('#player #4').offset();
                    card=$('#deck .card').last();
                    store(card,hand);            
                    card.animate({'top':pos.top, 'left':pos.left}, 500, function(){
                        card.toggleClass('hidden');
                        card.detach();
                        $('div#4.deck').append(card);
                        var hand_player=hand.slice(0);
                    });
                    counter++;
                    break;

                case 3:  
                    pos=$('#player #8').offset();
                    card=$('#deck .card').last();
                    store(card,hand);            
                    card.animate({'top':pos.top, 'left':pos.left}, 500, function(){
                        card.toggleClass('hidden');
                        card.detach();
                        $('div#8.deck').append(card);
                        var hand_player=hand.slice(0);
                    });
                    counter++;                
                    break;

                case 4:
                    pos=$('#player #3').offset();
                    card=$('#deck .card').last();
                    store(card,hand);            
                    card.animate({'top':pos.top, 'left':pos.left}, 500, function(){
                        card.toggleClass('hidden');
                        card.detach();
                        $('div#3.deck').append(card);
                        var hand_player=hand.slice(0);
                    });
                    counter++;                
                    break;
            }
        });        


        $('#stand').click(function(){
            var counter=1;
            var pos=null;
            var card=null;
            if (counter==1){
                pos=$('#player #9').offset();
                card=$('#deck .card').last();
                store(card,hand);            
                card.animate({'top':pos.top, 'left':pos.left}, 500, function(){
                    card.toggleClass('hidden');
                    card.detach();
                    $('div#9.deck').append(card);
                    var hand_player=hand.slice(0);
                });
            };
            
        }); 
    </script>
</body>
</html>