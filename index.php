<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <!--
    Nome: Igor Santos Hipolito Ramiro
    E-mail: igor.ramiro11@gmail.com
-->
    <ul id="contador">
        Essa oferta acaba em:
        <li class="cont"><span id="dias"></span>Dias</li>
        <li class="cont"><span id="horas"></span>Horas</li>
        <li class="cont"><span id="minutos"></span>Minutos</li>
        <li class="cont"><span id="segundos"></span>Segundos</li>
        ou enquanto durarem os estoques
    </ul>
    <?php
    $id = isset($_GET['page']);
    if ($id == '1') {
        echo "<br><br><br><h1>Olá, {$_POST['nome']}. Sua inscrição foi confirmada</h1>";
    } else {
    ?>
        <div id="compre">
            <div id="compre_item1">
                <h1>Não existe marketing<br> sem uma historia de amor</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima quibusdam quidem et quas laudantium
                    natus, eum odit! Odio deleniti quam illum accusamus.</p>
                <button class="btn_compre" onclick=(mostraform())>COMPRE AGORA</button>
            </div>
            <div id="compre_item2">
                <img src="./img/teste.jpg" width="380px" alt="">
            </div>
        </div>
        <div id="div_video">
            <span id="mob_compre_item1"></span>
            <!-- o video original está dando erro
            <iframe src="https://player.vimeo.com/video/691105207?h=2c73f1c2f5" max-width="450" height="315"></iframe>
            -->
            <iframe max-width="450" height="315" src="https://www.youtube.com/embed/O5hbo6786ss" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem quis illo aperiam deleniti provident numquam
                aliquid dolore ratione iusto nostrum id, adipisci dolor, quos earum sint rerum molestiae? Voluptas,
                deleniti.</p>
            <button class="btn_compre" onclick=(mostraform())>COMPRE AGORA</button>
            <p>Frete grátis para todo Brasil</p>
        </div>
        <div id="info">
            <div>
                <img src="./img/teste.jpg" width="100%" height="auto" alt="">
            </div>
            <div>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur enim suscipit neque earum odit
                    iusto! Numquam, natus amet, dolore doloremque iusto fuga ea est reiciendis similique nulla atque
                    pariatur quo!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur amet ipsum voluptates perferendis
                    blanditiis rem omnis. Dolores laboriosam quod cumque suscipit velit debitis tempore</p>
            </div>
            <div id="info_text2">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur enim suscipit neque earum odit
                    iusto! Numquam, natus amet, dolore doloremque iusto fuga ea est reiciendis similique nulla atque
                    pariatur quo!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur amet ipsum voluptates perferendis
                    blanditiis rem omnis. Dolores laboriosam quod cumque suscipit velit debitis tempore</p>
            </div>
            <div id="info_img2">
                <img src="./img/teste.jpg" width="100%" height="auto" alt="">
            </div>
            <div id="info_img3">
                <img src="./img/bernadette.jpeg" width="100%" height="auto" alt="">
            </div>
            <div id="info_text3">
                <h2>bernadette Jiwa</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur enim suscipit neque earum odit
                    iusto! Numquam, natus amet, dolore doloremque iusto fuga ea est reiciendis similique nulla atque
                    pariatur quo!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur amet ipsum voluptates perferendis
                    blanditiis rem omnis. Dolores laboriosam quod cumque suscipit velit debitis tempore</p>
            </div>
            <div id="info_text4">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur enim suscipit neque earum odit
                    iusto! Numquam, natus amet, dolore doloremque iusto fuga ea est reiciendis similique nulla atque
                    pariatur quo!</p>
            </div>
            <div id="info_img4">
                <img src="./img/teste.jpg" width="100%" height="auto" alt="">
                <img src="./img/teste.jpg" width="100%" height="auto" alt="">
                <img src="./img/teste.jpg" width="100%" height="auto" alt="">
                <img src="./img/teste.jpg" width="100%" height="auto" alt="">
                <img src="./img/teste.jpg" width="100%" height="auto" alt="">
                <img src="./img/teste.jpg" width="100%" height="auto" alt="">
                <img src="./img/teste.jpg" width="100%" height="auto" alt="">
                <img src="./img/teste.jpg" width="100%" height="auto" alt="">
            </div>
        </div>
        <div id="cursos">
            <h2>Lorem ipsum dolor sit amet consectetur, adipisici</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptates hic tempore eaque rem numquam
                recusandae molestiae accusantium exercitationem doloremque placeat adipisci quos, voluptatum earum ad
                voluptas. Qui, est eius.</p>
            <div id="cursos_opcoes">
                <div id="op1">
                    <h3>Curso 01</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium excepturi, tempore id optio
                        quisquam perspiciatis earum modi repellendus, praesentium, libero voluptas.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem dolores ab odit quia. Necessitatibus
                        non sit reiciendis similique provident et perspiciatis!</p>
                </div>
                <div id="op2">
                    <h3>Curso 02</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium excepturi, tempore id optio
                        quisquam perspiciatis earum modi repellendus, praesentium, libero voluptas.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem dolores ab odit quia. Necessitatibus
                        non sit reiciendis similique provident et perspiciatis!</p>
                </div>
                <div id="op3">
                    <h3>Curso 03</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium excepturi, tempore id optio
                        quisquam perspiciatis earum modi repellendus, praesentium, libero voluptas.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem dolores ab odit quia. Necessitatibus
                        non sit reiciendis similique provident et perspiciatis!</p>
                </div>
                <button onclick="slide(-1,'op')" class="anterior">
                    < </button>
                        <button onclick="slide(+1,'op')" class="posterior">></button>
            </div>
            <div id="valores">
                <h1 id="antigoValor"><s>R$1997</s></h1>
                <h1>R$597</h1>
                <button class="btn_compre" onclick=(mostraform())>COMPRE AGORA</button>
                <p>Frete grátis para todo Brasil</p>
            </div>
        </div>
        <div id="comentarios">
            <div id="com1">
                <img src="./img/usuario.png" style="border-radius:50%;" height="50px" alt="">
                <h3>Andre Galego</h3>
                <p>Empresa</p>
                <hr>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem dolores ab odit quia. Necessitatibus
                    non sit reiciendis similique provident et perspiciatis!</p>
                <div class="estrelas">
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <label for="cm_star-5"><i class="fa"></i></label>
                </div>
            </div>
            <div id="com2">
            <img src="./img/usuario.png" style="border-radius:50%;" height="50px" alt="">
                <h3>Tiringa</h3>
                <p>Empresa</p>
                <hr>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem dolores ab odit quia. Necessitatibus
                    non sit reiciendis similique provident et perspiciatis!</p>
                <div class="estrelas">
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <label for="cm_star-5"><i class="fa"></i></label>
                </div>
            </div>
            <div id="com3">
            <img src="./img/usuario.png" style="border-radius:50%;" height="50px" alt="">
                <h3>Jeandete Jean</h3>
                <p>Empresa</p>
                <hr>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem dolores ab odit quia. Necessitatibus
                    non sit reiciendis similique provident et perspiciatis!</p>
                <div class="estrelas">
                    <label for="cm_star-1"><i class="fa"></i></label>
                    <label for="cm_star-2"><i class="fa"></i></label>
                    <label for="cm_star-3"><i class="fa"></i></label>
                    <label for="cm_star-4"><i class="fa"></i></label>
                    <label for="cm_star-5"><i class="fa"></i></label>
                </div>
            </div>
            <button onclick="slide(-1,'com')" class="anterior">
                < </button>
                    <button onclick="slide(+1,'com')" class="posterior">></button>
        </div>
        <div id="perguntas">
            <h1>Peguntas frequentes</h1>
            <div class="pergunta" id="p1">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit?</h3>
                <span id="maisp1" onclick="mostracoment(1)">+</span>
            </div>
            <div id="r1" hidden>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam id omnis eius laborum dolores
            </div>
            <hr>
            <div class="pergunta">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit?</h3>
                <span id="maisp2" onclick="mostracoment(2)">+</span>
            </div>
            <div id="r2" hidden>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam id omnis eius laborum dolores
            </div>
            <hr>
            <div class="pergunta">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit?</h3>
                <span id="maisp3" onclick="mostracoment(3)">+</span>
            </div>
            <div id="r3" hidden>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam id omnis eius laborum dolores
            </div>
            <hr>
            <div class="pergunta">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit?</h3>
                <span id="maisp4" onclick="mostracoment(4)">+</span>
            </div>
            <div id="r4" hidden>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam id omnis eius laborum dolores
            </div>
            <hr>
            <div class="pergunta">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit?</h3>
                <span id="maisp5" onclick="mostracoment(5)">+</span>
            </div>
            <div id="r5" hidden>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam id omnis eius laborum dolores
            </div>
            <hr>
        </div>
        <div id="form">
            <form action="index.php?page=1" method="post">
                <h1>Formulario de inscrição</h1>
                <div>
                    <label for="">Nome:</label><br>
                    <input type="text" name="nome" class="let" placeholder="Nome" required>
                </div>
                <div>
                    <label for="">Email:</label><br>
                    <input type="text" placeholder="Email" required>
                </div>
                <button class="btn_compre" onclick=(mostraform()) type="submit">Enviar</button>
            </form>
        </div>
    <?php } ?>
</body>
<script src="./js/index.js"></script>

</html>