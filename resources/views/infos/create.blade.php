<!DOCTYPE html>
<html lang="fr">
  
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="UNIVINFO - description">
    <meta name="author" content="GTEA">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <title>UNIVINFO - Information</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('css/vendor/fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/ionicons/css/ionicons.min.css') }}">

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

    <div class="content content-page">
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
            <!-- Create the editor container -->
            <!--@modif-->
            <form action="{{route('infos.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div style="float:left;" class="col-lg-4">
              <h5>Derniers reglages</h5>
                <div class="signin-form">
                  <div class="form-group">
                    <label for="university">Destinée aux étudiants de (du)</label>
                    <select id="university" name="receiver_wording" class="custom-select">
                      <option value="Université de lomé" >tout l'université</option>
                      <option value="Centre Informatique et de Calcul (CIC)">Centre Informatique et de Calcul (CIC)</option>
                      <option value="Centre de Formation Continue (CFC)">Centre de Formation Continue (CFC)</option>
                      <option value="Centre d’Excellence Régional sur les Sciences Aviaires (CERSA)">Centre d’Excellence Régional sur les Sciences Aviaires (CERSA)</option>
                      <option value="Centres de recherche">Centres de recherche</option>
                      <option value="Centre WASCAL">Centre WASCAL</option>
                      <option value="Ecole des Assistants Médicaux (EAM)">Ecole des Assistants Médicaux (EAM)</option>
                      <option value="Ecole Nationale Supérieure d'Ingénieurs (ENSI)">Ecole Nationale Supérieure d'Ingénieurs (ENSI)</option>
                      <option value="Ecole Supérieure de Secrétariat de Direction (ESSD)">Ecole Supérieure de Secrétariat de Direction (ESSD)</option>
                      <option value="Ecole Supérieure des Techniques Biologiques et Alimentaires (E.S.T.B.A)">Ecole Supérieure des Techniques Biologiques et Alimentaires (E.S.T.B.A)</option>
                      <option value="Ecole Supérieure d’Agronomie (ESA)">Ecole Supérieure d’Agronomie (ESA)</option>
                      <option value="Faculté de Droit (FDD)">Faculté de Droit (FDD)</option>
                      <option value="Faculté des Lettres, Langues et Arts (FLLA)">Faculté des Lettres, Langues et Arts (FLLA)</option>
                      <option value="Faculté des Sciences de l'Homme et de la Société (FSHS) des Sciences Economiques et de Gestion (FASEG)">Faculté des Sciences de l'Homme et de la Société (FSHS) des Sciences Economiques et de Gestion (FASEG)</option>
                      <option value="Faculté des Sciences de la Santé (FSS)">Faculté des Sciences de la Santé (FSS)</option>
                      <option value="Faculté des Sciences (FDS)">Faculté des Sciences (FDS)</option>
                      <option value="Institut Confucius">Institut Confucius</option>
                      <option value="Institut National des Sciences de l'Education (INSE)">Institut National des Sciences de l'Education (INSE)</option>
                      <option value="Institut Universitaire de Technologie de Gestion (IUT de Gestion)">Institut Universitaire de Technologie de Gestion (IUT de Gestion)</option>
                      <option value="Institut des Sciences de l’Information, de la Communication et des Arts (ISICA)">Institut des Sciences de l’Information, de la Communication et des Arts (ISICA)</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="title">Titre</label>
                    <input id="title" type="text" class="form-control " name="title" value="" required=""  autofocus="" placeholder="Titre de l'information">
                  </div>
                  <div class="form-group">
                    <label for="tags">Mots clés</label>
                    <input id="tags" type="text" class="form-control " name="tags" value="" required=""  autofocus="" placeholder="saisissez des mots clés">
                  </div>
                </div>
              </div>
              <div style="float:right;" class="col-lg-8">
              <h5>Editeur 
                <span style="
                  font-size: 14px;
                  font-weight: 400;
                  color: rgba(55, 56, 87, 0.6);
                  display: inline-block;
                  margin-left: 5px;" 
                  class="d-none d-lg-inline">Rediger votre information
                </span>
              </h5><br>
                <textarea style="height:80vh;" id="myEditor" name="info_content" cols="40" rows="10">
                  Bienvenue !
                </textarea>
                <div style="float:right;" class="form-group d-flex mg-t-15 mg-b-0">
                  <button type="submit" class="btn btn-brand-01 btn-uppercase flex-fill"><i data-feather="save"></i> ENVOYER</button>
                </div>
              </div>
            </form>
            <!--@modif-->
        </div><!-- content-body -->
      </div><!-- content -->
      <script src=" {{ asset('js/jquery/jquery.min.js') }} "></script>
      <script src=" {{ asset('js/jqueryui/jquery-ui.min.js') }} "></script>
      <script src=" {{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
      <script src=" {{ asset('js/feather-icons/feather.min.js') }} "></script>
      <script src=" {{ asset('js/perfect-scrollbar/perfect-scrollbar.min.js') }} "></script>
      <script src=" {{ asset('js/js-cookie/js.cookie.js') }} "></script>
      <script src=" {{ asset('js/cassie.js') }} "></script>
      <script src="https://cdn.tiny.cloud/1/id3nkenqfoygia99u47alvqvliwt3lc1hpwj7tou3wez29qj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <script>
        tinymce.init({
          selector:"#myEditor",
          language: 'fr_FR',
          plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'table emoticons template paste help'
          ],
          toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullpage | ' +
            'forecolor backcolor emoticons | help',
          menu: {
            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | spellchecker | emoticons'}
          },
          menubar: 'favs file edit view insert format tools table help',
              });
      </script>
  </body>
  </html>