<main class="webtechnology">
    <h2 class="webtechnology__heading"><?php echo $titulo; ?></h2>
    <p class="webtechnology__descripcion">Conoce las conferencias de tecnología más importante 
        de Latinoamérica</p>

        <div class="webtechnology__grid">
            <div <?php aos_animacion(); ?> data-aos-offset="0" class="webtechnology__imagen">
                <picture>
                    <source srcset="build/img/sobre_webtechnology.avif" type="image/avif">
                    <source srcset="build/img/sobre_webtechnology.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="build/img/sobre_webtechnology.jpg"
                    alt="Imagen WebTechnology">
                </picture>
            </div>

            <div class="webtechnology__contenido">
                <p  <?php aos_animacion(); ?> data-aos-offset="0" class="webtechnology__texto">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia vitae quidem quam 
                    praesentium fuga nulla, corporis corrupti. Consequatur quas, cupiditate earum repellendus
                    ratione doloremque expedita numquam? Reiciendis id voluptatum culpa.
                    Libero, molestias consequatur. Qui, eos nesciunt. Maxime eius, culpa assumenda 
                    deleniti labore, totam sapiente omnis, ullam incidunt porro dolores fuga rem ad.
                </p>

                <p <?php aos_animacion(); ?> data-aos-offset="0" class="webtechnology__texto">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia vitae quidem quam 
                    praesentium fuga nulla, corporis corrupti. Consequatur quas, cupiditate earum repellendus
                    Libero, molestias consequatur. Qui, eos nesciunt. Maxime eius, culpa assumenda 
                    quas animi voluptates soluta repellat vero voluptatum aliquid deleniti labore, totam 
                    sapiente omnis, ullam incidunt porro dolores fuga rem ad.
                </p>
            </div>
        </div>
</main>