<?php
  include_once 'config.php';
  $hero_text = "Ed Sheeran<br>Official"; 
?>
<!doctype html>
<html>
<?php include_once 'head.php'; ?>
<body>
  <?php
    include_once 'nav-bar.php';
    include_once 'hero_plugin.php';
  ?>
  <main>  
    <section class="filler">
      <div class="title">LATEST NEWS</div>
      <div class="web-grid-container">
        <div class="item">
          <div class="image">
            <img src="image/news/Ed-Snowglobe.jpg" alt="">
            <div class="about-item">
              Create your own #PerfectSnowGlobe video and share it with your friends...
            </div>
          </div>
          <div class="detail">
            <div class="date">07 Dec 2017</div>
            <a href="#"><i class="material-icons">info</i></a>
          </div>
        </div>
        <div class="item">
          <div class="image">
            <img src="image/news/News-tile.jpg" alt="">
            <div class="about-item">
              Create your own #PerfectSnowGlobe video and share it with your friends...
            </div>
          </div>
          <div class="detail">
            <div class="date">07 Dec 2017</div>
            <a href="#"><i class="material-icons">info</i></a>
          </div>
        </div>
        <div class="item">
          <div class="image">
            <img src="image/news/PERFECT-screen-grab-2.jpg" alt="">
            <div class="about-item">
              Create your own #PerfectSnowGlobe video and share it with your friends...
            </div>
          </div>
          <div class="detail">
            <div class="date">07 Dec 2017</div>
            <a href="#"><i class="material-icons">info</i></a>
          </div>
        </div>
        <div class="item">
          <div class="image">
            <img src="image/news/gah.jpg" alt="">
            <div class="about-item">
              Create your own #PerfectSnowGlobe video and share it with your friends...
            </div>
          </div>
          <div class="detail">
            <div class="date">07 Dec 2017</div>
            <a href="#"><i class="material-icons">info</i></a>
          </div>
        </div>
        <div class="item">
          <div class="image">
            <img src="image/news/ed-arm.jpg" alt="">
            <div class="about-item">
              Create your own #PerfectSnowGlobe video and share it with your friends...
            </div>
          </div>
          <div class="detail">
            <div class="date">07 Dec 2017</div>
            <a href="#"><i class="material-icons">info</i></a>
          </div>
        </div>
      </div>
    </section>  
  </main>
  <?php
    include_once 'footer.php';
  ?>
</body>
</html>