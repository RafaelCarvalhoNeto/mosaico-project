<?php


    require_once("./config/conexao.php");

    $query = $db->prepare('select * from lugares');
    $query->execute();

    $arrayLugares = $query->fetchAll(PDO::FETCH_ASSOC);

?>


<?php require_once("./inc/head.php");?>
<?php require_once("./inc/header.php");?>

    <main class="lugares ajuste">
        <section class="container">
            <h1>Lugares</h1>

            <table>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>País</th>
                    <th>Imagem</th>
                    <th>Video</th>
                </th>
                <?php
                    foreach ($arrayLugares as $lugar):
                ?>
                <tr>
                    <td><?=$lugar['id'];?></td>
                    <td><?=$lugar['nome'];?></td>
                    <td><?=$lugar['cidade'];?></td>
                    <td><?=$lugar['pais'];?></td>
                    <td><?=$lugar['imagem'];?></td>
                    <td><?=$lugar['video'];?></td>
                </th>
                <?php endforeach ?>
            </table>

        </section>
    
    
    </main>
    <footer>
        <p>Rafael Carvalho <sup><small>&copy;</small></sup> | <a href="https://github.com/RafaelCarvalhoNeto" target="_blank" rel="noopener" title="Acesse meu perfil no github">github</a> | <a href="https://www.linkedin.com/in/rafaelcarvalhoneto/" target="_blank" rel="noopener" title="Acesse meu perfil no linkedin">linkedin</a> | <a href="mailto:rafaelcarvalhonet@gmail.com?subject=Quero%20te%20contratar" title="Entre em contato comigo por e-mail">rafaelcarvalhoneto@gmail.com</a></p>
        
    </footer>

    
    
    <script src="./js/galeria.js"></script>
<?php require_once("./inc/footer.php");?>