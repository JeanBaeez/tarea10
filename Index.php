<?php require('./Web/Componentes/LayoutTop.php'); ?>
<div>
    <section class="container">
        <div>
            <h1 class=" centralizado animate__animated animate__backInUp">
                <?php
                date_default_timezone_set('America/New_York'); // CDT

                $info = getdate();

                $hour = $info['hours'];

                $min = $info['minutes'];
                $sec = $info['seconds'];
                if ($hour < 12) {
                    echo "Buenos días";
                }
                if ($hour >= 12) {
                    echo "Buenas tardes";
                }
                if ($hour > 18) {
                    echo "Buenas Noches";
                }
                ?>
            </h1>
            <h3 class=" SubCentralizado animate__animated animate__backInUp">
                <p>Tarea 10 Programacion Web</p>
                <?php
                echo "Jean Baez 2016-3761";
                ?>
                <br>
                <br>
                <a href="https://github.com/jeanbaeez" target="_blank"> <img src="../tarea10/Web/Assets/GitHub-Mark-32px.png" alt=""></a>
            </h3>
            <div class="SubCentralizado btnIrIncio animate__animated animate__backInUp">

                <button class=" btn_text_center  btn waves-effect green accent-3" onclick="location.href='../tarea10/Web/Inicio.php'">Inicio
                    <i class="fa fa-home"></i>
                </button>
            </div>
        </div>

    </section>
</div>
<?php require('./Web/Componentes/LayoutBot.php'); ?>