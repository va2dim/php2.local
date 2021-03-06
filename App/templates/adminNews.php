<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="btn-group text-right">
    <button type="button" class="btn-default">Все новости</button>
    <button type="button" class="btn-default">Редактирование</button>
    <button type="button" class="btn-default">Сохранение</button>
</div>

<h1>Все новости</h1>


<?php foreach($news as $article): ?>
    <div class = "panel panel-info">
        <div class = "panel-heading"><a href="?ctrl=news&act=one&id=<?php echo $article->id; ?>"><?php echo $article->title; ?></a></div>
        <div class = "panel-body"><?php echo $article->text; ?><a href="?ctrl=news&act=one&id=<?php echo $article->id; ?>"> <span class="glyphicon glyphicon-expand"  aria-label=">>>"></span> </a></div>
        <div class = "panel-footer">

            <div class="row">
                <div class="col-md-10">
                    <?php
                    if(isset($article->author)):
                        echo $article->author->name;
                    endif;
                    ?>
                </div>
                <div class="col-md-2 text-right">
                    <?php echo $article->datatime_of_creation; ?>
                </div>
            </div>

        </div>
    </div>
<?php endforeach;?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
