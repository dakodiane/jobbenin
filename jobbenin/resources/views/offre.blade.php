@extends('templates.app')

@section('document')

<main>

<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/team/offre.jpeg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Trouve ton emploi</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
<!-- Job List Area Start -->
<div class="job-listing-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <!-- Left content -->
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="row">
                    <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                            <div class="ion"> <svg 
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="20px" height="12px">
                            <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                            </svg>
                            </div>
                            <h4>Filtrer</h4>
                        </div>
                    </div>
                </div>
                <!-- Job Category Listing start -->
                <div class="job-category-listing mb-50">
                    <!-- single one -->
                    <div class="single-listing">
                       <div class="small-section-tittle2">
                             <h4>Categories</h4>
                       </div>
                        <!-- Select job category start -->
                        <div class="select-job-items2">
                            <select name="select">
                                <option value="">Toutes les categories</option>
                                <option value="">Informatique</option>
                                <option value="">Mecanique</option>
                                <option value="">Comptabilité</option>
                                <option value="">Gestion</option>
                            </select>
                        </div>
                        <!--  Select job category End-->
                       
                    </div>
                    <!-- single two -->
                    <div class="single-listing">
                       <div class="small-section-tittle2">
                             <h4>Regions</h4>
                       </div>
                        <!-- Select job region start -->
                        <div class="select-job-items2">
                            <select name="select">
                                        <option value="">Ville</option>
                                        <option value="">Cotonou</option>
                                        <option value="">Abomey-Calavi</option>
                                        <option value="">Porto-Novo</option>
                                        <option value="">Bohicon</option>
                                        <option value="">Abomey</option>
                                        <option value="">Parakou</option>
                            </select>
                        </div>
                        <!--  Select job region End-->
                       
                    </div>
                  
                   
                  
                </div>
                <!-- Job Category Listing End -->
            </div>
            <!-- Right content -->
            <div class="col-xl-9 col-lg-9 col-md-8">
                <!-- Featured_job_start -->
                <section class="featured-job-area">
                    <div class="container">
                      <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}"><img src="{{asset('assets/img/icon/job-list1.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Developpeur Mobile</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Porto-Novo</li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offre</a>
                        <span>Il y'a 7heures</span>
                    </div>
                </div>
                <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}"><img src="{{asset('assets/img/icon/job-list2.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Comptable principal</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Cotonou</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offre</a>
                        <span>Il y'a 1 jour</span>
                    </div>
                </div>
                 <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}"><img src="{{asset('assets/img/icon/job-list3.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Ouvrier en mécanique industrielle</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Abomey-Calavi</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offfre</a>
                        <span>23 Fev 2023</span>
                    </div>
                </div>
                 <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}"><img src="{{asset('assets/img/icon/job-list4.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Secretaire </h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Parakou</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offre</a>
                        <span>31 Jan 2023</span>
                    </div>
                </div>
                 <!-- single-job-content -->
                 <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}"><img src="{{asset('assets/img/icon/job-list1.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Developpeur Mobile</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Porto-Novo</li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offre</a>
                        <span> 23 Dec 2022</span>
                    </div>
                </div>
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}"><img src="{{asset('assets/img/icon/job-list2.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Comptable principal</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Cotonou</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offre</a>
                        <span>15 Dec 2022</span>
                    </div>
                </div>
                   <!-- single-job-content -->
                   <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                        <a href="{{('detail_offre')}}"><img src="{{asset('assets/img/icon/job-list1.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Developpeur Mobile</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Porto-Novo</li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offre</a>
                        <span>Il y'a 7heures</span>
                    </div>
                </div>
                <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}"><img src="{{asset('assets/img/icon/job-list2.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Comptable principal</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Cotonou</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offre</a>
                        <span>Il y'a 1 jour</span>
                    </div>
                </div>
                 <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}"><img src="{{asset('assets/img/icon/job-list3.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Ouvrier en mécanique industrielle</h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Abomey-Calavi</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offfre</a>
                        <span>23 Fev 2023</span>
                    </div>
                </div>
                 <!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="{{('detail_offre')}}"><img src="{{asset('assets/img/icon/job-list4.png')}}" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="{{('detail_offre')}}"><h4>Secretaire </h4></a>
                            <ul>
                                <li>Creative Agency</li>
                                <li><i class="fas fa-map-marker-alt"></i>Parakou</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link f-right">
                        <a href="{{('detail_offre')}}">Voir l'offre</a>
                        <span>31 Jan 2023</span>
                    </div>
                </div>
               
                </section>
                <!-- Featured_job_end -->
            </div>
        </div>
    </div>
</div>
<!-- Job List Area End -->
<!--Pagination Start  -->
<div class="pagination-area pb-115 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="single-wrap d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Pagination End  -->

</main>
@endsection