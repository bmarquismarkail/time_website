<?php
// This script will create the particular bodies
// This wil actually create the site, since I needed more than one page, and the website would be structured
// I made seperate websites to pad the project


//make_header
//makes the header. simple echoing
function make_header($page_title = '') {
	$title_text = 'TIME: The Infinitely Moddable Emulator';
	echo '<header>
                <div class="grid_2">
                    <img src="images/logo.png" />
                </div>
                <div class="grid_10">
                    <h1 style="text-align: center;">'. $title_text. '</h1>';
    if(strlen($page_title) != 0){
		echo '<h2 style="text-align: center;">'. $page_title . '</h2>';
	}
	echo '</div>
            </header>';
}

//make_nav
//creates the nav bar. simple echoing
function make_nav() {
	echo '<nav>
                        <ul class="bm_menu">
                            <li><a href="index.php">Main Menu</a></li>
                            <li><a href="download.php">Download</a></li>
                            <li><a href="social_media.php">Social Media</a></li>
                            <li><a href="support.php">Support</a></li>
                            <li><a>Development</a></li></ul>
                    </nav>';
}

// make_gallery
// will create the image list for the main page
function make_gallery($num_imges = 10){
	echo '<div class="gallery">
                        <h2>Gallery</h2>';
	for($i = 0; $i < $num_imges; $i++){
		echo '<div class="grid_3 alpha"> <a href="https://placeholder.com"><img src="https://via.placeholder.com/200"></a></div>';
	}
	echo '</div>';
}
?>