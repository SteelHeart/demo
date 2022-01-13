
    <nav class="navbar navbar-vertical fixed-start navbar-expand-md " id="sidebar">
        <div class="container-fluid">

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="{{ asset('img/logo.svg') }}" class="navbar-brand-img mx-auto" alt="...">
            </a>

            <!-- User (xs) -->
            <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                    <img src="{{ asset('img/avatars/profiles/avatar-1.jpg') }}" class="avatar-img rounded-circle" alt="...">
                </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarIcon">
                <a href="profile-posts.html" class="dropdown-item">Profile</a>
                <a href="account-general.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="{{ url('custom-logout') }}" class="dropdown-item">Déconnexion</a>
                </div>

            </div>

            </div>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge input-group-reverse">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-text">
                    <span class="fe fe-search"></span>
                </div>
                </div>
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/') }}">
                        <i class="fe fe-home"></i> Tableau de Board
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/') }}">
                        <i class="fe fe-shopping-bag"></i> Catalogue
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('dashboard') }}">
                        <i class="fe fe-shopping-cart"></i> Commandes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menuSettings" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="menuSettings">
                        <i class="fe fe-users"></i> Comptes
                    </a>
                    <div class="collapse show" id="menuSettings">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link ">
                            Tous
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link ">
                            Administrateurs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link ">
                                Gérants
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link active">
                            Utilisateurs
                            </a>
                        </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('dashboard') }}">
                        <i class="fe fe-dollar-sign"></i> Transactions
                    </a>
                </li>

            </ul>

            <!-- Divider -->
            <hr class="navbar-divider my-3">

            <!-- Heading -->
            <h6 class="navbar-heading">
                PARAMETRES SYSTEME
            </h6>

            <!-- Navigation -->
            <ul class="navbar-nav mb-md-4">

                <li class="nav-item">
                    <a class="nav-link" href="#sidebarSettings" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSettings">
                        <i class="fe fe-settings"></i> Général
                    </a>
                    <div class="collapse show" id="sidebarSettings">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link ">
                            Entités
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link ">
                                Rayons
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link active">
                            Etiquettes
                            </a>
                        </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('dashboard') }}">
                        <i class="fe fe-shield-off"></i> Groupes & Permissions
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('dashboard') }}">
                        <i class="fe fe-truck"></i> Modalités de Livraison
                    </a>
                </li>

            </ul>

            <!-- Push content down -->
            <div class="mt-auto"></div>

                <!-- Customize -->
                <div id="popoverDemo" data-content="Switch the demo to Dark Mode or adjust the navigation layout, icons, and colors!" title="Make Dashkit Your Own!">
                <a class="btn w-100 btn-primary mb-4" data-bs-toggle="offcanvas" href="#offcanvasDemo" aria-controls="offcanvasDemo">
                    <i class="fe fe-sliders me-2"></i> Personnaliser
                </a>
                </div>

                <!-- User (md) -->
                <div class="navbar-user d-none d-md-flex" id="sidebarUser">

                <!-- Icon -->
                <a class="navbar-user-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasActivity" aria-controls="sidebarOffcanvasActivity">
                    <span class="icon">
                    <i class="fe fe-bell"></i>
                    </span>
                </a>

                <!-- Dropup -->
                <div class="dropup">

                    <!-- Toggle -->
                    <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="{{ asset('img/avatars/profiles/avatar-1.jpg') }}" class="avatar-img rounded-circle" alt="...">
                    </div>
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                        <a href="profile-posts.html" class="dropdown-item">Profile</a>
                        <a href="account-general.html" class="dropdown-item">Réglages</a>
                        <hr class="dropdown-divider">
                        <a href="{{ url('custom-logout') }}" class="dropdown-item">Déconnexion</a>
                    </div>

                </div>

                <!-- Icon -->
                <a class="navbar-user-link" data-bs-toggle="offcanvas" href="#sidebarOffcanvasSearch" aria-controls="sidebarOffcanvasSearch">
                    <span class="icon">
                    <i class="fe fe-search"></i>
                    </span>
                </a>

                </div>

            </div> <!-- / .navbar-collapse -->

        </div>
    </nav>

    <nav class="navbar navbar-vertical navbar-vertical-sm fixed-start navbar-expand-md " id="sidebarSmall">
      <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarSmallCollapse" aria-controls="sidebarSmallCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('dashboard') }}">
          <img src="{{ asset('img/logo.svg') }}" class="navbar-brand-img
          mx-auto" alt="...">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

          <!-- Dropdown -->
          <div class="dropdown">

            <!-- Toggle -->
            <a href="#" id="sidebarSmallIcon" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-sm avatar-online">
                <img src="{{ asset('img/avatars/profiles/avatar-1.jpg') }}" class="avatar-img rounded-circle" alt="...">
              </div>
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarSmallIcon">
              <a href="profile-posts.html" class="dropdown-item">Profile</a>
              <a href="account-general.html" class="dropdown-item">Réglages</a>
              <hr class="dropdown-divider">
              <a href="{{ url('custom-logout') }}" class="dropdown-item">Déconnexion</a>
            </div>

          </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarSmallCollapse">

          <!-- Form -->
          <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge input-group-reverse">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-text">
                <span class="fe fe-search"></span>
              </div>
            </div>
          </form>

          <!-- Divider -->
          <hr class="navbar-divider d-none d-md-block mt-0 mb-3">

          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Widgets">
              <a class="nav-link " href="{{ url('/') }}">
                <i class="fe fe-grid"></i> <span class="d-md-none">Widgets</span>
              </a>
            </li>
            <li class="nav-item dropend">
              <a class="nav-link dropdown-toggle active" id="sidebarSmallDashboards" href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" title="Dashboards">
                <i class="fe fe-users"></i> <span class="d-md-none">Comptes</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="sidebarSmallDashboards">
                <li class="dropdown-header d-none d-md-block">
                  <h6 class="text-uppercase mb-0">Administrateurs</h6>
                </li>
                <li>
                  <a href="{{ route('dashboard') }}" class="dropdown-item active">
                    Default
                  </a>
                </li>
                <li>
                  <a href="dashboard-project-management.html" class="dropdown-item ">
                    Project Management
                  </a>
                </li>
                <li>
                  <a href="dashboard-ecommerce.html" class="dropdown-item ">
                    E-Commerce
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item d-md-none">
              <a class="nav-link" href="#sidebarOffcanvasActivity" data-bs-toggle="offcanvas" aria-controls="sidebarOffcanvasActivity">
                <span class="fe fe-bell"></span> Notifications
              </a>
            </li>
          </ul>

          <!-- Divider -->
          <hr class="navbar-divider my-3">

          <!-- Navigation -->
          <ul class="navbar-nav mb-md-4">
            <li class="nav-item dropend">
              <a class="nav-link dropdown-toggle " id="sidebarSmallBasics" href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Basics">
                <i class="fe fe-clipboard"></i> <span class="d-md-none">Basics</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="sidebarSmallBasics">
                <li class="dropdown-header d-none d-md-block">
                  <h6 class="text-uppercase mb-0">Basics</h6>
                </li>
                <li>
                  <a href="docs/getting-started.html" class="dropdown-item ">
                    Getting Started
                  </a>
                </li>
                <li>
                  <a href="docs/design-file.html" class="dropdown-item ">
                    Design File
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="docs/components.html" data-bs-toggle="tooltip" data-bs-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Components">
                <i class="fe fe-book-open"></i> <span class="d-md-none">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="docs/changelog.html" data-bs-toggle="tooltip" data-bs-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Changelog">
                <i class="fe fe-git-branch"></i> <span class="d-md-none">Changelog</span> <span class="badge bg-primary ms-auto d-md-none">v2.0.0</span>
              </a>
            </li>
          </ul>

          <!-- Push content down -->
          <div class="mt-auto"></div>

            <!-- Customize -->
            <div class="mb-4" data-bs-toggle="tooltip" data-bs-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Customize">
              <a class="btn w-100 btn-primary" data-bs-toggle="offcanvas" href="#offcanvasDemo" aria-controls="offcanvasDemo">
                <i class="fe fe-sliders"></i> <span class="d-md-none ms-2">Customize</span>
              </a>
            </div>

            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex flex-column" id="sidebarSmallUser">

              <!-- Icon -->
              <a class="navbar-user-link mb-3" data-bs-toggle="offcanvas" href="#sidebarOffcanvasSearch" aria-controls="sidebarOffcanvasSearch">
                <span class="icon">
                  <i class="fe fe-search"></i>
                </span>
              </a>

              <!-- Icon -->
              <a class="navbar-user-link mb-3" data-bs-toggle="offcanvas" href="#sidebarOffcanvasActivity" ria-controls="sidebarOffcanvasActivity">
                <span class="icon">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Dropup -->
              <div class="dropend">

                <!-- Toggle -->
                <a href="#" id="sidebarSmallIconCopy" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-sm avatar-online">
                    <img src="{{ asset('img/avatars/profiles/avatar-1.jpg') }}" class="avatar-img rounded-circle" alt="...">
                  </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu" aria-labelledby="sidebarSmallIconCopy">
                    <a href="profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="account-general.html" class="dropdown-item">Réglages</a>
                    <hr class="dropdown-divider">
                    <a href="{{ url('custom-logout') }}" class="dropdown-item">Déconnexion</a>
                </div>

              </div>

            </div>

        </div> <!-- / .navbar-collapse -->

      </div>
    </nav>

    <nav class="navbar navbar-expand-lg " id="topnav">
      <div class="container">

        <!-- Toggler -->
        <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand me-auto" href="{{ route('dashboard') }}">
          <img src="{{ asset('img/logo.svg') }}" alt="..." class="navbar-brand-img">
        </a>

        <!-- Collapse -->
        <div class="collapse navbar-collapse me-lg-auto order-lg-first" id="navbar">

          <!-- Navigation -->
          <ul class="navbar-nav me-lg-auto">

                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/') }}">
                        <i class="fe fe-home"></i> Tableau de Board
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/') }}">
                        <i class="fe fe-shopping-bag"></i> Catalogue
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('dashboard') }}">
                        <i class="fe fe-shopping-cart"></i> Commandes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('dashboard') }}">
                        <i class="fe fe-shopping-cart"></i> Comptes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('dashboard') }}">
                        <i class="fe fe-dollar-sign"></i> Transactions
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasDemo" aria-controls="offcanvasDemo">
                        Personnaliser
                    </a>
                </li>
          </ul>

        </div>

      </div> <!-- / .container -->
    </nav>
