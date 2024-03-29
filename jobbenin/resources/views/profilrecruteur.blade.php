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
            <style>
                        .avatar {
                            width: 55px;
                            height: 55px;
                            object-fit: cover;
                        }
                    </style>
              <img class="img-xs rounded-circle" src="{{ asset('storage/photoslogo/' . $user->logo_entreprise) }}" alt="Logo Entreprise" class="">
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

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>

<a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-logout menu-icon"></i> Déconnexion</a>

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
          <li class="nav-item">
            <a class="nav-link" href=" {{ route('profilrecruteur', 
                ['id' => $user->id]) }}">
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
      <!-- partial -->
   
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
      
      <div class="profile-card">
  <h3 class="text-center">A Propos De Vous</h3>
  <div class="d-flex justify-content-center mb-3">
    <img class="img-md rounded-circle" src="{{ asset('storage/photoslogo/' . $user->logo_entreprise) }}" alt="Logo Entreprise">
  </div>
  @if(session('message'))
    <div class="alert alert-danger text-center">{{ session('message') }}</div>
  @endif
  <div class="text-center">
    <label for=""><u>Nom Complet :</u></label>
    <span>{{ $user->name }}</span>
    <label for=""><u>Adresse Email:</u></label>
    <span>{{ $user->email }}</span>
  </div>
  <hr>
  <h3 class="mb-3">Autres Informations</h3>
  <div class="mb-3">
    <label for=""><u>Ville :</u></label>
    <span>{{ $user->villeR }}</span>
  </div>
  <div class="mb-3">
    <label for=""><u>Description:</u></label>
    <span>{{ $user->description_recruteur }}</span>
  </div>
  <button class="button1 mx-auto d-block" data-modal="modal-mod">Modifier Vos Informations</button> 
</div>


</div>              
<style>
.modal1 {
    padding-top: 3em;
    max-width: 100%;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    position: fixed;
    top: 0;
    left: 0;
    z-index: 99999;
    overflow-y: auto;
}

.modal1-content {
    background-color: #fff;
    padding: 2em;
    text-align: justify;
    margin: 10% auto;
    max-width: 90%;
}

@media only screen and (min-width: 768px) {
    .modal1-content {
        max-width: 600px;
    }
}

@media only screen and (min-width: 992px) {
    .modal1-content {
        max-width: 800px;
    }
}

@media only screen and (min-width: 1200px) {
    .modal1-content {
        max-width: 1000px;
    }
}

.contact-form {
    position: relative;
    z-index: 100000;
}

.contact-form .close {
    position: absolute;
    top: 0.5em;
    right: 0.5em;
    color: red;
    font-size: 1.5em;
    cursor: pointer;
}

.contact-form label {
    color: #242b5e;
    display: block;
    margin-bottom: 0.5em;
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form input[type="tel"],
.contact-form textarea {
    width: 100%;
    padding: 0.5em;
    border-radius: 3px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.contact-form textarea {
    resize: vertical;
}

.contact-form button[type="submit"] {
    background-color: #242b5e;
    border-color: #242b5e;
    padding: 0.5em 1em;
    border-radius: 3px;
    color: #fff;
    width: 120px;
    margin: 0 auto;
    display: block;
}

@media only screen and (min-width: 768px) {
    .contact-form button[type="submit"] {
        width: 100%;
    }
}
</style>

<div id="modal-mod" class="modal1" style="padding-top: 3em;width: 1400px;">
  <div class="modal1-content" style="background-color: #fff; padding: 2em; text-align: justify;">
    <div class="contact-form">
      <a class="close" style="color: red;">X</a>
   
    
      <form  method="POST" action=" {{route('recruteur.update',$user->id)}}" enctype="multipart/form-data" style="max-width: 400px; margin: 0 auto;">
               <h2 style="text-align: center; color: #242b5e; text-decoration: underline;">Modifier les Informations</h2>
      
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="name" style="color: #242b5e; display: block; margin-bottom: 0.5em;">Nom Complet</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" style="width: 100%; padding: 0.5em; border-radius: 3px; border: 1px solid #ccc; box-sizing: border-box;">
       
        </div>
         <div class="form-group">
          <label for="email" style="color: #242b5e; display: block; margin-bottom: 0.5em;">Adresse E-mail</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" style="width: 100%; padding: 0.5em; border-radius: 3px; border: 1px solid #ccc; box-sizing: border-box;">
        </div>
        <h2 style="text-align: center; color: #242b5e; text-decoration: underline;">Compléter Le Profile</h2>
        <div class="form-group">
          <label for="logo_entreprise" style="color: #242b5e; display: block; margin-bottom: 0.5em;"> Logo Entreprise </label>
        <input type="file" name="logo_entreprise" id=""value="{{ $user->logo_entreprise }}"  required="required">
       </div>
       <div class="form-group">
          <label for="" style="color: #242b5e; display: block; margin-bottom: 0.5em;"> Ville</label>
          <select class="selectpicker border rounded" name="villeR" data-style="btn-black"
                   data-width="100%" data-live-search="true" title="Select Ville"value="{{ $user->villeR }}">
                                        <option value="Cotonou">Cotonou</option>
                                        <option value="Abomey-Calavi">Abomey-Calavi</option>
                                        <option value="Porto-Novo">Porto-Novo</option>
                                        <option value="Bohicon">Bohicon</option>
                                        <option value="Abomey">Abomey</option>
                                        <option value="Parakou">Parakou</option>
                                    </select>
        </div>
      <div class="form-group">
          <label for="email" style="color: #242b5e; display: block; margin-bottom: 0.5em;">Description:</label>
          <textarea  class="wysiwyg form-textarea " required="required" name="description_recruteur" 
          cols="14" rows="6" value="{{$user->description_recruteur}} " placeholder="{{$user->description_recruteur}}  "></textarea>
      
        </div>
       
        <div class="form-group">
           <div style="text-align: center;">
          <button type="submit" class="btn btn-primary" 
          style="background-color: #242b5e; border-color: #242b5e; padding: 0.5em 1em; 
          border-radius: 3px; color: #fff;width: 120px">Enregistrer</button>
       
        </div>
   
      </form>
    </div>
  </div>
</div>

  
<script>
  let modalBtns = [...document.querySelectorAll(".button1")];
  modalBtns.forEach(function (btn) {
    btn.onclick = function () {
      let modal1 = btn.getAttribute("data-modal");
      document.getElementById(modal1).style.display = "block";
    };
  });
  let closeBtns = [...document.querySelectorAll(".close")];
  closeBtns.forEach(function (btn) {
    btn.onclick = function () {
      let modal1 = btn.closest(".modal1");
      modal1.style.display = "none";
    };
  });
  window.onclick = function (event) {
    if (event.target.className === "modal1") {
      event.target.style.display = "none";
    }
  };
</script>
</div>
    </div>
</div>

<footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. Jobbenin.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</main>
@endsection
