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
                </div>
                <div class="picBox wow fadeInUp" data-wow-delay="0.2s">
                  <div class="pic"><img src="../images/in/products.png" alt=""></div>
                </div>
                <div class="info wow fadeInUp" data-wow-delay="0.4s">
                  <div class="description">Military Products<br />
                    Optoelectronic Industry<br /><br />
                    <ul>
                      <li>Each jaw can be adjusted independently, making the chuck suitable for clamping irregular shaped work pieces.</li>
                      <li>Any specification can be customized.</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="detailTitleBox wow fadeInUp" data-wow-delay="0s">
                <div class="title">INDEPENDENT CHUCKS</div>
                <div class="subTitle">Products & Specifications</div>
                <div class="popup-gallery">
                  <a class="lightBox image-link" href="../images/in/light_box.jpg">Chuck code principles and instructions</a>
                </div>
              </div>

              <div class="content wow fadeInUp" data-wow-delay="0.2s">
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
                      <? for ($i = 0; $i < 9; $i++) { ?>
                        <tr>
                          <td><a href="products_detail.php">L421U11</a></td>
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
                      <? } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="notice">If the dimension and specifications change, please take the confirmation drawing as standard.</div>
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
              <span itemprop="name">Independent Chucks</span>
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
    $(document).ready(function() {
      $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          titleSrc: function(item) {
            return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
          }
        }
      });
    });
  </script>
</body>

</html>