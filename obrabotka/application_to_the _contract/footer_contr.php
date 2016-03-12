



<style>
    /*th {*/
    /*text-align: center;*/
    /*}*/

    table td {
        width: 50%;
        padding: 2px;
    }

</style>
<table style="width:100%;">
    <tr>
        <th><?php  echo $name_stor_1?>:</th>
        <th><?php  echo $name_stor_2?>:</th>
    </tr>
    <tr>
        <td><b> <?php echo $_POST[name_1] ?></b></td>
        <td><b> <?php echo $_POST[name_2] ?></b></td>
    </tr>

    <tr>
        <td><?php echo $_POST[adress_1] ?></td>
        <td><?php echo $_POST[adress_2] ?></td>
    </tr>
    <tr>
        <td><?php echo $_POST[bank_1] ?></td>
        <td><?php echo $_POST[bank_2] ?></td>
    </tr>
    <tr>
        <td>Код ЄДРПОУ <?php echo $_POST[code_1] ?></td>
        <td>Код ЄДРПОУ <?php echo $_POST[code_2] ?></td>
    </tr>
    <tr>
        <td>ІПН <?php echo $_POST[vax_1] ?></td>
        <td>ІПН <?php echo $_POST[vax_2] ?></td>
    </tr>
    <tr>
        <td><?php echo $_POST[posada_1] ?>____________ <i id="dir1"></i></td>
        <td><?php echo $_POST[posada_2] ?>____________<i id="dir2"></i></td>
    </tr>
</table>
</div></div>



<script>

    var dir1 = '<?php echo $_POST[fio_1]?>';
    var dir2 = '<?php echo $_POST[fio_2]?>';
    var diric = function () {
        $("#dir1").append(dir1.replace(/([А-ЯІЇЄ][а-яіїє’-]+)\s?([А-ЯІЇЄ]).+\s?([А-ЯІЇЄ]).+/, '$1 $2.$3.'));
        $("#dir2").append(dir2.replace(/([А-ЯІЇЄ][а-яіїє’-]+)\s?([А-ЯІЇЄ]).+\s?([А-ЯІЇЄ]).+/, '$1 $2.$3.'));
    };

    diric();




</script>