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
<?php for ($i = 1; $i <= 10; $i++) : ?>

    <div id="card_number">
        <div class="top_left">
            <p id="top_left">
                <?php if($i == 1){
                    echo 'A';
                }
                else {
                    echo $i;
                }
            ?></p>
            <img id="suit_top_left" src="faces-suits/clubs.png" alt="<?php echo $i . 'of clubs'; ?>">
        </div>
        <div class="bottom_right">
            <p id="bottom_right">
                <?php if($i == 1){
                    echo 'A';
                }
                else {
                    echo $i;
                }
            ?></p>
            <img id="suit_bottom_right" src="faces-suits/clubs.png" alt="<?php echo $i . 'of clubs'; ?>">
        </div>
    </div>
<?php endfor ?>

<?php for ($i = 1; $i <= 10; $i++) : ?>

    <div id="card_number">
        <div class="top_left">
            <p class="red" id="top_left">
                <?php if($i == 1){
                    echo 'A';
                }
                else {
                    echo $i;
                }
            ?></p>
            <img id="suit_top_left" src="faces-suits/diamonds.png" alt="<?php echo $i . 'of diamonds'; ?>">
        </div>
        <div class="bottom_right">
            <p class="red" id="bottom_right">
            <?php if($i == 1){
                    echo 'A';
                }
                else {
                    echo $i;
                }
            ?>
            </p>
            <img id="suit_bottom_right" src="faces-suits/diamonds.png" alt="<?php echo $i . 'of diamonds'; ?>">
        </div>
    </div>
<?php endfor ?>

<?php for ($i = 1; $i <= 10; $i++) : ?>

    <div id="card_number">
        <div class="top_left">
            <p id="top_left">
            <?php if($i == 1){
                    echo 'A';
                }
                else {
                    echo $i;
                }
            ?></p>
            <img id="suit_top_left" src="faces-suits/spades.png" alt="<?php echo $i . 'of spades'; ?>">
        </div>
        <div class="bottom_right">
            <p id="bottom_right">
            <?php if($i == 1){
                    echo 'A';
                }
                else {
                    echo $i;
                }
            ?></p>
            <img id="suit_bottom_right" src="faces-suits/spades.png" alt="<?php echo $i . 'of spades'; ?>">
        </div>
    </div>
<?php endfor ?>

<?php for ($i = 1; $i <= 10; $i++) : ?>

    <div id="card_number">
        <div class="top_left">
            <p class="red" id="top_left">
            <?php if($i == 1){
                    echo 'A';
                }
                else {
                    echo $i;
                }
            ?>
            </p>
            <img id="suit_top_left" src="faces-suits/hearts.png" alt="<?php echo $i . 'of hearts'; ?>">
        </div>
        <div class="bottom_right">
            <p class="red" id="bottom_right">
                <?php if($i == 1){
                    echo 'A';
                }
                else {
                    echo $i;
                }
            ?></p>
            <img id="suit_bottom_right" src="faces-suits/hearts.png" alt="<?php echo $i . 'of hearts'; ?>">
        </div>
    </div>
<?php endfor ?>


</body>

</html>