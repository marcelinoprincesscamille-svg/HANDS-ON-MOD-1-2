<!---Marcelino, Princess Camille
CYB-201--->

<?php
$choco = ['Dark Chocolate', 'Milk Chocolate', 'Mixed Berries Chocolate', 'Assorted Box Chocolate'];
$price = [50, 45, 60, 70];
$nutri= ['Fat', 'Sugar', 'Salt', 'Fiber', 'Protein'];
$nutri_val = [36, 51, 0.25, 2.1, 7.3];
$tot_nutri= 0;
$name='Guests';
$mess='For Our Healthy But Nifty';
$fin_mess=$mess.', '.$name;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Concatenation and Array</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
         <?php include 'header.php';?>
        <h1>Nutritional Guide and Wholesale Prices</h1>
        <h2><?= $fin_mess?></h2>
        <h2>Nutrition (per 100g)</h2>
        <p>Of our Basic Chocolate</p>
        <?php
        $i = 0;
        while ($i < count($nutri)) {
            echo "<p>{$nutri[$i]}: {$nutri_val[$i]}%</p>";
            $tot_nutri += $nutri_val[$i];
            $i++;
        }
        ?>
        <p>-------------------------------</p>
        <h2>Total Nutrition Value</h2>
        <p>Per Bar of our Basic Chocolate</p>
        <p>Total Nutrition: <?= $tot_nutri ?>%</p>
        <p>-------------------------------</p>
        <h2>Wholesale Prices</h2>
        <?php
        $i = 0;
        while ($i < count($choco)) {
            echo "<p>{$choco [$i]}: \${$price[$i]} per pack</p>";
            $i++;
        }
        ?>
        <?php include 'footer.php';?>
</body>
</html>
