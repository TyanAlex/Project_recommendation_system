<?php
    include 'navbar.php';
?>
<?php
    include 'header.php';
?>

<body>
    <main>

    <div class="project-container-individual">
        <?php
            $id = mysqli_real_escape_string($conn, $_GET['id']);


            $sql = "SELECT * FROM projectTable WHERE projectID='$id'";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);
            
            if($queryResults > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='project-box-individual'>
                            <h3 class='project-name-individual'>".$row["projectName"]."</h3>
                        </div>";
                }

                // <h3>".$row["projectDescription"]."</h3>
                // <h3>Level: ".$row["levelID"]."</h3>
            }
        ?>

        <div class='temporaryLink'>
            <a href='./projects/stockPricePrediction.php'>go to page</a><br>
            <a href='https://data-flair.training/blogs/stock-price-prediction-machine-learning-project-in-python/'>external</a>
        </div>

    </div>

   

    </main>
</body>
</html>