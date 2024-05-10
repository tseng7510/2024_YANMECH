<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper productsBox">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <?php include('include_banner.php'); ?>
        <div class="unitTitleBox">
          <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">PRODUCTS FILTER</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">

        <div class="productsSearch">
          <div class="pageContent">
            <div class="container">



              <div class="topInfo wow fadeInUp" data-wow-delay="0s">Search Results ｜ <span>6 items</span></div>
              <div class="detailTitleBox wow fadeInUp" data-wow-delay="0s">
                <div class="title">XXXXXXXXXXXX</div>
              </div>
              <div class="listBox wow fadeInUp" data-wow-delay="0.2s">
                <? for ($i = 0; $i < 15; $i++) { ?>
                  <div class="item">
                    <a href="#">
                      <div class="picBox">
                        <div class="pic"><img src="../images/in/products.png" alt=""></div>
                      </div>
                      <div class="info">
                        <div class="title">HARD TOP JAWS</div>
                        <div class="model">PDI-15</div>
                        <div class="more">LEARN MORE</div>
                      </div>
                    </a>
                  </div>
                <? } ?>
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
              <span itemprop="name">Product Filter</span>
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