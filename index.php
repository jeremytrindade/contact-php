<?php
    $firstname = $name = $email = $phone = $message = "";
    $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = verifyInput($_POST["firstname"]);
        $name = verifyInput($_POST["name"]);
        $email = verifyInput($_POST["email"]);
        $phone = verifyInput($_POST["phone"]);
        $message = verifyInput($_POST["message"]);

        if(empty($firstname)){
            $firstnameError = "Je veux connaitre ton prénom !";
        }
        if(empty($name)){
            $nameError = "Et oui je veux tout savoir. Même ton nom !";
        }
        if(empty($messageError)){
            $messageError = "Qu'est-ce que tu veux me dire ?";
        }
    }

    function verifyInput($var){
        $var = trim($var); // serve tirar espaços TABB ir a linha a baixo.
        $var = stripslashes($var); // elle va enlever tout les anti-slash.
        $var = htmlspecialchars($var);

        return $var;
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Contactez-moi !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="divider"></div>
        <div class="heading"><h2>Contactez-moi</h2></div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <form action="<?php echo htmlspecialchars/*serve para não se poder meter scripts no URL*/($_SERVER["PHP_SELF"]); ?>" id="contact-form" method="post" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Prénom<span class="blue"> *</span></label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $firstname; ?>" /*required é bom para caso seja usado por pessoas que não tem intencoes de o hackear dai usar-mos no servidor para ser mais seguro*/>
                            <p class="comments"><?php echo $firstnameError; ?></p>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Nom<span class="blue"> *</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="<?php echo $name; ?>"> 
                            <p class="comments"><?php echo $nameError; ?></p>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email<span class="blue"> *</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Votre email" value="<?php echo $email; ?>">
                            <p class="comments"><?php echo $emailError; ?></p>
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Téléphone</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="<?php echo $phone; ?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                            <label for="message">Message<span class="blue"> *</span></label>
                            <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4" ><?php echo $message; ?></textarea>
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                           <p class="blue"><strong>* Ces information sont requises</strong></p>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="button1" value="Envoyer">
                        </div>
                    </div>

                    <p class="thank-you">Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>