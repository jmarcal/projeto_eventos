<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sistema Gerenciador de Eventos</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>O que Organizamos?</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="container">
            <div class="row">
            <div class="col-md-6">
            <section>
                    <div class="container">
                    <div class="row">
                        <div class="col-md-5"><!--image holder with 6 grid columns-->
                            <img src="images/wedding2.jpg" class="img-responsive">
                        </div>
                        </div>
                        <div class="row">
                        <div class="subcontent col-md-5"><!--Text holder with 6 column grid-->
                            <h1>Casamento</h1><!--title-->
                            <p><!--content-->
                            O dia mais importante da vida do casal.
                            Garantindo soluções personalizadas e execução incrível, nossos locais oferecem o local perfeito para o seu dia especial.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            Ver eventos  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                    </div>
                </section>
            </div>
            <div class="col-md-6">
            <section>
                    <div class="container">
                    <div class="row">
                    <div class="col-md-5"><!--image holder with 6 grid columns-->
                            <img src="images/birthday2.jpg" class="img-responsive">
                        </div>
                        </div>
                        <div class="row">
                        <div class="subcontent col-md-5"><!--Text holder with 6 column grid-->
                            <h1>Aniversário</h1><!--title-->
                            <p><!--content-->
                            Seja uma extravagância durante todo o dia ou a última que dura até altas horas, nossa equipe de Eventos Urbanos está aqui para garantir que todos os seus desejos de festa de aniversário se tornem realidade para que você possa relaxar e aproveitar seu dia especial!
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            Ver eventos  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                    </div>
                </section>

            </div>
            
            </div>
            </div>
            
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="container">
            <div class="row">
            <div class="col-md-6">
            <section>
                    <div class="container">
                    <div class="row">
                    <div class="col-md-5"><!--image holder with 6 grid columns-->
                            <img src="images/fashion2.jpg" class="img-responsive">
                        </div>
                        </div>
                        <div class="row">
                        <div class="subcontent col-md-5"><!--Text holder with 6 column grid-->
                            <h1>Fashion</h1><!--title-->
                            <p><!--content-->
                            Tornando-se um local de fácil acesso para eventos de moda, reuniões VIP e lançamentos de produtos, 
                            os locais do UPeventos oferecem a você escolha e qualidade em locais de alta qualidade para todas as necessidades do seu evento.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            Ver eventos  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                    </div>
                </section>
            </div>
            <div class="col-md-6">
            <section>
                    <div class="container">
                    <div class="row">
                    <div class="col-md-5"><!--image holder with 6 grid columns-->
                            <img src="images/meeting2.jpg" class="img-responsive">
                        </div>
                        </div>
                        <div class="row">
                        <div class="subcontent col-md-5"><!--Text holder with 6 column grid-->
                            <h1>Encontros</h1><!--title-->
                            <p><!--content-->
                            Do formal ao não-formal, nossos espaços para eventos flexíveis podem atender a todas as suas necessidades de reuniões e conferências, grandes ou pequenas, 
                            e nossa equipe de eventos dedicada pode ajudar com todos os aspectos do planejamento do seu evento.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            Ver eventos  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                    </div>
                </section>

            </div>
            
            </div>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

			
            
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
