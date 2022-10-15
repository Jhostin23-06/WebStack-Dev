<h2 class="dashboard__heading"><?php echo $titulo ?></h2>

<main class="bloques">
    <div class="bloques__grid">
        <div class="bloque">
            <h3 class="bloque__heading">Últimos Registros</h3>
            <?php foreach ($registros as $registro) { ?>
                <div class="bloque__contenido">
                    <p class="bloque__texto">
                        <?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido; ?>
                    </p>
                </div>
            <?php } ?>
        </div>
        <div class="bloque">
            <h3 class="bloque__heading">Ingresos</h3>
            <p class="bloque__texto--cantidad">S/. <?php echo $ingresos; ?></p>
        </div>
        <div class="bloque">
            <h3 class="bloque__heading">Eventos con menos lugares lugares disponibles</h3>
            <?php foreach ($menos_disponibles as $evento ) { ?>
                <div class="bloque__contenido">
                    <p class="bloque__texto">
                        <?php echo $evento->nombre . " - ". $evento->disponibles . ' Disponibles'; ?>
                    </p>
                </div>
            <?php } ?>
        </div>

        <div class="bloque">
            <h3 class="bloque__heading">Eventos con más lugares lugares disponibles</h3>
            <?php foreach ($mas_disponibles as $evento ) { ?>
                <div class="bloque__contenido">
                    <p class="bloque__texto">
                        <?php echo $evento->nombre . " - ". $evento->disponibles . ' Disponibles'; ?>
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
</main>