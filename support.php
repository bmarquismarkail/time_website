<!DOCTYPE html>
<html>
    <head>
        <title>T.I.M.E.: Support Page</title>
        <link rel="stylesheet" href="css/960_12_col.css" />
        <link rel="stylesheet" href="css/man.css" />
    <!-- php includes-->
    <?php require('body.php'); ?>
    </head>
    <body>
        <div class="container_12 clearfix">
            <?php make_header("Support"); ?>
                <div class="clear"></div>
                <div class="grid_2">
                    <?php make_nav(); ?>
                </div>
            <main>
                    <div class="grid_10">
                        <h2> Show your support by filling out this </h2>
                        <form action="action_page.php">
                            <label for="fname">First name:</label><br>
                            <input type="text" id="fname" name="fname" value="John"><br>
                            <label for="lname">Last name:</label><br>
                            <input type="text" id="lname" name="lname" value="Doe"><br>
                            <label for="comment">Comments? Questions? Hype?</label><br />
                            <textarea id="comment" name="comment" rows="8" cols="40"></textarea><br />
                          <input type="submit" value="Submit">
                        </form> 
                    </div>
                <footer>
                    <div class="grid_12"><hr/>Copywright 2022: Sage Labs</div>
                    </footer>
                </main>
            </div>
        </body>
    </html>
