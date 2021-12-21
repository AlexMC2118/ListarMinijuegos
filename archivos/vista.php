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
              <a href="#"><img src="'.$resultado['portada'].'.png" /></a>
              <h2>'.$resultado['nombre'].'</h2>
              <img class="oculta" src="img/play.png" />
            </div>
          ';
        }
    }
?>
