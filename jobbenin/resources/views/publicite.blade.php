@extends('templates.dashboard')

@section('document')
<script src="https://cdn.kkiapay.me/js/kkiapay.min.js"></script>
<script src="https://cdn.kkiapay.me/k.js"></script>
<main>

  <div class="container-scroller">


    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="/">
            <img src="{{asset('assets/img/logo/logojob.png')}}" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="/">
            <img src="{{asset('assets/img/logo/logojob.png')}}" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">

          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>

          <style>
                        .avatar {
                            width: 55px;
                            height: 55px;
                            object-fit: cover;
                        }
                    </style>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{ asset('storage/photoslogo/' . $user->logo_entreprise) }}" alt="Logo Entreprise" class="avatar">

              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img src="{{ asset('storage/photoslogo/' . $user->logo_entreprise) }}" alt="Logo Entreprise" class="avatar rounded-circle">

                  <p class="mb-1 mt-3 font-weight-semibold">{{ $user->name }}</p>
                  <p class="fw-light text-muted mb-0">{{ $user->email }}</p>
                </div>
                   <a class="dropdown-item" href="{{ route('profilrecruteur', ['id' => $user->id]) }}">
            <i class="mdi mdi-account menu-icon"></i>
            Mon Profil
          </a>

          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="mdi mdi-power menu-icon"></i>
            Déconnexion
          </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>

              </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">TONS DE LA BARRE LATTERALE</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border me-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">TONS DE L'ENTETE</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item" >
          <a class="nav-link" href="{{('profilpostulant')}}">  
            <i class="icon-head" style="margin-left:6px;"></i>  
              <span class="menu-title" style="margin-left:15px;margin-top:7px"> Mon Profil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('/annonce')}}">
              <i class="mdi mdi-rename-box menu-icon"></i>
              <span class="menu-title">Vos Annonces</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('/attentecv')}}">
              <i class="mdi mdi-alarm menu-icon"></i>
              <span class="menu-title">CV en Attente</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('/selectioncv')}}">
              <i class="mdi mdi-clipboard-check menu-icon"></i>
              <span class="menu-title">CV Sélectionnés</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('/entretiencreate')}}">
              <i class="mdi mdi-calendar-plus menu-icon"></i>
              <span class="menu-title">Entretiens programmés</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('/entretien')}}">
              <i class="mdi mdi-calendar-check menu-icon"></i>
              <span class="menu-title">Entretiens passés</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{('/publicite')}}">
              <i class="mdi mdi-archive menu-icon"></i>
              <span class="menu-title">Publicité</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" class="dropdown-item" class="dropdown-item-icon mdi mdi-power text-primary me-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="mdi mdi-logout menu-icon"></i>
              <span class="menu-title">Déconnexion</span>
            </a>
          </li>


        </ul>
      </nav>
      <div class="main-panel">
        <h2 class="welcome-text">Salut, <span class="text-black fw-bold">{{ $user->name }}</span></h2>

        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">

                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

                    <div class="row">

                      <div class="col-lg-12 d-flex flex-column">

                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">




                                    <!-- Pricing Plan Start -->
                                    <div class=" py-5 wow fadeInUp" data-wow-delay="0.1s">
                                      <div class="py-5">
                                      <div class="section-titlep text-center position-relative pb-3 mb-5 mx-auto" 
                                  style="max-width: 600px; top:-60px;">
                                            <h3 class="mb-0">Souscrivez notre abonnement pour offrir plus de visibilité à votre entreprise!!</h3>
                                          </div>

                                        <div class="row g-0" style="top:-60px;">
                                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s"  style="top:-60px;">
                                            <div class="bg-light rounded"  style="top:-60px;">
                                              <div class="border-bottom py-4 px-5 mb-4"  style="top:-60px;">
                                                <h4 class="text-primary mb-1"  style="top:-60px;">Standard</h4>
                                              </div>
                                              <div class="p-5 pt-0">
                                                <h1 class="display-5 mb-3">
                                                  <small class="align-top" style="font-size: 22px; line-height: 45px;">6.000</small>F CFA
                                                </h1>
                                                <div class="d-flex justify-content-between mb-2">
                                                  <span>30 jours de validité</span>
                                                  <i class="fa fa-check text-primary pt-1"></i>
                                                </div>
                                                <p>
                                                  Le forfait "Standard" offre de nombreux avantages pour vous aider à maximiser votre expérience :
                                                </p>
                                                <ul>
                                                  <li>Accès complet à toutes les fonctionnalités de notre plateforme.</li>

                                                  <li>Mise en avant de votre entreprise avec votre logo sur les offres publiées.</li>
                                          
                                              
                                                </ul>
                                    <kkiapay-widget amount="6000" 
                                        key="ba3d5c90ed7a11edb9eb477e07ce2b3a"
                                        url="{{asset('assets/img/logo/logojob.png')}}"
                                        position="center"
                                        sandbox="true"
                                        data=""
                                        callback="{{('/publicite')}}">
                                    </kkiapay-widget>
    </div>
  </div>
</div>

                                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                                          <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                                            <div class="border-bottom py-4 px-5 mb-4">
                                              <h4 class="text-primary mb-1">Premium</h4>
                                            </div>
                                            <div class="p-5 pt-0">
                                              <h1 class="display-5 mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">15.000</small>F CFA
                                              </h1>
                                              <div class="d-flex justify-content-between mb-3">
                                                <span>3 mois de validité</span>
                                                <i class="fa fa-check text-primary pt-1"></i>
                                              </div>
                                              <p>
                                                Le forfait "Premium" vous offre des avantages exclusifs pour une expérience encore plus enrichissante :
                                              </p>
                                              <ul>
                                              
                                                <li>Possibilité de publier un nombre illimité d'offres d'emploi simultanément.</li>
                                                <li>Visibilité accrue de vos offres grâce à une meilleure position dans les résultats de recherche.</li>
                                        
                                              </ul>
                                              <kkiapay-widget amount="15000" 
                                                  key="ba3d5c90ed7a11edb9eb477e07ce2b3a"
                                                  url="{{asset('assets/img/logo/logojob.png')}}"
                                                  position="center"
                                                  sandbox="true"
                                                  data=""
                                                  callback="{{('/publicite')}}">
                                              </kkiapay-widget>
                                            </div>
                                          </div>
                                        </div>

<div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
  <div class="bg-light rounded">
    <div class="border-bottom py-4 px-5 mb-4">
      <h4 class="text-primary mb-1">Premium+</h4>
    </div>
    <div class="p-5 pt-0">
      <h1 class="display-5 mb-3">
        <small class="align-top" style="font-size: 22px; line-height: 45px;">50.000</small>F CFA
      </h1>
      <div class="d-flex justify-content-between mb-3">
        <span>1 an de validité</span>
        <i class="fa fa-check text-primary pt-1"></i>
      </div>
      <p>
        Le forfait "Premium+" est la formule ultime pour maximiser vos opportunités professionnelles. Profitez des avantages exclusifs suivants :
      </p>
      <ul>
        <li>Tous les avantages du forfait "Premium" inclus.</li>
        <li>Visibilité maximale avec une mise en avant prioritaire de votre entreprise et de vos offres.</li>
        <li>Promotion spéciale de votre entreprise sur nos réseaux sociaux et newsletters.</li>
       
   
      </ul>
      <kkiapay-widget amount="50000" 
          key=""
          url="{{asset('assets/img/logo/logojob.png')}}"
          position="center"
          sandbox="true"
          data=""
          callback="{{('/publicite')}}">
      </kkiapay-widget>
    </div>
  </div>
</div>

                                        </div>
                                      </div>
                                    </div>
                                    <!-- Pricing Plan End -->

                            </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. Jobbenin .</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
</main>
@endsection