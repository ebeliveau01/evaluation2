    <?php 
        if(isset($_GET['login']) && $_GET['login'] === 'failed') {
            $erreurLogin = true;
        }
    ?>
    <footer>
            <div class="container">
                <div class="row">
                    <div class="col text-center">© 2023 Tous droits réservés.</div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">Conception et développement du thème : <span class="auteur">Émile Béliveau</span></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                        <a class="col text-center mt-3">Programmeur de passion</a>
                </div>
            </div>
    </footer>
        <div class="popupchristiane" id="popupauthentification" <?php if($erreurLogin) { echo 'style="display:block;"'; } ?>>
            <div id="formulaireauthentification">
                <span id="messageauthentification"><?php if($erreurLogin) { echo 'Mauvais utilisateur ou mot de passe'; } ?></span>
                <form method="post" action="<?php echo esc_url(wp_login_url()); ?>" class="form-horizontal" id="authentification">
                    <input type="hidden" name="action" value="custom_login">
                    <div class="form-group row">
                        <label for="login" class="control-label col-sm-5 requis">Usager: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="login" id="login" autofocus="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="motdepasse" class="control-label col-sm-5 requis">Mot de passe: </label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" name="motdepasse" id="motdepasse">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="control-label col-sm-5"></div>
                        <div class="col-sm-6">
                            <div class="form-check">
                                <label for="resterconnecter" class="form-check-label" checked="">
                                    <input class="form-check-input" type="checkbox" id="resterconnecter" name="resterconnecter">
                                    Rester connecté
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="control-label col-sm-5"></div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-secondary" name="soumettre">Soumettre</button>
                        </div>
                    </div>
                </form>
                
            </div>
            <span id="btnfermer" class="boutonrefermer"></span>
        </div>
        <?php wp_footer() ?>
    </body>
</html>