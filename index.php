<!-- Meta tags -->
<?php
$page = "home";
$title = "Movies";
$metaD = "Welcome to the movie database";
require 'inc\header.php';
?>
    <!-- add first block of content (with youtube video) -->
    <div class="row">
        <div class="container first-block">
            <h1>Welcome to our Movie Rental Website</h1>
            <p>Please enter movie you would like to watch in the search window at the top of the screen</p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/EoSHaGTNiho"
                    width="1080" height="360" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- add second block of content (with picture of movies) -->
    <div class="row">
        <div class="container second-block">
            <h2>We Recommend</h2>
            <p>Click "Top 10 Movies" at the top to enjoy most frequently searched movies</p>            
        </div>
    </div>
    <div class="movie-covers container-fluid">
        <img src="img/moviecovers.jpg" class="img-fluid" alt="movie covers">
    </div>
<?php
require 'inc\footer.php';
?>
