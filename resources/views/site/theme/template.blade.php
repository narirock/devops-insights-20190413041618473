<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Marrs Studio</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- facebook metas -->
    <meta property="og:url"           content="https://www.marrs.com.br" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Marrs Studio" />
    <meta property="og:description"   content="Somos um estúdio de desenvolvimento Web" />
    <meta property="og:image"         content="https://www.marrs.com.br/images/logo-marrs-1.svg" />

    <link rel="stylesheet" href="css/app.css">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="js/app.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });
        $(document).ready(function() {

            $("#slider").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items: 4,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]


            });

        });
        function gravar(produto){
            //alert (produto);
             var usuario = $("#usuario").val();
             var dados = $("#"+produto).serialize();
             dados +="&cli_id="+usuario+"&produto="+produto;
             //alert(dados);
              $.ajax({
                    type: "POST",
                    url: "controleDados.php",
                    data: dados,
                    success: function(txt) {
                       // alert(txt);
                        var result = txt.split("|@");
                       //alert (result[0]);
                        if(result[0]==1){
                            window.open('pedido.php?resultado='+result, '_self');
                        
                        }else{
                           alert("OPS! Algo deu errado ->"+txt);
                        }
                     }
                   });   

        }
        function enviaMail() {

            var dados = $("#contactForm").serialize();
            // alert(dados);
            var email = $("#email").val();
            var emailFilter = /^.+@.+\..{2,}$/;
            var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/;
            if (!(emailFilter.test(email)) || email.match(illegalChars)) {
                alert('Por favor, informe um email válido.');
            } else {
                //alert(dados);
                $.ajax({
                    type: "POST",
                    url: "email.php",
                    data: dados,
                    success: function(txt) {
                        if (txt == 'Mensagem enviada com sucesso') {
                            swal(
                                'Email Enviado com sucesso!',
                                'Em breve retornaremos o Contato',
                                'success'
                            );
                        }
                        $("#contactForm")[0].reset();
                        goToByScroll('contactForm');
                    }
                });
            }
        }
        function news() {
            var dados = $("#newsLetter").serialize();

            var email = $("#nMail").val();
            var emailFilter = /^.+@.+\..{2,}$/;
            var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/;
            if (!(emailFilter.test(email)) || email.match(illegalChars)) {
                alert('Por favor, informe um email válido.');
            } else {
                //alert(dados);
                $.ajax({
                    type: "POST",
                    url: "newsLetter.php",
                    data: dados,
                    success: function(txt) {

                        if (txt == 1) {
                            //Email alert
                            // console.log("entrou");
                            swal(
                                'Você foi cadastrado com sucesso!',
                                'Em breve enviaremos nossos informativos',
                                'success'
                            );
                        } else {
                            alert(txt);
                        }


                        $("#newsLetter")[0].reset();
                        goToByScroll('newsLetter');
                    }
                });
            }
        }
      // tawk-to
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
          var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
          s1.async=true;
          s1.src='https://embed.tawk.to/5878ee7e675718240c66ddac/default';
          s1.charset='UTF-8';
          s1.setAttribute('crossorigin','*');
          s0.parentNode.insertBefore(s1,s0);
      })();
    </script>
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<!-- facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11&appId=1603545009965613';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- // fim facebook  -->



@yield('conteudo')


<!-- NEWSLETTER  -->
<section class="newsletter-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 news-titulo">
                <h2><i class="fa fa-envelope-open"></i> Receba nossos Newsletter</h2>
                <p>Fique por dentro de todas nossas novidades e promoções.</p>
            </div>

            <div class="col-md-6">
                <form id="newsLetter" class="" action="index.html" method="post">
                    <div class="input-group news-input">
                        <input type="email" name="nMail" id="nMail" class="form-control input-lg" placeholder="seuemail@email.com" aria-describedby="basic-addon2">
                        <span class="input-group-addon btn" id="basic-addon2" onclick="news()"><i class="fa fa-paper-plane"></i> </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- footer section -->
<footer class="footer-section text-left">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 text-left">
                <h3><i class="fa fa-briefcase" aria-hidden="true"></i> Empresa</h3>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                <h3><i class="fa fa-credit-card" aria-hidden="true"></i> Pagamentos</h3>
                <img src="images/paypal.png" width="100%" alt="">

            </div>

            <div class="col-md-3 col-sm-12 text-left">
                <h3 class=""><i class="fa fa-bars" aria-hidden="true"></i> Menu</h3>
                <ul class="menu-footer">
                    <li><a href="#home" class=" js-scroll-trigger">Home</a>
                    </li>
                    <li><a href="#work" class=" js-scroll-trigger">Quem Somos</a>
                    </li>
                    <li><a href="#about" class="js-scroll-trigger">Sobre</a>
                    </li>
                    <li><a href="#portfolio" class="js-scroll-trigger">Portifolio</a>
                    </li>
                    <li><a href="#pricing" class="js-scroll-trigger">Preços</a>
                    </li>
                    <li><a href="#contact" class="js-scroll-trigger">Contato</a>
                    </li>
                    <li><a href="faq/index.html"  target="_blank" class="js-scroll-trigger">Faq</a>
                    <li><a href="cadastro/index.html" class="js-scroll-trigger">Cadastre-se</a>
                    </li>

                </ul>
            </div>

            <div class="col-md-3 col-sm-12 text-left">
                <h3><i class="fa fa-phone" aria-hidden="true"></i> Telefone</h3>
                <h4>11 98622-3921</h4>
                    <br>
                 <h3><i class="fa fa-envelope" aria-hidden="true"></i> Contatos</h3>
                <h4><a href="mailto:contato@marrs.com.br">contato@marrs.com.br</a></h4>
                <h3 class="seguranca-footer"><i class="fa fa-lock" aria-hidden="true"></i> Segurança</h3>
                <img src="images/ssl-3.png" width="190" alt="Comodo SSL">


            </div>

            <div class="col-md-3 col-sm-12 text-left redes-footer">
                <h3><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</h3>

                <!-- InstaWidget -->
<a href="https://instawidget.net/v/user/marrsstudio" id="link-6f73a6792a6a2aa9e13bbf039b03432f148b6e1ae2a84d6f08a7d2d39c974899">@marrsstudio</a>
<script src="https://instawidget.net/js/instawidget.js?u=6f73a6792a6a2aa9e13bbf039b03432f148b6e1ae2a84d6f08a7d2d39c974899&width=300px"></script>
            </div>
        </div>
    </div>

</footer>
<div class="assign">
    <div class="col-md-12 text-center">
        <h5>Copyright ©<?php echo date("Y"); ?>. <span target="_parent"> Marrs Studio</span>. Todos os direitos reservados | CNPJ: 28.049.657/0001-62
</h5>
    </div>
</div>
    


</body>

</html>
