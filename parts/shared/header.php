<?php
$categories     = get_the_category();
$category_id    = $categories[0]->cat_ID;

$home_class     = "";
$news_class     = ($category_id == 3)  ? "selected" : "";
$features_class = ($category_id == 4)  ? "selected" : "";
$opinion_class  = ($category_id == 16) ? "selected" : "";
$wespeaks_class = ($category_id == 13) ? "selected" : "";
$arts_class     = ($category_id == 6)  ? "selected" : "";
$sports_class   = ($category_id == 5)  ? "selected" : "";
?>
    <div class="container">
      <div id="logo">
        <div class="header">
          <h1>
            <span class="the">the</span> Wesleyan <span class="argus">Argus</span>
          </h1>
        </div>
        <!-- navigation -->
        <div class="navbar navbar-inverse navbar-first" role="navigation">
          <div class="container">
            <div class="navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a class="<?=$home_class ?>" href="/">Home</a></li>
                <li><a class="<?=$news_class ?>" href="/section/news">News</a></li>
                <li><a class="<?=$features_class ?>" href="/section/features">Features</a></li>
                <li><a class="<?=$opinion_class ?>" href="/section/opinion">Opinion</a></li>
                <li><a class="<?=$wespeaks_class ?>" href="/section/wespeaks">Wespeaks</a></li>
                <li><a class="<?=$arts_class ?>" href="/section/arts">Arts</a></li>
                <li><a class="<?=$sports_class ?>" href="/section/sports">Sports</a></li>
                <li><a id="search"><i class="fa fa-search"></i><input></a></li>
              </ul>
            </div><!--/.navbar-collapse -->
          </div>
        </div>
      </div>
          <div class="row classy-lincoln">
        <div class="col-md-2 date"></div>
        <div class="col-md-8">
          <div class="navbar navbar-second" role="navigation">
              <div class="container">
                <div class="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/about-the-argus">About</a></li>
                    <li><a href="/staff">Staff</a></li>
                    <li><a href="/donate">Donate</a></li>
                    <li><a href="/submit-a-wespeak">Submit a Wespeak</a></li>
                    <li><a href="/submit-a-tip">Submit a tip</a></li>
                    <li><a href="/wesceleb-nomination">Nominate a WesCeleb</a></li>
                  </ul>
                </div><!--/.navbar-collapse -->
              </div>
          </div>
        </div>
        <div class="col-md-2 social-icons">
          <a href="http://www.facebook.com/wesleyanargus" target="_blank"><i class="fa fa-facebook"></i></a>
          <a href="http://twitter.com/wesleyanargus" target="_blank"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
