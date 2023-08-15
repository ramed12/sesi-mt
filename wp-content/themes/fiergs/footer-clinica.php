<script src="<?php echo get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/slick.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/app.js'; ?>"></script>
<div class="container py-5">
    <style>
        .inputs[type=text] {
            width: 100% !important;
            outline: 0;
            box-sizing: border-box !important;
            border: none !important;
            border-bottom: 3px solid white !important;
            background: transparent;
        }
        .inputs:focus {
            border-color: #04BCAB !important;
        }
        ::placeholder{
            color: white;
            opacity: 1;
            font-size: 14px;
            font-family: Roboto, Arial, Helvetica, sans-serif;
        }
        .text-cad{
            width: 100%;
            font-size: 20px;
            font-family: Roboto, Arial, Helvetica, sans-serif;
            opacity: 1;
        }
        .registrar{
            font-size: 10px !important;
            font-family: Roboto, Arial, Helvetica, sans-serif;
            opacity: 1;
        }
    </style>
    <div class="row">
        <div class="col-md-8 col-lg-8 col-xl-8 col-xxl-8 col-12 py-5 py-md-0 py-lg-0 py-xl-0 py-xxl-0 footer-menu">
            <div class="row">
                <form class="row g-3">
                    <div class="col-12">
                        <h1 class="text-white col-12">Fique por dentro das novidades</h1>
                    </div>
                    <div class="col-12">
                        <h4 class="text-light col-12 text-cad">Cadastre seu e-mail e não perca as atualizações sobre vacinas.</h4>
                    </div>
                    <div class="col-md-6 pt-2">
                        <input type="text" class="inputs text-light" placeholder="Digite aqui seu nome">
                    </div>
                    <div class="col-md-6 pt-2">
                        <input type="text" class="inputs text-light" placeholder="Cadastre aqui seu e-mail">
                    </div>
                    <div class="col-12 text-end registrar">
                        <button type="submit" class="btn btn-outline-light rounded-pill">REGISTRAR INTERESSE <i class="far fa-paper-plane fa-1x"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 col-12">
            <div class="row">
                <div class="col-6 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="py-3">
                        <img src="/wp-content/themes/fiergs/assets/images/whatsapp.png">
                    </div>
                    <div class="footer-title">Fale Conosco</div>
                    <div class="footer-number">0800 051 8555</div>
                </div>
                <div class="col-6 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="py-3">
                        <img src="/wp-content/themes/fiergs/assets/images/facebook.png" class="pe-3">
                        <img src="/wp-content/themes/fiergs/assets/images/instagram.png">
                    </div>
                    <div class="footer-title">Siga o SESI nas Redes Sociais</div>
                    <div class="footer-number">@sesirsoficial</div>
                    <div class="footer-number pt-3"><img src="/wp-content/themes/fiergs/assets/images/logo_sesi_new.png" alt="img"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo get_template_directory_uri() . '/assets/js/carousel.js'; ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>