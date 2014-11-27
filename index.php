<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>巴哈文章救援&備份器 | Backer of Bahamut</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template
    <link href="jumbotron.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<style type="text/css">
div img{
    max-width: 550px;
    width: expression(this.width > 550 ? "550px" : true);
    height: auto;
}
img{
  -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
}
</style>
  <body>
    <!--[if IE]>
      <script>
        alert("宇智波IE退散\n本站拒絕IE用戶");
        document.location.href = "http://killie.tw/";
      </script>
    <![endif]-->
    <?php
$page = "index.php";
include "dist/navbar.php";
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <a href="https://github.com/ba4b"><img style="position: absolute; top: 150; right: 0; border: 0; width: 149px; height: 149px;" src="http://aral.github.com/fork-me-on-github-retina-ribbons/right-green@2x.png" alt="Fork me on GitHub"></a>
        <h1>巴哈文章救援&備份器<br>　　Backer of Bahamut</h1>
        <p><h3 style="text-align:right;">一個可以救援被版務刪除的文章</h3></p>
        <p><br>有好奇心而看不到文章嗎？<br>有爭議性的文章被刪除嗎？<br>婊版務婊到被版務發現嗎？<br>婊站方婊到被抓包刪文嗎？<br>沒關係，交給「巴哈文章救援&備份器」就對了！</p>
            <div class="btn-group">
                <a href="use.php"><button class="btn btn-success btn-lg" type="button">立即使用！ »</button></a>
            </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <center><h2>製作緣由</h2></center>
            <p>這是由海豹所發起的<br>
              原因是因為看到了voteban的文章<br>
              然後想到要手動就很困擾<br>
              要每層樓每層樓的去找ID才能復原<br>
              所以就寫出了這個東西了喔<br>
            </p>
        </div>
        <div class="col-md-4">
            <center><h2>如何使用</h2></center>
            <p><br>很簡單啊！<br>
              點立即使用按鈕後貼上文章連結就可以了喔<br>
            <a class="btn btn-success" href="use.php">
            立即使用！ »
            </a></p>
        </div>
        <div class="col-md-4">
            <center><h2>公告專區</h2></center>
            <br>
            <p>2014/11/28  正式啟用<br></p>
            <p>歡迎回報復原錯誤什麼der<br></p>
        </div>

      </div>
<br><br>
      <hr>
      <?php
include "dist/footer.php";
?>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>