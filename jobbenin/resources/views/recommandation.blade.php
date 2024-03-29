@extends('templates.dashboard')

@section('document')

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

      
         
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-account-circle menu-icon icon-md"></i></a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
              <i class="mdi mdi-account-circle menu-icon icon-md"></i>

                <p class="mb-1 mt-3 font-weight-semibold">{{ $user->name }}</p>
                <p class="fw-light text-muted mb-0">{{ $user->email }}</p>
              </div>
              <a class="dropdown-item" href=" {{('profilpostulant')}}">
               <i class="mdi mdi-account menu-icon"></i> Mon Profil</a>

               <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-logout menu-icon"></i> Déconnexion</a>


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
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
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
            <a class="nav-link" href="{{('vosoffres')}}">
            <i class="mdi mdi-alarm menu-icon"></i>
              <span class="menu-title">Vos Offres</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('recommandation')}}">
            <i class="mdi mdi-clipboard-check menu-icon"></i>
              <span class="menu-title">Offres Recommandées</span>
            </a>
          </li>
<li class="nav-item">
  <a class="nav-link" href="{{('entretienpostulant')}}">
    <i class="mdi mdi-calendar-multiple-check menu-icon"></i>
    <span class="menu-title">Vos Entretiens</span>
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
      <!-- partial -->
      <div class="main-panel">
      <h2 class="welcome-text">Salut, <span class="text-black fw-bold">{{ $user->name }}</span></h2>
        <div class="content-wrapper">
        <section class="featured-job-area feature">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-tittle section-tittle2 text-center mb-3">
          <h3><u><b>Recommandations</b></u></h3>
          <p>Trouvez l'emploi de vos rêves</p>
        </div>
      </div>
    </div>
    <style>
                          .avatar {
                    width: 100px;
                    height: 100px;
                    object-fit: cover;
                }
                    </style>

    <div class="row justify-content-center">
      <div class="col-12">
        @foreach($offres as $offre)
        <div class="single-job-items mb-3">
          <div class="job-items">
            <div class="company-img">
              <a href="{{('detail_offre')}}">
                <img src="{{ asset('storage/photoslogo/' . $offre->user->logo_entreprise) }}" alt="Logo Entreprise" class="avatar">
              </a>
            </div>
            <div class="job-tittle">
              <a href="{{('detail_offre')}}" class="soulign">
                <h4>{{($offre->poste)}}</h4>
              </a>
              <ul>
                <li>{{optional($offre->user)->name}}</li>
                <li><i class="fas fa-map-marker-alt"></i>{{optional($offre->user)->villeR}}</li>
                
              </ul>
            </div>
          </div>
          <div class="items-link f-right">
            <a href="{{ route('detail_offre', $offre->id) }}" class="soulign">Voir l'offre</a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>


</div>

</div>
              </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. Jobbenin.</span>
          </div>
        </footer>
        <!-- partial -->
          <!-- main-panel ends -->
    <!-- page-body-wrapper ends -->
  </div>
</main>
@endsection