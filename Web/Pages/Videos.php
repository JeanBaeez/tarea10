<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php require('../Componentes/LayoutTop.php'); ?>

<?php require('../Componentes/Nav.php'); ?>
<div>
    <section class="section container">
        <div>
            <a href="#" data-target="slide-out" class=" btn btn sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </section>
    <div>
        <?php require('../Componentes/Videos.php'); ?>
    </div>
</div>

<?php require('../Componentes/LayoutBot.php'); ?>