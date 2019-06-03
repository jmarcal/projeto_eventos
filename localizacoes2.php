<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bootstrap Web Design</title>
    <?php require 'utils/styles.php'; ?>
    <!--css links. file found in utils folder-->
    <?php require 'utils/scripts.php'; ?>
    <!--js links. file found in utils folder-->
</head>

<body>
    <?php require 'utils/cabecalho.php'; ?>
    <!--header content. file found in utils folder-->
    <div class="content">
        <!--body content holder-->
        <div class="container">
            <div class="col-md-12">
                <!--body content title holder with 12 grid columns-->
                <h1>Nossos locais</h1>
                <!--body content title-->
            </div>
        </div>

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <!--location content -->
            <section>
                <div class="container">
                    <div class="col-md-4">
                        <!--image holder with 4 grid column-->
                        <img src="images/urbanxchange.jpg" class="img-responsive">
                    </div>
                    <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel">
                        <!--location modal content-->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--modal header-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <!--close button on top-->
                                    <h4 class="modal-title" id="myModalLabel">SALA DE JANTAR PRIVADO AS ROCHAS</h4>
                                    <!--modal title-->
                                </div>
                                <div class="row">
                                    <div class="modal-body">
                                        <!--modal content-->
                                        <div class="col-md-6">
                                            <!--image holder with 6 grid column-->
                                            <img src="images/urbanxchange.jpg" class="img-responsive">
                                        </div>
                                        <div class="modaltext1 col-md-6">
                                            <h5>A MELHOR EXPERIÊNCIA DE JANTAR PRIVATIVA</h5>
                                            <!--content title-->
                                            <p>
                                                Sentado entre arenito histórico, o Private Dining Urban Xchange
                                                O quarto é o epítome da elegância para uma celebração sofisticada.
                                            </p>
                                        </div>
                                        <div class="modaltext2 col-md-12">
                                            <p>
                                                Com uma extensa
                                                lista de vinhos disponíveis, capacidades AV para discursos e
                                                formalidades e
                                                um lounge adjacente para entretenimento pré ou pós-evento, o Private
                                                Sala de jantar é uma escolha única, romântica e elegante.
                                            </p>

                                            <p>
                                                Acomodando 65 pessoas para jantares ou conferências e até 120 para
                                                coquetéis, esse espaço privado e patrimonial traz caráter e
                                                charme para qualquer evento, com o salão e bar anexado ideal para pré ou
                                                bebidas pós-evento ou para uso como sala de apoio.
                                            </p>
                                        </div>
                                    </div>
                                    <!--modal body-->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn"
                                        data-dismiss="modal">Fechar</button>
                                    <p>
                                        <!--close button-->
                                </div>
                                <!--modal footer-->
                            </div>
                            <!--modal content div-->
                        </div>
                        <!--modal dialog div-->
                    </div>
                    <!--modal div-->
                    <div class="subcontent col-md-8">
                        <!--location non modal content -->
                        <h1 class="title">
                            Sala de jantar privada UrbanXchange</h1>
                        <!--location title-->
                        <p class="location">
                            <!--location secondary content-->
                            The Rocks 12 Rua Argyle
                        </p>
                        <p class="definition">
                            <!--content body-->
                            Sentado entre arenito histórico, o Private Dining Urban Xchange
                            Quarto é o epítome da elegância para uma celebração sofisticada. Quando você janta no
                            Sala de Jantar Privada UrbanXchange, você pode escolher entre o nosso premiado Restaurante
                            Saké
                            O menu do bar serve um estilo de banquete ou um elegante menu do The Cut Bar & Grill.

                        </p>
                        <hr class="customline3">
                        <!--css modified horizontal line-->
                        <button type="button" class="btn btn-default btn-md" data-toggle="modal"
                            data-target="#urbanxchange">
                            <!--button for modal trigger-->
                            Mais Detalhes <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                            <!--glyphicon-->
                        </button>
                    </div>
                    <!--subcontent div-->
                </div>
                <!--container div-->
            </section>
        </div>
        <!--row div-->

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <!--location content -->
            <section>
                <div class="container">
                    <div class="col-md-4">
                        <!--image holder with 4 grid column-->
                        <img src="images/ananasbar.jpg" class="img-responsive">
                    </div>
                    <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <!--location modal content-->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--modal header-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <!--close button on top-->
                                    <h4 class="modal-title" id="myModalLabel">Bar e Brasserie Ananas</h4>
                                    <!--modal title-->
                                </div>
                                <div class="row">
                                    <div class="modal-body">
                                        <!--modal content-->
                                        <div class="col-md-6">
                                            <!--image holder with 6 grid column-->
                                            <img src="images/ananasbar.jpg" class="img-responsive">
                                        </div>
                                        <div class="modaltext1 col-md-6">
                                            <h5>UM CANTO DE PARIS NAS ROCHAS</h5>
                                            <!--content title-->
                                            <p>
                                                Champanhe, glamour, Sorrisos e flertes, Bar e Cervejaria Ananas
                                                é o playground adulto do sofisticado Sydney.
                                            </p>
                                        </div>
                                        <div class="modaltext2 col-md-12">
                                            <p>
                                                Premiado com um chapéu de chef no Sydney Sydney Herald Good Food Guide
                                                2014
                                                Prêmios,
                                                nós servimos um toque contemporâneo sobre a melhor comida francesa
                                                clássica para
                                                almoço,
                                                jantar e jantares tarde da noite. Com um menu centrado em produtos que
                                                leva sugestões
                                                globais
                                                e oferecidos a preços acessíveis, você está em uma festa para
                                                seus sentidos.
                                            </p>

                                            <p>
                                                Nosso dedicado Seafood Bar é um local de destaque, tratando você
                                                Ostras descascadas sob encomenda
                                                e um planalto diário de frutos do mar. Nosso menu completo de brasserie
                                                também é
                                                complementado por
                                                uma seleção de petiscos, disponíveis até as 3 da manhã. Então se você é
                                                um frequentador de teatro
                                                ou morador da noite
                                                À procura de uma experiência de jantar tarde da noite, Bar e Cervejaria
                                                Ananas tem
                                                o que você precisa.
                                            </p>
                                        </div>
                                    </div>
                                    <!--modal body-->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn"
                                        data-dismiss="modal">Fechar</button>
                                    <p>
                                </div>
                                <!--modal footer-->
                            </div>
                            <!--modal content div-->
                        </div>
                        <!--modal dialog div-->
                    </div>
                    <!--modal div-->
                    <div class="subcontent col-md-8">
                        <!--location non modal content -->
                        <h1 class="title">Bar e Cervejaria Ananas</h1>
                        <!--location title-->
                        <p class="location">The Rocks 18 Rua Argyle</p>
                        <!--location secondary content-->
                        <p class="definition">
                            O Bar e Cervejaria Ananas é o parquinho infantil do sofisticado Sydney.
                            Este local de tirar o fôlego traz glamour francês brilhante para The Rocks.
                            Desfrute de champanhe e ostras depois do trabalho e coquetéis durante a madrugada, ou
                            desfrute
                            uma magnífica refeição francesa na Cervejaria.
                        </p>
                        <hr class="customline3">
                        <!--css modified horizontal line-->
                        <button type="button" class="btn btn-default btn-md" data-toggle="modal"
                            data-target="#ananasbar">
                            <!--button for modal trigger-->
                            Mais detalhes <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                            <!--glyphicon-->
                        </button>
                    </div>
                    <!--subcontent div-->
                </div>
                <!--container div-->
            </section>
        </div>
        <!--row div-->

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <!--location content -->
            <section>
                <div class="container">
                    <div class="col-md-4">
                        <!--image holder with 4 grid column-->
                        <img src="images/argyle.jpg" class="img-responsive">
                    </div>
                    <div class="modal fade" id="argyle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <!--location modal content-->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--modal header-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <!--close button on top-->
                                    <h4 class="modal-title" id="myModalLabel">O Argyle</h4>
                                    <!--modal title-->
                                </div>
                                <div class="row">
                                    <div class="modal-body">
                                        <!--modal content-->
                                        <div class="col-md-6">
                                            <!--image holder with 6 grid column-->
                                            <img src="images/argyle.jpg" class="img-responsive">
                                        </div>
                                        <div class="modaltext1 col-md-6">
                                            <h5>CINCO BARRAS EM DOIS NÍVEIS, EM UM LOCAL NAS ROCHAS</h5>
                                            <!--content title-->
                                            <p>
                                                Não há dúvida de que The Rocks é o lar de alguns das mais
                                                históricas histórias intrigantes. E
                                                nosso local de referência, o Argyle, tem uma história única e rica em
                                                si.
                                            </p>
                                        </div>
                                        <div class="modaltext2 col-md-12">
                                            <p>
                                                Se seu evento está se desenvolvendo em grande número, o Gallery
                                                O estilo clássico high-end tem espaço de sobra.
                                                Combinado com o Reibey Room e Belvedere Bar, há espaço para até
                                                500 convidados - perfeito para prosperar
                                                coquetéis, networking ou eventos pós-conferência.
                                            </p>

                                            <p>
                                                O local também pode ser contratado para funções sociais ou corporativas
                                                para grupos de
                                                até 1800. Organizadores do evento
                                                tem a escolha entre o pátio de arenito, o Bar Principal, Galeria,
                                                Quarto Reibey, Belvedere Bar
                                                ou o local inteiro.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn"
                                        data-dismiss="modal">Fechar</button>
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subcontent col-md-8">
                        <h1 class="title">O Argyle</h1>
                        <p class="location">The Rocks 18 Rua Argyle</p>
                        <p class="definition">Não há dúvida de que The Rocks é o lar de alguns das mais
                            históricas histórias intrigantes.
                            E o nosso local de referência, o Argyle, tem uma história única e rica própria. O arenito
                            paredes que abrigam
                            O Argyle tinha havido alguns pontos interessantes bem antes de todos chegarmos à pista de
                            dança.</p>
                        <hr class="customline3">
                        <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#argyle">
                            Mais Detalhes <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <!--location content -->
            <section>
                <div class="container">
                    <div class="col-md-4">
                        <!--image holder with 4 grid column-->
                        <img src="images/munich.jpg" class="img-responsive">
                    </div>
                    <div class="modal fade" id="munich" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <!--location modal content-->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--modal header-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Munich Brauhaus Melbourne</h4>
                                    <!--modal title-->
                                </div>
                                <div class="row">
                                    <div class="modal-body">
                                        <!--modal content-->
                                        <div class="col-md-6">
                                            <!--image holder with 6 grid column-->
                                            <img src="images/munich.jpg" class="img-responsive">
                                        </div>
                                        <div class="modaltext1 col-md-6">
                                            <h5>O MELHOR DA BAVARIA NO WHARF SUL DE MELBOURNE</h5>
                                            <p>
                                                Experimente a Oktoberfest 365 dias do ano com uber biers, festas e
                                                comida neste restaurante de estilo mil-forte de 1000,
                                                localizado no coração da movimentada Wharf Sul de Melbourne.
                                            </p>
                                        </div>
                                        <div class="modaltext2 col-md-12">
                                            <p>
                                                O local do uber é o nosso mais recente empreendimento, trazendo à vida
                                                um tradicional
                                                Cerveja bávara haus, onde você pode beber e festejar como se a
                                                Oktoberfest
                                                nunca terminasse. Assentos no local de última geração para
                                                mais de 900 pessoas e está localizado em frente à Convenção de Melbourne
                                                e
                                                Centro de Exposições, com vista para o Wharf Sul de Melbourne.
                                            </p>

                                            <p>
                                                Estamos equipados com três bares, uma sala de jantar principal,
                                                mezaninos
                                                além de uma área de jantar privada, tornando-se o
                                                prefeito destino para eventos. Nossos altos tectos de treliça, mezanino
                                                níveis, capacidades inatas de palco e audiovisuais
                                                é um destino para eventos de todas as formas e tamanhos, para que você
                                                possa
                                                festejar como se fosse nein-tein-nein-te-nein.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn"
                                        data-dismiss="modal">Fechar</button>
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subcontent col-md-8">
                        <h1 class="title">Munich Brauhaus Melbourne</h1>
                        <p class="location">Calçadão 45 Wharf Sul</p>
                        <p class="definition">O local do uber é o nosso mais recente empreendimento, trazendo à vida um
                            tradicional
                            Bávaro bier haus, onde você pode beber e festejar como se a Oktoberfest nunca terminasse.
                            O local de última geração acomoda mais de 900 pessoas e fica em frente ao Melbourne
                            Convention & Exhibition Centre, com vista para o calçadão South Wharf de Melbourne.</p>
                        <hr class="customline3">
                        <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#munich">
                            Mais Detalhes <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php require 'utils/rodape.php'; ?>
</body>

</html>