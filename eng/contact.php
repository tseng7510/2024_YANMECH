<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper contactBox">
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
        <div class="contact">
          <div class="pageContent">
            <div class="container">
              <div class="content">
                <div class="infoBox wow fadeInUp" data-wow-delay="0s">
                  <div class="title">Contact Information</div>
                  <ul>
                    <li class="address">
                      <div class="label">ADD.</div>No.2, Gongye 19th Rd., Taiping Dist., Taichung City 411014, Taiwan
                    </li>
                    <li class="tel">
                      <div class="label">TEL.</div><a href="tel:+886422715886">+886-4-22715886</a>
                    </li>
                    <li class="fax">
                      <div class="label">FAX.</div>+886-4-22712200
                    </li>
                    <li class="mail">
                      <div class="label">MAIL.</div>
                      <a href="mailto:info@apach.com.tw">info@yanmech.com.tw</a>
                    </li>
                  </ul>
                </div>

                <form class="formBox wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="info">Please fill in the following. We will contact with you immediately after receipt.</div>
                  <ul>
                    <li class="inputItem full wow fadeInUp required">
                      <label for="name">Name</label>
                      <input type="text" class="inputControl" id="name">
                    </li>
                    <li class="inputItem full wow fadeInUp required">
                      <label for="company">Company name</label>
                      <input type="text" class="inputControl" id="company">
                    </li>
                    <li class="inputItem full wow fadeInUp required">
                      <label for="name">Title</label>
                      <input type="text" class="inputControl" id="title">
                    </li>
                    <li class="inputItem full wow fadeInUp required">
                      <label for="email">E-mail</label>
                      <input type="text" class="inputControl" id="email">
                    </li>
                    <li class="inputItem full wow fadeInUp">
                      <label for="tel">Address</label>
                      <input type="text" class="inputControl" id="address">
                    </li>
                    <li class="inputItem full wow fadeInUp">
                      <label for="message">Message</label>
                      <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                    </li>

                    <li class="inputItem full wow fadeInUp required">
                      <label for="password">code</label>
                      <input type="password" class="inputControl" id="password">
                      <span class="checkImg"><img src="../images/check_img.jpg"></span>
                      <button class="reBtn"></button>
                    </li>
                  </ul>
                  <div class="pageBtnBox wow fadeInUp">
                    <button class="send" type="button" onclick="javascript:location.href='contact_ok.php'">SEND MESSAGE</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="mapBox wow fadeInUp" data-wow-delay="0.4s">
              <div class="pic"><a href="https://www.google.com/maps?ll=24.106787,120.720008&z=19&t=m&hl=zh-TW&gl=TW&mapclient=embed&cid=4217013171208583320" target="_blank"><img src="../images/in/map.jpg" alt=""></a></div>
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