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
                        <h1 class="welcome-text">Salut, <span class="text-black fw-bold">{{ $user->name }}</span></h1>
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
                            <img class="img-xs rounded-circle" src="{{ asset('storage/photoslogo/' . $user->logo_entreprise) }}" alt="Logo Entreprise" class="avatar">

                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                                <div class="dropdown-header text-center">
                                    <img src="{{ asset('storage/photoslogo/' . $user->logo_entreprise) }}" alt="Logo Entreprise" class="avatar">

                                    <p class="mb-1 mt-3 font-weight-semibold">{{ $user->name }}</p>
                                    <p class="fw-light text-muted mb-0">{{ $user->email }}</p>
                                </div>
                                <a class="dropdown-item" href=" {{ route('profilrecruteur', 
                ['id' => $user->id]) }}">
                                    Mon Profil</a>

                                <a href="{{ route('logout') }}" class="dropdown-item" class="dropdown-item-icon mdi mdi-power text-primary me-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border me-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
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
                        <a class="nav-link" href="{{('/entretien')}}">
                            <i class="mdi mdi mdi-amplifier menu-icon"></i>
                            <span class="menu-title">Entretiens passés</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{('/publicite')}}">
                            <i class="mdi mdi-archive menu-icon"></i>
                            <span class="menu-title">Publicité</span>
                        </a>
                    </li>


                </ul>
            </nav>
            <div class="main-panel">
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
                                                                        <!-- Button trigger modal -->


                                                                        <!-- Payment Modal -->
                                                                        <h1>Programmer un entretien</h1>

                                                                        <form method="post" action="{{route('programmer',['id' => $postulantid]) }}">
                                                                            @csrf

                                                                            <label>Sujet :</label>
                                                                            <input type="text" name="topic" required><br><br><br>
                                                                            <label>Date et heure :</label>
                                                                            <input type="datetime-local" name="start_time" required><br><br><br>
                                                                            <label>Durée (en minutes) :</label>
                                                                            <input type="number" name="duration" value="60" min="1" max="1440" required><br><br><br>
                                                                            <label>Zone horaire :</label>
                                                                            <select name="timezone">
                                                                                <option value="Europe/Paris">Europe/Paris</option>
                                                                                <option value="Europe/London">Europe/London</option>
                                                                                <option value="America/New_York">America/New York</option>
                                                                            </select><br> <br><br>
                                                                            <label>Description :</label>
                                                                            <textarea name="agenda"></textarea><br>
                                                                            <label>Activer la vidéo de l'hôte :</label>
                                                                            <input type="checkbox" name="host_video" value="1"><br><br><br>

                                                                            <label>Activer la vidéo du participant :</label>
                                                                            <input type="checkbox" name="participant_video" value="1"><br><br><br>

                                                                            <input type="submit" value="Programmer l'entretien">
                                                                        </form>
                                                                        <!-- Pricing Plan Start -->

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
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
</main>
@endsection