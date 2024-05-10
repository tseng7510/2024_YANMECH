<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
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
            <h1 class="title wow fadeInUp" data-wow-delay="0s">PRODUCTS</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">

        <div class="products2">
          <div class="pageContent">
            <div class="container">

              <div class="listBox wow fadeInUp" data-wow-delay="0.4s">
                <? for ($i = 0; $i < 5; $i++) { ?>
                  <div class="item">
                    <div class="info">
                      <div class="titleBox">
                        <div class="model">DSeries</div>
                        <h2 class="title">INDEPENDENT CHUCKS</h2>
                      </div>
                      <div class="description">Each jaw can be adjusted independently, making the chuck suitable for clamping irregular shaped work pieces. Each jaw can be adjusted independently, making the chuck suitable for clamping irregular shaped work pieces. Each jaw can be adjusted independently, making the chuck suitable for clamping irregular shaped work pieces. Each jaw can be adjusted independently, making the chuck suitable for clamping </div>
                      <a href="products_3.php" class="inMore">LEARN MORE</a>
                    </div>
                    <div class="pic"><img src="../images/in/products3.png" alt=""></div>
                  </div>
                <? } ?>
              </div>

              <div class="description">Each jaw can be adjusted independently, making the chuck suitable for clamping irregular shaped work pieces. Each jaw can be adjusted independently, making the chuck suitable for clamping irregular shaped work pieces. Each jaw can be adjusted independently, making the chuck suitable for clamping irregular shaped work pieces. Each jaw can be adjusted independently, making the chuck suitable for clamping</div>

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
              <span itemprop="name">D Series</span>
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