<?php
    include 'navbar.php';
?>
<?php
    include 'header.php';
?>
<body>
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

    <main class="searchMain">
 
    <div class="project-container">
    <?php
        // if clicked the search button
        if (isset($_POST['submit-search'])) {
            // make sure when user types something inside, 
            // they don't try any kind of sql injection
            // (making sure data is safe) by escaping weird characters
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM projectTable WHERE projectName LIKE '%$search%' OR projectDescription LIKE '%$search%' OR levelID LIKE '%$search%'";
            // doing a query (running code in database)
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

            // echo "There are ".$queryResults." results!";

            echo "<span class='resultsMsg'>There are $queryResults results!</span>";

            // href = hyper reference
            if ($queryResults > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<a href='project.php?id=".$row["projectID"]."&'>
                            <div class='project-box'>
                                <div class='project-list'>
                                    <h3 class='project-name'>".$row["projectName"]."</h3>
                                    <h3 class='project-description'>".$row["projectDescription"]."</h3>
                                    <h3 class='project-level'>Level: ".$row["levelID"]."</h3>
                                </div>
                            </div>
                        </a>";
                }
            }
            else {

                echo "There are no results matching your search!";
            }
        }
    ?>
    </div>

    <!-- checkboxes -->
    <div class="checkboxes">
        
    </div>
    </main>
</body>
</html>