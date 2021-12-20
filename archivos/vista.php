<?php
    /**
     * Clase destinada a visualizar nuestra aplicacion
     */
    class Vista
    {
        /**
         * Visualiza los minijuegos
         */
        public function listar($resultado)
        {
          echo '
            <div>
              <img src="'.$resultado['portada'].'.png" />
            </div>
          ';
        }
    }
?>
