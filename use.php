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

  <body>

    <?php $page="use.php"; include "dist/navbar.php" ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="container">
          <div class="row">
              <p>test</p>
          </div>
      </div>
    <div class="jumbotron" style="height:300px">
      <div class="container">
        <div class="f1 col-md-4 col-md-offset-4" align="center" valign="center" style="top:0px;">
          <p><br>文章網址</p>
          <br>
          <form action="javascript:sub()" method="POST" onSubmit="return checkform()">
            <input type="text" class="form-control" id="Name" name="Name" placeholder="您的巴哈帳號">
            <br>
            <input type="submit" class="btn btn-primary" id="verify" value="立即復原">
          </form>
        </div>
        <div class="f2 col-md-4 col-md-offset-4" align="center" valign="center" style="right:-500px; opacity:0; top:-100px;">
          <br>
          <p id="msg"></p>
          <br>
        </div>
      </div>
    </div>
      <hr>
      <?php include "dist/footer.php"?>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/shake.js"></script>
    <script src="dist/js/checkform.js"></script>
  </body>
</html>
