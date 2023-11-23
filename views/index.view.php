<?php require('partials/head.php'); ?>


    <table id="myTable">
        <thead>
            <tr>
                <th>Product</th>
                <th>Prijs</th>
                <th>Aantal</th>
                <th>Subtotaal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($groceries as $grocery) : ?>

                <tr>
                    <td><?= $grocery->name ;?></td>
                    <td class="bedrag productPrice"><?= $grocery->price; ?></td>
                    <td class="productQuantity"><?= $grocery->number;?></td>  
                    <td class="bedrag productTotalCost"><?= $grocery->price * $grocery->number?></td>
                </tr> 

            <?php endforeach; ?>

        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Totaal</td>
                <td id="totalCost" class="bedrag">0.00</td>
            </tr>

        </tfoot>                                    

    </table>

<?php require('partials/footer.php'); ?>