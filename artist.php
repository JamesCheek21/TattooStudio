<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name ="viewport" content="width=device-width, intitial-scale=1.0">
  <title>Living Colour</title>

  <!-- stylesheet -->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
  <script src="js/javascript.js"></script>
  <!-- bootstrap cdns -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" />
</head>

<body>
  <!-- start of wrapper !-->
  <div class="wrapper">

    <!-- start of nav !-->
    <nav>
      <a href="index.php"><span id="brand"><img src="assets/logo.jpg" alt="logo"></span></a>

      <ul id="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="artistslct.php">Artists</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="reviews.html">Reviews</a></li>
      </ul>

      <div id="toggle">
        <div class="span"><i class="fas fa-bars"></i></div>
      </div>
    </nav>
    <div id="resize">
      <div class="close-btn">Close</div>

      <ul id="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="artistslct.php">Artists</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="reviews.html">Reviews</a></li>
      </ul>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-3">
          <div class="artistimg">
            <?php
            include_once 'includes/dbconnect.php';
            if (isset($_GET['id'])) {
              $id = (int)$_GET['id'];
              $query_fetch = mysqli_query($conn, "SELECT p.*, a.* FROM pictures p, artists a WHERE a.artistID = '$id' AND p.artistID=a.artistID");

              $show = mysqli_fetch_array($query_fetch);
                echo '<img src=assets/'.$show["picture"].' style="width: 100%;">';
              } // isset brace
            else {
              echo "It is not set.";
            }
             ?>

          </div>
        </div>
        <div class="col-lg-5">
          <div class="artistdesc">
            <?php
            if (isset($_GET['id'])) {
              $id = (int)$_GET['id'];
              $query_fetch = mysqli_query($conn, "SELECT p.*, a.* FROM pictures p, artists a WHERE a.artistID = '$id' AND p.artistID=a.artistID");

              $show = mysqli_fetch_array($query_fetch);
                echo '
                  <h1>'.$show["firstname"]. " " .$show["lastname"].'</h1>
                  <h3>'.$show["bio"].'</h3>
                ';
              } // isset brace
            else {
              echo "It is not set.";
            }
             ?>
          </div>
        </div>
        <div class="col-lg-2">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
          <div class="gallery-section">
            <div class="inner-width">
              <h1>My Work</h1>
              <div class="border"></div>
              <div class="gallery" id="gallery">
                <?php
                include_once 'includes/dbconnect.php';
                if (isset($_GET['id'])) {
                  $id = (int)$_GET['id'];
                  $query_fetch = mysqli_query($conn, "SELECT p.*, a.* FROM pictures p, artists a WHERE a.artistID = '$id' AND p.artistID=a.artistID");

                  while($show = mysqli_fetch_array($query_fetch)) {
                    echo '<a href="assets/'.$show["filename"].'" class="image">
                      <img src="assets/'.$show["filename"].'" >
                    </a>';
                    } // while loop brace
                  } // isset brace
                else {
                  echo "It is not set.";
                }
                 ?>
                <!--<a href="assets/1.png" class="image">
                  <img src="assets/1.png" alt="">
                </a>
                <a href="assets/2.png" class="image">
                  <img src="assets/2.png" alt="">
                </a>
                <a href="assets/3.png" class="image">
                  <img src="assets/3.png" alt="">
                </a>
                <a href="assets/4.png" class="image">
                  <img src="assets/4.png" alt="">
                </a>
                <a href="assets/5.png" class="image">
                  <img src="assets/5.png" alt="">
                </a>
                <a href="assets/6.png" class="image">
                  <img src="assets/6.png" alt="">
                </a>
                <a href="assets/7.png" class="image">
                  <img src="assets/7.png" alt="">
                </a>
                <a href="assets/8.png" class="image">
                  <img src="assets/8.png" alt="">
                </a>

                <a href="assets/1.jpg" class="image">
                  <img src="assets/1.jpg" alt="">
                </a>
                <a href="assets/2.jpg" class="image">
                  <img src="assets/2.jpg" alt="">
                </a>
                <a href="assets/3.jpg" class="image">
                  <img src="assets/3.jpg" alt="">
                </a>
                <a href="assets/4.jpg" class="image">
                  <img src="assets/4.jpg" alt="">
                </a>
                <a href="assets/5.jpg" class="image">
                  <img src="assets/5.jpg" alt="">
                </a>
                <a href="assets/6.jpg" class="image">
                  <img src="assets/6.jpg" alt="">
                </a>-->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2">
        </div>
      </div>
    </div>
  </div>
  <!-- end of wrapper !-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.1.0.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/slick/slick.min.js"></script>

  <script type="text/javascript">
  $(".gallery").magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery:{
      enabled: true
    }
  });
    $("#toggle").click(function() {
      $(this).toggleClass('on');
      $("#resize").toggleClass("active");
    });

    $("#resize ul li a").click(function() {
      $(this).toggleClass('on');
      $("#resize").toggleClass("active");
    });

    $(".close-btn").click(function() {
      $(this).toggleClass('on');
      $("#resize").toggleClass("active");
    });
    TweenMax.from("#brand", 1, {
      delay: 0.4,
      opacity: 0,
      ease: Expo.easeInOut
    })
    TweenMax.staggerFrom("#menu li a", 1, {
      delay: 0.4,
      opacity: 0,
      ease: Expo.easeInOut
    }, 0.1);
    TweenMax.from(".container-fluid", 2, {
      delay: 0.4,
      opacity: 0,
      ease: Expo.easeInOut
    }, 0.1);

    new WOW().init();
  </script>
</body>

</html>
