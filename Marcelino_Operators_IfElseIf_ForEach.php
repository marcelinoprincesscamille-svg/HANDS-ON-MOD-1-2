<!---Marcelino, Princess Camille
CYB-201--->
<?php
$cart=[
    'Dark Chocolate'=> 5,
    'Milk Chocolate'=> 7,
    'Mixed Berries Chocolate'=>6,
    'Assorted Box Chocolate'=>9,
];
$tot_quant=0;
foreach ($cart as $choc => $quant){
    $tot_quant += $quant;
}
$cost_each=4;
$subtot=$cost_each*$tot_quant;
if ( $tot_quant>=30){
    $disc= 0.30;
    $mess='You are eligible for 30% didcount';
}elseif ($tot_quant>=20){
    $disc=0.20;
    $mess='You are eligible for 20% discount';
}elseif($tot_quant>=10){
    $disc=0.10;
    $mess='You are eligible for 10% discount';
}else{
    $disc=0;
    $mess='Not eligible for discount';
};
$disc_calc=($subtot*$disc);
$subtot=($subtot-$disc_calc);
$tax=($subtot/100)*20;
$total=$subtot+$tax;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Operators</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    <?php include 'header.php';?>
    <h1>Welcome to Choco Loco Shopping Cart</h1>
    <h2>INVOICE</h2>
    <p>=========================</p>
    <p>Items Bought: </p>
        <?php foreach ($cart as $choc => $quant) {  ?>
           <ul> <li><?= $choc ?> : <?= $quant?></li> </ul>
         <?php } ?></p>
    <p>Total Items Bought: <?= $tot_quant?> </p>
    <p><?= $mess ?>
    <p>=========================</p>
    <p>Cost per Each: $<?= $cost_each?></p>
    <p>Discount: $<?= $disc_calc?></p>
    <p>Tax: $<?= $tax?></p>
    <p>Subtotal: $<?= $subtot?></p>
    <p>=========================</p>
    <p>=========================</p>
    <p>Total: $<?= $total?></p>
    <?php include 'footer.php';?>
    </body>
</html>