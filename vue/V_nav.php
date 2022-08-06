<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php?auth=null"><img src="required/ressources/nav_icon.png" alt="mb_logo" width="70" height="50" /></a>
        
        <!-- gestion du menu pour les supports mobiles -->
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu-initiation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- fin gestion menu support mobile -->
        
        <!-- Fonctionnalités de la barre de navigation -->
        <div class="collapse navbar-collapse" id="menu-btssio">
           
          <ul class="navbar-nav">
            <div class="title_nav">
              <b>Mathéo BROSSARD - Etudiant BTS SIO</b>    
            </div>
          </ul>


                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                           data-bs-toggle="dropdown">Situations Professionnelles</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?auth=startdevtours">Start@dev_Tours</a></li>
                            <li><a class="dropdown-item" href="index.php?auth=barecautomatisme">Barec Automatismes</a></li>
                        </ul>
                    </li>
                
                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                           data-bs-toggle="dropdown">Stages</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?auth=stageWabtec">Wabtec - Faiveley Transport</a></li>
                        </ul>
                    </li>
                

                    <li class="nav_item"><a class="nav-link" href="index.php?auth=epreuves">Epreuves</a></li>
                    <li class="nav_item"><a class="nav-link" href="index.php?auth=certification">Certifications</a></li>
                    <li class="nav_item"><a class="nav-link" href="index.php?auth=btssio">BTS SIO</a></li>
                </ul>
        </div>
    </div>
</nav>

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

.title_nav{
  font-family: 'Roboto', sans-serif;
}

</style>