<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html charset=windows-1251" />

    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <title>�������� �������</title>

    <style>
        a.rollover {
            background: black; /* ���� � ����� � �������� �������� */
            display: block; /* ������� ��� ������� ������� */
            width: 100px; /* ������ ������� */
            height: 18px; /* ������ ������� */
        }

        a.rollover:hover {
            background: red;/* ���� � ����� � ���������� �������� */
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