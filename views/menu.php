<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Turnera</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if($title==='inicio') echo'active'; ?>">
            <a class="nav-link" href="<?=URL?>inicio">Inicio
            <?php if($title==='inicio') echo'<span class="sr-only">(current)</span>'; ?>
            </a>
          </li>
          <li class="nav-item <?php if($title==='turnos') echo'active'; ?>">
            <a class="nav-link" href="<?=URL?>turno">Turnos
            <?php if($title==='turnos') echo'<span class="sr-only">(current)</span>'; ?>
            </a>
          </li>
          <li class="nav-item <?php if($title==='servicios') echo'active'; ?>">
            <a class="nav-link" href="#">Services
            <?php if($title==='turnos') echo'<span class="sr-only">(current)</span>'; ?>
            </a>
          </li>
          <li class="nav-item <?php if($title==='contacto') echo'active'; ?>">
            <a class="nav-link" href="#">Contact
            <?php if($title==='turnos') echo'<span class="sr-only">(current)</span>'; ?>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>