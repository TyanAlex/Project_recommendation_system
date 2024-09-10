<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <title>Main_Page</title>
</head> -->


<?php
    include 'dbh.php'; 
?>
<?php
    include 'header.php';
?>
<body class="mainBody">
    <?php
        include 'navbar.php';
    ?>

    <!-- search bar -->
    <form action="search.php" method="POST" class="searchArea">
        <div class="searchBox">
            <div class="shadow"></div>
            <input type="text" name="search" class="search"  placeholder="Search Anything You Want...">
            <button type="submit" name="submit-search" class="submit-search">
                <ion-icon name="search-outline" class="searchIcon"></ion-icon>
            </button>
            <!-- <ion-icon name="search-outline" class="searchIcon"></ion-icon> -->
        </div>
    </form>

    <!-- checkboxes -->


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>