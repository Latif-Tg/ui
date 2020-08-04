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

  </head>
  <body>
    <div class="sidebar">
        <div class="sidebar-header">
          <div>
            <a href="/" class="sidebar-logo"><span>UNIVINFO</span></a>
            <small class="sidebar-logo-headline">UNIVERSITE CATHOLIQUE DE L'AFRIQUE DE L'OUEST</small>
          </div>
        </div><!-- sidebar-header -->
        <div id="dpSidebarBody" class="sidebar-body">
          <ul class="nav nav-sidebar">
            <li class="nav-label"><label class="content-label">MENU</label></li>
            <li class="nav-item show">
                <li class="nav-item"><a href="/infos" class="nav-link"><i data-feather="layers"></i> Publications</a></li>
                <li class="nav-item"><a href="/calendar" class="nav-link"><i data-feather="calendar"></i> Calendrier</a></li>
                <li title="fonctionnalité en développement" class="nav-item"><a class="nav-link"><i data-feather="wind"></i> Restaurant <span style="margin-left:5px;" class="badge badge-light">dév</span></a></li>
                <li title="fonctionnalité en développement" class="nav-item"><a class="nav-link"><i data-feather="map-pin"></i> Carte interactive <span style="margin-left:5px;" class="badge badge-light">dév</span></a></li>
                <li title="fonctionnalité en développement" class="nav-item"><a class="nav-link"><i data-feather="users"></i> Associations <span style="margin-left:5px;" class="badge badge-light">dév</span></a></li>
                <li title="fonctionnalité en développement" class="nav-item"><a class="nav-link"><i data-feather="award"></i> Distinctions <span style="margin-left:5px;" class="badge badge-light">dév</span></a></li>
                <li title="fonctionnalité en développement" class="nav-item"><a class="nav-link"><i data-feather="briefcase"></i> Emplois & Stages <span style="margin-left:5px;" class="badge badge-light">dév</span></a></li>
              </nav>
            </li>
          </ul>
          <hr class="mg-t-30 mg-b-25">
          <ul class="nav nav-sidebar">
          <li class="nav-label"><label class="content-label">SUPPORT</label></li>
            <li class="nav-item"><a href="#" class="nav-link"><i data-feather="aperture"></i> Aide</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i data-feather="message-square"></i> Feedback</a></li>
          </ul>
        </div><!-- sidebar-body -->
    </div><!-- sidebar -->

    <div class="content content-page">
        <div class="header">
          <div class="header-left">
            <a href="#" class="burger-menu"><i data-feather="menu"></i></a>
          </div><!-- header-left -->
  
          <div class="header-right">
            <a href="#" class="header-help-link"><i data-feather="help-circle"></i></a>
            <div class="dropdown dropdown-loggeduser">
              <a href="#" class="dropdown-link" data-toggle="dropdown">
                <div class="avatar avatar-sm">
                  <img src="{{ asset('img/img1.jpg') }}" class="rounded-circle" alt="">
                </div><!-- avatar -->
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-menu-header">
                  <div class="media align-items-center">
                    <div class="avatar">
                      <img src="{{ asset('img/img1.jpg') }}" class="rounded-circle" alt="">
                    </div><!-- avatar -->
                    <div class="media-body mg-l-10">
                      <h6>Louise Kate Lumaad</h6>
                      <span>Administrator</span>
                    </div>
                  </div><!-- media -->
                </div>
                <div class="dropdown-menu-body">
                  <a href="/users/1" class="dropdown-item"><i data-feather="user"></i> Profile</a>
                  <a href="/settings" class="dropdown-item"><i data-feather="briefcase"></i> Paramètres</a>
                  <a href="/logout" class="dropdown-item"><i data-feather="log-out"></i> Déconnexion</a>
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
                    <label for="info_type">Nature de l'information</label>
                    <select id="info_type" name="info_type" class="custom-select">
                      <option value="Public">Public</option>
                      <option value="Privé">Privé</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="info_type">Destinée aux étudiants de (du)</label>
                    <select id="info_type" name="info_type" class="custom-select">
                      <option value="Public">Centre Informatique et de Calcul (CIC)</option>
                      <option value="Privé">Centre de Formation Continue (CFC)</option>
                      <option value="Privé">Centre d’Excellence Régional sur les Sciences Aviaires (CERSA)</option>
                      <option value="Privé">Centres de recherche</option>
                      <option value="Privé">Centre WASCAL</option>
                      <option value="Privé">Ecole des Assistants Médicaux (EAM)</option>
                      <option value="Privé">Ecole Nationale Supérieure d'Ingénieurs (ENSI)</option>
                      <option value="Privé">Ecole Supérieure de Secrétariat de Direction (ESSD)</option>
                      <option value="Privé">Ecole Supérieure des Techniques Biologiques et Alimentaires (E.S.T.B.A)</option>
                      <option value="Privé">Ecole Supérieure d’Agronomie (ESA)</option>
                      <option value="Privé">Faculté de Droit (FDD)</option>
                      <option value="Privé">Faculté des Lettres, Langues et Arts (FLLA)</option>
                      <option value="Privé">Faculté des Sciences de l'Homme et de la Société (FSHS) des Sciences Economiques et de Gestion (FASEG)</option>
                      <option value="Privé">Faculté des Sciences de la Santé (FSS)</option>
                      <option value="Privé">Faculté des Sciences (FDS)</option>
                      <option value="Privé">Institut Confucius</option>
                      <option value="Privé">Institut National des Sciences de l'Education (INSE)</option>
                      <option value="Privé">Institut Universitaire de Technologie de Gestion (IUT de Gestion)</option>
                      <option value="Privé">Institut des Sciences de l’Information, de la Communication et des Arts (ISICA)</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="email">Titre</label>
                    <input id="title" type="text" class="form-control " name="info_title" value="" required=""  autofocus="" placeholder="Titre de l'information">
                  </div>
                  <div class="form-group">
                    <label for="email">Mots clés</label>
                    <input id="tags" type="text" class="form-control " name="tags" value="" required=""  autofocus="" placeholder="saisissez des mots clés">
                  </div>
                </div>
              </div>
              <div style="float:right;" class="col-lg-8">
                <h5>Information</h5><br>
                <textarea style="height:80vh;" id="myEditor" name="info_content" cols="40" rows="10">
                  Bienvenue !
                </textarea>
                <div style="float:right;" class="form-group d-flex mg-t-15 mg-b-0">
                  <button type="submit" class="btn btn-brand-01 btn-uppercase flex-fill"><i data-feather="save"></i> ENREGISTRER</button>
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