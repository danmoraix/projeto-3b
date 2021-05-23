
<?php function cabecalho() { global $config; ?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?=$config['TITULO']?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
    <?php navegacao(); ?>  
    <!--<main main="role" class="container"> espaço das laterais objetos--> 
    <?php } ?>
        <?php function navegacao() { global $config ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">
                <a class="navbar-brand" href="//localhost/Consulta_OutrosMundos"><?=$config['TITULO']?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <?php foreach ($config['MENU'] as $title => $value) { ?>
                    <?php if (is_array($value)) {?>
                        <li class="nav-item dropdown">
                         <!--<a class="nav-link" href="">
                                <span class="sr-only">(current)</span>
                            </a> -->
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$title?></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <?php foreach($value as $t => $v) { ?> 
                            <a class="dropdown-item" href="<?=$v?>"><?=$t?></a>
                            <?php } ?> 
                        </li>
                        <?php } else { ?>
                        <li class="nav-item"><a class="nav-link" href="<?=$value?>"><?=$title?></a></li>
                        <?php } ?> 
                        <?php } ?> 
                    </ul>
                </div>
            </div>
        </nav>
        <?php } ?> 
        <!-- Header-->
     
        <header class="bg-primary py-7 mb-7">
            <div class="container h-10">
                <div class="row h-10 align-items-center">
                    <div class="col-lg-12">
                        <h1 class="display-4 text-white mt-5 mb-2">United Nations</h1>
                        <p class="lead mb-5 text-white-50">Um projeto apoiado pela Organização das Nações Unidas</p>
                    </div>
                </div>
            </div>
        </header>
        <?php function rodape()  { global $config ?>
        <!-- Page Content-->
        <div class="container">
            <div class="row"> <!-- Inicio Poderia ter deixado apenas na página inicial, mas quis colocar para todos ;)-->
                <div class="col-md-8 mb-5">
                    <h2>O que nós somos?</h2>
                    <hr />
                    <p>Somos uma fundação apoiada  Organização das Nações Unidas, popularmente conhecida como ONU (ou no idioma inglês como UN), uma organização internacional cuja principal missão é a paz. Monitoramos e apoiamos o desenvolvimento dos Brasil, com apoio social, ecônomico e educacional, com investimentos e projetos para acabar com problemas existentes</p>
                    <h2>O que nós fazemos</h2>
                    <hr />
                    <p>Nossas ações é para alcançar a paz, a prosperidade, a igualdade e a dignidade de todos o Brasil, elevando a dignidade de todos os cidadãos.</p>
                    <a class="btn btn-primary btn-lg" href="//localhost/Consulta_OutrosMundos/ctt.php">Todos os Contatos »</a>

                </div>
                <div class="col-md-4 mb-5">
                    <h2>Contact Us</h2>
                    <hr />
                    <address>
                        <strong>Outros Mundos</strong>
                        <br />
                        Avenida Brasil, 420
                        <br />
                        Coelho Neto 
                        <br />
                        Rio de Janeiro, Brasil
                        <br />
                    </address>
                    <address>
                        <abbr title="Phone">P:</abbr>
                        (123) 456-7890
                        <br />
                        <abbr title="Email">E:</abbr>
                        <a href="mailto:"> <?=$config['EMAIL']?> </a>
                    </address>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://ilandvibez.com/wp-content/uploads/2018/02/logo-unesco.png" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title">UNESCO</h4>
                            <p class="card-text">Organização das Nações Unidas para a Educação, a Ciência e a Cultura, página central </p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary" href="http://www.unesco.org/new/pt/%20brasilia/home">Acesse!</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://www.seeklogo.net/wp-content/uploads/2013/04/onu-vector-logo.png" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title">ONU</h4>
                            <p class="card-text">Organizações das Nações Unidas, página central</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary" href="https://brasil.un.org/pt-br">Acesse</a></div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://th.bing.com/th/id/OIP.coqnrRgDbNo_vC4W-2bnvwHaGz?pid=ImgDet&rs=1" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title">UNICEF</h4>
                            <p class="card-text">Fundo das Nações Unidas para a Infância, página principal</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary" href="https://www.unicef.org/brazil/">Acesse!</a></div>
                    </div>
                </div>
            </div><!-- Fim -->
        </div>
        <!-- Footer-->
        <footer class="p-5 my-3 bg-dark">
            <div class="container-fluid widht 100%" ><p class="text-center text-white">Copyright &copy; Fundação Outros Mundos 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    
    </body>
<!-- final -->
</html>
<?php }?>
