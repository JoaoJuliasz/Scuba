<?php if(!class_exists('Rain\Tpl')){exit;}?><?php require $this->checkTemplate("header");?>

<body>

    <div class="center">

        <img src="./res/assets/slide1.jpg" alt="slider" id="banner">
        <div class="text">
            <p>
                Fundada em 2002, A Scubatuba Operadora de Mergulho é um centro de <br> treinamento 5 Star SDI/TDI
                instructor,
                formando alunos do nível básico ao <br>instrutor, além dos cursos técnicos . A operadora conta com
                uma<br>
                embarcação
                para até 15 mergulhadores e tem como instrutor
                responsável <br>Fernando Morais, nascido e criado em Fernando de Noronha, com mais de<br> 8.000
                mergulhos.
            </p>
        </div>

    </div>

    <div class="about">
        <img src="./res/assets/cilindro.jpg" alt="cilindro">

        <h1>SOBRE NOSSOS SERVIÇOS </h1>

        <p>
            Cursos de mergulho personalizados, com horários conforme a disponibilidade do aluno. <br>
            Scuba Review com aula prática na piscina .<br>
            Ampla piscina para treinamento.<br>
            Locação de equipamentos para as nossas saídas de mergulho.<br>
            Lancha, DM 36 pés, com capacidade para até 15 mergulhadores.<br>
            Locação da lancha para passeio ou mergulho.<br>
            Venda de equipamentos.<br>
            Pacotes especiais para grupos.<br>
        </p>
    </div>

    <div class="info">
        <div class="scuba-dive">
            <img src="./res/assets/mergulho.jpg" alt="scuba">
            <div class="infos">
                <p class="title">DISCOVER SCUBA</p>
                <p>Mergulho na cia. de
                    um profissional da
                    área para quem
                    não tem curso</p>
                <a href="/discover-scuba">Saiba Mais</a>
            </div>
        </div>
        <div class="classes">
            <img src="./res/assets/aula mar.jpg" alt="">
            <div class="infos">
                <p class="title">CURSOS DE MERGULHO</p>
                <p>Cursos individuais ou em grupos, com instrutores qualificados.</p>
                <a href="/cursos">Saiba Mais</a>
            </div>
        </div>
        <div class="divePlaces">
            <img src="./res/assets/anchieta 2.jpg" alt="">
            <div class="infos">
                <p class="title">PONTOS DE MERGULHO/VALORES</p>
                <p>Ubatuba conta com excelentes pontos de mergulho.</p>
                <a href="/pontos">Saiba Mais</a>
            </div>
        </div>

    </div>
    <div class="contact">
        <p>Contato: </p><br>
        <p><a href="mailto:scubatuba@scubatuba.com.br"
                style="text-decoration: none; color: #ffff;">scubatuba@scubatuba.com.br</a></p><br>
        <p>(12) 3832-5226 / (12) 997673040</p>
        <a href="https://www.facebook.com/ScubatubaMergulhoETurismo/" target="_blank"> <i
                class="fab fa-facebook-square"></i></a>
    </div>
    </div>
    <div class="location">
        <p>Nosso Embarque</p>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.220842312391!2d-45.049125585024306!3d-23.452497184737002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cd5320cc8803cd%3A0x211958f1659e9456!2sPosto%20Mar%C3%ADtimo%20Rede%20Mar!5e0!3m2!1spt-BR!2sbr!4v1576964172530!5m2!1spt-BR!2sbr"
            width="800" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

   <?php require $this->checkTemplate("footer");?>

    <script>

        let intervalo = 2000;

        function slide1() {
            document.getElementById("banner").src = "./res/assets/slide1.jpg"
            setTimeout("slide2()", intervalo)
        }
        function slide2() {
            document.getElementById("banner").src = "./res/assets/slide2.jpg"
            setTimeout("slide3()", intervalo)
        }
        function slide3() {
            document.getElementById("banner").src = "./res/assets/slide3.jpg"
            setTimeout("slide4()", intervalo)
        }
        function slide4() {
            document.getElementById("banner").src = "./res/assets/slide4.jpg"
            setTimeout("slide1()", intervalo)
        }

        const body = document.querySelector('body')
        body.onload = slide1
    </script>
</body>

</html>