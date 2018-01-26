<?php
    include_once 'config.php';
    $hero_text = "Songs<br>By Ed";
?>
<!doctype html>
<html>
<?php include_once 'head.php'; ?>
<body>
  <?php
    include_once 'nav-bar.php';
    include_once 'hero_plugin.php';
    include_once 'youtube_player.php'; 
  ?>
  <main>
    <section class="filler">
      <div class="title">ED Sheeran's <br>Songs</div>
      <div class="web-grid-container songs-grid">
      <?php
            $result = mysqli_query($db_con, "SELECT * FROM video_table");
            while($rowval = mysqli_fetch_assoc($result)){
                $title = $rowval['title'];
                $yid = $rowval['yid'];
                echo "<div class='item'>
                        <div class='image'>
                        <img src='//i1.ytimg.com/vi/$yid/mqdefault.jpg' alt=''>
                        <div class='about-item' onclick=ytVideoFetch('$yid')>
                            <i class='material-icons'>play_circle_filled</i>
                        </div>
                      </div>
                        <div class='detail'>
                            <div>$title</div>
                            <a href='https://www.youtube.com/watch?v=$yid' target='_blank' title='Open on YouTube'><i class='material-icons'>info</i></a>
                        </div>
                      </div>";
            }
        ?>
      </div>
    </section>
    </main>
    <?php
        include_once 'footer.php';
    ?>
</body>
</html>
