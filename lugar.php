<?php


    require_once("./config/conexao.php");

    $query = $db->prepare('select * from lugares where cidade = :cidade');
    $query->execute([
        ":cidade"=>1
    ]);

    $arrayLugares = $query->fetchAll(PDO::FETCH_ASSOC);

?>




<?php require_once("./inc/head.php");?>
<?php require_once("./inc/header.php");?>

    <main class="lugares">
        <section class="container">
            <h1>Cairo</h1>
            <div class="galeria">
                <?php
                    foreach ($arrayLugares as $lugar):
                ?>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src=<?=$lugar['imagem'];?> alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text"><?=$lugar['nome'];?></p>
                    </div>

                </div>
                <?php endforeach ?>


                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-09.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-10.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-12.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-13.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-14.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-15.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-08.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-09.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-10.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-11.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-12.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-13.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-14.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-15.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-08.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-09.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>
                <div class="imagem">
                    <div class="container-img">
                        <img class="small_img" src="./assets/img/placeholder-02-10.jpg" alt="Imagem 08">
                    </div>
                    <div class="legenda">
                        <p class="legenda-text">Legenda</p>
                    </div>
                </div>

            </div>



        </section>
    
    
    </main>
        
    <div class="modal">
        <div class="modal_content">
            <div class="modal_image">

                <img class="small_img" src="./assets/img/placeholder-02-14.jpg" alt="" id="modal_img">
                
                <!-- <iframe id="modal_img" src="https://www.youtube.com/embed/WkLpoUiasZ8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            </div>
            <div class="modal-body">
                <div class="tag">
                    <p class="status">Checked</p>
                </div>
                <div class="person">
                    <small>Ponto liberado por:</small>
                    <p>Antonio Costa</p>
                    <p>No dia 10/10/2010</p>
                </div>
                <div class="description">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est itaque esse reiciendis, voluptates soluta omnis illum similique commodi incidunt alias perferendis minus amet. Blanditiis dolores, quas consequuntur corrupti eius facilis.</p>

                </div>
            </div>
        </div>

        <span id="bt_close">&times;</span>
    </div>

        
        
    <script src="./js/galeria.js"></script>

<?php require_once("./inc/footer.php");?>