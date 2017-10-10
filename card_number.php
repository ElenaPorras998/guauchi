<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>card number</title>
    <link rel="stylesheet" href="card_number.css">
</head>

<body>

<?php $suits = [
    'diamonds' => 'faces-suits/diamonds.png',
    'clubs' => 'faces-suits/clubs.png',
    'hearts' => 'faces-suits/hearts.png',
    'spades' => 'faces-suits/spades.png'
]
?>
<?php foreach($suits as $suit => $url) : ?>

<?php for ($i = 1; $i <= 10; $i++) : ?>

    <div id="card_number">
        <div class="top_left">
            <p <?php if($suit == 'hearts'| $suit == 'diamonds'){echo 'class="red"';}; ?> id="top_left">
                <?php if($i == 1){
                    echo 'A';
                }
                else {
                    echo $i;
                }
            ?></p>
            <img id="suit_top_left" src="<?php echo $url ?>" alt="<?php echo $i . 'of clubs'; ?>">
        </div>
        <div class="bottom_right">
            <p <?php if($suit == 'hearts'| $suit == 'diamonds'){echo 'class="red"';}; ?> id="bottom_right">
                <?php if($i == 1){
                    echo 'A';
                }
                else {
                    echo $i;
                }
            ?></p>
            <img id="suit_bottom_right" src="<?php echo $url ?>" alt="<?php echo $i . 'of clubs'; ?>">
        </div>
    </div>
<?php endfor ?>
<?php endforeach ?>

</body>

</html>