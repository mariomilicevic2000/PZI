<html>
    <head>
        <link href="card.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/5f645724e1.js"></script>
    </head>
    <body>
       <?php
        $conn = mysqli_connect('localhost', 'MilicevicM', 'PZI_MilicevicM1', 'MilicevicM');
        $sql = "SELECT * FROM Testimonials";
        $result = $conn->query($sql);
        echo '<section class="testimonial-container">';
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '
                <div class="testimonial">
                    <div class="text-t text">
                        <p>' . $row["comment"] . '</p>
                        <i class="fa fa-quote-right quote"></i>
                    </div>
                    <div class="footer-t">
                        <div class="stars-t image rating">
                            <p>' . $row["rating"] . '<i class="fa fa-star"></i></p>
                            </div>
                            <div class="name-t person">
                                <p>' . $row["fname"] . ' ' . $row["lname"] . '</p>
                                </div>
                            </div>
                        </div>';
            }
            echo '</section>';
        } else {
            echo "No results";
        }
        $conn->close();
       ?> 
    </body>
</html>