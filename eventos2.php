<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bootstrap Web Design</title>
    <?php require 'utils/styles.php'; ?>
    <!--links css. arquivo encontrado na pasta utils-->
    <?php require 'utils/scripts.php'; ?>
    <!--links js. arquivo encontrado na pasta utils-->
</head>

<body>
    <?php require 'utils/cabecalho.php'; ?>
    <!--conteudo cabecalho. arquivo encontrado na pasta utils-->
    <div class="content">
        <!--conteudo body-->
        <div class="container">
            <div class="col-md-12">
                <h1>O que há?</h1>
            </div>
        </div>

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <!--conteudo evento-->
            <section>
                <div class="container">
                    <div class="date col-md-1">
                        <span class="day">25</span><br>
                        <!--mes-->
                        <hr class="line">
                        <!--linha horizontal css modificada-->
                        <span class="month">JUN</span>
                        <!--dia-->
                    </div>
                    <div class="col-md-5">
                        <img src="images/comp-quantica.jpg" class="img-responsive img-thumbnail">
                    </div>
                    <div class="subcontent col-md-6">
                        <h1 class="title">Bluetalks – Computação Quântica e IBM Q: Uma introdução</h1>
                        <!--conteudo titulo evento-->
                        <p class="location">
                            <!--conteudo evento localizacao-->
                            Auditorio Capital Digital
                        </p>
                        <p class="definition">
                            <!--conteudo evento definicao-->
                            Depois de décadas de intenso esforço de pesquisas, as respostas para alguns dos principais
                            desafios da engenharia foram encontrados, e a construção de computadores quânticos capazes
                            de superar a performance dos computadores clássicos parece não só possível, mas
                            eventualmente realizável em um futuro próximo.
                        </p>
                        <hr class="customline2">
                        <!--linha horizontal css modificada-->
                        <button type="button" class="btn btn-default btn-lg">
                            <!--ver botao de detalhes (sem funcao implementada)-->
                            Ver Detalhes <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
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
            <section>
                <div class="container">
                    <div class="date col-md-1">
                        <span class="day">20</span><br>
                        <!--mes-->
                        <hr class="line">
                        <!--linha horizontal css modificada-->
                        <span class="month">ABR</span>
                        <!--dia-->
                    </div>
                    <div class="col-md-5">
                        <img src="images/autom-juridica.jpg" class="img-responsive img-thumbnail">
                    </div>
                    <div class="subcontent col-md-6">
                        <h1 class="title">Automação e Inteligência transformando o mundo Jurídico</h1>
                        <!--conteudo evento titulo-->
                        <p class="location">
                            <!--conteudo evento localizacao-->
                            Ginásio nilson nelson
                        </p>
                        <p class="definition">
                            <!--conteudo evento definicao-->
                            Como o advogado pode usar tecnologia na automação de serviços jurídicos, sem a necessidade
                            de se transformar em um programador de computador? Sobre o uso das novas tecnologias para
                            aprimorar a prestação de serviços jurídicos
                        </p>
                        <hr class="customline2">
                        <!--linha horizontal css modificada-->
                        <button type="button" class="btn btn-default btn-lg">
                            <!--botao ver detalhes(sem funcao implementada)-->
                            Ver detalhes <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            <!--arrow right glyphicon-->
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
            <section>
                <div class="container">
                    <div class="date col-md-1">
                        <!--date holder with 1 grid column-->
                        <span class="day">20</span><br>
                        <!--month-->
                        <hr class="line">
                        <!--linha horizontal css modificada-->
                        <span class="month">JUN</span>
                        <!--day-->
                    </div>
                    <div class="col-md-5">
                        <!--image holder with 5 grid column-->
                        <img src="images/machine-learn.jpg" class="img-responsive img-thumbnail">
                    </div>
                    <div class="subcontent col-md-6">
                        <!--event content holder with 6 grid column-->
                        <h1 class="title">USPCodeLab & Machine Learning at Scale</h1>
                        <!--conteudo evento titulo-->
                        <p class="location">
                            <!--conteudo evento localizacao-->
                            UNB campus brasília
                        </p>
                        <p class="definition">
                            <!--conteudo evento definicao-->
                            O USPCodeLab é um grupo de extensão universiátira que tem como objetivo estimular a inovação
                            tecnológica na USP. Fundado em 2015, o grupo é atualmente uma iniciativa inter-campi, com
                            núcleos no IME-USP, ICMC-USP e EACH-USP, onde atua diretamente com os alunos de Ciência da
                            Computação, Engenharia da Computação e Sistemas da Informação.
                        </p>
                        <hr class="customline2">
                        <!--linha horizontal css modificada-->
                        <button type="button" class="btn btn-default btn-lg">
                            <!--botao ver detalhes(sem funcao implementada)-->
                            Ver Detalhes <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
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
            <section>
                <div class="container">
                    <div class="date col-md-1">
                        <span class="day">20</span><br>
                        <!--mes-->
                        <hr class="line">
                        <!--linha horizontal css modificada-->
                        <span class="month">AGO</span>
                        <!--dia-->
                    </div>
                    <div class="col-md-5">
                        <img src="images/linux.jpg" class="img-responsive img-thumbnail">
                    </div>
                    <div class="subcontent col-md-6">
                        <h1 class="title">linuxdev-br 2019</h1>
                        <!--conteudo evento titulo-->
                        <p class="location">
                            <!--conteudo evento localizacao-->
                            Parque da Cidade </p>
                        <p class="definition">
                            <!--conteudo evento definicao-->
                            Linux Developer Conference Brasil 2019 Sobre este evento Temos o orgulho de anunciar a
                            terceira edição do Linux Developer Conference Brazil . O linuxdev-br é uma conferência que
                            nasceu para ser um ponto de encontro para comunidades que desenvolvem projetos de Software
                            Livre e de Código Aberto (FOSS) que constituem o Núcleo dos modernos sistemas Linux.
                        </p>
                        <hr class="customline2">
                        <!--linha horizontal css modificada-->
                        <button type="button" class="btn btn-default btn-lg">
                            <!--botao ver detalhes(sem funcao implementada)-->
                            View Details <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php require 'utils/rodape.php'; ?>
    <!--conteudo cabecalho. arquivo encontrado na pasta utils-->
</body>

</html>