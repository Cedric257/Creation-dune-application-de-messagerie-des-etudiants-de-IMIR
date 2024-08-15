<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Inscription au WebSite de IMIR</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nom</label>
            <input type="text" name="fname" placeholder="Entre votre Nom" required>
          </div>
          <div class="field input">
            <label>Prenom</label>
            <input type="text" name="lname" placeholder="Entre votre Prenom" required>
          </div>
        </div>
        <div class="field input">
          <label>Addresse Email</label>
          <input type="text" name="email" placeholder="Entre votre Email" required>
        </div>
        <div class="field input">
          <label>Mot de Passe</label>
          <input type="password" name="password" placeholder="Entre votre Mot de Passe" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Ajouter votre Profil</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="S'inscrire">
        </div>
      </form>
      <div class="link">Vous avez deja S'inscrire? <a href="index.php">Connexion</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
