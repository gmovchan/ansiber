<?php
  session_start();
  if (!$_SESSION["AUTH"]) {
    die;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Панель администратора</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
      require_once("scripts/get_data_form.php");
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <h1 class="text-center">Редактор</h1>
          <form class="" action="scripts/save.php" method="post">

            <div class="form-group">
              <label for="" class="control-label">.welcome .section-title</label>
              <textarea class="form-control" name="section_title" rows="5"
              cols="80"><?php echo $dataArr['section_title']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">.welcome__block-1 .welcome__text__title,</label>
              <textarea class="form-control" name="welcome__block_1" rows="5"
              cols="80"><?php echo $dataArr['welcome__block_1']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">.welcome__block-2 .welcome__text__title,</label>
              <textarea class="form-control" name="welcome__block_2" rows="5"
              cols="80"><?php echo $dataArr['welcome__block_2']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">.welcome__block-3 .welcome__text__title,</label>
              <textarea class="form-control" name="welcome__block_3" rows="5"
              cols="80"><?php echo $dataArr['welcome__block_3']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">.welcome__block-4 .welcome__text__title,</label>
              <textarea class="form-control" name="welcome__block_4" rows="5"
              cols="80"><?php echo $dataArr['welcome__block_4']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">questions__item1 .questions__item__title,</label>
              <textarea class="form-control" name="questions__item1__title" rows="5"
              cols="80"><?php echo $dataArr['questions__item1__title']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">questions__item1 .questions__item__answer,</label>
              <textarea class="form-control" name="questions__item1__answer" rows="5"
              cols="80"><?php echo $dataArr['questions__item1__answer']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">questions__item2 .questions__item__title,</label>
              <textarea class="form-control" name="questions__item2__title" rows="5"
              cols="80"><?php echo $dataArr['questions__item2__title']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">questions__item2 .questions__item__answer,</label>
              <textarea class="form-control" name="questions__item2__answer" rows="5"
              cols="80"><?php echo $dataArr['questions__item2__answer']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">questions__item3 .questions__item__title,</label>
              <textarea class="form-control" name="questions__item3__title" rows="5"
              cols="80"><?php echo $dataArr['questions__item3__title']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">questions__item3 .questions__item__answer,</label>
              <textarea class="form-control" name="questions__item3__answer" rows="5"
              cols="80"><?php echo $dataArr['questions__item3__answer']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">questions__item4 .questions__item__title,</label>
              <textarea class="form-control" name="questions__item4__title" rows="5"
              cols="80"><?php echo $dataArr['questions__item4__title']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">questions__item4 .questions__item__answer,</label>
              <textarea class="form-control" name="questions__item4__answer" rows="5"
              cols="80"><?php echo $dataArr['questions__item4__answer']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">questions__item5 .questions__item__title,</label>
              <textarea class="form-control" name="questions__item5__title" rows="5"
              cols="80"><?php echo $dataArr['questions__item5__title']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">questions__item5 .questions__item__answer,</label>
              <textarea class="form-control" name="questions__item5__answer" rows="5"
              cols="80"><?php echo $dataArr['questions__item5__answer']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">questions__item6 .questions__item__title,</label>
              <textarea class="form-control" name="questions__item6__title" rows="5"
              cols="80"><?php echo $dataArr['questions__item6__title']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">questions__item6 .questions__item__answer,</label>
              <textarea class="form-control" name="questions__item6__answer" rows="5"
              cols="80"><?php echo $dataArr['questions__item6__answer']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">questions__item7 .questions__item__title,</label>
              <textarea class="form-control" name="questions__item7__title" rows="5"
              cols="80"><?php echo $dataArr['questions__item7__title']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">questions__item7 .questions__item__answer,</label>
              <textarea class="form-control" name="questions__item7__answer" rows="5"
              cols="80"><?php echo $dataArr['questions__item7__answer']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">.pack__item1 .pack__item__title,</label>
              <textarea class="form-control" name="pack__item1" rows="5"
              cols="80"><?php echo $dataArr['pack__item1']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">.pack__item2 .pack__item__title,</label>
              <textarea class="form-control" name="pack__item2" rows="5"
              cols="80"><?php echo $dataArr['pack__item2']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="" class="control-label">.pack__item3 .pack__item__title,</label>
              <textarea class="form-control" name="pack__item3" rows="5"
              cols="80"><?php echo $dataArr['pack__item3']; ?></textarea>
            </div>

            <button type="submit" name="btn btn-default">Сохранить</button>
          </form>
          <br>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
