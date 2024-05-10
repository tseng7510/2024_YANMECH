<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/oem.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper oemDetailBox">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage" aria-label="main" itemscope>

      <div class="mainBox">
        <div class="oemDetail">
          <div class="pageContent">
            <div class="content">
              <div class="container">
                <div class="pic"><img src="../images/in/oemd.jpg" alt=""></div>

                <div class="titleBox wow fadeInUp" data-wow-delay="0s">
                  <div class="pageTitle">OEM</div>
                  <h1 class="title">Semiconductor Industry</h1>
                </div>
                <div class="description wow fadeInUp" data-wow-delay="0.2s">The integration of Taiwan’s semiconductor industry and CNC machining requires precision machining and manufacturing of many precision modules and components. YANG MING’s equipment can provide this level of precision and efficiency.</div>
                <a href="#" class="back wow fadeInUp" data-wow-delay="0.4s">BACK TO LIST</a>
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
              <span itemprop="name"><a href="oem.php" title="news">OEM</a></span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Semiconductor Industry</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>
    </main>



    <?php include('include_login.php'); ?>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>