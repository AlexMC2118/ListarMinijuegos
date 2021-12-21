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
              <a href="'.$resultado['ruta'].'?idMinijuego='.$resultado['idMinijuego'].'"><img src="'.$resultado['portada'].'.png" /></a>
              <h2>'.$resultado['nombre'].'</h2>
              <a href="../RankingPorMinijuego?idMinijuego='.$resultado['idMinijuego'].'" class="ranking">Ranking</a>
              <a href="'.$resultado['ruta'].'?idMinijuego='.$resultado['idMinijuego'].'"><img class="oculta" src="img/play.png" /></a>
            </div>
          ';
        }
    }
?>
