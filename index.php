<!DOCTYPE html>
<html>
<head>
    <title>Brandon's Site</title>
    <link rel="stylesheet" href="css/960_12_col.css" />
    <link rel="stylesheet" href="css/man.css" />
    <!-- php includes-->
    <?php require('body.php'); ?>
</head>
    <body>
        <div class="container_12 clearfix">
            <?php make_header(); ?>
                <div class="clear"></div>
                <div class="grid_2">
                    <?php make_nav(); ?>
                </div>
            <main>																				
                <div class="grid_10">
                    <div class="description">
                        <h2>Description</h2>
                        This is where the description of the emulator goes</div>
                    <?php make_gallery(); ?>
                </div>
            </main>
            <footer>
                <div class="grid_12"><hr/>Copywright 2022: Sage Labs</div>
                </footer>
            </div>
        </body>

    </html>