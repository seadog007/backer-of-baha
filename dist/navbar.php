<div class="navbar navbar-inverse navbar-fixed-top" role=
"navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href=".">Better Avatar for
      Bahamut</a>
    </div>

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <?php
                              if($page=="index.php"){
                                echo '<li class="active"><a href=".">Home</a></li><li><a href="use.php">立即使用</a></li>';
                              }else if($page=="use.php"){
                                echo '<li><a href=".">Home</a></li><li class="active"><a href="use.php">立即使用</a></li>';
                              }
                              ?>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
