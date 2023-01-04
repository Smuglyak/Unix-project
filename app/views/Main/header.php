<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.cdnfonts.com/css/tt-norms-pro" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Get tasty food for cheaper and faster than doordash. Open Monday-Friday 8-5pm, located in the NDG district.">

    <!-- bootstrap     -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />



    <!-- use different style for different files -->
    <?php
    if ($_SERVER['REQUEST_URI'] == '/app/views/Main/tables.php') echo '<link rel="stylesheet" href="/app/views/css/style.css"> <link rel="stylesheet" href="/app/views/css/styleForTables.css" />';

    else if ($_SERVER['REQUEST_URI'] == '/app/views/Main/form.php') echo '<link rel="stylesheet" href="/app/views/css/style.css"> <link rel="stylesheet" href="/app/views/css/styleForForm.css" />';

    // else if ($_SERVER['REQUEST_URI'] == '/app/views/Main/Topic.php') echo '<link rel="stylesheet" href="/app/views/css/styleForTopic.css" />';

    else {
        echo '<link rel="stylesheet" href="/app/views/css/style.css">';
    }
    ?>
</head>

<body>
    <div class="video-container">
        <video autoplay="true" preload="auto" loop="true" playsinline="true" muted class="back-video">
            <source type="video/webm" src="/videos/dota_montage_webm.mp4">
        </video>
    </div>

    <header>

        <div class="header-container">
            <!-- <img src="/app/images/r2.png" alt="Dota 2 img" /> -->
            <nav>
                <ul class="nav_links">
                    <!-- the php logic inside these checks if the link is same as in url, if yes then put id of currentPage on it -->
                    <div class="link-container">
                        <li>
                            <a href="/app/views/Main/index.php" <?php if ($_SERVER['REQUEST_URI'] == '/app/views/Main/index.php') echo 'id="currentPage"'; ?>>Home</a>
                        </li>
                    </div>
                    <div class="link-container">
                        <li><a href="/app/views/Main/lists.php" <?php if ($_SERVER['REQUEST_URI'] == '/app/views/Main/lists.php') echo 'id="currentPage"'; ?>>Lists</a> </li>
                    </div>

                    <div class="link-container">
                        <li><a href="/app/views/Main/contact.php" <?php if ($_SERVER['REQUEST_URI'] == '/app/views/Main/contact.php') echo 'id="currentPage"'; ?>>Contact</a></li>
                    </div>

                    <div class="link-container">
                        <li><a href="/app/views/Main/gallery.php" <?php if ($_SERVER['REQUEST_URI'] == '/app/views/Main/gallery.php') echo 'id="currentPage"'; ?>>Gallery</a>
                        </li>
                    </div>

                    <div class="link-container">
                        <li><a href="/app/views/Main/tables.php" <?php if ($_SERVER['REQUEST_URI'] == '/app/views/Main/tables.php') echo 'id="currentPage"'; ?>>Tables</a></li>
                    </div>

                    <div class="link-container">
                        <li><a href="/app/views/Main/form.php" <?php if ($_SERVER['REQUEST_URI'] == '/app/views/Main/form.php') echo 'id="currentPage"'; ?>>Form</a></li>
                    </div>

                    <div class="link-container">
                        <li><a href="/app/views/Main/topic.php" <?php if ($_SERVER['REQUEST_URI'] == '/app/views/Main/topic.php') echo 'id="currentPage"'; ?>>Topic</a></li>
                    </div>

                    <div class="link-container">
                        <li><a href="/app/views/Main/catalog.php" <?php if ($_SERVER['REQUEST_URI'] == '/app/views/Main/catalog.php') echo 'id="currentPage"'; ?>>Catalog</a></li>
                    </div>
                    <div class="header-right">
                        <div class="link-container">
                            <li>
                                <a href="https://www.dota2.com/home" target="_blank" class="liARight">Official Dota 2 Website</a>
                            </li>
                        </div>

                    </div>

                </ul>
            </nav>
        </div>

    </header>