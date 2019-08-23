<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="<?php
        if(isset($metaD) && !empty($metaD)) { 
            echo $metaD; 
        } 
        else { 
            echo "Search the biggest movie database"; 
        } ?>" />
        <!-- connect bootstrap framework for quick and high-quality resposive design -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css\style.css"/>
        <title>
        <?php 
        if(isset($title) && !empty($title)) { 
            echo $title; 
        } 
        else { 
            echo "Welcome"; 
        } ?>
        </title>
    </head>
    <body>
        <header>
            <!-- top navigation -->
            <div class="container-fluid">
                <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php"><img src="img\logo.png" alt="CompanyLogo" style="width:50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="top10.php">Top 10 Movies</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href=".\searchCategories.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Search Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href=".\searchCategories.php">Title</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href=".\searchCategories.php">Genre</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href=".\searchCategories.php">Rating</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href=".\searchCategories.php">Year</a>
                        </div> 
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="./searchTitle.php" method="GET">
                    <input class="form-control mr-sm-2" type="text" name="movieTitle" placeholder="Enter movie name" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                </nav>
            </div>
            <!-- end top navigation -->
        </header>
        <div class="container">
