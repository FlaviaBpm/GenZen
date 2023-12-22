<link href="<?php echo get_template_directory_uri();?>/page.css" rel="stylesheet">
<?php /* Template Name: profil Template */ ?>

<?php  get_header();?>


  <div class="profil">

  <div class="container">
  <div class="row align-items-start">
    <div class="col">
    
    </div>
    <div class="col">
      
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-2"> 
      <img id="logo" src="<?php echo get_template_directory_uri();?>\assets\img\dr deluca.jpg">
    </div>
    <div class="col-md-10"> 
      <h3>Madison Ricci</h3>
      <h4>12/12/2001</h4>
    </div>
  </div>
</div>
    <div class="row align-items-center">
    <div class="col">
      <div class="blobprof">
      <label for="Nom">Nom :</label>
  <input type="text" class="name" placeholder="Ricci">
    </div>
    </div>
    <div class="col">
      <div class="blobprof">
      <label for="Prénom">Prénom :</label>
  <input type="text" class="name" placeholder="Madison">
    </div>
    </div>
</div>
   
<div class="row align-items-center">
    <div class="col">
      <div class="blobprof">
      <label for="email">E-mail :</label>
  <input type="text" class="name" placeholder="riccim@gmail.com">
    </div>
    </div>

    <div class="col">
      <div class="blobprof">
      <label for="phone">Télephone :</label>  
  <input type="text" class="name" placeholder="477 17 22 01">
    </div>
    </div>




    <div class="container">
  <div class="row">
    <div class="col-md-6"> 
       <div class="blobprof">
      <label for="adress">Adresse + Numéro :</label>
  <input type="text" class="name" placeholder="Rue de la poste 111">
    </div>
    </div>
    <div class="col-md-3"> <!-- Deuxième colonne prend 25% -->
    <div class="blobprof">
      <label for="zip">Code Postal: </label>
  <input type="text" class="name" placeholder="1030">
    </div>
    </div>
    <div class="col-md-3"> 
    <div class="blobprof">
      <label for="city">Ville:</label>
  <input type="text" class="name" placeholder="Schaerbeek">
    </div>
    </div>
  </div>
  <button id="sauv">Sauvegarder</button>
</div>




</div>
   