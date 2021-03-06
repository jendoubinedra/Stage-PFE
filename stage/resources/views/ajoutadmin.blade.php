<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Drift - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
<!-- /meta tags -->
<title>Drift - Admin Template</title>

<!-- Site favicon -->
<link rel="shortcut icon" href="{{url('assets/images/favicon.ico" type="image/x-icon')}}">
<!-- /site favicon -->

<!-- Font Icon Styles -->
<link rel="stylesheet" href="{{url('../node_modules/flag-icon-css/css/flag-icon.min.css')}}">
<link rel="stylesheet" href="{{url('vendors/gaxon-icon/styles.css')}}">
<!-- /font icon Styles -->

<!-- Perfect Scrollbar stylesheet -->
<link rel="stylesheet" href="{{url('../node_modules/perfect-scrollbar/css/perfect-scrollbar.css)}}">
<!-- /perfect scrollbar stylesheet -->

<!-- Load Styles -->    <link rel="stylesheet" href="{{url('assets/css/semidark-style-1.min.css')}}">
    <!-- /load styles -->

</head>
<body class="dt-sidebar--fixed dt-header--fixed">

<!-- Loader -->
<div class="dt-loader-container">
  <div class="dt-loader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
  </div>
</div>
<!-- /loader -->
<!-- Root -->
<div class="dt-root">
    <div class="dt-root__inner">
        <!-- Header -->
<header class="dt-header">

  <!-- Header container -->
  <div class="dt-header__container">

    <!-- Brand -->
    <div class="dt-brand">

      <!-- Brand tool -->
      <div class="dt-brand__tool" data-toggle="main-sidebar">
        <div class="hamburger-inner"></div>
      </div>
      <!-- /brand tool -->

      <!-- Brand logo -->
      <span class="dt-brand__logo">
        <a class="dt-brand__logo-link" href="{{url('index-2.html')}}">
          <img class="dt-brand__logo-img d-none d-sm-inline-block" src="assets/images/logo.png" alt="Drift">
          <img class="dt-brand__logo-symbol d-sm-none" src="assets/images/logo-symbol.png" alt="Drift">
        </a>
      </span>
      <!-- /brand logo -->

    </div>
    <!-- /brand -->

    <!-- Header toolbar-->
    <div class="dt-header__toolbar">

      <!-- Search box -->
      <form class="search-box d-none d-lg-block">
        <div class="input-group">
          <input class="form-control" placeholder="Search in app..." value="" type="search">
          <span class="search-icon"><i class="icon icon-search icon-lg"></i></span>
          <div class="input-group-append">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Category
            </button>

            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)">Another action</a>
              <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
            </div>
          </div>
        </div>
      </form>
      <!-- /search box -->

      <!-- Header Menu Wrapper -->
      <div class="dt-nav-wrapper">
        <!-- Header Menu -->
        <ul class="dt-nav d-lg-none">
          <li class="dt-nav__item dt-notification-search dropdown">

            <!-- Dropdown Link -->
            <a href= "#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"> <i class="icon icon-search icon-fw icon-lg"></i> </a>
            <!-- /dropdown link -->

            <!-- Dropdown Option -->
            <div class="dropdown-menu">

              <!-- Search Box -->
              <form class="search-box right-side-icon">
                <input class="form-control form-control-lg" type="search" placeholder="Search in app...">
                <button type="submit" class="search-icon"><i class="icon icon-search icon-lg"></i></button>
              </form>
              <!-- /search box -->

            </div>
            <!-- /dropdown option -->

          </li>
        </ul>
        <!-- /header menu -->

        <!-- Header Menu -->
        <ul class="dt-nav">
          <li class="dt-nav__item dt-notification-app dropdown">

            <!-- Dropdown Link -->
            <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"> <i class="icon icon-apps icon-sm icon-fw"></i>
              <span>Apps</span> </a>
            <!-- /dropdown link -->

            <!-- Dropdown Option -->
            <div class="dropdown-menu ps-custom-scrollbar">

              <!-- Apps -->
              <ul class="dt-app-list">
                <li class="dt-app-list__item">
                  <a href="javascript:void(0)" class="dt-app-list__link">
                    <img src="assets/images/icon/icon-account.png" alt="Google Account">
                    <span class="dt-app-list__text">Account</span> </a>
                </li>
                <li class="dt-app-list__item">
                  <a href="javascript:void(0)" class="dt-app-list__link">
                    <img src="assets/images/icon/icon-google.png" alt="Google Search">
                    <span class="dt-app-list__text">Search</span> </a>
                </li>
                <li class="dt-app-list__item">
                  <a href="javascript:void(0)" class="dt-app-list__link">
                    <img src="assets/images/icon/icon-map.png" alt="Google Map">
                    <span class="dt-app-list__text">Maps</span> </a>
                </li>
                <li class="dt-app-list__item">
                  <a href="javascript:void(0)" class="dt-app-list__link">
                    <img src="assets/images/icon/icon-youtube.png" alt="Youtube">
                    <span class="dt-app-list__text">YouTube</span> </a>
                </li>
                <li class="dt-app-list__item">
                  <a href="javascript:void(0)" class="dt-app-list__link">
                    <img src="assets/images/icon/icon-playstore.png" alt="Play Store">
                    <span class="dt-app-list__text">Play</span> </a>
                </li>
                <li class="dt-app-list__item">
                  <a href="javascript:void(0)" class="dt-app-list__link">
                    <img src="assets/images/icon/icon-news.png" alt="Google News">
                    <span class="dt-app-list__text">News</span> </a>
                </li>
                <li class="dt-app-list__item">
                  <a href="javascript:void(0)" class="dt-app-list__link">
                    <img src="assets/images/icon/icon-gmail.png" alt="Google Drive">
                    <span class="dt-app-list__text">Gmail</span> </a>
                </li>
                <li class="dt-app-list__item">
                  <a href="javascript:void(0)" class="dt-app-list__link">
                    <img src="assets/images/icon/icon-drive.png" alt="Google Drive">
                    <span class="dt-app-list__text">Drive</span> </a>
                </li>
                <li class="dt-app-list__item">
                  <a href="javascript:void(0)" class="dt-app-list__link">
                    <img src="assets/images/icon/icon-calendar.png" alt="Calendar">
                    <span class="dt-app-list__text">Calendar</span> </a>
                </li>
                <li class="dt-app-list__item">
                  <a href="javascript:void(0)" class="dt-app-list__link">
                    <img src="assets/images/icon/icon-google-plus.png" alt="Google Plus">
                    <span class="dt-app-list__text">Google+</span> </a>
                </li>
                <li class="dt-app-list__item">
                  <a href="javascript:void(0)" class="dt-app-list__link">
                    <img src="assets/images/icon/icon-translate.png" alt="Translate">
                    <span class="dt-app-list__text">Translate</span> </a>
                </li>
                <li class="dt-app-list__item">
                  <a href="javascript:void(0)" class="dt-app-list__link">
                    <img src="assets/images/icon/icon-photos.png" alt="Photos">
                    <span class="dt-app-list__text">Photos</span> </a>
                </li>
              </ul>
              <!-- /apps -->

            </div>
            <!-- /dropdown option -->

          </li>
        </ul>
        <!-- /header menu -->

        <!-- Header Menu -->
        <ul class="dt-nav">
          <li class="dt-nav__item dt-notification dropdown">

            <!-- Dropdown Link -->
            <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"> <i class="icon icon-notification2 icon-fw dt-icon-alert"></i>
            </a>
            <!-- /dropdown link -->

            <!-- Dropdown Option -->
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
              <!-- Dropdown Menu Header -->
              <div class="dropdown-menu-header">
                <h4 class="title">Notifications (9)</h4>

                <div class="ml-auto action-area">
                  <a href="javascript:void(0)">Mark All Read</a> <a class="ml-2" href="javascript:void(0)">
                    <i class="icon icon-settings icon-lg text-light-gray"></i> </a>
                </div>
              </div>
              <!-- /dropdown menu header -->

              <!-- Dropdown Menu Body -->
              <div class="dropdown-menu-body ps-custom-scrollbar">

                <div class="h-auto">
                  <!-- Media -->
                  <a href="javascript:void(0)" class="media">

                    <!-- Avatar -->
                    <img class="dt-avatar mr-3" src="assets/images/user-avatar/stella-johnson.jpg" alt="User">
                    <!-- avatar -->

                    <!-- Media Body -->
                    <span class="media-body">
                    <span class="message">
                      <span class="user-name">Stella Johnson</span> and <span class="user-name">Chris Harris</span>
                      have birthdays today. Help them celebrate!
                    </span>
                    <span class="meta-date">8 hours ago</span>
                  </span>
                    <!-- /media body -->

                  </a>
                  <!-- /media -->

                  <!-- Media -->
                  <a href="javascript:void(0)" class="media">

                    <!-- Avatar -->
                    <img class="dt-avatar mr-3" src="assets/images/user-avatar/jeson-born.jpg" alt="User">
                    <!-- avatar -->

                    <!-- Media Body -->
                    <span class="media-body">
                    <span class="message">
                      <span class="user-name">Jonathan Madano</span> commented on your post.
                    </span>
                    <span class="meta-date">9 hours ago</span>
                  </span>
                    <!-- /media body -->

                  </a>
                  <!-- /media -->

                  <!-- Media -->
                  <a href="javascript:void(0)" class="media">

                    <!-- Avatar -->
                    <img class="dt-avatar mr-3" src="assets/images/user-avatar/selena.jpg" alt="User">
                    <!-- avatar -->

                    <!-- Media Body -->
                    <span class="media-body">
                    <span class="message">
                      <span class="user-name">Chelsea Brown</span> sent a video recomendation.
                    </span>
                    <span class="meta-date">
                      <i class="icon icon-play-circle text-primary icon-fw mr-1"></i>
                      13 hours ago
                    </span>
                  </span>
                    <!-- /media body -->

                  </a>
                  <!-- /media -->

                  <!-- Media -->
                  <a href="javascript:void(0)" class="media">

                    <!-- Avatar -->
                    <img class="dt-avatar mr-3" src="assets/images/user-avatar/alex-dolgove.jpg" alt="User">
                    <!-- avatar -->

                    <!-- Media Body -->
                    <span class="media-body">
                    <span class="message">
                      <span class="user-name">Alex Dolgove</span> and <span class="user-name">Chris Harris</span>
                      like your post.
                    </span>
                    <span class="meta-date">
                      <i class="icon icon-like text-light-blue icon-fw mr-1"></i>
                      yesterday at 9:30
                    </span>
                  </span>
                    <!-- /media body -->

                  </a>
                  <!-- /media -->
                </div>

              </div>
              <!-- /dropdown menu body -->

              <!-- Dropdown Menu Footer -->
              <div class="dropdown-menu-footer">
                <a href="javascript:void(0)" class="card-link"> See All <i class="icon icon-arrow-right icon-fw"></i>
                </a>
              </div>
              <!-- /dropdown menu footer -->
            </div>
            <!-- /dropdown option -->

          </li>

          <li class="dt-nav__item dt-notification dropdown">

            <!-- Dropdown Link -->
            <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"> <i class="icon icon-open-mail icon-fw"></i> </a>
            <!-- /dropdown link -->

            <!-- Dropdown Option -->
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
              <!-- Dropdown Menu Header -->
              <div class="dropdown-menu-header">
                <h4 class="title">Messages (6)</h4>

                <div class="ml-auto action-area">
                  <a href="javascript:void(0)">Mark All Read</a> <a class="ml-2" href="javascript:void(0)">
                    <i class="icon icon-settings icon-lg text-light-gray"></i></a>
                </div>
              </div>
              <!-- /dropdown menu header -->

              <!-- Dropdown Menu Body -->
              <div class="dropdown-menu-body ps-custom-scrollbar">

                <div class="h-auto">

                  <!-- Media -->
                  <a href="javascript:void(0)" class="media">

                    <!-- Avatar -->
                    <img class="dt-avatar mr-3" src="assets/images/user-avatar/mathew.jpg" alt="User">
                    <!-- avatar -->

                    <!-- Media Body -->
                    <span class="media-body text-truncate">
                    <span class="user-name mb-1">Chris Mathew</span>
                    <span class="message text-light-gray text-truncate">Okay.. I will be waiting for your...</span>
                  </span>
                    <!-- /media body -->

                    <span class="action-area h-100 min-w-80 text-right">
                      <span class="meta-date mb-1">8 hours ago</span>
                      <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                      </span>
                      <!-- /toggle button -->
                    </span> </a>
                  <!-- /media -->

                  <!-- Media -->
                  <a href="javascript:void(0)" class="media">

                    <!-- Avatar -->
                    <img class="dt-avatar mr-3" src="assets/images/user-avatar/stella-johnson.jpg" alt="User">
                    <!-- avatar -->

                    <!-- Media Body -->
                    <span class="media-body text-truncate">
                    <span class="user-name mb-1">Alia Joseph</span>
                    <span class="message text-light-gray text-truncate">
                      Alia Joseph just joined Messenger! Be the first to send a welcome message or sticker.
                    </span>
                  </span>
                    <!-- /media body -->

                    <span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">9 hours ago</span>
                      <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                      </span>
                      <!-- /toggle button -->
                  </span> </a>
                  <!-- /media -->

                  <!-- Media -->
                  <a href="javascript:void(0)" class="media">

                    <!-- Avatar -->
                    <img class="dt-avatar mr-3" src="assets/images/user-avatar/steve-smith.jpg" alt="User">
                    <!-- avatar -->

                    <!-- Media Body -->
                    <span class="media-body text-truncate">
                    <span class="user-name mb-1">Joshua Brian</span>
                    <span class="message text-light-gray text-truncate">
                      Alex will explain you how to keep the HTML structure and all that.
                    </span>
                  </span>
                    <!-- /media body -->

                    <span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">12 hours ago</span>
                      <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                      </span>
                      <!-- /toggle button -->
                  </span> </a>
                  <!-- /media -->

                  <!-- Media -->
                  <a href="javascript:void(0)" class="media">

                    <!-- Avatar -->
                    <img class="dt-avatar mr-3" src="assets/images/user-avatar/domnic-brown.jpg" alt="User">
                    <!-- avatar -->

                    <!-- Media Body -->
                    <span class="media-body text-truncate">
                    <span class="user-name mb-1">Domnic Brown</span>
                    <span class="message text-light-gray text-truncate">Okay.. I will be waiting for your...</span>
                  </span>
                    <!-- /media body -->

                    <span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">yesterday</span>
                      <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as reand">
                        <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                      </span>
                      <!-- /toggle button -->
                  </span> </a>
                  <!-- /media -->

                </div>

              </div>
              <!-- /dropdown menu body -->

              <!-- Dropdown Menu Footer -->
              <div class="dropdown-menu-footer">
                <a href="javascript:void(0)" class="card-link"> See All <i class="icon icon-arrow-right icon-fw"></i>
                </a>
              </div>
              <!-- /dropdown menu footer -->
            </div>
            <!-- /dropdown option -->

          </li>
        </ul>
        <!-- /header menu -->

        <!-- Header Menu -->
        <ul class="dt-nav">
          <li class="dt-nav__item dropdown">

            <!-- Dropdown Link -->
            <a href="#" class="dt-nav__link dropdown-toggle" data-toggle="dropdown"
               aria-haspopup="true"
               aria-expanded="false">
              <i class="flag-icon flag-icon-us flag-icon-rounded flag-icon-lg"></i><span>en-uk</span> </a>
            <!-- /dropdown link -->

            <!-- Dropdown Option -->
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="flag-icon flag-icon-in mr-2"></i><span>Hi-In</span> </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="flag-icon flag-icon-cn mr-2"></i><span>Chinese</span> </a>
              <a class="dropdown-item" href="javascript:void(0)">
                <i class="flag-icon flag-icon-es mr-2"></i><span>Spanish</span> </a>
            </div>
            <!-- /dropdown option -->

          </li>
        </ul>
        <!-- /header menu -->

        <!-- Header Menu -->
        <ul class="dt-nav">
          <li class="dt-nav__item dropdown">

            <!-- Dropdown Link -->
            <a href="#" class="dt-nav__link dropdown-toggle no-arrow dt-avatar-wrapper"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="dt-avatar size-30" src="assets/images/user-avatar/domnic-harris.jpg" alt="Domnic Harris">
              <span class="dt-avatar-info d-none d-sm-block">
                <span class="dt-avatar-name">Bob Hyden</span>
              </span> </a>
            <!-- /dropdown link -->

            <!-- Dropdown Option -->
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dt-avatar-wrapper flex-nowrap p-6 mt-n2 bg-gradient-purple text-white rounded-top">
                <img class="dt-avatar" src="assets/images/user-avatar/domnic-harris.jpg" alt="Domnic Harris">
                <span class="dt-avatar-info">
                  <span class="dt-avatar-name">Bob Hyden</span>
                  <span class="f-12">Administrator</span>
                </span>
              </div>
              <a class="dropdown-item" href="javascript:void(0)"> <i class="icon icon-user icon-fw mr-2 mr-sm-1"></i>Account
              </a> <a class="dropdown-item" href="javascript:void(0)">
                <i class="icon icon-settings icon-fw mr-2 mr-sm-1"></i>Setting </a>
              <a class="dropdown-item" href="page-login.html"> <i class="icon icon-editors icon-fw mr-2 mr-sm-1"></i>Logout
              </a>
            </div>
            <!-- /dropdown option -->

          </li>
        </ul>
        <!-- /header menu -->
      </div>
      <!-- Header Menu Wrapper -->

    </div>
    <!-- /header toolbar -->

  </div>
  <!-- /header container -->

</header>
<!-- /header -->
        <!-- Site Main -->
        <main class="dt-main">
            <!-- Sidebar -->

            
<!-- /sidebar -->
            <!-- Site Content Wrapper -->
            <div class="dt-content-wrapper">

                <!-- Site Content -->
                <div class="dt-content">

                    <!-- Page Header -->
                    <div class="dt-page__header">
                        <h1 class="dt-page__title">ajouter categories</h1>
                    </div>
                    <!-- /page header -->

                    <!-- Grid -->
                    <div class="row">

                        <!-- Grid Item -->
                        <div class="col-xl-6">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Header -->
                                <div class="dt-card__header">

                                    <!-- Card Heading -->
                                    <div class="dt-card__heading">
                                        <h3 class="dt-card__title"></h3>
                                    </div>
                                    <!-- /card heading -->

                                </div>
                                <!-- /card header -->

                                <!-- Card Body -->
                                <div class="dt-card__body">

                                    <!-- Form -->
                                    <form methode="post" action="controller/ajout-admin.php">
                                    @csrf
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <label for="nom">nom categories</label>
                                            <input type="text" class="form-control" id="nom"
                                                   aria-describedby="emailHelp1"
                                                   placeholder="Enter nom categories" required>
                                            
                                        </div>
                                        <!-- /form group -->
                                         
          
                                        <!-- Form Group -->
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-primary text-uppercase">ajouter</button>
                                            
                                        </div>
                                        <!-- /form group -->


                                    </form>
                                    <!-- /form -->

                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        
                        

                              
                                

                                       
                                
                                    
                               
                        
                    <div class="row">

                        
                        
                                   
                                  
                 

                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                       
                      


                       
                        
                        <!-- /grid item -->

                       
                        
                        <!-- /grid item -->

                    </div>
                    <!-- /grid -->

                </div>
                <!-- /site content -->

                <!-- Footer -->

                
<!-- /footer -->
            </div>
            <!-- /site content wrapper -->

            <!-- Theme Chooser -->
<div class="dt-customizer-toggle">
  <a href="javascript:void(0)" data-toggle="customizer"> <i class="icon icon-customizer animation-customizer"></i> </a>
</div>
<!-- /theme chooser -->

<!-- Customizer Sidebar -->
<aside class="dt-customizer dt-drawer position-right">
  <div class="dt-customizer__inner">

    <!-- Customizer Header -->
    <div class="dt-customizer__header">

      <!-- Customizer Title -->
      <div class="dt-customizer__title">
        <h3 class="mb-0">Theme Settings</h3>
      </div>
      <!-- /customizer title -->

      <!-- Close Button -->
      <button type="button" class="close" data-toggle="customizer">
        <span aria-hidden="true">&times;</span>
      </button>
      <!-- /close button -->

    </div>
    <!-- /customizer header -->

    <!-- Customizer Body -->
    <div class="dt-customizer__body ps-custom-scrollbar">
      <!-- Customizer Body Inner  -->
      <div class="dt-customizer__body-inner">

        <!-- Section -->
        <section>
          <h4>Theme</h4>

          <!-- List -->
          <ul class="dt-list dt-list-sm" id="theme-chooser">
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" data-theme="light">
                  <img src="assets/images/customizer-icons/theme-light.png" alt="Light">
                </a>
                <span class="choose-option__name">Light</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" data-theme="semidark">
                  <img src="assets/images/customizer-icons/theme-normal.png" alt="Normal">
                </a>
                <span class="choose-option__name">Semi-dark</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" data-theme="dark">
                  <img src="assets/images/customizer-icons/theme-dark.png" alt="Dark">
                </a>
                <span class="choose-option__name">Dark</span>
              </div>
            </li>
          </ul>
          <!-- /list -->

        </section>
        <!-- /section -->

        <!-- Section -->
        <section>
          <h4>Style</h4>

          <!-- List -->
          <ul class="dt-list dt-list-sm">
            <li class="dt-list__item d-none d-lg-block">
              <div class="choose-option">
                <a href="javascript:void(0)" id="toggle-fixed-sidebar" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/fix-sidebar.png" alt="Fix Sidebar">
                </a>
                <span class="choose-option__name">Fix Sidebar</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" id="toggle-fixed-header" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/fix-header.png" alt="Fix Header">
                </a>
                <span class="choose-option__name">Fix Header</span>
              </div>
            </li>
          </ul>
          <!-- /list -->

        </section>
        <!-- /section -->

        <!-- Section -->
        <section id="theme-style-chooser">
          <h4>Color</h4>

          <!-- List -->
          <ul class="dt-list dt-list-sm dt-color-options">
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-1"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-2"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-3"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-4"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-5"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-6"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-7"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-8"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-9"></span>
            </li>
            <li class="dt-list__item">
              <span class="dt-color-option" data-style="style-10"></span>
            </li>
          </ul>
          <!-- /list -->

        </section>
        <!-- /section -->

        <!-- Section -->
        <section class="d-none d-lg-block" id="sidebar-layout">
          <h4>Sidebar Layout</h4>

          <!-- List -->
          <ul class="dt-list dt-list-sm">
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" id="sl-option1" data-value="folded">
                  <img src="assets/images/customizer-icons/folded.png" alt="Folded">
                </a>
                <span class="choose-option__name">Folded</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" id="sl-option2" data-value="default">
                  <img src="assets/images/customizer-icons/default.png" alt="Default">
                </a>
                <span class="choose-option__name">Default</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" id="sl-option3" data-value="drawer">
                  <img src="assets/images/customizer-icons/drawer.png" alt="Drawer">
                </a>
                <span class="choose-option__name">Drawer</span>
              </div>
            </li>
          </ul>
          <!-- /list -->

        </section>
        <!-- /section -->

        <!-- Section -->
        <section class="d-none d-lg-block" id="layout-chooser">
          <h4>Layout</h4>

          <!-- List -->
          <ul class="dt-list dt-list-sm">
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" data-layout="framed">
                  <img src="assets/images/customizer-icons/framed.png" alt="Framed">
                </a>
                <span class="choose-option__name">Framed</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" data-layout="full-width">
                  <img src="assets/images/customizer-icons/full-width.png" alt="Full Width">
                </a>
                <span class="choose-option__name">Full Width</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="javascript:void(0)" class="choose-option__icon" data-layout="boxed">
                  <img src="assets/images/customizer-icons/boxed.png" alt="Boxed">
                </a>
                <span class="choose-option__name">Boxed</span>
              </div>
            </li>
          </ul>
          <!-- /list -->

        </section>
        <!-- /section -->

        <!-- Section -->
        <section>
          <h4>Nav Style</h4>

          <!-- List -->
          <ul class="dt-list">
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/default" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-default.png" alt="Layout Default">
                </a>
                <span class="choose-option__name">Default</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/saas" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-saas.png" alt="Layout SAAS">
                </a>
                <span class="choose-option__name">SAAS Layout</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/listing" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-listing.png" alt="Layout listing">
                </a>
                <span class="choose-option__name">Listing</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/intranet" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-intranet.png" alt="Layout Intranet">
                </a>
                <span class="choose-option__name">Intranet</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/back-office" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-back-office.png" alt="Layout Back Office">
                </a>
                <span class="choose-option__name">Back Office</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/back-office-mini" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-back-office-mini.png"
                       alt="Layout Back Office Minimal">
                </a>
                <span class="choose-option__name">Back Office Minimal</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/modern" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-modern.png" alt="Layout Modern">
                </a>
                <span class="choose-option__name">Modern</span>
              </div>
            </li>
            <li class="dt-list__item">
              <div class="choose-option">
                <a href="http://drift.g-axon.work/html-bs4/crm" target="_blank" class="choose-option__icon">
                  <img src="assets/images/customizer-icons/layout-crm.png" alt="Layout CRM">
                </a>
                <span class="choose-option__name">CRM</span>
              </div>
            </li>
          </ul>
          <!-- /list -->

        </section>
        <!-- /section -->

      </div>
      <!-- /customizer body inner -->
    </div>
    <!-- /customizer body -->

  </div>
</aside>
<!-- /customizer sidebar -->
        </main>
    </div>
</div>
<!-- /root -->

<!-- Optional JavaScript -->
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/moment/moment.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Perfect Scrollbar jQuery -->
<script src="../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<!-- /perfect scrollbar jQuery -->

<!-- masonry script -->
<script src="../node_modules/masonry-layout/dist/masonry.pkgd.min.js"></script>
<script src="../node_modules/sweetalert2/dist/sweetalert2.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/customizer.js"></script><!-- Custom JavaScript -->
<script src="assets/js/script.js"></script>

</body>



</html>