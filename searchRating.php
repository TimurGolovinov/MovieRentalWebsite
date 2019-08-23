<?php
$page = "MoviesByRating";
$title = "Movies";
$metaD = "Enjoy the movies";
require 'inc/header.php';
?>
  <div class="row">
        <div class="container first-block top-10-headline">
            <h1 style="margin-bottom:1em; text-align:center; font-size: 4em;">Movie Searched by Rating</h1>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <?php
            // create table layout to display results
            echo "<table style='border: solid 3px #28a745; background-color:#f8f9fa; color: black;margin-bottom:5em;'>";
            echo "<tr><th>Title</th><th>Genre</th><th>Year</th><th>Rating</th></tr>";
            class TableRows extends RecursiveIteratorIterator
            {
                function __construct($it)
                {
                    parent::__construct($it, self::LEAVES_ONLY);
                }
                function current()
                {
                    return "<td style='width:80vw;height:4vw;border:3px solid #28a745;'>" . parent::current(). "</td>";
                }
                function beginChildren()
                {
                    echo "<tr>";
                }
                function endChildren()
                {
                    echo "</tr>" . "\n";
                }
            } 
             // get data fron the input
            $Rating = $_GET['movieRating'];
            $username = 'root';
            $password = '';
            try 
            {
                  //check connection
                $conn = new PDO('mysql:host=localhost;dbname=movies', $username, $password); 
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //run sql query for getting movie info
                $stmt1 = $conn->prepare('SELECT Title, Genre, Year, Rating FROM mytable WHERE Rating = :Rating');
                //run sql query for update search count for movie found
                $stmt2 = $conn->prepare('UPDATE mytable SET searchCounter = searchCounter + 1 WHERE Rating = :Rating');
                $stmt1->bindParam(':Rating', $Rating, PDO::PARAM_STR);
                $stmt2->bindParam(':Rating', $Rating, PDO::PARAM_STR);
                $stmt1->execute();
                $stmt2->execute();

                // set the resulting array to associative
                $result = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
                foreach(new TableRows(new RecursiveArrayIterator($stmt1->fetchAll())) as $k=>$v) {
                    echo $v;
                }
            }
            catch(PDOException $e) 
            {
                echo 'ERROR: ' . $e->getMessage();
            }
            $conn = null;
             // display friendy message if no movies found
            if($stmt1->rowCount() == 0) {
                echo "Sorry, no movies has been found :(";
            } else {
                echo "</table>";
            }
            ?>
        </div>
    </div>
<?php
require 'inc/footer.php';
?>
