<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themepixels.me/cassie/pages/page-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 23:47:37 GMT -->
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Meta -->
     <meta name="description" content="UNIVINFO - description">
    <meta name="author" content="GTEA">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <title>UNIVINFO - Informations</title>

    <title>Cassie Responsive Bootstrap 4 Dashboard and Admin Template</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('js/fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/ionicons/css/ionicons.min.css') }}">

    <!-- template css -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    <!-- Appzi: Capture Insightful Feedback -->
    <script async src="https://w.appzi.io/w.js?token=FMF2R"></script>
    <!-- End Appzi -->
    
  </head>
  <body>

    <div class="sidebar">
        <div class="sidebar-header">
          <div>
            <a href="/infos" class="sidebar-logo"><span>UNIVINFO</span></a>
            <span title="{{Auth::user()->university}}" style=" width:190px; float:left;" id="univinfoName">
                <a style="text-transform:uppercase; overflow: hidden; text-overflow: ellipsis;" class="sidebar-logo-headline">{{Auth::user()->university}}</a>
            </span>
          </div>
        </div><!-- sidebar-header -->
        <div id="dpSidebarBody" class="sidebar-body">
          <ul class="nav nav-sidebar">
              <li class="nav-label"><label class="content-label">MENU</label></li>
              <li class="nav-item show">
                  <li class="nav-item"><a href="/infos" class="nav-link"><i data-feather="layers"></i> Publications</a></li>
                  <li class="nav-item"><a href="/calendar" class="nav-link"><i data-feather="calendar"></i> Calendrier</a></li>
                  <li style="opacity:0.5; cursor:pointer;" title="cette fonctionnalité est en développement" class="nav-item"><a class="nav-link"><i data-feather="map-pin"></i> Carte interactive <span style="margin-left:5px;" class="badge badge-light">dév</span></a></li>
                  <li style="opacity:0.5; cursor:pointer;" title="cette fonctionnalité est en développement" class="nav-item"><a class="nav-link"><i data-feather="users"></i> Associations <span style="margin-left:5px;" class="badge badge-light">dév</span></a></li>
                  <li style="opacity:0.5; cursor:pointer;" title="cette fonctionnalité est en développement" class="nav-item"><a class="nav-link"><i data-feather="award"></i> Distinctions <span style="margin-left:5px;" class="badge badge-light">dév</span></a></li>
                  <li style="opacity:0.5; cursor:pointer;" title="cette fonctionnalité est en développement" class="nav-item"><a class="nav-link"><i data-feather="briefcase"></i> Emplois & Stages <span style="margin-left:5px;" class="badge badge-light">dév</span></a></li>
                  <li style="opacity:0.5; cursor:pointer;" title="cette fonctionnalité est en développement" class="nav-item"><a class="nav-link"><i data-feather="gift"></i> Partenaires <span style="margin-left:5px;" class="badge badge-light">dév</span></a></li>
                </nav>
              </li>
            </ul>
          
        </div><!-- sidebar-body -->
    </div><!-- sidebar -->

    <div class="content">
      <div class="header">
        <div class="header-left">
          <a href="#" class="burger-menu"><i data-feather="menu"></i></a>
        </div><!-- header-left -->
        <div class="header-right">
          <div class="dropdown dropdown-notification">
            <a href="#" class="dropdown-link new" data-toggle="dropdown"><i data-feather="bell"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-menu-header">
                <h6>Notifications</h6>
                <a href="#"><i data-feather="more-vertical"></i></a>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-menu-body">
                <a href="#" class="dropdown-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle text-primary bg-primary-light">s</span></div>
                  <div class="dropdown-item-body">
                    <p><strong>Socrates Itumay</strong> marked the task as completed.</p>
                    <span>5 hours ago</span>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle tx-pink bg-pink-light">r</span></div>
                  <div class="dropdown-item-body">
                    <p><strong>Reynante Labares</strong> marked the task as incomplete.</p>
                    <span>8 hours ago</span>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle tx-success bg-success-light">d</span></div>
                  <div class="dropdown-item-body">
                    <p><strong>Dyanne Aceron</strong> responded to your comment on this <strong>post</strong>.</p>
                    <span>a day ago</span>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle tx-indigo bg-indigo-light">k</span></div>
                  <div class="dropdown-item-body">
                    <p><strong>Kirby Avendula</strong> marked the task as incomplete.</p>
                    <span>2 days ago</span>
                  </div>
                </a>
              </div><!-- dropdown-menu-body -->
              <div class="dropdown-menu-footer">
                <a href="#">View All Notifications</a>
              </div>
            </div><!-- dropdown-menu -->
          </div>
          <div class="dropdown dropdown-loggeduser">
              <a href="#" class="dropdown-link" data-toggle="dropdown">
                <div class="avatar avatar-sm">
                  <div class="avatar"><span class="avatar-initial rounded-circle">DF</span></div>
                </div><!-- avatar -->
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-menu-header">
                  <div class="media align-items-center">
                  <div class="avatar"><span class="avatar-initial rounded-circle">DF</span></div><!-- avatar -->
                    <div class="media-body mg-l-10">
                      <h6>{{Auth::user()->name}}</h6>
                      <span>{{Auth::user()->role}}</span>
                    </div>
                  </div><!-- media -->
                </div>
                <div class="dropdown-menu-body">
                  <a href="/users/{{Auth::user()->id}}" class="dropdown-item"><i data-feather="user"></i> Profile</a>
                  <a href="/settings" class="dropdown-item"><i data-feather="briefcase"></i> Paramètres</a>
                  <form action="{{ route('logout') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="dropdown-item"><i data-feather="log-out"></i> Déconnexion</button>
                </form>
                </div>
              </div><!-- dropdown-menu -->
            </div>
        </div><!-- header-right -->
      </div><!-- header -->
      <div class="pd-20 content-body">
        <div class="row row-xs">
          <div class="col-md-4">
            <ul class="list-group list-group-settings">
              <li class="list-group-item list-group-item-action">
                <a href="#paneProfile" data-toggle="tab" class="media active">
                  <i data-feather="user"></i>
                  <div class="media-body">
                    <h6>Information du profile</h6>
                    <span>A propos de vos informations personnelles</span>
                  </div>
                </a>
              </li>
              <li class="list-group-item list-group-item-action">
                <a href="#paneSecurity" data-toggle="tab" class="media">
                  <i data-feather="shield"></i>
                  <div class="media-body">
                    <h6>Sécurité</h6>
                    <span> Gérez vos informations de sécurité</span>
                  </div>
                </a>
              </li>
              <li class="list-group-item list-group-item-action">
                <a href="#paneNotification" data-toggle="tab" class="media">
                  <i data-feather="bell"></i>
                  <div class="media-body">
                    <h6>Notifications</h6>
                    <span>Choisissez comment vous recevez vos notifications</span>
                  </div>
                </a>
              </li>
            </ul>
          </div><!-- col -->
          <div class="col-md-8">
            <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
              <div class="tab-content">
                <div id="paneProfile" class="tab-pane active show">
                  <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Informations du profile</h6>
                  <hr>
                  <div class="form-settings">
                    <div class="form-group">
                      <label class="form-label">Nom complet</label>
                      <input type="text" class="form-control" placeholder="Enter your fullname" value="{{Auth::user()->name}}">
                      <div class="tx-11 tx-sans tx-color-04 mg-t-5">Votre nom peut apparaître ici où vous êtes mentionné. Vous pouvez le modifier à tout moment.</div>
                    </div><!-- form-group -->

                    <div class="form-group">
                      <label class="form-label">Adresse</label>
                      <input type="text" class="form-control" placeholder="Votre adresse" value="">
                    </div><!-- form-group -->

                    <div class="form-group tx-13 tx-color-04">
                    En remplissant tous les champs de cette page, vous nous autorisez à partager ces données partout où apparaît votre profil d'utilisateur.
                    </div>
                    
                    <hr class="op-0">

                    <button class="btn btn-brand-02">Mettre à jour</button>
                    <button class="btn btn-white mg-l-2">Annuler les changements</button>
                  </div>
                </div><!-- tab-pane -->
                <div id="paneSecurity" class="tab-pane">
                  <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Paramètres de sécurité</h6>
                  <hr>
                  <div class="form-settings">
                    <div class="form-group">
                      <label class="form-label">Modifier le mot de passe</label>
                      <input type="text" class="form-control" placeholder="Saisissez l'ancien mot de passe">
                      <input type="text" class="form-control mg-t-5" placeholder="nouveau mot de passe">
                      <input type="text" class="form-control mg-t-5" placeholder="confirmer le mot de passe">
                    </div><!-- form-group -->

                    <hr>

                    <div class="form-group">
                      <label class="form-label">Authentification à deux Facteurs </label>
                      <button class="btn btn-brand-02 tx-sm">Activer l'authentification à deux Facteurs</button>
                      <div class="tx-11 tx-sans tx-color-04 mg-t-7">L'authentification à deux facteurs ajoute une couche de sécurité supplémentaire à votre compte en nécessitant plus qu'un simple mot de passe pour vous connecter.</div>
                    </div><!-- form-group -->

                    <hr>

                    <div class="form-group">
                      <label class="form-label">Sessions</label>
                      <p class="tx-sm tx-color-03">Il s'agit d'une liste d'appareils qui se sont connectés à votre compte. Révoquez toutes les sessions que vous ne reconnaissez pas.</p>

                      <ul class="list-group list-group-session">
                        <li class="list-group-item">
                          <div>
                            <h6>ville de Lomé 168.24.335.55</h6>
                            <span>Votre session actuelle à été détecté au Togo</span>
                          </div>
                          <a href="#" class="btn btn-xs btn-white">Informations supplémentaires</a>
                        </li>
                      </ul>
                    </div><!-- form-group -->
                  </div><!-- form-settings -->
                </div><!-- tab-pane -->
                <div id="paneNotification" class="tab-pane">
                  <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Paramètres de notifications</h6>
                  <hr>
                  <div class="form-settings mx-wd-100p">
                    <div class="form-group">
                      <label class="form-label mg-b-2">Alertes de sécurité</label>
                      <p class="tx-sm tx-color-04">Recevoir les alertes de sécurité via mail</p>

                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Envoyez un e-mail chaque fois qu'une vulnérabilité est détectée</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Envoyez par e-mail un résumé des vulnérabilités</label>
                      </div>
                    </div><!-- form-group -->

                    <div class="form-group">
                      <label class="form-label">Notifications SMS</label>
                      <ul class="list-group list-group-notification">
                        <li class="list-group-item">
                          <p class="mg-b-0">Commentaires</p>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1">&nbsp;</label>
                          </div>
                        </li>
                        </li>
                        <li class="list-group-item">
                          <p class="mg-b-0">Rappels</p>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3">
                            <label class="custom-control-label" for="customSwitch3">&nbsp;</label>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <p class="mg-b-0">Evenements</p>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4">
                            <label class="custom-control-label" for="customSwitch4">&nbsp;</label>
                          </div>
                        </li>
                      </ul>
                    </div><!-- form-group -->
                  </div><!-- form-setting -->
                </div><!-- tab-pane -->
              </div><!-- tab-content -->
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- content-body -->
    </div><!-- content -->

    <script src=" {{ asset('js/jquery/jquery.min.js') }} "></script>
    <script src=" {{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src=" {{ asset('js/feather-icons/feather.min.js') }} "></script>
    <script src=" {{ asset('js/perfect-scrollbar/perfect-scrollbar.min.js') }} "></script>
    <script src=" {{ asset('js/js-cookie/js.cookie.js') }} "></script>
    <script src=" {{ asset('js/cassie.js') }} "></script>
    <script>
      $(function(){

        'use strict'

      })
    </script>
  </body>

</html>