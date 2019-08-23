<?php
$page = "top10";
$title = "Movies";
$metaD = "Enjoy top 10 movies";
require 'inc/header.php';
?>

    <div class="row">
        <div class="container first-block top-10-headline">
            <h1 style="margin-bottom:1em; text-align:center; font-size: 4em;">Search Categories</h1>
        </div>
    </div>

    <div class="container">
        <div class="container">
            <div class="row">
            <h2 class="col-6">Title</h2>
            <form class="col-6 form-inline my-2 my-lg-0" action="searchTitle.php" method="GET">
                <input class="col-3 form-control mr-sm-2" type="text" name="movieTitle"/>
                <input class="col-3 btn btn-outline-success my-2 my-sm-0" type="submit" value="Search" />
            </form>
            </div>
        </div>

        <!-- GENRE SEARCH CATEGORY -->
        <div class="container">
            <div class="row">
            <h2 class="col-6">Genre</h2>
            <form class="col-6 form-inline my-2 my-lg-0" action="searchGenre.php" method="GET">
            <!-- OPTION WINDOW -->
            <select class="col-3 form-control mr-sm-2" name="movieGenre">
                    <option default> </option>
                    <option value="Comedy">Comedy</option>
                    <option value="SciFi">SciFi</option>
                    <option value="Drama">Drama</option>
                    <option value="Mystery/Suspense">Mystery/Suspense</option>
                    <option value="Action/Adventure">Action/Adventure</option>
                    <option value="Family">Family</option>
                    <option value="VAR">VAR</option>
                    <option value="Music">Music</option>
                    <option value="Animation">Animation</option>
                    <option value="Musical">Musical</option>
                    <option value="Horror">Horror</option>
                    <option value="Documentary">Documentary</option>
                    <option value="Western">Western</option>
                    <option value="TV Classics">TV Classics</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Ballet">Ballet</option>
                    <option value="Foreign">Foreign</option>
                    <option value="Dance / Ballet">Dance / Ballet</option>
                    <option value="Opera">Opera</option>
                    <option value="Comedy/Drama">Comedy/Drama</option>
                    <option value="Action/Comedy">Action/Comedy</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Special Interest">Special Interest</option>
                    <option value="Late Night">Late Night</option>
                    <option value="Other">Other</option>
                    <option value="Anime">Anime</option>
                    <option value="War">War</option>
                    <option value="Satire">Satire</option>
                    <option value="Suspense/Thriller">Suspense/Thriller</option>
                </select>
                <input class="col-3 btn btn-outline-success my-2 my-sm-0" type="submit" value="Search" />
            </form>
            </div>
        </div>

   <!-- RATING SEARCH CATEGORY -->
        <div class="container">
            <div class="row">
            <h2 class="col-6">Rating</h2>
            <form class="col-6 form-inline my-2 my-lg-0" action="searchRating.php" method="GET">
              <!-- OPTION WINDOW -->
                <select class="col-3 form-control mr-sm-2" name="movieRating" placeholder=" ">
                    <option default> </option>
                    <option value="R">R</option>
                    <option value="NR">NR</option>
                    <option value="G">G</option>
                    <option value="PG-13">PG-13</option>
                    <option value="VAR">VAR</option>
                </select>
                <input class="col-3 btn btn-outline-success my-2 my-sm-0" type="submit" value="Search" />
            </form>
            </div>
        </div>

<!-- YEAR SEARCH CATEGORY -->
        <div class="container">
            <div class="row">
            <h2 class="col-6">Year</h2>
            <form class="col-6 form-inline my-2 my-lg-0" action="searchYear.php" method="GET">
                <input class="col-3 form-control mr-sm-2" type="text" name="movieYear"/>
                <input class="col-3 btn btn-outline-success my-2 my-sm-0" type="submit" value="Search" />
            </form>
            </div>
        </div>
        <br>

<!-- ADVANCED SEARCH CATEGORY FOR MULTIPLE INPUTS -->
        <div class="container advanced-search mr-5">
            <div class="row">
            <h2 class="col-12 text-center text-danger">Advanced Search</h2>
            <div class="input-group">
            <form class="form-inline my-2 my-lg-0" action="advancedSearch.php" method="GET">
                <input class="col-2" type="text" name="movieTitle" aria-label="movieTitle" class="form-control" placeholder="Title" >
                <input class="col-2" type="text" name="movieGenre" aria-label="movieGenre" class="form-control" placeholder="Genre" >
                <input class="col-2" type="text" name="movieYear" aria-label="movieYear" class="form-control" placeholder="Year" >
                <select class="col-3 form-control mr-sm-2" name="movieRating">
                    <option default value="%">Rating</option>
                    <option value="R">R</option>
                    <option value="NR">NR</option>
                    <option value="G">G</option>
                    <option value="PG-13">PG-13</option>
                    <option value="VAR">VAR</option>
                </select>
                <input class="col-3 btn btn-outline-success my-2 my-sm-0" type="submit" value="Search" />
            </form>
            </div>
            </div>
        </div>
        <br><br><br><br><br>

    </div>
<?php
require 'inc/footer.php';
?>
