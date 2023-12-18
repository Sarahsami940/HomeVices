<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="Pic/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Pic/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Pic/icon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Noto+Sans&family=PT+Serif&family=Roboto:wght@100&display=swap"
    rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Belleza&family=Dancing+Script&family=Noto+Sans&family=PT+Serif&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Review Rating Page</title>
  <link rel="stylesheet" type="text/css" href="review.css">
</head>
<body>
    <section class="first-sec">
        <div class="banner">
                <nav>
                    <img class="logo" src="Pic/home - vices-logo(4) 1.png" alt="logo">
                    <a href="review.php" target="_blank" rel="noopener noreferrer">REVIEW</a>
          <a href="contact.php" target="_blank" rel="noopener noreferrer">CONTACT</a>
          <a href="about.html" target="_blank" rel="noopener noreferrer">ABOUT</a>
          <a href="book.html" target="_blank" rel="noopener noreferrer">BOOK NOW</a>
          <a href="our-services.html" target="_blank" rel="noopener noreferrer">SERVICES</a>
          <a href="index.html" target="_blank" rel="noopener noreferrer">HOME</a>
                </nav>
                <div class="tag">
                    <div class="title">
                    <h2>Review/Rating</h2>
                    <p>We strive for excellence. Rate our service and leave a review.</p>
                </div>
            </div>
        </div>
        </section>
            <section class="second-sec">
                <div class="left-col">
            <form id="reviewForm" action="review_process.php" method="POST">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
              <label for="name">Service  Name:</label>
              <input type="text" id="name" name="service" required>
              <label for="review">Review:</label>
              <textarea id="review" name="review" required></textarea>
        
              <label for="rating">Rating:</label>
              <div class="rating">
                <input type="radio" id="star5" name="rating" value="5" required>
                <label for="star5"></label>
                <input type="radio" id="star4" name="rating" value="4" required>
                <label for="star4"></label>
                <input type="radio" id="star3" name="rating" value="3" required>
                <label for="star3"></label>
                <input type="radio" id="star2" name="rating" value="2" required>
                <label for="star2"></label>
                <input type="radio" id="star1" name="rating" value="1" required>
                <label for="star1"></label>
              </div>
              <button type="submit">Submit</button>
            </form>
          </div>
          <?php
              // include 'review_process.php';
              // $rev_get = mysqli_query($con, "SELECT review FROM review WHERE clientID = 38");
              // $rev = null;
              
              // if($rev_get->num_rows > 0){
              //     $res = $rev_get->fetch_assoc();
              //     $rev = $res['review'];
              // }
            ?>
          <!-- <div id="reviewsContainer"> <?php echo "Review: "  ?></div> -->
            </section>
        
</div>
</section>
<section class="last-sec">
  <p class="last-text">We provide services infused with the spirit of advancing lifestyles and minimalist philosophies.</p>
        <a href="www.facebook.com"><i class="fa fa-facebook-square fa-2x facebook" aria-hidden="true"></i></a>
        <a href="www.linkedin.com"><i class="fa fa-linkedin-square fa-2x facebook" aria-hidden="true"></i></a>
        <a href="www.pinterest.com"><i class="fa fa-pinterest-square fa-2x facebook" aria-hidden="true"></i></a>
        <a href="www.twitter.com"><i class="fa fa-twitter-square fa-2x facebook" aria-hidden="true"></i></a>
        <a href="www.instagram.com"><i class="fa fa-instagram fa-2x facebook" aria-hidden="true"></i></a>
        <h3>Quick Links</h3>
        <nav>
        <a href="contact.php" target="_blank" rel="noopener noreferrer">Contact</a>
            <a href="about.html" target="_blank" rel="noopener noreferrer">About</a>
            <a href="our-services.html" target="_blank" rel="noopener noreferrer">Serivces</a>
            <a href="index.html" target="_blank" rel="noopener noreferrer">Home</a>
  </nav>
</section>
</body>
</html>