<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/inquiry.css">
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
            <h1 class="title wow fadeInUp" data-wow-delay="0s">INQUIRY CART</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <div class="inquiry">
          <div class="pageContent">
            <div class="container">

              <div class="inquiryList">
                <table class="wow fadeInUp" data-wow-delay="0.2s">
                  <thead>
                    <tr>
                      <td></td>
                      <td>Product name</td>
                      <td>Quantity</td>
                      <td>Delete</td>
                    </tr>
                  </thead>
                  <tbody>
                    <? for ($i = 0; $i < 9; $i++) { ?>
                      <tr>
                        <td><img src="../images/in/products.png" alt=""></td>
                        <td>CNC Double Column Machining Center</td>
                        <td>
                          <div class="qtyBox">
                            <button class="btn less"></button>
                            <input type="text" class="qty form-control" value="1">
                            <button class="btn add"></button>
                          </div>
                        </td>
                        <td>
                          <button class="del"></button>
                        </td>
                      </tr>
                    <? } ?>
                  </tbody>
                </table>
              </div>
              <div class="infoBox">
                <div class="box">

                  <form class="formBox">
                    <ul>
                      <li class="inputItem wow fadeInUp required">
                        <label for="name">Name</label>
                        <input type="text" class="inputControl" id="name" required>
                      </li>
                      <li class="inputItem wow fadeInUp required">
                        <label for="company">Company name</label>
                        <input type="text" class="inputControl" id="company" required>
                      </li>
                      <li class="inputItem wow fadeInUp required">
                        <label for="country">Title</label>
                        <input type="text" class="inputControl" id="title" required>
                      </li>
                      <li class="inputItem wow fadeInUp required">
                        <label for="email">E-mail</label>
                        <input type="text" class="inputControl" id="email" required>
                      </li>
                      <li class="inputItem full wow fadeInUp required">
                        <label for="tel">Address</label>
                        <input type="text" class="inputControl" id="address" required>
                      </li>
                      <li class="inputItem full wow fadeInUp required">
                        <label for="message">Massage</label>
                        <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                      </li>

                      <li class="inputItem wow fadeInUp required">
                        <label for="password">Code</label>
                        <input type="password" class="inputControl" id="password" required>
                        <span class="checkImg"><img src="../images/check_img.jpg"></span>
                        <button class="reBtn"></button>
                      </li>
                    </ul>

                    <div class="pageBtnBox wow fadeInUp">
                      <button class="send">Send Massage</button>
                    </div>
                  </form>
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
              <span itemprop="name">Inquiry Cart</span>
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