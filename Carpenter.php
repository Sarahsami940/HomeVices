<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="Pic/iconn/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Pic/iconn/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Pic/iconn/favicon-16x16.png">
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
    <link rel="stylesheet" href="Carpenter.css">
    <title>Carpenter</title>
</head>
<style>
        .review-sec{
   width: 100%;
  margin: 20px;
  font-size: 1.25em;
font-family: 'Roboto';
text-align: left !important; 
  padding: 20px;

}
.footer{
    margin-top:50vh !important;
}

.reviews{
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  background-color: #fff;
  font-size: 1.25em;
  text-align:left !important;
}
.paraa{
text-align:left !important;
margin: 10px !important;}
.reviews h2{
  font-family: 'Belleza' !important;
  text-align:center;
}
    </style>
<body>
    <section class="header">
        <div class="banner">
            <nav>
                <img class="logo" src="Pic/home - vices-logo(4) 1.png" alt="logo">
                <a href="review.php" target="_blank" rel="">REVIEW</a>
            <a href="contact.php" target="_blank" rel="">CONTACT</a>
            <a href="about.html" target="_blank" rel="">ABOUT</a>
            <a href="book.html" target="_blank" rel="">BOOK NOW</a>
             <a href="our-services.html" target="_blank" rel="">SERVICES</a>
             <a href="index.html" target="_blank" rel="">HOME</a>
            </nav>
            <div class="tag">
                <h1 class="title">CARPENTER</h1>
            </div>
        </div>

    </section>
    <section class="main">
        <h1 class="heading">DETAILED DESCRIPTION</h1>
        <p>Our carpenter service provides a comprehensive and professional solution for all your carpentry needs.
            Whether it's a custom-built furniture piece, a home renovation, or a repair, our team of experienced and
            skilled carpenters is dedicated to providing high-quality and durable carpentry services. We use only the
            best materials and equipment to ensure that your carpentry projects are crafted to perfection.</p>

        <p>At our carpenter service, we understand the importance of creativity and attention to detail in carpentry
            work. That's why we work closely with you to understand your vision and preferences and provide you with
            customized solutions that cater to your style and needs. We also offer professional advice and
            recommendations to help you make informed decisions about your carpentry projects.</p>

        <p>We also understand the importance of reliability and timeliness in carpentry work. That's why we offer
            efficient and timely service, allowing you to enjoy your carpentry projects without delay.</p>

        <p> In summary, our carpenter service is dedicated to providing you with a professional, personalized, and
            stress-free carpentry experience. Whether it's a custom-built furniture piece, a home renovation, or a
            repair, you can trust us to deliver exceptional results that exceed your expectations.</p>
            <a href="book.html"><button>Book now</button></a>
            <div class="review-sec">
    <div class="reviews">
    <h2>REVIEWS</h2>
        <?php
        $con = mysqli_connect("localhost","root","ashy1234$");
        if(!$con){
            echo "couldn't connect to server";
            die();
        }
        $DB = mysqli_select_db($con,"home_vices");
        if (!$DB){
            echo"Couldn't select database";
        }
        $currentFile = $_SERVER['PHP_SELF'];
        $currentPage = basename($currentFile);

        //echo "Current Page: " . $currentPage;
        
        $sql = "SELECT * FROM review WHERE serviceName = 'Carpenter'";

        // Execute the query
        $result = $con->query($sql);

        // Initialize an array variable to store the rows
        $rows = array();

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Loop through the result set and store each row in the array
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        } else {
            echo "No reviews yet.";
        }
        
        foreach ($rows as $row) {
           
            echo "<p class='paraa'>NAME: " . $row['clientName'] . "<br>";
            echo "REVEIW: " . $row["review"] . "<br>";
            echo "RATING: " . $row["rating"] . "<br>";
            echo "DATE: " . $row["date"] . "<br></p>";
        }
        ?> 
    </div>
    </div>


    </section>
    <section class="footer">
        <p class="last-text">We provide services infused with the spirit of advancing lifestyles and minimalist philosophies.</p>

        <a href="https://www.facebook.com/profile.php?id=100049033391215"><i class="fa fa-facebook-square fa-2x facebook" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com"><i class="fa fa-linkedin-square fa-2x facebook" aria-hidden="true"></i></a>
        <a href="https://www.pinterest.com"><i class="fa fa-pinterest-square fa-2x facebook" aria-hidden="true"></i></a>
        <a href="https://twitter.com/Devil86247985"><i class="fa fa-twitter-square fa-2x facebook" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/khushbakhtkhan_/"><i class="fa fa-instagram fa-2x facebook" aria-hidden="true"></i></a>
        
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