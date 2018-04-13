
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
    <link rel="stylesheet" href="http://jeremytrindade.com/css/style.css">
</head>
<body>
    <div class="container">
        <div class="divider"></div>
        <div class="heading"><h2>Contactez-moi</h2></div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <form action=""/*htmlspecialchars() serve para não se poder meter scripts no URL*/ id="contact-form" method="post" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Prénom<span class="blue"> *</span></label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="" /*required é bom para caso seja usado por pessoas que não tem intencoes de o hackear dai usar-mos no servidor para ser mais seguro*/>
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Nom<span class="blue"> *</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value=""> 
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email<span class="blue"> *</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Votre email" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Téléphone</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                            <label for="message">Message<span class="blue"> *</span></label>
                            <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4" ></textarea>
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                           <p class="blue"><strong>* Ces information sont requises</strong></p>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="button1" value="Envoyer">
                        </div>
                    </div>

                    <p class="thank-you" style="display: ">Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>