<?php
    $firstname = $name = $email = $phone = $message = "";
    $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
    $isSuccess = false;
    $emailTo = "jeremy@jeremytrindade.com";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = verifyInput($_POST["firstname"]);
        $name = verifyInput($_POST["name"]);
        $email = verifyInput($_POST["email"]);
        $phone = verifyInput($_POST["phone"]);
        $message = verifyInput($_POST["message"]);
        $isSuccess = true;
        $emailText = "";

        if(empty($firstname)){
            $firstnameError = "Je veux connaitre ton prénom !";
            $isSuccess = false;
        }
        else
            $emailText .= "FirstName: $firstname\n";

        if(empty($name)){
            $nameError = "Et oui je veux tout savoir. Même ton nom !";
            $isSuccess = false;
        }
        else
            $emailText .= "Name: $name\n";

        if(!isEmail($email)){
            $emailError = "J'en ai besoin pour pouvoir te répondre !";
            $isSuccess = false;
        }
        else
            $emailText .= "Email: $email\n";

        if(!isPhone($phone)){
            $phoneError = "Que des chiffres et des espaces, stp...";
            $isSuccess = false;
        }
        else
            $emailText .= "Phone: $phone\n";

        if(empty($message)){
            $messageError = "Qu'est-ce que tu veux me dire ?";
            $isSuccess = false;
        }
        else
            $emailText .= "Message: $message\n";

        if($isSuccess){
            $headers = "From: $firstname $name <$email>\r\nReply-to: $email";
            mail($emailTo, "Un message de votre site", $emailText, $headers);
            $firstname = $name = $email = $phone = $message = "";
        }
    }

    function isPhone($var){
        return preg_match("/^[0-9 +]*$/",$var);
    }
    function isEmail($var){
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }
    function verifyInput($var){
        $var = trim($var); // serve tirar espaços TABB ir a linha a baixo.
        $var = stripslashes($var); // elle va enlever tout les anti-slash.
        $var = htmlspecialchars($var);

        return $var;
    }

?>