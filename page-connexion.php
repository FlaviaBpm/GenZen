<link href="<?php echo get_template_directory_uri();?>/page.css" rel="stylesheet"/>


    <div class="login-container">
        <h2>Connexion</h2>
        <form action="#">
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
            <button type="submit" class="login-btn">Se connecter</button>
        </form>
        <p>Vous n'avez pas de compte ? <a href="#">Inscrivez vous !</a></p>
    </div>
