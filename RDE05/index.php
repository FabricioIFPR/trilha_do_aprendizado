<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Fira+Code:wght@300;400&family=Open+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>css/style.css" rel="stylesheet">
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>img/favicon.ico">
    <script src="https://kit.fontawesome.com/dea5077ca3.js" crossorigin="anonymous"></script>

    <title>Portifólio</title>
</head>
<body>

    <?php 
        $url = isset($_GET['url']) ? $_GET['url'] : 'sobre';

        switch($url){
            case 'skills';
                echo '<target target="skills" />';
                break;
            case 'projetos';
                echo '<target target="projetos" />';
                break;
            case 'contato';
                echo '<target target="contato" />';
                break;
        }

    ?>
    

    <header class="header-top">
        <div class="center">
            <h2> &lt Dev Fabricio /&gt </h2>

            <ul class="bot-nav">

                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>skills">Skills</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>projetos">Projetos</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>trilha_do_aprendizado">Trilha do aprendizado</a></li>
                
            </ul><!--Botões nav-->

        </div><!--Center-->
    </header><!--Header Top-->

    <?php 

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            if($url != 'skills' && $url != 'projetos' && $url != 'contato'){ 
                $error404 = true;
                include('pages/error404.php');
            }else{
                include('pages/sobre.php');
            }
            
        }
    ?>

    <footer <?php if(isset($error404) && $error404 == true || $url == 'trilha_do_aprendizado'){ echo 'class="fixed"';} ?> >
        <p>Todos os direitos reservados a <a href="https://www.ifpr.edu.br/" target="_blank">Instituto Federal do Parána</a> - 2022 &copy</p>
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/function.js"></script>
    
</body>
</html>