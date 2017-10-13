<?php
$card1 = 0;
$card1= 0 ;
$card_value1= 0 ;
$card_value2= 0 ;
$total= 0 ;
$total1= 0 ;
$card_value3= 0 ;
$card_value4= 0 ;

function new_card(& $arr)
{
//Declare all as global variables so we can use them!
global $card1;
global $card_value1;
global $card_value2;
global $total;
global $total1;
global $card_value3;


// Step 1: selects a random card (index) from the $deck
$card1 = 0;
$card1 = rand(0,count($arr)-1);

//Step 2: the actual value of the card for most cards their pip value. The Ace has an optional value $deck[$card1][3];
$card_value1 = $arr[$card1][2];
$card_value2 = $arr[$card1][3];

// Step 3: this just display info about card on the screen: (this could be out of the function!)
echo '<br>Card : '.$arr[$card1][1]
.' of '.$arr[$card1][0]
.' with the value of : '. $arr[$card1][2];
if($arr[$card1][3]>0){echo ' optional value : ' . $arr[$card1][3];}
//Step 3: We calculate if this hand has Blackjack. If aces are involved we have an second value called $total1
$total = $card_value1+$card_value2;


 //We update now the $deck substracting the card (by unset this index), so we ain't have it in no $deck no more :)
 unset($arr[$card1]);
}

