 <div class="top-header">
   <nav class="navbar">
     <ul class="navbar__list">
       <li class="navbar__item">
         <a class="navbar__link" href="evenements.php">Evenements</a>
       </li>
       <?php if (isset($_SESSION['cne'])) : ?>
         <li class="dropdown">

           <button class="dropbtn"><i class="iconsminds-male avatar"></i> <?php echo $_SESSION['nom']  ?></button>
           <div class="dropdown-content">
             <a href="profile.php">Mon profile</a>
             <a href="modif.php">Paramètres</a>
             <a href="logout.php">Deconnexion</a>

           </div>


         <?php else : ?>
         <li class="navbar__item">
           <a href="login.php" class="navbar__link">S'authentifier</a>
         </li>
       <?php endif; ?>

       </li>

       <?php if (isset($_SESSION['cne'])) : ?>
       <?php else : ?>
         <li class="navbar__item">
           <a class="navbar__link" href="candidature.php">Je candidate</a>
         </li>
       <?php endif; ?>
     </ul>
   </nav>
   <nav class="navbar-fixed">
     <div class="logo-irm">
       <a href="index.php">
         <img src="./layout/img/Frame.png" alt="logo-irm" />
       </a>
     </div>
     <ul class="navbar-fixed__list">
       <li class="navbar-fixed__item">
         <a href="objective.php" class="navbar-fixed__link">Objective</a>
       </li>
       <li class="navbar-fixed__item">
         <a href="admission.php" class="navbar-fixed__link">Admission</a>
       </li>
       <li class="navbar-fixed__item">
         <a href="programme.php" class="navbar-fixed__link">Programme</a>
       </li>
       <li class="navbar-fixed__item">
         <a href="debouches.php" class="navbar-fixed__link">Debouchés</a>
       </li>
       <li class="navbar-fixed__item">
         <a href="help.php" class="navbar-fixed__link">Help</a>
       </li>
     </ul>
   </nav>
 </div>