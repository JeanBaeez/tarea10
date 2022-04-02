<?php require('../Componentes/LayoutTop.php'); ?>
<?php require('../Componentes/Nav.php'); ?>


<div class="container">
    <hr>
    <br>
    <br>
    <br>
    <h1>Formulario de Sugerencias</h1>
    <br>
    <br>
    <div class="row">
        <form method="post" action="../Componentes/Enviar.php" class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Nombre" id="Nombre" name="nombre" type="text" class="validate">
                    <label for="nombre">Nombre</label>
                </div>
                <div class="input-field col s6">
                    <input name="Apellido" type="text" class="validate">
                    <label for="Apellido">Apellido</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">

                    <input placeholder="Telefono" name="telefono" type="number" class="validate">
                    <label for="Telefono">Telefono</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="Comentario" class="materialize-textarea"></textarea>
                    <label for="Comentario">Comentario</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                <i class="material-icons right"></i>
            </button>
        </form>
    </div>
</div>
<?php require('../Componentes/LayoutBot.php'); ?>