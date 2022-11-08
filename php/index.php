<!DOCTYPE html>
<html Lang="fr">
<head>     
    <?php include "./includes/head.html"; ?>
</head>
<body>
    <header>
        <?php
            include "./includes/header.html";?>
    </header>
        <main class="container">
            <?php
                if (isset($_GET["about-me"])) {
                    include "./pages/about-me.html";
                    return;
                } elseif (isset($_GET["my-dreams"])) {
                    include "./pages/my-dreams.html";
                    return;
                } elseif (isset($_GET["my-passions"])) {  
                    include "./pages/my-passions.html";
                    return;
                } else {
                    include "./pages/home.html";
                    return;
                }
            ?>
        </main>
        <footer>
            <?php include "./includes/footer.html"; ?>
        </footer>
    </body>

</html>