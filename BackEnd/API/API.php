<?php



class API
{

    function __construct()
    {
        $URL = "https://docs.google.com/spreadsheets/d/e/2PACX-1vRfyc20Xg2HHvLqsp52wfKlNnEJjjUryqTMf4H1UjGFBFxQPT9QnIZ69wkC85HY6DP1IjN4wskYxZ2A/pub?gid=0&single=true&output=csv";
        $csv = file_get_contents($URL);
        $this->db = $csv;
    }


    function GetCTC()
    {
        $csv = $this->db;
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
}
