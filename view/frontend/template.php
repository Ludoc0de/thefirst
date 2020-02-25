<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Subrayada&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <title><?=$title?></title>
</head>

<body class="main-body">
    <header>
        <div id="navbar">
            <ul>
                <li class="navbar-li">
                    <span class="navbar-span-1">
                        <a class="nav-link">
                            <?php
                                if (isset($_SESSION['nickname'])):
                                echo "Bonjour " . $_SESSION['nickname'];
                                endif;
                            ?>
                        </a>
                    </span>
                </li>
                <li class="navbar-li">
                    <span class="navbar-span-1">
                        <i class="fas fa-home"></i>
                    </span>
                    <span class="navbar-span-2">
                        <a class="nav-link underline-effect" href="/thefirst/index.php">Accueil</a>
                    </span>
                </li>
                <li class="navbar-li">
                    <span class="navbar-span-1">
                        <i class="fas fa-utensils"></i>
                    </span>
                    <span class="navbar-span-2">
                        <a class="nav-link underline-effect" href="#">
                            On teste
                        </a>
                    </span>
                </li class="navbar-li">
                <li class="navbar-li">
                    <span class="navbar-span-1">
                        <i class="fas fa-mitten"></i>
                    </span>
                    <span class="navbar-span-2">
                        <a class="nav-link underline-effect" href="#">
                            La pratique
                        </a>
                    </span>
                </li>
                <?php
                    if (isset($_SESSION['nickname'])):
                ?>
                <li class="navbar-li">
                    <span class="navbar-span-1">
                        <i class="fas fa-door-open"></i>
                    </span>
                    <span class="navbar-span-2">
                        <a class="nav-link underline-effect" href="/thefirst/index.php?action=adminPage">
                            Administration
                        </a>
                    </span>
                </li>
                <?php
                    endif;
                ?>
                <li class="navbar-li">
                    <?php
                        if (isset($_SESSION['id']) and isset($_SESSION['nickname'])):
                    ?>
                    <span class="navbar-span-1">
                        <i class="fas fa-lock"></i>
                    </span>
                    <span class="navbar-span-2">
                        <a class="nav-link underline-effect" href="/thefirst/view/frontend/logout.php">
                            Se déconnecter
                        </a>
                        <?php
                            else:
                        ?>
                        <span class="navbar-span-1">
                            <i class="fas fa-lock-open"></i>
                        </span>
                        <span class="navbar-span-2">
                            <a class="nav-link underline-effect" href="/thefirst/index.php?action=loginPage">
                                Se connecter
                            </a>
                            <?php
                                endif;
                            ?>
                        </span>
                </li>
            </ul>
        </div>
        <div id="buttonMenu">
            <button id="burger">
                <div class="bar1">
                    <a class="nav-link underline-effect" href="/thefirst/index.php">
                        <i class="fas fa-home"></i>
                    </a>
                </div>
                <div class="bar2">
                    <a class="nav-link underline-effect" href="#">
                        <i class="fas fa-utensils"></i>
                    </a>
                </div>
                <div class="bar3">
                    <a class="nav-link underline-effect" href="#">
                        <i class="fas fa-mitten"></i>
                    </a>
                </div>
                <div class="bar4">
                    <?php
                        if (isset($_SESSION['id']) and isset($_SESSION['nickname'])):
                    ?>
                    <a class="nav-link underline-effect" href="/thefirst/view/frontend/logout.php">
                        <i class="fas fa-lock"></i>
                    </a>
                    <?php
                        else:
                    ?>
                    <a class="nav-link underline-effect" href="/thefirst/index.php?action=loginPage">
                        <i class="fas fa-lock-open"></i>
                    </a>
                    <?php
                        endif;
                    ?>
                </div>
                <?php
                    if (isset($_SESSION['nickname'])):
                ?>
                <div class="bar5">
                    <a class="nav-link underline-effect" href="/thefirst/index.php?action=adminPage">
                        <i class="fas fa-door-open"></i>
                    </a>
                </div>
                <?php
                    endif;
                ?>
            </button>
        </div>
    </header>

    <?=$content?>
    <button id="topButton">
        <i class="fas fa-chevron-up"></i>
    </button>
    <footer>
        <a href="https://twitter.com/neographe_org" target="_blank" class="footer-a">
            <i class="fab fa-twitter icon"></i>
        </a>
        <a href="https://www.instagram.com/asakura.cl/?hl=fr" target="_blank" class="footer-a">
            <i class="fab fa-instagram icon"></i>
        </a>
        <p>NEOGRAPHE</p>
        <a href="https://www.instagram.com/p/BladnmdBBFb/" target="_blank" class="footer-a">
            <i class="fas fa-info-circle icon"></i>
        </a>
        <a href="http://www.neographe.org" target="_blank" class="footer-a">
            <i class="fas fa-at icon"></i>
        </a>
    </footer>

    <!-- script -->
    <script src="/thefirst/public/js/main.js"></script>
    <script src="/thefirst/public/js/formComment.js"></script>
    <script src="/thefirst/public/js/formLogin.js"></script>
    <script src="https://cdn.tiny.cloud/1/xcs5ihxcsh4gaznurwzojymkulh3h9cd8evxurucg20opu9z/tinymce/5/tinymce.min.js">
    </script>
</body>

</html>