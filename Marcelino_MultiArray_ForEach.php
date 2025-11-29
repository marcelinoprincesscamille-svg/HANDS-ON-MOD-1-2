<?php
$mess='Welcome to our Chocolate Catalog Inventory';
$inventory=[
    ['choc'=>'Dark Chocolate', 'stock'=> 26, 'price'=>2.99,'type'=>'Basic'],
    ['choc'=>'Milk Chocolate', 'stock'=> 26,'price'=>2.99,'type'=>'Basic'],
    ['choc'=>'Mixed Berries Chocolate', 'stock'=> 22, 'price'=>4.99,'type'=>'Premium'],
    ['choc'=>'Assorted Chocolate Box', 'stock'=> 24, 'price'=>6.99, 'type'=>'Premium'],
    ['choc'=>'Pistachio Milk Chocolate', 'stock'=> 35, 'price'=>9.99, 'type'=>'Limited Edition'],
    ['choc'=>'Honey Comb Chocolate', 'stock'=> 27, 'price'=>11.99,'type'=>'Limited Edition'],
];
$best_sell=['Pistachio Milk Chocolate','Milk Chocolate','Mixed Berries Chocolate'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Arrays</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
         <?php include 'header.php';?>
         <h1><?php echo $mess ?></h1>
         <h2>Our Best Sellers</h2>
         <?php foreach ($best_sell as $product ) {  ?>
            <p><?= $product ?></p>
         <?php } ?>
         <br>
        <h2>Our Products</h2>
    <table>
        <tr>
            <th>Chocolate Name</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Type</th>
        </tr>

        <?php foreach ($inventory as $item) { ?>
            <tr>
                <td><?= $item['choc'] ?></td>
                <td><?= $item['stock'] ?></td>
                <td>$ <?= $item['price'] ?></td>
                <td><?= $item['type'] ?></td>
            </tr>
        <?php } ?>
    </table>
     <?php include 'footer.php';?>
    </body>
</html>