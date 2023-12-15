<link href="<?php echo get_template_directory_uri();?>/page.css" rel="stylesheet"/>


    <div class="login-container">
        <h1>Inscription</h1>
        <form action="#">

        <div class="input-field">
                <label for="prenom">Prénom</label>
                <input type="prenom" id="prenom" name="prenom" required>
            </div>


        <div class="input-field">
                <label for="nom">Nom</label>
                <input type="nom" id="nom" name="nom" required>
            </div>


            <div class="input-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-field">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="remember-me" name="remember-me">
                <label for="remember-me">Se souvenir de moi</label>
            </div>
            <button type="submit" class="login-btn">S'inscrire</button>
        </form>
        <p>Vous avez déja un compte ? <a href="http://localhost:8888/test-wordpress/connexion/">Connectez vous !</a></p>
    </div>