
<?php require('partials/head.php'); ?>

    <form action="/products" method="POST">

        Naam: <input type="text" name="name">
        
        Aantal: <input type="text" name="number">

        Prijs: <input type="text" name="price">
    
    <input type="submit" value="versturen">

<?php require('partials/footer.php'); ?>