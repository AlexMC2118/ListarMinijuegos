<?php
    /**
     * Controlador de la aplicacion, se encarga de dirigir los procesos
     */
    class Controlador
    {
        public $operaciones; //Declaro clase operaciones, encargada de las operaciones con la base de datos, es un modelo de datos
        public $vista; //Declaro clase vista
        /**
         * Metodo encargado de dar valores a los atributos d ela clase y llamar al metodo de inicio
         */
        function __construct()
        {
            require 'operacionesBd.php';
            $this->operaciones = new Operaciones();
            require 'vista.php';
            $this->vista = new Vista();
            $this->iniciar();
        }
        public function iniciar(){
            $filas=$this->operaciones->contar();
            $resultado=$this->operaciones->listar();
            for ($i=0;$i<$filas;$i++)
              $this->vista->listar(mysqli_fetch_array($resultado, MYSQLI_ASSOC), $filas);
        }
    }
?>
