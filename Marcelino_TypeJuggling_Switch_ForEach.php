<!---Marcelino, Princess Camille
CYB-201--->
<?php
$num_sales='10000';
$stocks='50000';
$price_wholesale=5;
$rev=$num_sales*$price_wholesale;
$best_sell=['Pistachio Milk Chocolate','Milk Chocolate','Mixed Berries Chocolate'];
$message='Our Chocolate Sales: ';
$fin_mess=$message.$num_sales.' bars sold.';
$stock_check= $stocks-$num_sales;
switch (true){
    case ($stock_check>= 30000):
        $stock_stat='High Stock, there are still enough sweets for everyone!';
        break;
    case ($stock_check>=20000):
        $stock_stat='Medium Stock, plenty of chocolate left for the demand.';
        break;
    case ($stock_check>=1):
        $stock_stat='Low Stock, time to create some more chocolates.';
        break;
    default:
        $stock_stat='Out of Stock';
        break;
}
$restock=$stock_check<500? true : false;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Type Juggling</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <?php include 'header.php';?>
        <h1>SALES AND CHOCOLATE TRACKER</h1>
        <h2>Our in Demand Products</h2>
        <?php foreach ($best_sell as $product ) {  ?>
            <p><?= $product ?></p>
            <?php } ?>
            <br>
            <p>---------------------</p>
            <h2>Chocolate Tracker</h2>
            <p><b><?= $fin_mess?></b></p>
            <p>Stock of Chocolate Remaining: <?= $stock_check?></p>
            <p>Stock of Chocolate Status: <?= $stock_stat?></p>
            <p>Restock of Chocolate Alert: <?= $restock?"Time to start creating more chocolatey goodness":"There are still enough Chocolate Left"?></p>
            <p>Our Total Revenue for Today: $<?= $rev?></p>
        <?php include 'footer.php';?>
    </body>
</html>