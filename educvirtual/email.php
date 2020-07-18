<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_envio = date('d/m/y');
$hora_envio = date('H:i:s');

$arquivo = "<p>Nome: " . $nome . "</p><p>E-mail: " . $email . "</p><p>Mensagem: " . $mensagem . "</p>";

$emailenviar = "leandro@educvirtual.com.br";
$destino = $emailenviar;
$assunto = "Contato pelo site";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: $nome <$email>';

$enviaremail = mail($destino, $assunto, $arquivo, $headers);

if($enviaremail) {
    $msg = "E-mail enviado com sucesso";
    echo " <meta http-equiv='refresh' content='10;URL=index.php'>";
    echo "<!doctype html>
    <html lang='pt-br'>
    <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>EducVirtual</title>    
    <link rel='stylesheet' href='https://unpkg.com/purecss@1.0.1/build/pure-min.css' integrity='sha384-' crossorigin='anonymous'>
    
    <!--[if lte IE 8]>
        <link rel='stylesheet' href='https://unpkg.com/purecss@1.0.1/build/grids-responsive-old-ie-min.css'>
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel='stylesheet' href='https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css'>
    <!--<![endif]-->
    
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
    
        <!--[if lte IE 8]>
            <link rel='stylesheet' href='css/layouts/marketing-old-ie.css'>
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel='stylesheet' href='css/layouts/marketing.css'>
        <!--<![endif]-->
</head>
<body>
<div class='content'>
        <h2 class='content-head is-center'>Contato</h2>

        <div class='pure-g'>
            <div class='l-box-lrg pure-u-1 pure-u-md-2-5'>
                <form class='pure-form pure-form-stacked' action='email.php' method='post'>
                    <fieldset>

                        <label for='name'>Nome</label>
                        <input id='name' type='text' name='nome' placeholder='Seu nome' required>


                        <label for='email'>E-mail</label>
                        <input id='email' type='email' name='email' placeholder='Seu e-mail' required>

                        <label for='mensagem'>Mensagem</label>
                        <textarea id='mensagem' class='pure-input-1' name='mensagem' placeholder='Sua mensagem' required></textarea>

                        <button type='submit' class='pure-button'>Enviar</button>
                        
                        <p>" . $msg . "</p>
                        
                    </fieldset>
                </form>
            </div>  
            <div class='l-box-lrg pure-u-1 pure-u-md-3-5'>
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

    <div class='footer l-box is-center'>
        Copyright &copy <?php echo date('Y'); ?> EducVirtual - Leandro Almeida.
    </div>

</div>
</body>
</html>";
} else {
    $msg = "Erro ao enviar e-mail!";
    echo "<!doctype html>
    <html lang='pt-br'>
    <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>EducVirtual</title>    
    <link rel='stylesheet' href='https://unpkg.com/purecss@1.0.1/build/pure-min.css' integrity='sha384-' crossorigin='anonymous'>
    
    <!--[if lte IE 8]>
        <link rel='stylesheet' href='https://unpkg.com/purecss@1.0.1/build/grids-responsive-old-ie-min.css'>
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel='stylesheet' href='https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css'>
    <!--<![endif]-->
    
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
    
        <!--[if lte IE 8]>
            <link rel='stylesheet' href='css/layouts/marketing-old-ie.css'>
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel='stylesheet' href='css/layouts/marketing.css'>
        <!--<![endif]-->
</head>
<body>
<div class='content'>
        <h2 class='content-head is-center'>Contato</h2>

        <div class='pure-g'>
            <div class='l-box-lrg pure-u-1 pure-u-md-2-5'>
                <form class='pure-form pure-form-stacked' action='email.php' method='post'>
                    <fieldset>

                        <label for='name'>Nome</label>
                        <input id='name' type='text' name='nome' placeholder='Seu nome' required>


                        <label for='email'>E-mail</label>
                        <input id='email' type='email' name='email' placeholder='Seu e-mail' required>

                        <label for='mensagem'>Mensagem</label>
                        <textarea id='mensagem' class='pure-input-1' name='mensagem' placeholder='Sua mensagem' required></textarea>

                        <button type='submit' class='pure-button'>Enviar</button>
                        
                        <p>" . $msg . "</p>
                        
                    </fieldset>
                </form>
            </div>  
            <div class='l-box-lrg pure-u-1 pure-u-md-3-5'>
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

    <div class='footer l-box is-center'>
        Copyright &copy <?php echo date('Y'); ?> EducVirtual - Leandro Almeida.
    </div>

</div>
</body>
</html>";
}

?>