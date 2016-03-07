<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html charset=windows-1251" />

    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <title>Интернет магазин</title>

    <style>
        a.rollover {
            background: black; /* Путь к файлу с исходным рисунком */
            display: block; /* Рисунок как блочный элемент */
            width: 100px; /* Ширина рисунка */
            height: 18px; /* Высота рисунка */
        }

        a.rollover:hover {
            background: red;/* Путь к файлу с заменяемым рисунком */
        }
    </style>


</head>

<body>



<div id="block-body">
    <?php
include("include/block-header.php");
?>

    <div id="block-content"></div>

    <div id="block-left"></div>

    <div class="img"></div>


    <?php
include("include/block-footer.php");
?>
</div>

</body>
</html>