<?php
function GetCTC()
{
    $csv = file_get_contents('https://docs.google.com/spreadsheets/d/e/2PACX-1vRfyc20Xg2HHvLqsp52wfKlNnEJjjUryqTMf4H1UjGFBFxQPT9QnIZ69wkC85HY6DP1IjN4wskYxZ2A/pub?gid=0&single=true&output=csv');
    $csv = explode(PHP_EOL, $csv);
    $datos = [];
    foreach ($csv as $fila) {
        $tmp = str_getcsv($fila);
        $datos[] = $tmp;
    }
    $modelo = $datos[0];
    unset($datos[0]);
    $final = [];
    foreach ($datos as $fila) {
        $tmp = [];
        foreach ($fila as $key => $value) {
            $tmp[$modelo[$key]] = $value;
        }
        $final[] = $tmp;
    }





    return $final;
}
?>
<?php require('../Componentes/LayoutTop.php'); ?>

<?php require('../Componentes/Nav.php'); ?>


<div class="container">
    <table class="table table-hover table-striped">
        <thead>
            <tr>

                <th>Nombre</th>
                <th>tipo</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Pagina</th>
                <th>Ubicacion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $CTC = GetCTC();
            foreach ($CTC as $fila) {
                echo '<tr>';
                foreach ($fila as $key => $value) {
                    echo '<td>' . $value . '</td>';
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>


<?php require('../Componentes/LayoutBot.php'); ?>