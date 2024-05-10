<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/brochure.css">
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
            <h1 class="title wow fadeInUp" data-wow-delay="0s">BROCHURE</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <div class="brochure">
          <div class="pageContent">
            <div class="container">
              <div class="content">
                <div class="listBox">
                  <? for ($i = 0; $i < 9; $i++) { ?>
                    <div class="item">
                      <div class="box">
                        <div class="infoBox">
                          <a href="#" class="more">DOWNLOAD</a>
                          <div class="info">
                            <h2 class="title">YANMECH BROCHURE</h2>
                            <div class="description">Provide you with complete product detailed specification information at one time, and understand YANMECH INDUSTRIAL CO., LTD efficiently</div>
                          </div>
                        </div>
                        <div class="picBox">
                          <div class="pic"><img src="../images/in/brochure.jpg" alt=""></div>
                        </div>
                      </div>
                    </div>
                  <? } ?>
                </div>
                <div class="control"></div>
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
              <span itemprop="name">Support</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Brochure</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>
    </main>



    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $(function() {
      $('.brochure .listBox').slick({
        draggable: true,
        arrows: true,
        dots: false,
        fade: true,
        speed: 900,
        infinite: true,
        appendArrows: '.brochure .control',
        prevArrow: '<button type="button" class="slick-prev">PREV</button>',
        nextArrow: '<button type="button" class="slick-next">NEXT</button>'
      })
    })
  </script>
</body>

</html>