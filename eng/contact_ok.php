<!doctype html>
<html lang="zh">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
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
            <h1 class="title wow fadeInUp" data-wow-delay="0s">CONTACT</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <div class="contactOk">
          <div class="pageContent">
            <div class="container">


              <div class="txt">
                <div class="title wow fadeInUp" data-wow-delay="0.2s">THANK YOU FOR YOUR MESSAGE</div>
                <div class="subTitle wow fadeInUp" data-wow-delay="0.4s"><span>MESSAGE HAS BEEN SUCCESSFUL!</span></div>
                <div class="info wow fadeInUp" data-wow-delay="0.6s">
                  <div class="description">Thank you for your message<br />
                    Have any questions, please use the contact us messages. Once we receive your message, we will contact you as soon as possible.</div>
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
              <span itemprop="name">Contact</span>
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