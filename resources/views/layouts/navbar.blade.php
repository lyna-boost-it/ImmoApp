<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"><img src="{{URL('assets/img/logo.png')}}" alt="crm" style="width: 200px; height:50px;"></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">CRM</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Tableau de board</li>
            <li><a class="nav-link" href="{{ URL('/home') }}"><i class="fas fa-th-large"></i> <span>DASHBOARD</span></a></li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-pencil-ruler"></i><span>PROJECT</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ URL('/Project/project') }}">Gestion des Projets</a></li>
                <li><a class="nav-link" href="index-0.html">Gestion des Lots</a></li>
                <li><a class="nav-link" href="{{ URL('/Project/typology') }}">Gestion des Typologies</a></li>
                <li><a class="nav-link" href="{{ URL('/Project/edd') }}">Gestion des Edds</a></li>
                <li><a class="nav-link" href="{{ URL('/Project/bloc') }}">Gestion des Blocs</a></li>
                <li><a class="nav-link" href="{{ URL('/Project/box') }}">Gestion des Boxs/Dépôts</a></li>
              </ul>
            </li>
              <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-ticket-alt"></i><span>RESARVATION</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="index-0.html">Simulation</a></li>
                <li><a class="nav-link" href="index-0.html">Gestion des Reservations</a></li>
                <li><a class="nav-link" href="index-0.html">Pre reservations</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-key"></i><span>VISITES</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="index-0.html">Gestion des Visites</a></li>
                <li><a class="nav-link" href="index-0.html">Gestion des Reserves</a></li>
              </ul>
            </li>
              <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-coins"></i><span>PAIEMENT</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="index-0.html">Gestion des Paiements</a></li>
                <li><a class="nav-link" href="index-0.html">Gestion des OV's</a></li>
                <li><a class="nav-link" href="index-0.html">Gestion des Modalites</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>CONTACT</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="index-0.html">Gestion des Clients</a></li>
                <li><a class="nav-link" href="index-0.html">Gestion des Prospets</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-clock"></i><span>Salle d'Attente</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="index-0.html">Pointage</a></li>
                <li><a class="nav-link" href="index-0.html">Gestion de Temps</a></li>
              </ul>
            </li>

         <li><a class="nav-link" href="{{ URL('/user') }}"><i class="fas fa-users"></i> <span>UTILISATEURS</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>        </aside>
      </div>
