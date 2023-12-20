<link href="<?php echo get_template_directory_uri();?>/page.css" rel="stylesheet"/>
<footer>
  <div style="background-color: #474747;">
    <div class="container text-light py-2">
      <div class="fond">
        <section class="">
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-footer">A propos de GenZen</h5>
              <?php wp_nav_menu([
                'theme_location'=>'footer',
                'container' => false, 
                'menu_class' => 'list-unstyled mb-0'  
              ])?>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-footer"> Contact</h5>
              <ul class="list-unstyled mb-0">
                <li>
                  Téléphone : <a href="tel:+32 4 84 39 69 57">+32 4 84 39 69 57</a>
                </li>
                <li>
                  Email : <a href="mailto:Genzen@gmail.com">Genzen@gmail.com</a>
                </li>
              </ul>
            </div>

            <!-- New column for custom-search -->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0 col-centered">
            <h5 class="text-footer"> Inscrivez-vous à notre newsletter !</h5>
              <div class="custom-search">
                <input type="text" class="custom-search-input" placeholder="adresse email">
                <button class="custom-search-botton" type="submit">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                  </svg>
                </button>  
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <img  src="<?php echo get_template_directory_uri();?>/assets/img/footerfond.png"class="w-100" >
  </div>
</footer>

<!-- The rest of your code remains unchanged -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<?php wp_footer();?>
</body>
</html>
