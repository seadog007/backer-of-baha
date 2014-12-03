<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>巴哈文章救援&備份器 - Backer of Bahamut</title>

  <link rel="stylesheet" type="text/css" href="dist/css/semantic.css">
  <link rel="stylesheet" type="text/css" href="dist/css/bob.css">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="dist/js/semantic.js"></script>
  <script src="dist/js/bob.js"></script>
</head>
<body id="home">
  <div class="ui inverted masthead segment">
    <div class="ui page grid">
      <div class="column">
        <?php include_once("dist/navbar.php") ?>
        <img src="dist/images/cat.png" class="ui medium image">
        <div class="ui hidden transition information">
          <h1 class="ui inverted header">
            巴哈文章救援&備份器<br>
               Backer of Bahamut
          </h1>
          <p>有好奇心而看不到文章嗎？<br>
            有爭議性的文章被刪除嗎？<br>
            婊版務婊到被版務發現嗎？<br>
            婊站方婊到被抓包刪文嗎？<br>
            沒關係，交給「巴哈文章救援&備份器」就對了！
          </p>
          <div class="large basic inverted animated fade ui button" id="use_button" href="use.php">
            <div class="visible content">立即復原</div>
            <div class="hidden content">點我使用</div>
          </div>
          <div class="large basic inverted animated fade ui button" id="use_button_alert" style="width: 250px;">
            <div class="visible content">請使用解析度較大的電腦瀏覽</div>
            <div class="hidden content">解析度必須在xxx*xxx以上</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ui vertical feature segment">
    <div class="ui centered page grid">
      <div class="fourteen wide column">
        <div class="ui three column center aligned stackable divided grid">
          <div class="column">
            <div class="ui icon header">
              <i class="idea icon"><!--lightning icon--></i>
              <h2>製作緣由</h2>
            </div>
            <p>這是由海豹所發起的<br>
              原因是因為看到了voteban的文章<br>
              然後想到要手動就很困擾<br>
              要每層樓每層樓的去找ID才能復原<br>
              所以就寫出了這個東西了喔<br>
              這個東西可以自動復原成<br>
              最後一次修改後的文章<br>
              注意！是最後一次喔！！！<br><br><br>
            </p>
            <p>
              <div class="ui buttons">
                <a class="ui button" href="#">先空著</a>
              </div>
            </p>
          </div>
          <div class="column">
            <div class="ui icon header">
              <i class="code icon"></i>
              <h2>使用技術</h2>
            </div>
            <p>
              我們使用了Semantic UI 及 PHP<br><br><br>
              <i class="cube icon"></i>Semantic UI - 一個Web網頁框架<br>可以快速做出<del>比巴哈</del>好看的網站<br><br>
              <i class="cube icon"></i>PHP - 一種強大der動態網頁技術<br><br><br>
              <i class="cube icon"></i>最重要的 — 巴哈的回應功能
            </p>
            <p>
              <div class="ui buttons">
                <a class="ui button" href="http://semantic-ui.com/">Semantic UI</a>
                <a class="ui button" href="http://php.net/">PHP</a>
              </div>
            </p>
          </div>
          <div class="column">
            <div class="ui icon header">
              <i class="user icon"></i>
              <h2>關於我</h2>
            </div>
            <p>我是海豹，目前是YSITD中的成員<br>YSITD - Young Students' IT Discussion<br>一個由「年輕」學生所組成的小型社群<br>目前人數大致為30人左右<br><br><br><br><br><br><br></p>
            <p>
              <div class="ui buttons">
                <a class="ui button" href="#">YSITD FB粉絲專頁</a>
                <a class="ui button" href="irc://#ysitd@freenode.net">加入我們</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="ui inverted vertical segment">
    <div class="ui very relaxed stackable page grid">
      <div class="row">
        <div class="column">
          <h1 class="center aligned ui inverted header">
            超讚der喔
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="ten wide column">
          <h3 class="ui inverted header">如果你想贊助我</h3>
          <p>
            <del>偷偷說，其實要找我去工作也可以喔(X</del>
          </p>
          <p>
            如果想要贊助我或有問題的話，歡迎Email到<a href="mailto:007seadog@gmail.com">007seadog@gmail.com</a>喔<br>
            自己的學費自己賺。
          </p>
          <div class="ui basic inverted animated button button">
            <div class="visible content">Read More</div>
            <div class="hidden content"><i class="right arrow icon"></i></div>
          </div>
          <div class="ui inverted section divider"></div>
          <h3 class="ui inverted header">網站公告</h3>
          <div class="ui inverted animated selection list">
            <div class="item">
              歡迎回報復原錯誤什麼der
              <div class="right floated">2014/12/1</div>
            </div>
            <div class="item">
              正式啟用
              <div class="right floated">I/Don't/Know</div>
            </div>
          </div>
        </div>
        <div class="six wide column">
          <div class="ui form segment">
            <h3 class="ui header">立即復原</h3>
            <p>無用的按鈕(O</p>
            <div class="field">
              <div class="ui left icon action input">
                <i class="user icon"></i>
                <input name="url" type="text" placeholder="文章網址">
                <div class="ui black submit button">按鈕</div>
              </div>
            </div>
            <div class="ui error message"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical segment">
    <div class="ui stackable center aligned page grid">
      <div class="row">
        <div class="column">
          <h1 class="ui header">
            版務的獨裁、暴力，由我們來制止。
          </h1>
          <div class="ui horizontal divider"><i class="heart icon"></i></div>
        </div>
      </div>
      <div class="four column logo row">
        <div class="column">
          <div class="ui shape">
            <div class="sides">
              <div class="active side">
                <a href="https://github.com/YSITD/backer-of-baha"><i class="huge github icon"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="ui shape">
              <div class="active side">
                <i class="huge facebook icon"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once("dist/footer.php") ?>
</body>

</html>
