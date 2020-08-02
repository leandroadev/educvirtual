<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site pessoal - Leandro Almeida - Suporte TI e Desenvolvimento Web.">    <title>EducVirtual</title>    
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <!--<![endif]-->
    
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="css/layouts/marketing.css">
        <!--<![endif]-->
</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">EducVirtual</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="" class="pure-menu-link">Início</a></li>
            <li class="pure-menu-item"><a href="#servico" class="pure-menu-link">Serviços</a></li>
            <li class="pure-menu-item"><a href="#conato" class="pure-menu-link">Contato</a></li>
        </ul>

    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">EducVirtual</h1>
        <p class="splash-subhead">
            Análise de Sistemas, Desenvolvimento Web, Administração e Suporte de Ambientes Virtuais de Aprendizagem.
        </p>
        <p>
            <a href="https://github.com/leandroadev" class="pure-button pure-button-primary">GitHub</a>
        </p>
    </div>
</div>

<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center"><a name="servico"></a>Serviços</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                    Ambientes Virtuais de Aprendizagem
                </h3>
                <p>
                    Instalação, Disponibilidade, Gerenciamento e Suporte de Ambientes Virtuais de Aprendizagem.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                    Computadores
                </h3>
                <p>
                    Formatação, manutenção preventiva e corretiva de computadores.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                    Suporte TI
                </h3>
                <p>
                    Suporte a usuários de informática.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                    Desenvolvimento
                </h3>
                <p>
                    Desenvolvimento de sistemas web.
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img width="300" alt="File Icons" class="pure-img-responsive" src="img/common/file-icons.png">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">Experiência Profissional.</h2>

            <p>Mais de 12 anos de atuação na área Técnica e de Supervisão, 
                com experiência na coordenação, planejamento e execução 
                de atividades tecnológicas da educação, na  
                configuração e manutenção de computadores, no atendimento as demandas relacionadas a 
                dúvidas técnicas de usuários de informática, no desenvolvimento 
                e gerenciamento do Moodle - Ambiente Virtual de Aprendizagem (AVA). 
                Assim como, na implementação de melhorias na navegabilidade de usuários do 
                Moodle (AVA).
            </p>

            <p>Atuação na área Técnica, com experiência em Suporte Tecnológico e Desenvolvimento 
                de Sistemas, experiência com monitoria de informática na educação infantil. 
                Atuação na área de Desenvolvimento e Suporte Técnico a Sistemas de Gestão 
                de Aprendizagem Implantados em empresas privadas para capacitação de colaboradores.
            </p>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center"><a name="conato"></a>Contato</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked" action="email.php" method="post">
                    <fieldset>

                        <label for="name">Nome</label>
                        <input id="name" type="text" name="nome" placeholder="Seu nome" required>


                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Seu e-mail" required>

                        <label for="mensagem">Mensagem</label>
                        <textarea id="mensagem" class="pure-input-1" name="mensagem" placeholder="Sua mensagem" required></textarea>

                        <button type="submit" class="pure-button">Enviar</button>
                        
                    </fieldset>
                </form>
            </div>  
            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>Contate-Nos</h4>
                <p>
                   Entre em contato conosco por meio do formulário de contato.
                </p>

                <h4>Mais Informações</h4>
                <p>
                    Para mais informações sobre os serviços oferecidos, consulte-nos.
                </p>
            </div>
        </div>

    </div>

    <div class="footer l-box is-center">
        Copyright &copy <?php echo date("Y"); ?> EducVirtual - Leandro Almeida.
    </div>

</div>


</body>
</html>
