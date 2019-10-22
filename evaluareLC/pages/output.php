<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Numar</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $result = $_SESSION['numbers'];
    foreach($result as $number){
        ?>


        <tr>
            <th scope="row"><?=$number?></th>
        </tr>

    <? } ?>
    </tbody>
</table>