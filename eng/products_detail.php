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
            <div class="title wow fadeInUp" data-wow-delay="0s">PRODUCTS</div>
          </div>
        </div>
      </div>

      <div class="mainBox">

        <div class="products3">
          <div class="pageContent">
            <div class="container">

              <div class="topInfo">
                <div class="titleBox wow fadeInUp" data-wow-delay="0s">
                    <div class="model">L Series</div>
                  <h1 class="title">INDEPENDENT CHUCKS</h1>
                  <div class="subTitle">INDEPENDENT CHUCKS</div>
                </div>
                <div class="picBox wow fadeInUp" data-wow-delay="0.2s">
                  <div class="pic"><img src="../images/in/products.png" alt=""></div>
                </div>
                <div class="info wow fadeInUp" data-wow-delay="0.4s">
                  <div class="subTitle">Application</div>
                  <div class="description">Military Products<br />
                    Optoelectronic Industry</div>
                  <div class="subTitle">Features</div>
                  <div class="description">
                    <ul>
                      <li>Each jaw can be adjusted independently, making the chuck suitable for clamping irregular shaped work pieces.</li>
                      <li>Any specification can be customized.</li>
                    </ul>
                  </div>

                  <div class="btnBox">
                    <button class="inquiry">ADD TO INQUIRY</button>
                    <button class="download">PDF DOWNLOAD</button>
                  </div>
                </div>
              </div>

              <div class="content wow fadeInUp" data-wow-delay="0s">
                <div class="tableBox">
                  <table>
                    <thead>
                      <tr>
                        <th>Model</th>
                        <th>A</th>
                        <th>B</th>
                        <th>C</th>
                        <th>D</th>
                        <th>E</th>
                        <th>F</th>
                        <th>G</th>
                        <th>H</th>
                        <th>I</th>
                        <th>J</th>
                        <th>K</th>
                        <th>L</th>
                        <th>Max. Speed<br />(r.p.m)</th>
                        <th>Max. Gripping<br />Force(kgf)</th>
                        <th>Spindle<br />Noses</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>L421U11</td>
                        <td>530</td>
                        <td>135</td>
                        <td>120</td>
                        <td>196.869</td>
                        <td>23</td>
                        <td>235</td>
                        <td>8-M20</td>
                        <td>29.4</td>
                        <td>30</td>
                        <td>56</td>
                        <td>89</td>
                        <td>M20</td>
                        <td>1300</td>
                        <td>12500</td>
                        <td>A2-11</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="notice wow fadeInUp" data-wow-delay="0.2s">If the dimension and specifications change, please take the confirmation drawing as standard.</div>

              <div class="contentInfo">
                <img src="../images/in/products4.jpg" alt="">
              </div>


              <div class="detailTitleBox wow fadeInUp" data-wow-delay="0s">
                <div class="title">PURCHASE</div>
                <div class="subTitle">Accessories</div>
              </div>
              <div class="listBox wow fadeInUp" data-wow-delay="0.2s">
                <? for ($i = 0; $i < 2; $i++) { ?>
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


              <div class="pageBtnBox wow fadeInUp" data-wow-delay="0s">
                <a class="back" href="news.php">BACK TO LIST</a>
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
              <span itemprop="name"><a href="products_2.php">D Series</a></span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name"><a href="products_3.php">Independent Chucks</a></span>
              <meta itemprop="position" content="3">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">L421U15</span>
              <meta itemprop="position" content="4">
            </li>
          </ul>
        </div>
      </div>


    </main>

    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script src="../plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.image-link').magnificPopup({
        type: 'image'
      });
    });
  </script>
</body>

</html>