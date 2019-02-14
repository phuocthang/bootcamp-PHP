<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <!-- <script src="main.js"></script> -->
    <style>
    nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}
nav ul {
    list-style-type: none;
    padding: 0;
}
nav ul a {
    text-decoration: none;
}
article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
    </style>
</head>
<body>
<div class="container">
            <header><?php  require "layout/header.php";  ?></header>
            <nav><?php require "layout/nav.php";  ?></nav>
            <article> <?php require "layout/content.php"; ?></article>
            <footer><?php require "layout/footer.php";?></footer>
        </div>
</body>
</html>