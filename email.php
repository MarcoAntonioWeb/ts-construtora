<?php 

        /**** Informação se o email está certo ******/
            if(isset($_POST['email']) && !empty($_POST['email'])){

                $msg = '';

        /***** Variaveis *****/
        $nome = addslashes($_POST['nome']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['mensagem']);

        $to = "ts_construtora@yahoo.com";
        $subject = "Contato - Ts Construtora\n";// corpo da mensagem
       $body = "Nome: ".$nome. "\r\n".
                "Telefone: ".$telefone. "\r\n".
                "Email: ".$email. "\r\n".
                "Mensagem: ".$mensagem. "\r\n".     

        $header = "tsacab28@tsacabamentoereforma.com.br"."\r\n". 
                    "Replay-To:".$email. "\r\n".
                    "X=Mailer:PHP/".phpversion();
                                   
        if(mail($to,$subject,$body)) {

           //mostra mensagem de envio com sucesso
           $msg = '<div class="alert alert-success alert-dismissable">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong>Mensagem enviada com sucesso!</strong> 
       </div>';

   } else {

       //mostra mensagem de erro ao enviar
       $msg = '<div class="alert alert-danger alert-dismissable">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong>Erro ao enviar mensagem, tente novamente! </strong> 
       </div>';

   }
   
   } 
   //else {
   
   //mostra mensagem de erro caso algum dos campos esteja vazio
   //$msg = '<div class="alert alert-danger alert-dismissable">
           //<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          // <strong>Preencha todos os campos!! </strong> 
       //</div>';

         //}

       

    
