<?php 

 if (isset($_POST[btnSend])) {

    $msg = '';

        /**** Informação se o email está certo ******/
            if(isset($_POST['email']) && !empty($_POST['email']));

        /***** Variaveis *****/
        $nome = addslashes($_POST['name']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $Mensagem = addslashes($_POST['message']);

        $to = "tsacab28	@tsacabamentoereforma.com.br";
        $subject = "Contato - Ts Construtora";// corpo da mensagem
        $body = "Nome: ".$nome. "\r\n".
                "Telefone: ".$telefone. "\r\n".
                "Email: ".$email. "\r\n".
                "Mensagem: ".$mensagem. "\r\n".

        $header = "From:contato@tsacabamentoereforma.com.br"."\r\n".
                    "Replay-To:".$email. "\r\n".
                    "X=Mailer:PHP/".phpversion();
                    
        if(mail($to,$subject,$body,$heade)) {

            //mostra mensagem de envio com sucesso
            $msg = '<div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Mensagem enviada com sucesso!</strong> 
                    </div>';

            echo("Email enviado com sucesso!");

        }else{

             //mostra mensagem de erro ao enviar
             $msg = '<div class="alert alert-danger alert-dismissable">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Erro ao enviar mensagem, tente novamente! </strong> 
         </div>';
     

            echo("Email não pode ser enviado");
            
        } else {
        
            //mostra mensagem de erro caso algum dos campos esteja vazio
            $msg = '<div class="alert alert-danger alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Preencha todos os campos!! </strong> 
                </div>';
        }
    
    }     

?>