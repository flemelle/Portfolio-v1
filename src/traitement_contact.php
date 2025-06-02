<?php
session_start();
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LfDOhMgAAAAAAsS0RiVdPARZupyBtBjLtmGxtDH',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }
    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);
    if (!$res['success']) {
        $_SESSION["captcha"] = true; 
        header('Location: index.php#contact');
        } else {
        if ( isset( $_POST['submit'] ) ) {
            $IPadress = $_SERVER['REMOTE_ADDR'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $to="tiphereth.bruce@outlook.com";
            $sujet="Message de Korra.dev";
            $headers = 'From:contact@korra.dev'."\n".'Reply-To: tiphereth.bruce@outlook.com';
            $msgtome = 'Récéption d\'un message en provenance de https://www.Korra.dev'."\n"."\n";
            $msgtome .= 'E-mail : '.$email."\n";
            $msgtome .= 'Message :'."\n".$message;
            $msgtome .= "\n"."\n"."\n"."\n"."\n".'IP adress : '. $IPadress;

            $sujettomail="Korra.dev : Accusé de récéption";
            $msgtomail = 'Accusé de récéption de votre message envoyé à Tiphereth BRUCE sur https://www.Korra.dev.'."\n"."\n";
            $msgtomail .= 'Copie du message envoyé :'."\n";
            $msgtomail .= 'E-mail : '.$email."\n";
            $msgtomail .= 'Message :'."\n".$message;

            mail($to, $sujet, $msgtome, $headers);
            mail($email, $sujet, $msgtomail, $headers);

            $_SESSION["sentmail"] = true; 
            header('Location: index.php');
        }
    } 
} 

?>