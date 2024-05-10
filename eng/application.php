<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/application.css">
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
            <h1 class="title wow fadeInUp" data-wow-delay="0s">APPLICATION</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <div class="application">
          <div class="pageContent">
            <div class="container">
              <div class="listBox">
                <div class="item">
                  <a href="application_detail.php">
                    <div class="picBox">
                      <div class="pic"><img src="../images/in/application1.jpg" alt=""></div>
                      <h2 class="title"><span>Lathe</span></h2>
                    </div>
                  </a>
                </div>
                <div class="item">
                  <a href="application_detail.php">
                    <div class="picBox">
                      <div class="pic"><img src="../images/in/application2.jpg" alt=""></div>
                      <h2 class="title"><span>Milling Machine</span></h2>
                    </div>
                  </a>
                </div>
                <!-- <div class="item">
                  <a href="application_detail.php">
                    <div class="picBox">
                      <div class="pic"><img src="../images/in/application3.jpg" alt=""></div>
                      <h2 class="title"><span>Drilling Machine</span></h2>
                    </div>
                  </a>
                </div> -->
                <div class="item">
                  <a href="application_detail.php">
                    <div class="picBox">
                      <div class="pic"><img src="../images/in/application4.jpg" alt=""></div>
                      <h2 class="title"><span>Grinding Machine</span></h2>
                    </div>
                  </a>
                </div>
                <div class="item">
                  <a href="application_detail.php">
                    <div class="picBox">
                      <div class="pic"><img src="../images/in/application5.jpg" alt=""></div>
                      <h2 class="title"><span>Thread Cutting Machine</span></h2>
                    </div>
                  </a>
                </div>

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
              <span itemprop="name">Application</span>
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