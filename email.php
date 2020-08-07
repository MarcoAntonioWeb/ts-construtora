<?php 

        /**** Informação se o email está certo ******/
            if(isset($_POST['email']) && !empty($_POST['email']));

        /***** Variaveis *****/
        $nome = addslashes($_POST['name']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $Mensagem = addslashes($_POST['message']);

        $to = "contato@tsacabamentoereforma.com.br";
        $subject = "Contato - Ts Construtora";// corpo da mensagem
        $body = "Nome: ".$nome. "\r\n".
                "Telefone: ".$telefone. "\r\n".
                "Email: ".$email. "\r\n".
                "Mensagem: ".$mensagem. "\r\n".

        $header = "From:contato@tsacabamentoereforma.com.br"."\r\n".
                    "Replay-To:".$email. "\r\n".
                    "X=Mailer:PHP/".phpversion();
                    
        if(mail($to,$subject,$body,$heade)) {

            echo("Email enviado com sucesso!");

        }else{

            echo("Email não pode ser enviado");
            
        }

?>