<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Start page</title>
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="page">
        <header class=\'header header__about-page-crutch">
        <nav>
            <a class="logo"href="ndex.php?page=1"><img src="images\fed.png"></a>
            <ul class="menu">
            <?php
                include("classes\menu.php");
                Menu::renderMenu($_GET['page']);
            ?>
            </ul>
        </nav>
        </header>

        <?php
            include("classes\content.php");
            Content::getPage($_GET['page']);
        ?>
    </div>
</body>
</html>