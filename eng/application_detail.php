<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/application.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper applicationDetailBox">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="topBox">
        <div class="pic"><img src="../images/in/application7.jpg" alt=""></div>
      </div>
      <div class="mainBox">
        <div class="applicationDetail">
          <div class="pageContent">
            <div class="container wow fadeInUp">
              <div class="box">
                <div class="side">
                  <h1 class="title">Milling Machine</h1>
                </div>
                <div class="description wow fadeInUp">Whether household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports er household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether hes, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether household apr electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether household appliances, consuumer electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether household appliaonsumer electronics or sports ...Whether household appliances, consumer electronicsWhether household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports er household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether household appliances, consumer electronics or sports ...Whether hes, consumer electronics or sports ...Whether household appliance</div>
              </div>
            </div>
            <div class="container wow fadeInUp">
              <div class="box">
                <div class="side">
                  <h2 class="title">Featured Products</h2>
                </div>
                <div class="description wow fadeInUp">
                  <div class="listBox">
                    <? for ($i = 0; $i < 6; $i++) { ?>
                      <div class="item">
                        <a href="#">
                          <div class="pic"><img src="../images/in/products.png" alt=""></div>
                          <h3 class="title">HYDRAULIC CHUCKS</h3>
                          <div class="txt">PRODCUTS CATEGORYPRODCUTS CATEGORYPRODCUTSEGORYP</div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
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
              <span itemprop="name"><a href="application.php" title="news">Application</a></span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Milling Machine</span>
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