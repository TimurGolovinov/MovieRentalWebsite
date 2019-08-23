<?php
$page = "top10";
$title = "Movies";
$metaD = "Enjoy top 10 movies";
require 'inc/header.php';
?>
    <div class="row">
        <div class="container first-block top-10-headline">
            <h1 style="margin-bottom:1em; text-align:center; font-size: 4em;">Top 10 Movies</h1>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <?php
             // create table layout to display results
            echo "<table style='border: solid 3px #28a745; background-color:#f8f9fa; color: black;margin-bottom:5em;'>";
            echo "<tr><th>Title</th><th>Genre</th><th>Year</th><th>Searched</th></tr>";
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
            $username = 'root';
            $password = '';
            try 
            {
                $conn = new PDO('mysql:host=localhost;dbname=movies', $username, $password); 
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //run sql query for getting movie info
                $stmt = $conn->prepare('SELECT Title, Genre, Year, searchCounter FROM mytable ORDER BY searchCounter DESC LIMIT 10');
                $stmt->execute();

                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                    echo $v;
                }
            }
            catch(PDOException $e) 
            {
                echo 'ERROR: ' . $e->getMessage();
            }
            $conn = null;
                echo "</table>";
            ?>
        </div>
    </div>
<?php
require 'inc/footer.php';
?>
