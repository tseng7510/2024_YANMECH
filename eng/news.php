<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <?php include('include_banner.php'); ?>
        <div class="unitTitleBox">
          <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">NEWS</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <div class="newsList">
          <div class="pageContent">
            <div class="container">
              <div class="topNews">
                <div class="picBox wow fadeInLeft" data-wow-delay="0s">
                  <time>August 01 .2023</time>
                  <div class="pic"><img src="../images/index/news.jpg" alt=""></div>
                </div>
                <div class="info wow fadeInRight" data-wow-delay="0.2s">
                  <h2 class="title">2023 TIMTOS Taipei International Machine Tool Show “Invitation Letter”</h2>
                  <div class="description">Whether household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...</div>
                  <a href="news_detail.php" class="inMore">LEARN ALL</a>
                  </a>
                </div>
              </div>
              <div class="listBox">

                <? for ($i = 0; $i < 9; $i++) { ?>
                  <div class="item wow fadeInLeft" data-wow-delay="0s">
                    <a href="news_detail.php" class="indexMore">
                      <div class="picBox">
                        <time>August 01 .2023</time>
                        <div class="pic"><img src="../images/index/news.jpg" alt=""></div>
                      </div>
                      <div class="info">
                        <h2 class="title">2023 TIMTOS Taipei International Machine Tool Show “Invitation Letter”</h2>
                        <div class="description">Whether household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...</div>
                      </div>
                    </a>
                  </div>
                <? } ?>

              </div>
            </div>

            <div class="pageBox wow fadeInUp" data-wow-delay="0.2s">
              <div class="container">
                <ul class="pagination">
                  <li class="controls"><a class="prev" href="#" title="Previous">PREV</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li class="active"><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li class="controls"><a class="next" href="#" title="Next">NEXT</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="breadcrumbBox">
        <div class="container">
          <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <a href="index.php" title="index" itemprop="item">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">News</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>
    </main>



    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>