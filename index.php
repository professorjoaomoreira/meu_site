<?php
# Inicinando a variavel que vai indentificar se temos que exibir o modal ou não
$exibirModal = false;
# Verificando se não existe o cookie
if(!isset($_COOKIE["usuarioVisualizouModal"]))
{
# Caso não exista entra aqui.

# Vamos criar o cookie com duração de 1 dia
$diasparaexpirar = 1;
setcookie('usuarioVisualizouModal', 'SIM', (time() + ($diasparaexpirar * 24 * 3600)));

# Seto nossa variavel de controle com o valor TRUE ( Verdadeiro)
$exibirModal = true;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Prof. João Moreira</title>

<!-- inicio style carousel -->
     <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
<!-- fim style carousel -->


    <!-- inicio Shadowbox -->
<script type="text/javascript" src="shadowbox/jquery.js" ></script>
<script type="text/javascript" src="shadowbox/shadowbox.js" ></script>
<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css" />
<link rel="stylesheet" type="text/css" href="css/album.css" />
<script type="text/javascript">Shadowbox.init({
  language: 'pt',
  players: ['img'],
});
</script>
<!-- fim shadowbox -->



    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">


    <!-- inicio links para favicon-->     
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <!-- CSS para botao futuante que vai ao topo-->
    <link rel="stylesheet" media="screen,projection" href="css/ui.totop.css"/>


    <!-- inicio prettyPhoto -->
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>
<!-- fim prettyPhoto -->




</head><!--/head-->


<!--inicio cabecalho-->
<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        
                        
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                
                                <li><a href="#"title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Me adicione no WhattsApp => (51) 9474 4224"><img src="images/whatts3.png"width="20" height="20"></a></li>

                                <li><a href="https://www.facebook.com/professorjoaomoreira"target="_blank"title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Acesse o meu Facebook"target="_blank"><i class="fa fa-facebook"></i></a></li>

                                <li><a href="https://twitter.com/profjoaomoreira"title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Acesse o meu twitter"><i class="fa fa-twitter"></i></a></li>

                                <li><a href="https://br.linkedin.com/in/jo%C3%A3o-moreira-93988722"title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Acesse o meu linkedin"><i class="fa fa-linkedin"></i></a></li> 

                                <li><a href="https://www.youtube.com/user/professorjoaomoreira"title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Acesse o meu canal no youtube"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://plus.google.com/+ProfessorJo%C3%A3oMoreira"title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Acesse o meu google+"><i class="fa fa-google-plus"></i></a></li>
                                
                            </ul>
                            
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
        <!--fim cabecalho-->

        <!--/inicio logo3-->
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                       <a class="navbar-brand" href="img/qipoa/qipoa166.jpg" title="Olá!" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique aqui e veja a foto oculta" rel="prettyPhoto"><img src="images/logo03.png"class="img-circle"alt="Foto professor João" width="80" height="80"></a></p>
                </div>
        <!--fim logo3-->        
                
        <!--fim do nav-->
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        
                    <li class=""> <a href="index.php" title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Home">Inicio</a></li>

                        
                        <li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formação Profissional<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="qipoa.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique para conhecer o meu trabalho na QI-Porto Alegre"target="_blank">QI-Porto Alegre</a></li>
                                <li><a href="qigvt.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique para conhecer o meu trabalho na QI-Gravataí"target="_blank">QI-Gravataí</a></li>
                                <li><a href="ulbra.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique para conhecer o meu trabalho na ULBRA"target="_blank">ULBRA-São Lucas</a></li>
                                <li><a href="fundatec.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique para conhecer o meu trabalho na FUNDATEC"target="_blank">FUNDATEC</a></li>
                                <li><a href="ftec.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique para conhecer o meu trabalho na FTEC"target="_blank">FTEC</a></li>
                                <li><a href="pao.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique para conhecer o meu trabalho no Pão dos Pobres"target="_blank">Pão dos Pobres</a></li>
                                <li><a href="ufrgs.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique para conhecer o meu trabalho na UFRGS"target="_blank">UFRGS</a></li>
                                <li><a href="unicruz.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique para conhecer o meu trabalho na UNICRUZ"target="_blank">UNICRUZ</a></li>
                                <li><a href="etaj.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique para conhecer o meu trabalho na ETAJ"target="_blank">ETAJ</a></li>
                                <li><a href="seg.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique para conhecer o meu trabalho na SEG"target="_blank">SEG</a></li>
                                <li><a href="exercito.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique para conhecer o meu trabalho no Exército"target="_blank">Exército Brasileiro</a></li>
                                <li><a href="policia.html"title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Clique para conhecer o meu trabalho na Policia Civil"target="_blank">Policia Civil</a></li>
                            </ul>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portifólio<i class="fa fa-angle-down"></i></a>

                            <ul class="dropdown-menu">
                                <li><a href="https://moodle.ufrgs.br/login/index.php"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Confeção de vários ambientes para cursos de Pós-Graduação UAB."target="_blank">Moodle-UFRGS</a></li>
                                <li><a href="http://faqiead.qi.edu.br/"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Instalação, configuração do ambiente e gerenciamento da equipe de apoio ao ambiente"target="_blank">Moodle-QI</a></li>
                                <li><a href="http://www.moodlepaodospobres.com.br/"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Instalação, configuração do ambiente e treinamento da equipe docente"target="_blank">Moodle-Pão dos Pobres</a></li>
                                <li><a href="http://orionwebsites.com.br/jefersonleon/"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Instalação, configuração do ambiente e treinamento da equipe discente"target="_blank">Moodle Jeferson Leon</a></li>
                                <li><a href="http://professorjoaomoreira.orgfree.com/"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Desenvolvimento deste site usando o CMS, joomla"target="_blank">Site Pessoal em Joomla</a></li>
                                <li><a href="https://www.ufrgs.br/admcultura/#.VpO5TW5ys8q"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Desenvolmento deste site usando CMS WordPress"target="_blank">Site CEAPC-UFRGS</a></li>
                                <li><a href="http://profjoaomoreira.netne.net?iframe=true&width=100%&height=100%" rel="prettyPhoto"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Desenvolmento deste site usando notepad++, tecnlogoais envolvidas html, css, javascript,ilustrator,photoshop,gimp"target="_blank">Site Gloogle Glass</a></li>
                                <li><a href="http://professorjoaomoreira.mypressonline.com/"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Desenvolmento deste site usando bootstrap,sublime text2, tecnlogoais envolvidas html, css, javascript, ilustrator,photoshop,gimp,banco de dados mysql,servidor de hospedagem gratuito"target="_blank">Meu site com BootStrap</a></li>                
                            </ul> 

                            <li> <a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4774376P5"target="_blank" title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Currículo Lattes Atualizado do Professor">Formação Acadêmica</a></li>


                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cursos Gratuitos<i class="fa fa-angle-down"></i></a>

                            <ul class="dropdown-menu">
                                <li><a href="cadastro.php" title="Olá" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Clique aqui e cadastre-se para ter acesso aos cursos on-line gratuitos."target="_blank">Cadastro</a></li>
                                <li><a href="login.php" title="Olá"data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Depois de cadastrar-se no link acima, então, fazer o login para acessar gratuitamente os curso online gratuitos"target="_blank">Cursos Gratuitos</a>
                                </li>
                                <li><a href="login.php" title="Olá" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Depois de cadastrar-se no link acima, então, fazer o login para acessar gratuitamente os curso online gratuitos"target="_blank">Login</a>
                                </li>
                            </ul>                          
                        <li> <a href="#subir" title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="ir final"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-down"></span></button></p></a></li>
 

                </div>
            </div><!--/.container-->


        </nav><!--fim do nav-->
       </div>
       
    </header><!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Professor João Padilha Moreira</h1>
                                    <h2 class="animation animated-item-2">Professor Universitário</h2>
                                    <a class="btn-slide animation animated-item-3" href="#subir"title="clique para saber mais..." data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">&nbsp;&nbsp;Saiba Mais &nbsp;&raquo;</i></a></li></a>
                                </div> 
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img1.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Procurando Aprendizado em Tecnologia&raquo;</h2>
                                    <h2 class="animation animated-item-2">Faça contato pelas redes sociais...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#subir">&nbsp;&nbsp;Saiba Mais &nbsp;&raquo;</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">A formatura é apenas o começo&raquo;</h2>
                                    <h2 class="animation animated-item-2">Mas é um começo maravilhoso, e alcançado por poucos...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#subir">Saiba Mais&raquo;</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->
    </section><!--/#portfolio-item-->
    

   <!--inicio instituições-->
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4>Instituições onde Trabalho</h4>
                        <ul>
                            <li><a href="qipoa.html"title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho nas Escolas e Faculdades QI-Porto Alegre"target="_bank">Escolas e Faculdades-QI-Porto Alegre</a></li>
                            <li><a href="qigvt.html"title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho nas Escolas e Faculdades QI-Gravataí"target="_bank">Escolas e Faculdades-QI-Gravataí</a></li>
                            <li><a href="ulbra.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho ULBRA-São Lucas"target="_bank">ULBRA-São Lucas</a></li>
                            <li><a href="fundatec.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho na FUNDATEC"target="_bank">FUNDATEC</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->


                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h5>Instituições onde Trabalhei</h5>
                        <ul>
                            <li><a href="ftec.html"title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho na FTEC"target="_bank">FTEC</a></li>
                            <li><a href="pao.html"title="" data-toggle="popover" data-placement="left" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho no Pão dos Pobres"target="_bank">Pão dos Pobres</a></li>
                            <li><a href="ufrgs.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho na UFRGS"target="_bank">UFRGS</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->


                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h5>Instituições onde Trabalhei</h5>
                        <ul>
                            <li><a href="unicruz.html"title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho na Universidade de Cruz Alta"target="_bank">UNICRUZ</a></li>
                            <li><a href="etaj.html"title="" data-toggle="popover" data-placement="left" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho na Escola Técnica do Alto Jacuí em Ibirubá"target="_bank">ETAJ</a></li>
                            <li><a href="seg.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho na SEG"target="_bank">Sistema de Ensino Galileu</a></li>                                   
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h5>Instituições onde Trabalhei</h5>
                        <ul>
                            <li><a href="exercito.html"title="" data-toggle="popover" data-placement="left" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho no Exército Brasileiro"target="_bank">Exército Brasileiro</a></li>
                            <li><a href="policia.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho na Policia Civil de Cruz Alta"target="_bank">Policia Civil</a></li>
                        </ul>                   
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
<!--fim instituições-->


<!--inicio footer-->
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4774376P5"target="_blank"title="Formação Acadêmica e Profissional do Professor, para ver digite o Código de segurança" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">&copy; 2016 - Professor João Moreira</a>                
                </div>


                <!--inicio referencial para botao top-->
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>


                        
                        <li> <a href="#"id="subir" title="ir ao topo" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="subir"></a></li>



                    </ul>
                </div>
            </div>
        </div>
    </footer><!--final footer-->


<!--Inicio script-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
       $('#subir').click(function(){ 
       $('html, body').animate({scrollTop:10},'8000');
      return false;
         });
     });
    </script>
<!--fim script-->

<!--inicio popover-->
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 

});
</script>
<!--fim popover-->



<!-- modal -->
<?php
if($exibirModal === true) : ?>
<script type="text/javascript">
$(document).ready(function()
{
$("#meumodal").modal("show");
});
</script>
<?php endif;?>

<div class="modal fade" id="meumodal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"title="Clique para fechar" data-toggle="popover" data-placement="right" data-trigger="hover" data-content=""><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
<h4 class="modal-title">Esta informação só aparecera NOVAMENTE em "24 horas".</h4>
</div>
 
<div class="modal-body">
<section class="modal-body">  

   <form name="signup" method="post" action="cadastrando.php">
        <section id="contact-page">
        <div class="container">
                    
                
                <p class="lead">Faça o cadastro para acessar a cursos on-line gratuitos.</p>
            </div> 
            <div class="row contact-wrap"> 
                
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">




<label>Nome: *</label><br>
<input type="text"  name="nome" required="required"placeholder="Primeiro nome" title="Olá!" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Digite aqui o primeiro nome" rel="prettyPhoto"><br>
<label>Sobrenome: *</label><br>
<input type="text" name="sobrenome" required="required"placeholder="Sobrenome" title="Olá!" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Digite aqui o Sobrenome" rel="prettyPhoto"/><br><br>


    <select id="pais" name="pais" required="required" title="Olá!" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Selecione aqui aqui o País onde moras" rel="prettyPhoto">
    <option value="estados">Selecione o País</option>
<option value="AF">Afghanistan</option>
 <option value="AL">Albania</option>
 <option value="DZ">Algeria</option>
 <option value="AS">American Samoa</option>
 <option value="AD">Andorra</option>
 <option value="AO">Angola</option>
 <option value="AI">Anguilla</option>
 <option value="AG">Antigua and Barbuda</option>
 <option value="AR">Argentina</option>
 <option value="AM">Armenia</option>
 <option value="AW">Aruba</option>
 <option value="AC">Ascension Island</option>
 <option value="AU">Australia</option>
 <option value="AT">Austria</option>
 <option value="AZ">Azerbaijan</option>
 <option value="BH">Bahrain</option>
 <option value="BD">Bangladesh</option>
 <option value="BB">Barbados</option>
 <option value="BY">Belarus</option>
 <option value="BE">Belgium</option>
 <option value="BZ">Belize</option>
 <option value="BJ">Benin</option>
 <option value="BM">Bermuda</option>
 <option value="BT">Bhutan</option>
 <option value="BO">Bolivia</option>
 <option value="BA">Bosnia and Herzegovina</option>
 <option value="BW">Botswana</option>
 <option value="BR">Brasil</option>
 <option value="IO">Brit Indian Ocean Terr</option>
 <option value="BN">Brunei Darussalam</option>
 <option value="BG">Bulgaria</option>
 <option value="BF">Burkina Faso</option>
 <option value="BI">Burundi</option>
 <option value="KH">Cambodia</option>
 <option value="CM">Cameroon</option>
 <option value="CA">Canada</option>
 <option value="CV">Cape Verde</option>
 <option value="KY">Cayman Islands</option>
 <option value="CF">Central African Republic</option>
 <option value="TD">Chad</option>
 <option value="CL">Chile</option>
 <option value="CN">China</option>
 <option value="CO">Colombia</option>
 <option value="KM">Comoros</option>
 <option value="CG">Congo</option>
 <option value="CK">Cook Islands</option>
 <option value="CR">Costa Rica</option>
 <option value="CI">Cote D Ivoire</option>
 <option value="HR">Croatia</option>
 <option value="CU">Cuba</option>
 <option value="CY">Cyprus</option>
 <option value="CZ">Czech Republic</option>
 <option value="CD">Democratic republic of Congo</option>
 <option value="DK">Denmark</option>
 <option value="DJ">Djibouti</option>
 <option value="DM">Dominica</option>
 <option value="DO">Dominican Republic</option>
 <option value="EC">Ecuador</option>
 <option value="EG">Egypt</option>
 <option value="SV">El Salvador</option>
 <option value="GQ">Equatorial Guinea</option>
 <option value="ER">Eritrea</option>
 <option value="EE">Estonia</option>
 <option value="ET">Ethiopia</option>
 <option value="FK">Falkland Islands</option>
 <option value="FO">Faroe Islands</option>
 <option value="FM">Fed States Micronesia</option>
 <option value="FJ">Fiji</option>
 <option value="FI">Finland</option>
 <option value="YU">Fmr Yugoslavia</option>
 <option value="FR">France</option>
 <option value="GF">French Guiana</option>
 <option value="PF">French Polynesia</option>
 <option value="GA">Gabon</option>
 <option value="GE">Georgia</option>
 <option value="DE">Germany</option>
 <option value="GH">Ghana</option>
 <option value="GI">Gibralter</option>
 <option value="GR">Greece</option>
 <option value="GL">Greenland</option>
 <option value="GD">Grenada</option>
 <option value="GP">Guadeloupe</option>
 <option value="GU">Guam</option>
 <option value="GT">Guatemala</option>
 <option value="GN">Guinea</option>
 <option value="GW">Guinea Bissau</option>
 <option value="GY">Guyana</option>
 <option value="HT">Haiti</option>
 <option value="HN">Honduras</option>
 <option value="HK">Hong Kong</option>
 <option value="HU">Hungary</option>
 <option value="IS">Iceland</option>
 <option value="IN">India</option>
 <option value="ID">Indonesia</option>
 <option value="IR">Iran</option>
 <option value="IQ">Iraq</option>
 <option value="IE">Ireland</option>
 <option value="IM">Isle of Man</option>
 <option value="IL">Israel</option>
 <option value="IT">Italy</option>
 <option value="JM">Jamaica</option>
 <option value="JP">Japan</option>
 <option value="JO">Jordan</option>
 <option value="KZ">Kazakhstan</option>
 <option value="KE">Kenya</option>
 <option value="KI">Kiribati</option>
 <option value="KW">Kuwait</option>
 <option value="KG">Kyrgyzstan</option>
 <option value="LA">Laos</option>
 <option value="LV">Latvia</option>
 <option value="LB">Lebanon</option>
 <option value="LS">Lesotho</option>
 <option value="LR">Liberia</option>
 <option value="LY">Libya</option>
 <option value="LI">Liechtenstein</option>
 <option value="LT">Lithuania</option>
 <option value="LU">Luxembourg</option>
 <option value="MO">Macau</option>
 <option value="MK">Macedonia</option>
 <option value="MG">Madagascar</option>
 <option value="MW">Malawi</option>
 <option value="MY">Malaysia</option>
 <option value="MV">Maldives</option>
 <option value="ML">Mali</option>
 <option value="MT">Malta</option>
 <option value="MH">Marshall Islands</option>
 <option value="MQ">Martinique</option>
 <option value="MR">Mauritania</option>
 <option value="MU">Mauritius</option>
 <option value="YT">Mayotte</option>
 <option value="MX">Mexico</option>
 <option value="MD">Moldova</option>
 <option value="MC">Monaco</option>
 <option value="MN">Mongolia</option>
 <option value="ME">Montenegro</option>
 <option value="MS">Montserrat</option>
 <option value="MA">Morocco</option>
 <option value="MZ">Mozambique</option>
 <option value="MM">Myanmar</option>
 <option value="NA">Namibia</option>
 <option value="NR">Nauru</option>
 <option value="NP">Nepal</option>
 <option value="NL">Netherlands</option>
 <option value="AN">Netherlands Antilles</option>
 <option value="NC">New Caledonia</option>
 <option value="NZ">New Zealand</option>
 <option value="NI">Nicaragua</option>
 <option value="NE">Niger</option>
 <option value="NG">Nigeria</option>
 <option value="NU">Niue</option>
 <option value="NF">Norfolk Island</option>
 <option value="KP">North Korea</option>
 <option value="MP">Northern Mariana Islands</option>
 <option value="NO">Norway</option>
 <option value="OM">Oman</option>
 <option value="PK">Pakistan</option>
 <option value="PW">Palau</option>
 <option value="PS">Palestine</option>
 <option value="PA">Panama</option>
 <option value="PG">Papua New Guinea</option>
 <option value="PY">Paraguay</option>
 <option value="PE">Peru</option>
 <option value="PH">Philippines</option>
 <option value="PN">Pitcairn</option>
 <option value="PL">Poland</option>
 <option value="PT">Portugal</option>
 <option value="PR">Puerto Rico</option>
 <option value="QA">Qatar</option>
 <option value="RE">Reunion</option>
 <option value="RO">Romania</option>
 <option value="RU">Russia</option>
 <option value="RW">Rwanda</option>
 <option value="SM">San Marino</option>
 <option value="ST">Sao Tome and Principe</option>
 <option value="SA">Saudi Arabia</option>
 <option value="SN">Senegal</option>
 <option value="RS">Serbia</option>
 <option value="SC">Seychelles</option>
 <option value="SL">Sierra Leone</option>
 <option value="SG">Singapore</option>
 <option value="SK">Slovakia</option>
 <option value="SI">Slovenia</option>
 <option value="SB">Solomon Islands</option>
 <option value="SO">Somalia</option>
 <option value="ZA">South Africa</option>
 <option value="GS">South Georgia</option>
 <option value="KR">South Korea</option>
 <option value="ES">Spain</option>
 <option value="LK">Sri Lanka</option>
 <option value="VC">St. Vincent and Grenadines</option>
 <option value="KN">St. Kitts and Nevis</option>
 <option value="LC">St. Lucia</option>
 <option value="PM">St. Pierre and Miquelon</option>
 <option value="SD">Sudan</option>
 <option value="SR">Suriname</option>
 <option value="SZ">Swaziland</option>
 <option value="SE">Sweden</option>
 <option value="CH">Switzerland</option>
 <option value="SY">Syrian Arab Republic</option>
 <option value="TW">Taiwan</option>
 <option value="TJ">Tajikistan</option>
 <option value="TZ">Tanzania</option>
 <option value="TH">Thailand</option>
 <option value="GM">The Gambia</option>
 <option value="TL">Timor-Leste</option>
 <option value="TG">Togo</option>
 <option value="TK">Tokelau</option>
 <option value="TO">Tonga</option>
 <option value="TT">Trinidad and Tobago</option>
 <option value="TN">Tunisia</option>
 <option value="TR">Turkey</option>
 <option value="TM">Turkmenistan</option>
 <option value="TC">Turks/Caicos Islands</option>
 <option value="TV">Tuvalu</option>
 <option value="UG">Uganda</option>
 <option value="UA">Ukraine</option>
 <option value="AE">United Arab Emirates</option>
 <option value="GB">United Kingdom</option>
 <option value="US">United States of America</option>
 <option value="UY">Uruguay</option>
 <option value="UZ">Uzbekistan</option>
 <option value="VU">Vanuatu</option>
 <option value="VE">Venezuela</option>
 <option value="VN">Vietnam</option>
 <option value="VG">Virgin Islands (U.K)</option>
 <option value="VI">Virgin Islands (U.S)</option>
 <option value="WF">Wallis/Futuna Islands</option>
 <option value="EH">Western Samoa</option>
 <option value="YE">Yemen</option>
 <option value="ZM">Zambia</option>
 <option value="ZW">Zimbabwe</option>
</select>


<br><br>
    <select id="estados" name="estados" required="required" title="Olá!" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Selecione aqui o estado onde moras" rel="prettyPhoto">
        <option value="estados">Selecione o Estado</option> 
        <option value="ac">Acre</option> 
        <option value="al">Alagoas</option> 
        <optien value="am">Amazonas</option> 
        <option value="ap">Amapá</option> 
        <option value="ba">Bahia</option> 
        <option value="ce">Ceará</option> 
        <option value="df">Distrito Federal</option> 
        <option value="es">Espírito Santo</option> 
        <option value="go">Goiás</option> 
        <option value="ma">Maranhão</option> 
        <option value="mt">Mato Grosso</option> 
        <option value="ms">Mato Grosso do Sul</option> 
        <option value="mg">Minas Gerais</option> 
        <option value="pa">Pará</option> 
        <option value="pb">Paraíba</option> 
        <option value="pr">Paraná</option> 
        <option value="pe">Pernambuco</option> 
        <option value="pi">Piauí</option> 
        <option value="rj">Rio de Janeiro</option> 
        <option value="rn">Rio Grande do Norte</option> 
        <option value="ro">Rondônia</option> 
        <option value="rs">Rio Grande do Sul</option> 
        <option value="rr">Roraima</option> 
        <option value="sc">Santa Catarina</option> 
        <option value="se">Sergipe</option> 
        <option value="sp">São Paulo</option> 
        <option value="to">Tocantins</option> 
    </select>

<br><br>

<label>Cidade: *</label><br>
<input type="text" name="cidades" required="required"placeholder="Cidade" title="Olá!" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Digite aqui a cidade onde moras" rel="prettyPhoto"/><br>
<label>E-mail: *</label><br>
<input type="text"  name="email" required="required" placeholder="e@mail" title="Olá!" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Digite aqui o seu email" rel="prettyPhoto"/><br>
<label>Senha: *</label><br>
<input type="password"  name="senha" id="inputPassword"required="required"placeholder="Password" title="Olá!" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Digite aqui sua senha" rel="prettyPhoto"/><br>

<button type="submit" name="submit" class="btn btn-primary btn-lg" title="Olá!" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique aqui para cadastrar seus dados e acessar ao ambiente reservado com curos on-line gratuitos" rel="prettyPhoto">Cadastrar</button><br>


                    </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
</div>

<!-- / inicio botao flutuante-->

    <!-- easing plugin ( optional ) -->

    <script src="js/easing.js" type="text/javascript"></script>
    <!-- UItoTop plugin -->
    <script src="js/jquery.ui.totop.js" type="text/javascript"></script>
        <!-- Starting the plugin -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            
            $().UItoTop({ easingType: 'easeOutQuart' });
            
        });
    </script>
<!-- /.fim botao flutuante top-->
<!-- inicio menu flutuantes-->

<style type='text/css'>
@import url(http://weloveiconfonts.com/api/?family=entypo);
[class*="entypo-"]:before {
font-family: 'entypo', sans-serif;
}

/* ---------- GENERAL ---------- */
#social-sidebar a { text-decoration: none; }
#social-sidebar ul {
list-style: none;
margin: 0;
padding: 0;
}

/* ---------- Social Sidebar ---------- */
#social-sidebar {
right: 0;
margin-top: -75px; /* (li * a:width) / -2 */
position: fixed;
top: 50%;
}
#social-sidebar ul li:first-child a { border-radius: 0 5px 0 0; }
#social-sidebar ul li:last-child a { border-radius: 0 0 5px 0; }
#social-sidebar ul li a {
background: #121212;
color: #fff;
display: block;
height: 50px;
font-size: 18px;
line-height: 50px;
position: relative;
text-align: center;
width: 50px;
}
#social-sidebar ul li a:hover span {
right: 130%;
opacity: 1;
}
#social-sidebar ul li a span {
border-radius: 3px;
line-height: 24px;
right: -100%;
margin-top: -16px;
-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
filter: alpha(opacity=0);
opacity: 0;
padding: 4px 8px;
position: absolute;
-webkit-transition: opacity .3s, left .4s;
-moz-transition: opacity .3s, left .4s;
-ms-transition: opacity .3s, left .4s;
-o-transition: opacity .3s, left .4s;
transition: opacity .3s, left .4s;
top: 50%;
z-index: -1;
}
#social-sidebar ul li a span:before {
content: "";
display: block;
height: 8px;
left: -4px;
margin-top: -4px;
position: absolute;
top: 50%;
-webkit-transform: rotate(45deg);
-moz-transform: rotate(45deg);
-ms-transform: rotate(45deg);
-o-transform: rotate(45deg);
transform: rotate(45deg);
width: 8px;
z-index: -2;
}
#social-sidebar ul li a[class*="glyphicon"]:hover,
#social-sidebar ul li a[class*="glyphicon"] span,
#social-sidebar ul li a[class*="glyphicon"] span:before { background: #FFBF00; }

#social-sidebar ul li a[class*="twitter"]:hover,
#social-sidebar ul li a[class*="twitter"] span,
#social-sidebar ul li a[class*="twitter"] span:before { background: #6CDFEA; }

#social-sidebar ul li a[class*="linkedin"]:hover,
#social-sidebar ul li a[class*="linkedin"] span,
#social-sidebar ul li a[class*="linkedin"] span:before { background: #234999; }

#social-sidebar ul li a[class*="youtube"]:hover,
#social-sidebar ul li a[class*="youtube"] span,
#social-sidebar ul li a[class*="youtube"] span:before { background: #E34429; }

#social-sidebar ul li a[class*="gplus"]:hover,
#social-sidebar ul li a[class*="gplus"] span,
#social-sidebar ul li a[class*="gplus"] span:before { background: #E34429; }

#social-sidebar ul li a[class*="facebook"]:hover,
#social-sidebar ul li a[class*="facebook"] span,
#social-sidebar ul li a[class*="facebook"] span:before { background: #234999; }

#social-sidebar ul li a[class*="whatsapp"]:hover,
#social-sidebar ul li a[class*="whatsapp"] span,
#social-sidebar ul li a[class*="whatsapp"] span:before { background: #228B22; }

</style>
<div id='social-sidebar'>
<ul>


<li>
<a class='entypo-whatsapp'href='#'><span>51-9474-4224-whatsapp</span><img src="images/whatts3.png"width="20" height="20"></a>
</li> 
<li>
<a class='entypo-facebook'href='https://www.facebook.com/professorjoaomoreira' target='_blank'>
<span>facebook</span>
</a>
</li>
<li>
<a class='entypo-twitter' href='https://twitter.com/profjoaomoreira' target='_blank'>
<span>Twitter</span></a>
</li>
<li>
<a class='entypo-linkedin' href='https://br.linkedin.com/in/jo%C3%A3o-moreira-93988722' target='_blank'><span>Linkedin</span></a>
</li> 

<li>
<a class='fa fa-youtube' href='https://www.youtube.com/user/professorjoaomoreira' target='_blank'>
<span>Youtube</span></a>
</li>

<li>
<a class='entypo-gplus' href='https://plus.google.com/+ProfessorJo%C3%A3oMoreira/posts' target='_blank'>
<span>google+</span>
</a>
</li>
</ul>
</div>
<!-- fim menu flutuantes-->





<!--inicio popover-->


</body>
</html>