<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                                if (isset($_SESSION['nickname'])) {
                                echo "Bonjour " . $_SESSION['nickname'];
                                }
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
                        if (isset($_SESSION['nickname'])) {
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
                    }
                    ?>
                <li class="navbar-li">
                    <?php
                        if (isset($_SESSION['id']) and isset($_SESSION['nickname'])) {
                    ?>
                    <span class="navbar-span-1">
                        <i class="fas fa-lock"></i>
                    </span>
                    <span class="navbar-span-2">
                        <a class="nav-link underline-effect" href="/thefirst/view/frontend/logout.php">
                            Se déconnecter
                        </a>
                        <?php
                        } else {
                    ?>
                        <span class="navbar-span-1">
                            <i class="fas fa-lock-open"></i>
                        </span>
                        <span class="navbar-span-2">
                            <a class="nav-link underline-effect" href="/thefirst/index.php?action=loginPage">
                                Se connecter
                            </a>
                            <?php
                        }
                    ?>
                        </span>
                </li>
            </ul>
        </div>
        <div id="buttonMenu">
            <button id="burger">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
        </div>
    </header>

    <?=$content?>
    <!-- 
    <footer class="border-top border-dark mt-5 text-right">
        <p>
            <img src="public\images\miniLivre2.jpg" class="rounded-top" alt="little book" />
            Jean Forteroche, prenez votre plume !
            <a href="https://twitter.com/neographe_org" target="_blank" class="text-dark text-decoration-none"
                style="font-size: 25px;">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/asakura.cl/?hl=fr" target="_blank" class="text-dark text-decoration-none"
                style="font-size: 25px;">
                <i class="fab fa-instagram"></i>
            </a>
        </p>
        <p>
            <a href="http://neographe.org/" class="text-dark text-decoration-none mr-1">
                <i class="fas fa-circle text-warning border rounded border-dark"></i>À propos
            </a>
            <a href="http://neographe.org/" class="text-dark text-decoration-none mr-1">
                <i class="fas fa-circle text-warning border rounded border-dark"></i>Mentions légales
            </a>
            <a href="http://neographe.org/" class="text-dark text-decoration-none mr-1">
                <i class="fas fa-circle text-warning border rounded border-dark"></i>Contact
            </a>
        </p>
        <p> Projet 4 formation OC </p>
    </footer>
    -->
    <!-- script -->
    <script src="/thefirst/public/js/main.js"></script>
    <script src="/thefirst/public/js/formComment.js"></script>
    <script src="/thefirst/public/js/formLogin.js"></script>
</body>

</html>