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
        <div class="popupchristiane" id="popupauthentification">
            <div id="menuusager" class="cache">
                <p><label id="prenomnomfamille"></label></p>
                <a class="btn btn-secondary" href="https://apical.xyz/usagers/-1/modification">Profil</a>
                <a class="btn btn-secondary" id="deconnecter" href="#">Déconnecter</a>
            </div>
            <div id="formulaireauthentification">
                <span id="messageauthentification"></span>
                <form method="post" action="https://apical.xyz/usagers/authentifier" class="form-horizontal">
                    <input type="hidden" name="_token" value="LpyYoRaSCm46Y0a1JnUCGFQVmLBUfT6a8JNmUCHO">
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
                                <label for="resterconnecte" class="form-check-label" checked="">
                                    <input class="form-check-input" type="checkbox" id="resterconnecte" name="resterconnecte">
                                    Rester connecté
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="control-label col-sm-5"></div>
                        <div class="col-sm-6">
                            <a id="soumettreauthentification" class="btn btn-secondary" href="#">Soumettre</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="control-label col-sm-5"></div>
                        <div class="col-sm-6">
                            <a href="https://apical.xyz/usagers/creation">Nouvel usager</a>
                        </div>
                    </div>
                </form>
                
            </div>
            <span class="boutonrefermer"></span>
        </div>
        <?php wp_footer() ?>
    </body>
</html>