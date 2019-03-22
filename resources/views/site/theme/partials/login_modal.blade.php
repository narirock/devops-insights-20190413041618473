<!-- LOGIN MODAL -->
<section class="modal-login">
    <div class="modal fade" id="demo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="box" data-dismiss="modal">
                    <a href="#">
                        <img class="btn-fechar-modal" src="images/close.png" alt="X" />
                    </a>
                </div>
                <ul class="nav nav-pills">
                    <li class="active btn-block" style="width: 50%;">
                        <a href="#1a" data-toggle="tab"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                    </li>
                    <li style="width: 50%;"><a href="#2a" data-toggle="tab"><i class="fa fa-id-card-o" aria-hidden="true"></i> Cadastrar</a>
                    </li>
                </ul>
                <div class="modal-body">
                    <div id="exTab1" class="">
                        <div class="">
                            <div class="tab-content  ">
                                <div class="tab-pane active" id="1a">
                                    <div class="section-title text-center">
                                        <img src="images/login.svg" width="150" alt="">
                                        <h1>LOGIN</h1>
                                        <p>Já cliente? Use seu email e senha para acessar seu perfil</p>
                                        <h1 class="heading bold"></h1>
                                    </div>
                                    <form method="post" action='' name="login_form">
                                        <p><input type="text" class="span3" name="eid" id="emailLogin" placeholder="Email"></p>
                                        <p><input type="password" class="span3" id="passwd3Login" name="passwd" placeholder="Password"></p>
                                        <p><button type="submit" class="btn btn-primary btn-block">ENTRAR</button></p>
                                    </form>
                                </div>
                                <div class="tab-pane" id="2a">
                                    <div class="section-title text-center">
                                        <img src="images/cadastrar.svg" width="150" alt="">
                                        <h1>CADASTRAR CONTA</h1>
                                        <p>Preencha todos os campos do formulário abaixo. Após realizado o cadastro já estaremos prontos para atendê-lo.</p>
                                        <h1 class="heading bold"></h1>
                                    </div>
                                    <form method="post" action='' name="login_form">
                                        <p><input type="text" class="span3" name="eid" id="nomeLogin" placeholder="Digite seu nome completo"></p>
                                        <p><input type="tel" class="span3" name="eid" id="cpfLogin" placeholder="Digite seu CPF"></p>
                                        <p><input type="mail" class="span3" name="eid" id="emailLogin" placeholder="Digite seu Email"></p>
                                        <p><input type="tel" class="span3" name="eid" id="foneLogin" placeholder="Seu telefone"></p>
                                        <p><input type="text" class="span3" name="eid" id="siteLogin" placeholder="Coloque seu site (Opcional)"></p>
                                        <p><input type="password" class="span3" id="passwdLogin" name="passwdLogin" placeholder="Digite uma senha"></p>
                                        <p><input type="password" class="span3" id="passwd2Login" name="passwd2Login" placeholder="Repita sua senha"></p>
                                        <p><button type="submit" class="btn btn-primary btn-block">CADASTRAR CONTA</button></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>