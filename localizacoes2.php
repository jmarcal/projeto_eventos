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

                <h1>Localizações</h1>
                <!--conteudo body titulo-->
            </div>
        </div>

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <!--conteudo localizacao-->
            <section>
                <div class="container">
                    <div class="col-md-4">

                        <img src="images/udfcentrouniversitario.jpg" class="img-responsive">
                    </div>
                    <div class="modal fade" id="udf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <!--conteudo modal localizacao-->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--modal cabecalho-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <!--botao fechar on top-->
                                    <h4 class="modal-title" id="myModalLabel">Centro Universitário do Distrito Federal
                                    </h4>
                                    <!--modal titulo-->
                                </div>
                                <div class="row">
                                    <div class="modal-body">
                                        <!--modal conteudo-->
                                        <div class="col-md-6">

                                            <img src="images/udfcentrouniversitario.jpg" class="img-responsive">
                                        </div>
                                        <div class="modaltext1 col-md-6">
                                            <h5>Centro Universitário do Distrito Federal</h5>
                                            <!--conteudo titulo-->
                                            <p>
                                                Centro Universitário do Distrito Federal (UDF) é uma instituição
                                                particular de ensino superior brasileira, com sede em Brasília, no
                                                Distrito Federal.
                                            </p>
                                        </div>
                                        <div class="modaltext2 col-md-12">
                                            <p>
                                                Hoje, além de oferecer diversos cursos de graduação e pós-graduação Lato
                                                Sensu, o UDF se mantém em plena expansão, com a oferta de novos cursos
                                                de graduação para atender às necessidades regionais e trabalhos focados
                                                na consolidação da pesquisa e da extensão.
                                            </p>

                                            <p>
                                                O UDF busca tornar-se referência nacional no ensino superior de
                                                graduação e pós-graduação, pela excelência de seus projetos e serviços
                                                educacionais, ostentando a singularidade do pioneirismo e preservando o
                                                conceito de qualidade conquistado na sociedade brasiliense, como
                                                instituição de sólida credibilidade, atenta às transformações sociais e
                                                mundiais de nosso tempo.
                                            </p>
                                        </div>
                                    </div>
                                    <!--modal body-->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn"
                                        data-dismiss="modal">Fechar</button>
                                    <p>
                                        <!--botao fechar-->
                                </div>
                                <!--modal rodape-->
                            </div>
                            <!--modal conteudo div-->
                        </div>
                        <!--modal dialog div-->
                    </div>
                    <!--modal div-->
                    <div class="subcontent col-md-8">
                        <!--nao localizacao modal conteudo -->
                        <h1 class="title">
                            Centro Universitário do Distrito Federal</h1>
                        <!--titulo localizacao-->
                        <p class="location">
                            <!--conteudo secundario localizacao-->
                            SHCS Q 704/904 - Brasília, DF
                        </p>
                        <p class="definition">
                            <!--content body-->
                            O UDF busca tornar-se referência nacional no ensino superior de
                            graduação e pós-graduação, pela excelência de seus projetos e serviços
                            educacionais, ostentando a singularidade do pioneirismo e preservando o
                            conceito de qualidade conquistado na sociedade brasiliense, como
                            instituição de sólida credibilidade, atenta às transformações sociais e
                            mundiais de nosso tempo.

                        </p>
                        <hr class="customline3">
                        <!--linha horizontal css modificada-->
                        <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#udf">
                            <!--botao modal trigger-->
                            Mais Detalhes <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                            <!--glyphicon-->
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
            <!--conteudo localizacao-->
            <section>
                <div class="container">
                    <div class="col-md-4">

                        <img src="images/unb.jpg" class="img-responsive">
                    </div>
                    <div class="modal fade" id="unb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <!--conteudo modal localizacao-->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--modal cabecalho-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <!--botao fechar no topo-->
                                    <h4 class="modal-title" id="myModalLabel">Universidade de Brasília (UnB)</h4>
                                    <!--modal titulo-->
                                </div>
                                <div class="row">
                                    <div class="modal-body">
                                        <!--modal conteudo-->
                                        <div class="col-md-6">

                                            <img src="images/unb.jpg" heigth="100px" class="img-responsive">
                                        </div>
                                        <div class="modaltext1 col-md-6">
                                            <h5>Universidade de Brasília (UnB)</h5>
                                            <!--conteudo titulo-->
                                            <p>
                                                Desde a sua criação, a UnB tem um papel extremamente importante tanto
                                                nacionalmente quanto regionalmente no que diz respeito à excelência do
                                                ensino e da pesquisa. É referência no Brasil e no exterior nos cursos:
                                                Relações Internacionais, Ciência Política, Economia, Direito e
                                                Antropologia.
                                            </p>
                                        </div>
                                        <div class="modaltext2 col-md-12">
                                            <p>
                                                A Universidade de Brasília (UnB) é uma universidade pública federal
                                                brasileira, com sede em Brasília, no Distrito Federal. A instituição
                                                possui 4 campi, sendo estes em Brasília (Campus Darcy Ribeiro), em
                                                Planaltina (Faculdade UnB Planaltina), em Gama (Faculdade UnB Gama), em
                                                Ceilândia (Faculdade UnB Ceilândia) e em Paranoá (em projeto). A área
                                                total[4] dos 4 campi é de 4.787.449,13 m², sendo que o seu principal
                                                campus (Darcy Ribeiro) tem 3.950.569, 07 m². Das 67 universidades
                                                federais do Brasil, mantidas pela união através de recursos do
                                                Ministério da Educação, a UnB é a universidade com o quarto[5] maior
                                                orçamento, ficando atrás da UFRJ, UFMG e UFF.
                                            </p>

                                            <p>
                                                A Biblioteca Central da UnB tem o maior acervo de livros do Centro-Oeste
                                                e o terceiro maior do Brasil, atrás da Biblioteca Nacional do Rio de
                                                Janeiro e da Biblioteca Mário de Andrade, de São Paulo.
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
                                <!--modal rodape-->
                            </div>
                            <!--modal conteudo div-->
                        </div>
                        <!--modal dialog div-->
                    </div>
                    <!--modal div-->
                    <div class="subcontent col-md-8">
                        <!--nao localizacao modal conteudo -->
                        <h1 class="title">Universidade de Brasília (UnB)</h1>
                        <!--titulo localizacao-->
                        <p class="location">UnB - Brasília, DF</p>
                        <!--conteudo secundario localizacao-->
                        <p class="definition">
                            A Universidade de Brasília (UnB), o Instituto Federal de Educação, Ciência e Tecnologia de
                            Brasília (IFB), a Universidade Aberta do Distrito Federal (UnADF) e a Escola Superior de
                            Ciências da Saúde da Fundação de Ensino e Pesquisa em Ciências da Saúde do Distrito Federal
                            (ESCS) são as quatro únicas instituições de ensino superior públicas existentes no Distrito
                            Federal.
                        </p>
                        <hr class="customline3">
                        <!--linha horizontal css modificada-->
                        <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#unb">
                            <!--botao modal trigger-->
                            Mais detalhes <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                            <!--glyphicon-->
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
            <!--conteudo localizacao-->
            <section>
                <div class="container">
                    <div class="col-md-4">

                        <img src="images/uniceub.jpg" class="img-responsive">
                    </div>
                    <div class="modal fade" id="uniceub" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <!--conteudo modal localizacao-->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--modal cabecalho-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <!--botao fechar on top-->
                                    <h4 class="modal-title" id="myModalLabel">Centro de Ensino Unificado de Brasília
                                    </h4>
                                    <!--modal titulo-->
                                </div>
                                <div class="row">
                                    <div class="modal-body">
                                        <!--modal conteudo-->
                                        <div class="col-md-6">

                                            <img src="images/uniceub.jpg" class="img-responsive">
                                        </div>
                                        <div class="modaltext1 col-md-6">
                                            <h5>Centro de Ensino Unificado de Brasília</h5>
                                            <!--conteudo titulo-->
                                            <p>
                                                O Centro Universitário de Brasília (UniCEUB) é uma instituição de ensino
                                                superior particular brasileira, com sede em Brasília, no Distrito
                                                Federal e com câmpus em Brasília (Campus Asa Norte) e Taguatinga (Campus
                                                II).
                                            </p>
                                        </div>
                                        <div class="modaltext2 col-md-12">
                                            <p>
                                                A Instituição foi inaugurada em 1968, com o nome de Centro de Ensino
                                                Unificado de Brasília, cuja sigla é CEUB. A instituição também foi a
                                                primeira em Brasília a oferecer os cursos de ensino superior no período
                                                noturno.
                                            </p>

                                            <p>
                                                O MEC transformou a faculdade no primeiro centro universitário de
                                                Brasília, na década de 90. Nessa ocasião, passou a denominar-se Centro
                                                Universitário de Brasília (UniCEUB), entretanto, popularmente ainda é
                                                conhecido pelo nome antigo. É o Centro Universitário mais estrelado do
                                                Centro-Oeste, segundo o Guia Nacional de Estudantes. Ainda de acordo com
                                                a mesma fonte, possui 5 estrelas nos cursos de Direito, Relações
                                                Internacionais e Administração, 4 estrelas nos cursos de Jornalismo,
                                                Educação Física, Biomedicina e Fisioterapia e 3 estrelas no curso de
                                                Publicidade e propaganda, Psicologia e Ciência Contábeis.
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
                        <h1 class="title">Centro de Ensino Unificado de Brasília</h1>
                        <p class="location">SEPN 707/907 - Campus Universitário - Asa Norte, Brasília - DF</p>
                        <p class="definition">Nessa ocasião, passou a denominar-se Centro Universitário de Brasília
                            (UniCEUB), entretanto, popularmente ainda é conhecido pelo nome antigo. É o Centro
                            Universitário mais estrelado do Centro-Oeste, segundo o Guia Nacional de Estudantes. Ainda
                            de acordo com a mesma fonte, possui 5 estrelas nos cursos de Direito, Relações
                            Internacionais e Administração, 4 estrelas nos cursos de Jornalismo, Educação Física,
                            Biomedicina e Fisioterapia e 3 estrelas no curso de Publicidade e propaganda, Psicologia e
                            Ciência Contábeis.</p>
                        <hr class="customline3">
                        <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#uniceub">
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
            <!--conteudo localizacao-->
            <section>
                <div class="container">
                    <div class="col-md-4">

                        <img src="images/fgv.jpg" class="img-responsive">
                    </div>
                    <div class="modal fade" id="fgv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <!--conteudo modal localizacao-->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--modal cabecalho-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Fundação Getulio Vargas</h4>
                                    <!--modal titulo-->
                                </div>
                                <div class="row">
                                    <div class="modal-body">
                                        <!--modal conteudo-->
                                        <div class="col-md-6">

                                            <img src="images/fgv.jpg" class="img-responsive">
                                        </div>
                                        <div class="modaltext1 col-md-6">
                                            <h5>Fundação Getulio Vargas</h5>
                                            <p>
                                                A Fundação Getulio Vargas (FGV) é uma instituição brasileira de ensino
                                                superior, fundada em 20 de dezembro de 1944 com o objetivo inicial de
                                                preparar pessoal qualificado para a administração pública e privada do
                                                país. Tem sede na cidade do Rio de Janeiro.
                                            </p>
                                        </div>
                                        <div class="modaltext2 col-md-12">
                                            <p>
                                                A instituição oferece cursos de graduação e pós-graduação (mestrado
                                                profissional, mestrado acadêmico e doutorado) em administração pública,
                                                administração de empresas, economia, direito, ciências sociais,
                                                matemática aplicada e relações Internacionais além de manter sua sede no
                                                Rio de Janeiro, com filiais em Brasília e em São Paulo, oferecendo
                                                também cursos em cerca de 100 cidades do Brasil, por meio de uma rede de
                                                instituições conveniadas, com cursos de Educação Executiva, de Extensão
                                                e MBAs em diversas áreas do conhecimento.
                                            </p>

                                            <p>
                                                Em 2016, foi considerada uma das 10 melhores thinks tanks do mundo,
                                                ocupando o 9º lugar, e conquistou a liderança na América Latina pelo
                                                oitavo ano consecutivo, segundo o 2016 Global Go To Think Tank Index
                                                Report, produzido pela Universidade da Pensilvânia, nos Estados
                                                Unidos. A FGV também mantém mais de 90 Centros de Estudos e
                                                Pesquisas.
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
                        <h1 class="title">Fundação Getulio Vargas</h1>
                        <p class="location">SGAN (Setor de Grandes Áreas Norte Quadra 602 - Módulos A, B e C - Asa
                            Norte, DF</p>
                        <p class="definition">Criada em dezembro de 1945, como Biblioteca Central, passou a denominar-se
                            Biblioteca Mario Henrique Simonsen em dezembro de 1997 em homenagem a Mario Henrique
                            Simonsen ex- Ministro da Fazenda e Vice-Presidente da Fundação Getulio Vargas, falecido no
                            mesmo ano. Possui acervo nas áreas de Administração, Ciência Política, Direito, Economia,
                            Finanças, História do Brasil e Sociologia e conta com mais de 80 mil títulos em livros,
                            publicações eletrônicas, DVDs e fotografias, além de 64 mil cópias de periódicos e 8 mil
                            monografias. Utiliza o sistema informatizado de gerenciamento de bibliotecas virtuais.</p>
                        <hr class="customline3">
                        <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#fgv">
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