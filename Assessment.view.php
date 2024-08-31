<html data-theme="dark">
    <head>
        <title><center>Honours Assessment 1</center></title>
        <link rel="stylesheet" href="/css/pico.min.css">
    </head>

    <body>
        <main class="container">
            <center>
                <form method="post" action="Assessment.php">
                    <label><h3>Enter Your Name: </h3></label>
                    <input type="text" name="name" required>
                    <label><h3>Favorite Food: </h3></label><br>
                    <input type="radio"name="food" value="Momos" required>
                    <label for="Momos"><h5>Momos</h5></label><br>
                    <input type="radio" name="food" value="Pizza">
                    <label for="Pizza"><h5>Pizza</h5></label><br>
                    <input type="radio" name="food" value="Pasta">
                    <label for="Pasta"><h5>Pasta</h5></label><br><br>
                    <input type="submit" value="Submit">
                </form>
                <?php
                if (empty($details)) {
                    echo "<h1><center>Good $greeting $name. Your favorite food is $food.<center><h1>";
                }
                ?>
            </center>
        </main>
    </body>
</html>
