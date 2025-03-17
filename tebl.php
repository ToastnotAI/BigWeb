<html>
    <head>
        <title>Table</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <?php include 'navbar.php'; ?>
    <body>
        <div class = "table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Fav pokemon</th>
                    <th>Fav film</th>
                    <th>Height in cm</th>
                    <th>Fav burger</th>
                </tr>
                <tr>
                    <td>Ryan</td>
                    <td>Klefki</td>
                    <td>Idk man</td>
                    <td>180</td>
                    <td>Squeler and cheese</td>
                </tr>
                <tr>
                    <td>Fern</td>
                    <td> Turtwig</td>
                    <td>Scott Pilgrim Vs The World</td>
                    <td>176</td>
                    <td>Yummy</td>
                </tr>
                <tr>
                    <td>ANON</td>
                    <td>pikachu</td>
                    <td>Its not real</td>
                    <td>177</td>
                    <td>Chicken and rice</td>
                </tr>
                <tr>
                    <td>OWNenn</td>
                    <td>Umbreon</td>
                    <td>i was slow</td>
                    <td>180</td>
                    <td>Cheese Burger</td>
                </tr>
            </table>
        </div>
        <h3 class = "add">Add your own data</h3>
        <div class="add">
            <table class="form" id = "form" action="add-data.php" method="POST">
                <tr>
                    <td><input type="text" name="name" placeholder="Name"></td>
                    <td><input type="text" name="pokemon" placeholder="Fav pokemon"></td>
                    <td><input type="text" name="film" placeholder="Fav film"></td>
                    <td><input type="text" name="height" placeholder="Height in cm"></td>
                    <td><input type="text" name="burger" placeholder="Fav burger"></td>
                    <td><button type="submit">Add</button></td>
                </tr>
            </table>

        </div>
    </body>
</html>