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

    <title>UNIVINFO - Informations</title>

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
                  <li style="opacity:0.5; cursor:pointer;" title="cette fonctionnalité est en développement" class="nav-item"><a class="nav-link"><i data-feather="gift"></i> Nos Partenaires <span style="margin-left:5px;" class="badge badge-light">dév</span></a></li>
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
          <div class="card-columns ">
            @foreach($infos as $info)
              
                <div class="card card-hover card-blog-one">
                    <div class="card-img-wrapper">
                      <a href="{{route('infos.show',[$info->id])}}"><img src=" {{asset(getInfoPicture($info))}}" class="card-img" alt=""></a>
                    </div>
                    <div class="marker pos-absolute t-10 l-10 bg-primary tx-white">{{getReceiverWording($info)}}</div>
                    <div class="card-body">
                    <span title="{{$info->title}}" style=" width:100%; float:left;">
                        <h5 style="font-size:20px; overflow: hidden; text-overflow: ellipsis;" class="sidebar-logo-headline">{{$info->title}}</h5>
                    </span>
                      <span style="float:left; margin-bottom:20px; height:60px; overflow: hidden; text-overflow: ellipsis;" class="card-desc">
                        {!! $info->info_content !!}
                      </span>
                    </div><!-- card-body -->
                    <div class="card-footer">
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye svg-14"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span>2,024</span></a>
                      <span class="tx-gray-500 mg-l-auto">2 hours ago</span>
                    </div><!-- card-footer -->
                </div>
            @endforeach
          </div><!-- content-body -->
        </div>

        {{$infos->links()}}
      </div><!-- content -->
      <script src=" {{ asset('js/jquery/jquery.min.js') }} "></script>
      <script src=" {{ asset('js/jqueryui/jquery-ui.min.js') }} "></script>
      <script src=" {{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
      <script src=" {{ asset('js/feather-icons/feather.min.js') }} "></script>
      <script src=" {{ asset('js/perfect-scrollbar/perfect-scrollbar.min.js') }} "></script>
      <script src=" {{ asset('js/js-cookie/js.cookie.js') }} "></script>
      <script src=" {{ asset('js/cassie.js') }} "></script>
      <script src=" {{ asset('js/flot.sampledata.js') }} "></script>
  </body>
  </html>