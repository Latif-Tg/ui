<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themepixels.me/cassie/pages/app-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 23:44:20 GMT -->
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="UNIVINFO - description">
    <meta name="author" content="GTEA">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <title>UNIVINFO - calendar</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('js/fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/select2/css/select2.min.css') }}">
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
      <div class="content-body content-body-calendar">
      
        <div id="calendar" class="content-calendar"></div>
      </div><!-- content-body -->
    </div><!-- content -->

    <div class="modal calendar-modal-create fade effect-scale" id="modalCreateEvent" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-30">
            <button type="button" class="close pos-absolute t-20 r-20" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i data-feather="x"></i></span>
            </button>

            <h5 class="tx-18 tx-sm-20 mg-b-20 mg-sm-b-30">Create New Event</h5>

            <form id="formCalendar" method="post" action="http://themepixels.me/cassie/pages/app-calendar.html">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Add title">
              </div><!-- form-group -->
              <div class="form-group d-flex align-items-center">
                <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                  <label class="custom-control-label" for="customRadio1">Event</label>
                </div>
                <div class="custom-control custom-radio mg-l-20">
                  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" checked>
                  <label class="custom-control-label" for="customRadio2">Reminder</label>
                </div>
              </div><!-- form-group -->
              <div class="form-group mg-t-30">
                <label class="tx-uppercase tx-sans tx-11 tx-spacing-1 tx-color-04 tx-medium">Start Date</label>
                <div class="row row-xs">
                  <div class="col-7">
                    <input id="eventStartDate" type="text" value="" class="form-control" placeholder="Select date">
                  </div><!-- col-7 -->
                  <div class="col-5">
                    <select class="custom-select">
                      <option selected>Select Time</option>
                    </select>
                  </div><!-- col-5 -->
                </div><!-- row -->
              </div><!-- form-group -->
              <div class="form-group">
                <label class="tx-uppercase tx-sans tx-11 tx-spacing-1 tx-color-04 tx-medium">End Date</label>
                <div class="row row-xs">
                  <div class="col-7">
                    <input id="eventEndDate" type="text" value="" class="form-control" placeholder="Select date">
                  </div><!-- col-7 -->
                  <div class="col-5">
                    <select class="custom-select">
                      <option selected>Select Time</option>
                    </select>
                  </div><!-- col-5 -->
                </div><!-- row -->
              </div><!-- form-group -->
              <div class="form-group">
                <textarea class="form-control" rows="2" placeholder="Write some description (optional)"></textarea>
              </div><!-- form-group -->
            </form>
          </div><!-- modal-body -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-brand-01 mg-r-5">Add Event</button>
            <a href="#" class="btn btn-secondary" data-dismiss="modal">Discard</a>
          </div><!-- modal-footer -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <div class="modal calendar-modal-event fade effect-scale" id="modalCalendarEvent" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="event-title"></h6>
            <nav class="nav nav-modal-event">
              <a href="#" class="nav-link"><i data-feather="external-link"></i></a>
              <a href="#" class="nav-link"><i data-feather="trash-2"></i></a>
              <a href="#" class="nav-link" data-dismiss="modal"><i data-feather="x"></i></a>
            </nav>
          </div><!-- modal-header -->
          <div class="modal-body">
            <div class="row row-sm">
              <div class="col-sm-6">
                <label class="tx-uppercase tx-sans tx-11 tx-spacing-1 tx-color-04 tx-medium">Start Date</label>
                <p class="event-start-date"></p>
              </div>
              <div class="col-sm-6">
                <label class="tx-uppercase tx-sans tx-11 tx-spacing-1 tx-color-04 tx-medium">End Date</label>
                <p class="event-end-date"></p>
              </div><!-- col-6 -->
            </div><!-- row -->

            <label class="tx-uppercase tx-sans tx-11 tx-spacing-1 tx-color-04 tx-medium">Description</label>
            <p class="event-desc mg-b-40"></p>

            <a href="#" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</a>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <script src=" {{ asset('js/jquery/jquery.min.js') }} "></script>
    <script src=" {{ asset('js/jqueryui/jquery-ui.min.js') }} "></script>        
    <script src=" {{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src=" {{ asset('js/feather-icons/feather.min.js') }} "></script>
    <script src=" {{ asset('js/perfect-scrollbar/perfect-scrollbar.min.js') }} "></script>
    <script src=" {{ asset('js/moment/min/moment.min.js') }} "></script>
    <script src=" {{ asset('js/fullcalendar/fullcalendar.min.js') }} "></script>
    <script src=" {{ asset('js/select2/js/select2.full.min.js') }} "></script>
    <script src=" {{ asset('js/cassie.js') }} "></script>
    <script src=" {{ asset('js/calendar-events.js') }} "></script>
    <script src=" {{ asset('js/calendar.js') }} "></script>
    <script src=" {{ asset('js/js-cookie/js.cookie.js') }} "></script>
  </body>

</html>
