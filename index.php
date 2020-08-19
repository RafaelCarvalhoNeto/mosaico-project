<?php require_once("./inc/head.php");?>
<body>
    <header class="capa">
        <video autoplay muted loop id="myVideo" src="./assets/img/naestrada.mp4" type="video/mp4"></video>
        <div class="infos-capa">
            <p>Conheça o mundo</p>
            <p>um lugar</p>
            <p>de cada vez!</p>
            <p class="box">Um mosaico construido por qualquer um que não acredita em limites</p>
            <form action="lugar.php" class="search">
                <input type="text" placeholder="Escolha um país" name="search">
                    <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class='conheca'>
            <a id="scrollDown" href="#meumain">conheça mais</a>
        </div>
    </header>
    <main id="meumain">

        <section class="container primary">
            <div class="sobre">

                <div class="titulo">
                    <h2 class="white">O que é o Mosaic</h2>
                </div>
                <div class="conteudo">
                    <p class="white">Mosaico é um projeto que nasceu a partir da paixão de viajar e explorar. Mas principalmente nasceu da vontade de compartilhar o que vivemos por aí. Ao longo dos nossos planejamentos, sempre sentiamos falta de ter uma visão mais clara, de como é determinado lugar. Daí veio a ideias de fazer videos, dos lugares mais sugeridos, feitos por viajantes, com suas visões. Com isso vamos construindo um mosaico do mundo, que estará disponível para quem quiser ver um pouco mais de lugares fascinantes que existem por aí.</p>
    
                </div>

            </div>
            <div class="div"></div>

            <div class="titulo">
                <h2 class="white">Como funciona?</h2>
            </div>
            <div class="conteudo">
                <div class="block">
                    <p class="avatar"><i class="fas fa-map-signs white"></i></p>
                    <p class="info white">Você entra na plataforma e algum lugar que tenha interesse em conhecer ou já conhece. Lá estarão listadas as missões</p>
                    </p>
                </div>
                <div class="block">
                    <p class="avatar"><i class="fas fa-film"></i></i></p>
                    <p class="info">Explore o conteúdo disponível ou compartilhe conosco os vídeos que você fez em determinado lugar. Quanto mais pessoas compartilharem, mas lugares conseguimos destravar e conhecer</p>
                    </p>
                </div>
                <div class="block">
                    <p class="avatar"><i class="fas fa-photo-video white"></i></p>
                    <p class="info white">Compartilhe e conheça mais sobre o que esse mundo tem de melhor!  </p>
                    </p>
                </div>


            </div>
        </section>
        <section class="back">
            <div class='gradiente'>
                <div class="titulo">
                    <h2 class="white">Nos ajude a construir esse mosaico</h2>
                </div>
                <div class="conteudo">
                    <div class="block">
                        <p class="info white">Nada mais fácil do que explorar o nosso site para conhecer melhor! Explore o mundo e conheça um pouco melhor diversos lugares sem sair de casa!</p>
                        </p>
                    </div>
                </div>
                <div class="btn">
                    <a>Conheça as missões</a>

                </div>

            </div>
        </section>
        <hr>
        <section class="container">
            <div class="titulo">
                <h2>Cidades exploradas até o momento</h2>
            </div>
            <div class="conteudo">
                <div class="block">
                    <p class="cidades">Cidades</p>
                    <ul class="lista">
                        <li>San Francisco</li>
                        <li>Paris</li>
                        <li>Bordeaux</li>
                        <li>Valleta</li>
                        <li>São Paulo</li>
                        <li>Rio de Janeiro</li>
                    </ul>
                </div>

                <div class="block">
                    <p class="cidades">Países</p>
                    <ul class="lista">
                        <li>Brasil</li>
                        <li>Estados Unidos</li>
                        <li>Malta</li>
                        <li>França</li>
                        <li>Itália</li>
                        <li>Argentina</li>
                    </ul>
                </div>

                <div class="block">
                    <p class="cidades">Lugares</p>
                    <ul class="lista">
                        <li>Pier 39</li>
                        <li>MASP</li>
                        <li>Cristo Redentor</li>
                        <li>Champs Elysées</li>
                        <li>Camiñito</li>
                        <li>Blue Grotto</li>
                    </ul>
                </div>

            </div>
        </section>


        
    </main>

    
<?php require_once("./inc/footer.php");?>