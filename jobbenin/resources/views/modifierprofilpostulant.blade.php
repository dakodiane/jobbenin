@extends('templates.dashboard')
 @section('document')

<main>


<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
				<div class="me-3">
					<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
						<span class="icon-menu"></span>
					</button>
				</div>
				<div>
					<a class="navbar-brand brand-logo" href="{{('vosoffres')}}">
						<img src="{{asset('assets/img/logo/logojob.png')}}" alt="" />
					</a>
					<a class="navbar-brand brand-logo-mini" href="{{('vosoffres')}}">
						
						
					</a>
				</div>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-top">
				<ul class="navbar-nav">
					<li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
						<h1 class="welcome-text">Salut, <span class="text-black fw-bold">John Doe</span></h1>
					</li>
				</ul>
				<ul class="navbar-nav ms-auto">
					<li class="nav-item d-none d-lg-block">
						<div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
							<span class="input-group-addon input-group-prepend border-right">
								<span class="icon-calendar input-group-text calendar-icon"></span>
							</span>
							<input type="text" class="form-control" />
						</div>
					</li>

					<li class="nav-item dropdown d-none d-lg-block user-dropdown">
						<a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> <img class="img-xs rounded-circle" src="{{asset('assets/images/faces/face8.jpg')}}" alt="Profile image" /> </a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
							<div class="dropdown-header text-center">
					
							<p class="mb-1 mt-3 font-weight-semibold">John Doe</p>
								<p class="fw-light text-muted mb-0">DoeJohn@gmail.com</p>
							</div>
							<a class="dropdown-item"href=" {{('profilpostulant')}}" ><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Mon Profile<span class="badge badge-pill badge-danger">1</span></a>
							<a class="dropdown-item" href=" {{('connexion')}}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Se Déconnecter</a>
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
						<div class="img-ss rounded-circle bg-light border me-3"></div>
						Light
					</div>
					<div class="sidebar-bg-options" id="sidebar-dark-theme">
						<div class="img-ss rounded-circle bg-dark border me-3"></div>
						Dark
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
					<li class="nav-item">
						<a class="nav-link" href="{{('dashboardpostulant')}}">
							<i class="mdi mdi-grid-large menu-icon"></i>
							<span class="menu-title">Tableau De Bord</span>
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
				</ul>
			</nav>
			<!-- partial -->
          
								
						
						
								<form action="">
                                <div class="container rounded bg-white mt-5 mb-5">
			        <div>	<h2 style="color:#da2461;text-align:center;padding-top:10px"> Modifier Vos Informations</h2></div>
            
            

						<div class="col-md-10 border-right">
							<div class="row mt-6" style="">
								
								<div class="col-md-12">
                                <input class="fname" type="text" name="name" placeholder="Nom" />
                                <input class="fname" type="text" name="name" placeholder="Prénom" />
                                 <input class="fname" type="text" name="name" placeholder="Email" /> <br>
                                 <h4 class="text-align"><u>Compléter Vos Informations </u></h4> 
									<label class="labels"> Sexe</label>
									<select name="Sexe" id="" class="form-control">
										<option value="F">Féminin</option>
										<option value="M">Masculin</option>
									</select>
								</div>
								<div class="col-md-12"><label class="labels">Date De Naissance</label><input type="text" class="form-control" placeholder="Entrer Votre Date de Naissance" value="" /></div>
								<div class="col-md-12"><label class="labels">Téléphone</label><input type="text" class="form-control" placeholder="Entrer Votre Numéro" value="" /></div>
								<div class="col-md-12"><label class="labels"> Ville</label><input type="text" class="form-control" placeholder="Entrer Votre Ville" value="" /></div>
								<div class="col-md-12"><label class="labels">Adresse</label><input type="text" class="form-control" placeholder="enter adresse" value="" /></div>
								<div class="col-md-12"><label class="labels">Diplomes</label><input type="text" class="form-control" placeholder="Entrer Vos Diplomes" value="" /></div>
						
							 </div>
					
                        
                                 <h4 class="text-align"><u>Expériences </u></h4>
									<input type="text" class="form-control" placeholder="Structure" /> <br />
									<input type="text" class="form-control" placeholder=" Intitulé du Poste" /> <br />
									<input type="text" class="form-control" placeholder=" Date Début" /> <br />
									<input type="text" class="form-control" placeholder=" Date Fin" /> <br />
									<textarea name="Description Des Taches " id="" cols="33" rows="10" placeholder="Description Des Taches"></textarea>
								
									<h4 class="text-align"><u>Compétences </u></h4>
									<br />
						
								    <textarea name="Compétences " id="" cols="33" rows="10" placeholder="Compétences"></textarea>
							
						
                                </form>
							</div>

								
            <button type="" href="">Enregistrer</button>
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

</div></div>
					</div>
				</div>
			</div>
            </div>
	</div>

	<!-- page-body-wrapper ends -->
</main>
@endsection