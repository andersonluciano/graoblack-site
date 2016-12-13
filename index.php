<?php

if ($_POST['name'] != "") {

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.google.com/recaptcha/api/siteverify",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode(array(
            "response" => $_POST['g-recaptcha-response'],
            "secret" => "6LfwnA4UAAAAAADqgkns2aYlsPcNEgTdHUEL7iBv",
            "remoteip" => $_SERVER['REMOTE_ADDR']
        )),
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/json",
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v3.10.1, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v3.10.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">


    <meta name="description" content="">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">


</head>
<body>
<section class="mbr-section mbr-section-hero mbr-section-full header2 mbr-parallax-background" id="header2-2" style="background-image: url(assets/images/recycled-texture-background-by-sandeep-m-d6aeau9-pz9chud-2000x1333-14.jpg);">

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);">
    </div>

    <div class="mbr-table mbr-table-full">
        <div class="mbr-table-cell">

            <div class="container">
                <div class="mbr-section row">
                    <div class="mbr-table-md-up">

                        <div class="mbr-table-cell mbr-right-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 47%;">
                            <div class="mbr-figure"><img src="assets/images/graoblack-white-1400x861-61.png"></div>
                        </div>
                        <div class="mbr-table-cell col-md-5 text-xs-center text-md-left content-size">
                            <div class="mbr-section-text lead">
                                <h2>Conheça nossa empresa e &nbsp;otimize a sua.</h2>
                            </div>
                            <div class="mbr-section-btn" style="text-align: center;"><a class="btn btn-primary" href="index.html#msg-box5-3">CONHEÇA NOSSOS SERVIÇOS</a></div>

                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden="true"><a href="#msg-box5-3"><i class="mbr-arrow-icon"></i></a></div>

</section>

<section class="engine"><a rel="external" href="https://mobirise.com">free drag and drop site building software download</a></section>
<section class="mbr-section" id="msg-box5-3" style="background-color: rgb(255, 255, 255); padding-top: 80px; padding-bottom: 80px;">


    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">


                <div class="mbr-table-cell col-md-5 text-xs-center text-md-right content-size">
                    <h3 class="mbr-section-title display-2">Minha Célula</h3>
                    <div class="lead">

                        <p>Sistema de gerência de células no formato (MDA), oferece uma visão apurada de como anda a saúde das células de sua instituição.</p>

                    </div>

                    <div><a class="btn btn-primary" href="https://mobirise.com">ACESSE</a></div>
                </div>


                <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 50%;">
                    <div class="mbr-figure"><img src="assets/images/minhacelula-color-1400x672-65.png"></div>
                </div>

            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-parallax-background" id="msg-box5-4" style="background-image: url(assets/images/white-background-bd1-2000x1435-22.png); padding-top: 80px; padding-bottom: 80px;">

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(255, 255, 255);">
    </div>
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">

                <div class="mbr-table-cell mbr-right-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 50%;">
                    <div class="mbr-figure"><img src="assets/images/dev-1400x980-15.png"></div>
                </div>


                <div class="mbr-table-cell col-md-5 text-xs-center text-md-left content-size">
                    <h3 class="mbr-section-title display-2">Desenvolvimento de Sistemas</h3>
                    <div class="lead">

                        <p>Análisamos grão-a-grão o seu problema, e desenvolvemos o sistema que vai acabar com suas dores de cabeça.</p>

                    </div>

                    <div><a class="btn btn-primary" href="index.html#form1-5">FALE CONOSCO</a></div>
                </div>


            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-parallax-background" id="form1-5" style="background-image: url(assets/images/light-wood-background-wallpaper-2000x1250-91.jpg); padding-top: 120px; padding-bottom: 120px;">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(34, 34, 34);">
    </div>
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">FALE CONOSCO</h3>
                    <small class="mbr-section-subtitle">Venha tomar um café</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">


                    <div data-form-alert="true">
                        <div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Obrigado por falar conosco!
                            Em breve entraremos em contato
                        </div>
                    </div>


                    <form action="#" method="post" data-form-title="FALE CONOSCO">

                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-5-name">Nome<span class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="name" required="" data-form-field="Name" id="form1-5-name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-5-email">Email<span class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control" name="email" required="" data-form-field="Emaial" id="form1-5-email">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-5-phone">Telefone</label>
                                    <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="form1-5-phone">
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="form1-5-message">Mensagem</label>
                            <textarea class="form-control" name="message" rows="7" data-form-field="Message" id="form1-5-message"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LcQiQ4UAAAAACNmQ9Lq7CD0jDKuMveMzSOXYQBN"></div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">ENVIAR</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-6" style="background-color: rgb(0, 0, 0); padding-top: 90px; padding-bottom: 90px;">

    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><a href="#top"><img src="assets/images/graoblack-grao-white-128x78-23.png"></a></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Address</strong><br>Marília, São Paulo</p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Contato</strong><br>
                    Email: contato@graoblack.com<br>Fone: (14) 9 81001660<br></p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p></p>
                <p><strong>Links</strong><br>
                    <a href="https://minhacelula.net" target="_blank" class="text-white">Minha Célula</a><a class="text-primary" href="https://mobirise.com/"></a><br><br></p>
                <p></p>
            </div>

        </div>
    </div>
</section>


<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smooth-scroll/SmoothScroll.js"></script>
<script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
<script src="assets/jarallax/jarallax.js"></script>
<script src="assets/theme/js/script.js"></script>
<!--<script src="assets/formoid/formoid.min.js"></script>-->
<script src='https://www.google.com/recaptcha/api.js'></script>

<input name="animation" type="hidden">
</body>
</html>