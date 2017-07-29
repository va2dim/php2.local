<html>
<head>
    <style>
        .news{
            margin-bottom: 10px;
            padding: 5px;
            border: 1px dotted green;
            font-family: 'Droid sans', 'Lucida Grande', sans-serif;
            font-size: 12px;
        }
        title_ {
            font-weight: bold;
            font-size: 14px;
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>

<?php

foreach($news as $new){?>
    <div class="news">
        <title_><?php echo $new->title ?></title_>
        <text><?php echo $new->text ?></text>
        <dtoc><?php echo $new->datatime_of_creation ?></dtoc>
    </div>
<?php
}
?>

</body>
</html>