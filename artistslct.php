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
      <?php include_once 'nav.php' ?>
      <div id="toggle">
        <div class="span"><i class="fas fa-bars"></i></div>
      </div>
    </nav>
    <div id="resize">
      <div class="close-btn">Close</div>
      <?php include_once 'mobilenav.php' ?>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
          <div class="artists-section">
            <div class="inner-width">
              <h1>Our Team</h1>
              <div class="border"></div>
              <div class="artists">
                <?php
                  include_once 'includes/dbconnect.php';
                  $sql = "SELECT * FROM artists";
                  $stmt = mysqli_stmt_init($conn);

                  if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "SQL statement failed";
                  } else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '
                        <a class="artist" href="artist.php?id='.$row['artistID'].'">
                          <img src="assets/'.$row["picture"].'" alt="">
                          <div class="a-name">'.$row["firstname"]. " " .$row["lastname"].'</div>
                          <div class="a-job">'.$row["artisttype"].'</div>
                        </a>';
                      }
                    }
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-1">
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
