<?php
$host = "mysql8.000webhost.com";
$user = "a9665300_cad";
$pass = "moreira300103";
$banco = "a9665300_cadastr";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db ($banco) or die (mysql_error());
?>

<?php
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
  header("Location: index.php");  
  exit;
} 
if(isset($_SESSION["email"])){
   echo "Bem-Vindo: " . $_SESSION["email"];
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

       <!-- inicio links para favicon-->     
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

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


                                <li><a href="logout.php"title="Olá" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="clique aqui para se deslogar"target="_blank"><i class="glyphicon glyphicon-off"></i></a></li>
                                </li>
                                
                                <li><a href="#"title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Me adicione no WhattsApp => (51) 9474 4224"><img src="images/whatts3.png"width="20" height="20"></a></li>

                                <li><a href="https://www.facebook.com/professorjoaomoreira"target="_blank"title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Acesse o meu Facebook"target="_blank"><i class="fa fa-facebook"></i></a></li>

                                <li><a href="https://twitter.com/profjoaomoreira"title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Acesse o meu twitter"><i class="fa fa-twitter"></i></a></li>

                                <li><a href="https://br.linkedin.com/in/jo%C3%A3o-moreira-93988722"title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Acesse o meu linkedin"><i class="fa fa-linkedin"></i></a></li> 

                                <li><a href="https://www.youtube.com/user/professorjoaomoreira"title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Acesse o meu canal no youtube"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://plus.google.com/+ProfessorJo%C3%A3oMoreira"title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Acesse o meu google+"><i class="fa fa-google-plus"></i></a></li>
                            <a class="btn btn-danger" href="logout.php" title="Olá" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="clique aqui para se deslogar"> <i class="glyphicon glyphicon-off"></i> Logout</a>
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
                                <li><a href="cadastro.php"title="Olá" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Clique aqui e cadastre-se para ter acesso aos cursos on-line gratuitos."target="_blank">Cadastro</a></li>
                                <li><a href="login.php"title="Olá"data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Depois de cadastrar-se no link acima, então, fazer o login para acessar gratuitamente os curso online gratuitos"target="_blank">Cursos Gratuitos</a>
                                </li>
                                <li><a href="login.php"title="Olá" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Depois de cadastrar-se no link acima, então, fazer o login para acessar gratuitamente os curso online gratuitos"target="_blank">Login</a>
                                </li>
                                <li><a href="logout.php"title="Olá" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="clique aqui para se deslogar"target="_blank">Logout</a>
                                </li>
                            </ul>                          
                        <li> <a href="#subir" title="" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="ir final"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-down"></span></button></p></a></li>
 

                </div>
            </div><!--/.container-->


        </nav><!--fim do nav-->
       </div>
       
    </header><!--/header-->

    
<!--inicio google maps-->
<div class="gmap-area">
    <div class="center">                
                 <h2>Cursos Online Gratuitos</h2>    



            
                <div class="col-sm-5 text-center">
                        <div class="gmap">



                            <img src="http://i.ytimg.com/vi/8bJmRf9kvas/hqdefault.jpg" width="275" height="279" data-toggle="popover"  data-trigger="hover" data-content="">
                        

                        </div>
                    </div>
                    <br><br><br><br>
<div class="request">
                    <h4><a href="#">Cursos</a></h4>
                </div>
                </div>
            </div>
        </div>
        </div>

<br><br><br>            
            <br><br>

            <!--inicio menu das disciplinas-->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab5" data-toggle="tab" class="analistic-01">Curso de Algoritmos.</a></li>
                                    <li class=""><a href="#tab6" data-toggle="tab" class="analistic-01">Curso de PHP.</a></li>
                                    <li class=""><a href="#tab7" data-toggle="tab" class="analistic-01">Curso de Java.</a></li>
                                    <li class=""><a href="#tab8" data-toggle="tab" class="analistic-01">Curso HTML5.</a></li>
                                    <li class=""><a href="#tab9" data-toggle="tab" class="analistic-01">Curso Banco de Dados.</a></li>
                                    <li class=""><a href="#tab10" data-toggle="tab" class="analistic-01">Curso Ilustrator.</a></li>
                                    <li class=""><a href="#tab11" data-toggle="tab" class="analistic-01">Curso Photoshop.</a></li>
                                    <li class=""><a href="#tab12" data-toggle="tab" class="analistic-01">Curso Gimp.</a></li>
                                    </ul>
                            </div>
                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab5">
                                        <div class="media">
                                           <div class="pull-left">

                                                <a title="Curso algoritmos."  href="https://www.youtube.com/embed/8mei6uVttho?list=PLWPsTOpQGaB4sC0VLs2p5TLf56k6Cqi9v" rel="shadowbox;height=500;width=700" role="button"><img src="img/cursos/algo.jpg"class="img-thumbnail"alt="Curso algoritmos"width="150" height="300"></a></p>



                                                

                                            </div>
                                            <div class="media-body">
                                                 <h2>Curso Algoritmos on-line gratuito</h2>
                                                 <p style="text-align: justify; ">Curso on-line gratuito de algoritmos, didático e pedagógico, playlist com 14 vídeos muito bons, aproveitem...<span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span>

                                                  <div>

          <br>        

          <a class="btn btn-warning" href="https://www.youtube.com/embed/8mei6uVttho?list=PLWPsTOpQGaB4sC0VLs2p5TLf56k6Cqi9v" rel="shadowbox" role="button" title="curso de algoritmos"> <i class="glyphicon glyphicon-facetime-video"></i> Algoritmos</a>




          
       </div>
                                                 </p>

                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade" id="tab6">
                                        <div class="media">
                                           <div class="pull-left">
                                                 <a title="Curso on-line de PHP..." href="https://www.youtube.com/embed/F7KzJ7e6EAc?list=PLHz_AreHm4dm4beCCCmW4xwpmLf6EHY9k" rel="shadowbox;height=500;width=700" role="button"><img src="img/cursos/php.jpg"class="img-thumbnail" alt="Curso on-line de PHP..."width="150" height="150"></a></p>
                                         
                                            </div>
                                            <div class="media-body">
                                                 <h2>Curso on-line de PHP...</h2>
                                                 <p style="text-align: justify; ">Curso on-line gratuito de PHP, didático e pedagógico, playlist com 20 vídeos muito bons, aproveitem...<span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span></p>


        <br>        
        
        <a class="btn btn-warning" href="https://www.youtube.com/embed/F7KzJ7e6EAc?list=PLHz_AreHm4dm4beCCCmW4xwpmLf6EHY9k" rel="shadowbox" role="button" title="Curso PHP"> <i class="glyphicon glyphicon-facetime-video"></i> Curso PHP</a>

        
</div>  
                                     </div>
                                     </div>

                                      <div class="tab-pane fade" id="tab7">
                                        <div class="media">
                                           <div class="pull-left">
                                                 <a title="Curso Java..."  href="https://www.youtube.com/embed/sTX0UEplF54?list=PLHz_AreHm4dkI2ZdjTwZA4mPMxWTfNSpR" rel="shadowbox;height=500;width=700" role="button"><img src="img/cursos/java.jpg"class="img-thumbnail" alt="Curso Java..."width="150" height="150"></a></p>
                                         
                                            </div>
                                            <div class="media-body">
                                                 <h2>Curso Java...</h2>
                                                 <p style="text-align: justify; ">Curso on-line gratuito de Java, didático e pedagógico, playlist com 29 vídeos muito bons, aproveitem....<span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span></p>


        <br>        

        <a class="btn btn-warning" href="https://www.youtube.com/embed/sTX0UEplF54?list=PLHz_AreHm4dkI2ZdjTwZA4mPMxWTfNSpR" rel="shadowbox" role="button" title="Curso de Java"> <i class="glyphicon glyphicon-facetime-video"></i> Curso de Java</a>



</div>  
                                     </div>
                                     </div>

                                      <div class="tab-pane fade" id="tab8">
                                        <div class="media">
                                           <div class="pull-left">
                                                 <a title="Curso HTML5..."  href="https://www.youtube.com/embed/rsFCVjr5yxc?list=PLHz_AreHm4dlAnJ_jJtV29RFxnPHDuk9o" rel="shadowbox;height=500;width=700" role="button"><img src="img/cursos/html5.jpg"class="img-thumbnail" alt="Curso HTML5..."width="150" height="150"></a></p>
                                         
                                            </div>
                                            <div class="media-body">
                                                 <h2>Curso de HTML5</h2>
                                                 <p style="text-align: justify; ">Curso de HTML5.<span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span></p>

                                                 <div>

          <br>        
          <a class="btn btn-warning" href="https://www.youtube.com/embed/rsFCVjr5yxc?list=PLHz_AreHm4dlAnJ_jJtV29RFxnPHDuk9o"rel="shadowbox" role="button"title="HTML5"> <i class="glyphicon glyphicon-facetime-video"></i> Curso de HTML5</a>

          
       </div>

                                </div>  
                                  </div>
                                    </div>

                                      <div class="tab-pane fade" id="tab9">
                                        <div class="media">
                                           <div class="pull-left">
                                                 <a title="Curso Banco de Dados MYSQL..."  href="https://www.youtube.com/embed/SGnl_S_V02c?list=PL42AF1E9636DCD5EC" rel="shadowbox;height=500;width=700" role="button"><img src="img/cursos/mysql.jpg"class="img-thumbnail" alt="Banco de Dados Mysql..."width="150" height="150"></a></p>
                                         
                                            </div>
                                            <div class="media-body">
                                                 <h2>Curso Banco de Dados MYSQL...</h2>
                                                 <p style="text-align: justify; ">Curso de Curso Banco de Dados MYSQL.<span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span></p>

        <br>        
          <a class="btn btn-warning" href="https://www.youtube.com/embed/xzAQZHB7YD4?list=PLF43053C5BCBF2C78"rel="shadowbox" role="button"title="HTML5"> <i class="glyphicon glyphicon-facetime-video"></i> Modelagem de BD</a>

          <a class="btn btn-warning" href="https://www.youtube.com/embed/SGnl_S_V02c?list=PL42AF1E9636DCD5EC"rel="shadowbox" role="button"title="HTML5"> <i class="glyphicon glyphicon-facetime-video"></i> Banco de Dados</a>



                                    </div>  
                                     </div>
                                     </div>   

                                     <div class="tab-pane fade" id="tab10">
                                        <div class="media">
                                           <div class="pull-left">
                                                 <a title="Curso Ilustrator..."  href="https://www.youtube.com/embed/Dmocbx5H0rU?list=PLxNM4ef1BpxjzOSR4Lh94IT1_pl3kFAOo" rel="shadowbox;height=500;width=700" role="button"><img src="img/cursos/ilustrator.jpg"class="img-thumbnail" alt="Curso Ilustrator..."width="150" height="150"></a></p>
                                         
                                            </div>
                                            <div class="media-body">
                                                 <h2>Curso Ilustrator...</h2>
                                                 <p style="text-align: justify; ">Curso Ilustrator...<span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span></p>

                                                 <div>

          <br>        
          
          <a class="btn btn-warning" href="https://www.youtube.com/embed/Dmocbx5H0rU?list=PLxNM4ef1BpxjzOSR4Lh94IT1_pl3kFAOo"rel="shadowbox" role="button"title="Curso Ilustrator..."> <i class="glyphicon glyphicon-facetime-video"></i> Curso Ilustrator...</a>

          
       </div>

                                </div>  
                                  </div>
                                    </div>



                                     <div class="tab-pane fade" id="tab11">
                                        <div class="media">
                                           <div class="pull-left">
                                                 <a title="Curso photoshop..."  href="https://www.youtube.com/embed/Vyzqzcatlow?list=PLxNM4ef1BpxjW2rPtwjPaXcYdJ5zSpVEt" rel="shadowbox;height=500;width=700" role="button"><img src="img/cursos/photoshop.jpg"class="img-thumbnail" alt="Curso photoshop..."width="150" height="150"></a></p>
                                         
                                            </div>
                                            <div class="media-body">
                                                 <h2>Curso photoshop...</h2>
                                                 <p style="text-align: justify; ">Curso photoshop...<span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span></p>

                                                 <div>

          <br>        
          
          <a class="btn btn-warning" href="https://www.youtube.com/embed/Vyzqzcatlow?list=PLxNM4ef1BpxjW2rPtwjPaXcYdJ5zSpVEt"rel="shadowbox" role="button"title="Curso Ilustrator..."> <i class="glyphicon glyphicon-facetime-video"></i> Curso photoshop...</a>

          
       </div>

                                </div>  
                                  </div>
                                    </div>     

                                    <div class="tab-pane fade" id="tab12">
                                        <div class="media">
                                           <div class="pull-left">
                                                 <a title="Curso gimp..."  href="https://www.youtube.com/embed/90Pjy3N7yjw?list=PLEE61DCF0801FD228" rel="shadowbox;height=500;width=700" role="button"><img src="img/cursos/gimp.jpg"class="img-thumbnail" alt="Curso gimp..."width="150" height="150"></a></p>
                                         
                                            </div>
                                            <div class="media-body">
                                                 <h2>Curso gimp...</h2>
                                                 <p style="text-align: justify; ">Curso gimp...<span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span></p>

                                                 <div>

          <br>        
          
          <a class="btn btn-warning" href="https://www.youtube.com/embed/90Pjy3N7yjw?list=PLEE61DCF0801FD228"rel="shadowbox" role="button"title="Curso gimp..."> <i class="glyphicon glyphicon-facetime-video"></i> Curso gimp...</a>

          
       </div>

                                </div>  
                                  </div>
                                    </div>                                             


                                     
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                
                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Bibliografia:</h2>
                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                
                                <a title="SIG"  href="http://shopping.uol.com.br/sistemas-de-informacao-gerenciais-kenneth-c-laudon-jane-p-laudon-8576059231.html#rmcl" rel="shadowbox;height=500;width=700" role="button"title="SIG nacional"><img src="http://image.slidesharecdn.com/sistemasdeinformaogerenciaisjanelaudon9ed-140814094756-phpapp01/95/sistemas-de-informao-gerenciais-jane-laudon-9ed-1-638.jpg?cb=1408019629"class="img-thumbnail"width="100" height="100"></a></p>

                            </div>
                            <div class="media-body">
                                <p style="text-align: justify;">Este livro pode ser encontrado na biblioteca fisica, oi por intermédio da biblioteca virtual, em www.qi.edu.br...</p>
                                <a class="btn btn-warning" href="http://shopping.uol.com.br/sistemas-de-informacao-gerenciais-kenneth-c-laudon-jane-p-laudon-8576059231.html#rmcl"rel="shadowbox;height=500;width=700" role="button"title="SIG"> <i class="glyphicon glyphicon-book"></i>  Livro SIG</a>
                                <br><br>
                                

                            </div>
                         </div>

                    </div>
                </div>
<div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                        <h2>E-book Gratuito</h2>
                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                
                                <a href="download/seo.pdf?iframe=true&width=100%&height=100%" rel="prettyPhoto" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Clique aqui e acesse o e-book sobre aprendendo SEO com especialistas" title="e-book gratuito"><img src="download/seo.jpg"class="img-thumbnail"width="100" height="100"></a>

                            </div>
                            <div class="media-body">
                                <p style="text-align: justify;">E-book gratuito, sobre SEO, pois As empresas não precisam mais gastar milhares de dólares em
publicidade em catálogos e revistas. Cada empresa com website tem
o potencial de ser encontrada por mais clientes online através da
otimização para mecanismos de pesquisa (SEO) e inbound marketing.</p>
                                <a class="btn btn-warning" href="download/seo.pdf"rel="shadowbox;height=500;width=700" role="button"title="aprendendo SEO, com especialistas"> <i class="glyphicon glyphicon-book"></i> SEO</a>
                                <br><br>
               
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->
<br><br>


                    
                    </div><!--/.fim portfolio-item-->

    </section><!--/#portfolio-item-->

    <!--final das fotos do portifolio-->
    <!--inicio das outras fotos-->


    

<!--inicio instituições-->
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4>Instituições onde Trabalho</h4>
                        <ul>
                            <li><a href="qipoa.html"title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho nas Escolas e Faculdades QI-Porto Alegre"target="_blank">Escolas e Faculdades-QI-Porto Alegre</a></li>
                            <li><a href="qigvt.html"title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho nas Escolas e Faculdades QI-Gravataí"target="_blank">Escolas e Faculdades-QI-Gravataí</a></li>
                            <li><a href="ulbra.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho ULBRA-São Lucas"target="_blank">ULBRA-São Lucas</a></li>
                            <li><a href="fundatec.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho na FUNDATEC"target="_blank">FUNDATEC</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->


                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h5>Instituições onde Trabalhei</h5>
                        <ul>
                            <li><a href="ftec.html"title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho na FTEC"target="_blank">FTEC</a></li>
                            <li><a href="pao.html"title="" data-toggle="popover" data-placement="left" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho no Pão dos Pobres"target="_blank">Pão dos Pobres</a></li>
                            <li><a href="ufrgs.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho na UFRGS"target="_blank">UFRGS</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->


                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h5>Instituições onde Trabalhei</h5>
                        <ul>
                            <li><a href="unicruz.html"title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho na Universidade de Cruz Alta"target="_blank">UNICRUZ</a></li>
                            <li><a href="etaj.html"title="" data-toggle="popover" data-placement="left" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho na Escola Técnica do Alto Jacuí em Ibirubá"target="_blank">ETAJ</a></li>
                            <li><a href="seg.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho na SEG"target="_blank">Sistema de Ensino Galileu</a></li>                                   
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h5>Instituições onde Trabalhei</h5>
                        <ul>
                            <li><a href="exercito.html"title="" data-toggle="popover" data-placement="left" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho no Exército Brasileiro"target="_blank">Exército Brasileiro</a></li>
                            <li><a href="policia.html"title="" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Clique aqui para conhecer o meu trabalho na Policia Civil de Cruz Alta"target="_blank">Policia Civil</a></li>
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
                    <a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4774376P5?iframe=true&width=75%&height=100%" rel="prettyPhoto"title="Formação Acadêmica e Profissional do Professor, para ver digite o Código de segurança" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="">&copy; 2016 - Professor João Moreira</a>                
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

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>

</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->



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


<!--inicio popover-->
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 

});
</script>
<!--fim popover-->






</body>
</html>