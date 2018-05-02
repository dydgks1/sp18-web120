<?php include "portal-config.php"?>
<!doctype html>
                                <!--- opening html tag -->
<head>                                         

<title><?=$title?></title> <!--- opening and closing tage for the title of the page-->
<meta name = "viewport" content="width=device-width" />
<meta name = "robots" content="noindex,nofollow" />
<meta charset="UTF-8">
<script src = "https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css"/>
<link rel="stylesheet" href="css/portal.css"/>
<link rel="stylesheet" href="css/form.css"/> 
<link rel="stylesheet" href="css/footer.css"/>
    
    
</head>
<body>
    <div id = "wrapper">                    <!---Start the divide wrapper -->
    <header>
    <h1><a href="index.php"><i class = "logo fa <?=$logo?>"></i>ChangHan(Nick) Yoo's Portal Page at SCC</a></h1>
    
    <nav id ="primary">
    <ul class = "topnav" id = "myTopnav">
        <?=makeLinks($nav1)?>
        <!--
        <li><a href= "index.php" class = "selected">Welcome</a></li>
        <li><a href= "big/big.php">Big</a></li>
        <li><a href= "aia.php">AIA</a></li>
        <li><a href= "flowchart.php">Flowchart</a></li>
        <li><a href = "finalproject.php">Final Project</a></li>
        <li><a href = "contactme.php">Contact Nick</a></li>
        
        <li class = "icon"> <a href = "javascript:void(0);" onclick = "myFunction()">&#9776;</a></li>
        -->
        
        
        </ul>
        
        </nav>
        
        </header>
        
        <section><h2 class ="pageID"><?=$PageID?></h2>