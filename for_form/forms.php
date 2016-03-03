<?php

if ($_POST):

    $val = $_POST['select'];

    switch ($val) {
        case '1':
            $val_ = '"Позовної заяви про розірвання шлюбу"';
            break;
        case '2':
            $val_ = '"Позовної заяви про стягнення нарахованої, але невиплаченої заробітної плати"';
            break;
        case '101':
            $val_ = '"Договору підряду (для замовника)"';
            break;
        case '102':
            $val_ = 'Договору підряду (для виконавця)';
            break;
        case '103':
            $val_ = '"Договору на надання послуг з просування торгової марки"';
            break;
        case '201':
            $val_ = '"Заяви до суду про поновлення сроків"';
            break;
    }
    ?>

<?php include 'header.php' ?>


<!--    --><?php
//    $mysqli = new mysqli("127.0.0.1", "root", "170158", "po", 3306);
//    if ($mysqli->connect_errno) {
//    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//    }
//
//    echo $mysqli->host_info . "\n";
//    ?>


        <form action="list.php" method="post">
<?php if ($val <= 100 || $val > 200) {
    include 'court_tmp.php';
    include 'name_address.php';
} else{
    include 'agreement.php';
}
?>













    <?php include 'footer.php' ?>



<?php
endif;
?>