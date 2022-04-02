<?php require('./Componentes/LayoutTop.php');


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php require('./Componentes/Nav.php'); ?>
<div>

    <div class="container">

        <section>
            <div>
                <div id="loader" class="progress">
                    <div class="indeterminate"></div>
                </div>

            </div>
        </section>

        <div id="Dashboard" style="display: none;" class="card">
            <div class="row">
                <div class="col" onclick="IrCTC();">
                    <div class="">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">

                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">CTS's</span>
                                <p><a href="#"></a></p>
                                <div style="display: inline-block;">
                                    <p>Santo Domingo</p>
                                    <div class="progress" style="display: inline-block;">

                                        <div class="determinate" style="width: 70%" style="display: inline-block;">45</div>
                                    </div>
                                    <p>Santiago</p>
                                    <div class="progress">

                                        <div class="determinate" style="width: 70%">45</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col" onclick="IrUniversidades();">
                    <div class="">

                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">

                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Universidades</span>
                                <p><a href="#"></a></p>
                                <div style="display: inline-block;">
                                    <p>Santo Domingo</p>
                                    <div class="progress" style="display: inline-block;">

                                        <div class="determinate" style="width: 70%" style="display: inline-block;">45</div>
                                    </div>
                                    <p>Santiago</p>
                                    <div class="progress">

                                        <div class="determinate" style="width: 70%">45</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col" onclick="IrVideos();">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">

                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Videos</span>
                                <p><a href="#"></a></p>
                                <div style="display: inline-block;">
                                    <p>Santo Domingo</p>
                                    <div class="progress" style="display: inline-block;">

                                        <div class="determinate" style="width: 70%" style="display: inline-block;">45</div>
                                    </div>
                                    <p>Santiago</p>
                                    <div class="progress">

                                        <div class="determinate" style="width: 70%">45</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" onclick="IrMapa();">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">

                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Mapa</span>
                                <p><a href="#"></a></p>
                                <div style="display: inline-block;">
                                    <p>Santo Domingo</p>
                                    <div class="progress" style="display: inline-block;">

                                        <div class="determinate" style="width: 70%" style="display: inline-block;">45</div>
                                    </div>
                                    <p>Santiago</p>
                                    <div class="progress">

                                        <div class="determinate" style="width: 70%">45</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="column" onclick="IrSugerencias();">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">

                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Sugerenciass</span>
                                <p><a href="#"></a></p>
                                <div style="display: inline-block;">
                                    <p>Santo Domingo</p>
                                    <div class="progress" style="display: inline-block;">

                                        <div class="determinate" style="width: 70%" style="display: inline-block;">45</div>
                                    </div>
                                    <p>Santiago</p>
                                    <div class="progress">

                                        <div class="determinate" style="width: 70%">45</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="column" onclick="IrAcercaDe();">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">

                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Acerca de</span>
                                <p><a href="#"></a></p>
                                <div style="display: inline-block;">
                                    <p>Santo Domingo</p>
                                    <div class="progress" style="display: inline-block;">

                                        <div class="determinate" style="width: 70%" style="display: inline-block;">45</div>
                                    </div>
                                    <p>Santiago</p>
                                    <div class="progress">

                                        <div class="determinate" style="width: 70%">45</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>







    </div>
</div>
<script>

</script>

<?php require('./Componentes/LayoutBot.php'); ?>