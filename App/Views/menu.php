<?php 

use Codbear\Alaska\Models\UserModel;

?>

<div class="navbar-fixed">
    <nav class="teal">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Un billet pour l'Alaska</a>
            <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Accueil</a></li>
                <li><a href="#">Lire</a></li>
                <?php
                switch ($_SESSION['role']) {
                    case UserModel::ROLE_SUBSCRIBER:
                        ?>
                        <li><a href="?view=login&action=logout">Se déconnecter</a></li>
                        <?php
                        break;

                    case UserModel::ROLE_ADMIN:
                        ?>
                        <li><a href="?view=dashboard&section=chapters">Dashboard</a></li>
                        <li><a href="?view=login&action=logout">Se déconnecter</a></li>
                        <?php
                        break;
                    
                    default:
                        ?>
                        <li><a href="?view=login">Se connecter / S'inscrire</a></li>
                        <?php
                        break;
                }
                ?>
            </ul>
        </div>
    </nav>
</div>
