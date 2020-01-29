<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tables | Gull Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="../public/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="../public/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Latest compiled Icon Awesome-->
    <script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

    <style>
        
        tr td{
            padding: 05 !important;
            margin: 05 !important;
            }
    </style>
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <div class="main-header">
            <div class="logo">
                <img src="../public/images/logo.png" alt="">
            </div>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="d-flex align-items-center">
                <!-- Mega menu -->
                <div class="dropdown mega-menu d-none d-md-block">
                    <a href="#" class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu</a>
                    <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
                        <div class="row m-0">
                            <div class="col-md-4 p-4 bg-img">
                                <h2 class="title">Mega Menu <br> Sidebar</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores natus laboriosam fugit, consequatur.
                                </p>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem odio amet eos dolore suscipit placeat.</p>
                                <button class="btn btn-lg btn-rounded btn-outline-warning">Learn More</button>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Features</p>
                                <div class="menu-icon-grid w-auto p-0">
                                    <a href="#"><i class="i-Shop-4"></i> Home</a>
                                    <a href="#"><i class="i-Library"></i> UI Kits</a>
                                    <a href="#"><i class="i-Drop"></i> Apps</a>
                                    <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                                    <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                                    <a href="#"><i class="i-Ambulance"></i> Support</a>
                                </div>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Components</p>
                                <ul class="links">
                                    <li><a href="accordion.html">Accordion</a></li>
                                    <li><a href="alerts.html">Alerts</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="badges.html">Badges</a></li>
                                    <li><a href="carousel.html">Carousels</a></li>
                                    <li><a href="lists.html">Lists</a></li>
                                    <li><a href="popover.html">Popover</a></li>
                                    <li><a href="tables.html">Tables</a></li>
                                    <li><a href="datatables.html">Datatables</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="nouislider.html">Sliders</a></li>
                                    <li><a href="tabs.html">Tabs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Mega menu -->
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div>
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle -->
                <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
                <!-- Grid menu Dropdown -->
                <div class="dropdown">
                    <i class="i-Safe-Box text-muted header-icon" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="menu-icon-grid">
                            <a href="#"><i class="i-Shop-4"></i> Home</a>
                            <a href="#"><i class="i-Library"></i> UI Kits</a>
                            <a href="#"><i class="i-Drop"></i> Apps</a>
                            <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                            <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                            <a href="#"><i class="i-Ambulance"></i> Support</a>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton -->
                <div class="dropdown">
                    <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-primary">3</span>
                        <i class="i-Bell text-muted header-icon"></i>
                    </div>
                    <!-- Notification dropdown -->
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Speach-Bubble-6 text-primary mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>New message</span>
                                    <span class="badge badge-pill badge-primary ml-1 mr-1">new</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">10 sec ago</span>
                                </p>
                                <p class="text-small text-muted m-0">James: Hey! are you busy?</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Receipt-3 text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>New order received</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">new</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">2 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">1 Headphone, 3 iPhone x</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Empty-Box text-danger mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Product out of stock</span>
                                    <span class="badge badge-pill badge-danger ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">10 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Headphone E67, R98, XL90, Q77</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Data-Power text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Server Up!</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">14 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Server rebooted successfully</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton End -->
                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div class="user col align-self-end">
                        <img src="../public/images/faces/1.jpg" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <div class="dropdown-header">
                                <i class="i-Lock-User mr-1"></i> Timothy Carlson
                            </div>
                            <a class="dropdown-item">Account settings</a>
                            <a class="dropdown-item">Billing history</a>
                            <a class="dropdown-item" href="signin.html">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <ul class="navigation-left">
                    <li class="nav-item" data-item="dashboard"><a class="nav-item-hold" href="#"><i class="nav-icon i-Bar-Chart"></i><span class="nav-text">Dashboard</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="uikits"><a class="nav-item-hold" href="#"><i class="nav-icon i-Library"></i><span class="nav-text">UI kits</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="extrakits"><a class="nav-item-hold" href="#"><i class="nav-icon i-Suitcase"></i><span class="nav-text">Extra kits</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="apps"><a class="nav-item-hold" href="#"><i class="nav-icon i-Computer-Secure"></i><span class="nav-text">Apps</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="widgets"><a class="nav-item-hold" href="#"><i class="nav-icon i-Computer-Secure"></i><span class="nav-text">Widgets</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="charts"><a class="nav-item-hold" href="#"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">Charts</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="forms"><a class="nav-item-hold" href="#"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">Forms</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item"><a class="nav-item-hold" href="datatables.html"><i class="nav-icon i-File-Horizontal-Text"></i><span class="nav-text">Datatables</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="sessions"><a class="nav-item-hold" href="#"><i class="nav-icon i-Administrator"></i><span class="nav-text">Sessions</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item active" data-item="others"><a class="nav-item-hold" href="#"><i class="nav-icon i-Double-Tap"></i><span class="nav-text">Others</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item"><a class="nav-item-hold" href="http://demos.ui-lib.com/gull-html-doc/" target="_blank"><i class="nav-icon i-Safe-Box1"></i><span class="nav-text">Doc</span></a>
                        <div class="triangle"></div>
                    </li>
                </ul>
            </div>
            <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <!-- Submenu Dashboards-->
                <ul class="childNav" data-parent="dashboard">
                    <li class="nav-item"><a href="dashboard1.html"><i class="nav-icon i-Clock-3"></i><span class="item-name">Version 1</span></a></li>
                    <li class="nav-item"><a href="dashboard2.html"><i class="nav-icon i-Clock-4"></i><span class="item-name">Version 2</span></a></li>
                    <li class="nav-item"><a href="dashboard3.html"><i class="nav-icon i-Over-Time"></i><span class="item-name">Version 3</span></a></li>
                    <li class="nav-item"><a href="dashboard4.html"><i class="nav-icon i-Clock"></i><span class="item-name">Version 4</span></a></li>
                </ul>
                <ul class="childNav" data-parent="forms">
                    <li class="nav-item"><a href="form.basic.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Basic Elements</span></a></li>
                    <li class="nav-item"><a href="form.layouts.html"><i class="nav-icon i-Split-Vertical"></i><span class="item-name">Form Layouts</span></a></li>
                    <li class="nav-item"><a href="form.input.group.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Input Groups</span></a></li>
                    <li class="nav-item"><a href="form.validation.html"><i class="nav-icon i-Close-Window"></i><span class="item-name">Form Validation</span></a></li>
                    <li class="nav-item"><a href="smart.wizard.html"><i class="nav-icon i-Width-Window"></i><span class="item-name">Smart Wizard</span></a></li>
                    <li class="nav-item"><a href="tag.input.html"><i class="nav-icon i-Tag-2"></i><span class="item-name">Tag Input</span></a></li>
                    <li class="nav-item"><a href="editor.html"><i class="nav-icon i-Pen-2"></i><span class="item-name">Rich Editor</span></a></li>
                </ul>
                <ul class="childNav" data-parent="apps">
                    <li class="nav-item"><a href="invoice.html"><i class="nav-icon i-Add-File"></i><span class="item-name">Invoice</span></a></li>
                    <li class="nav-item"><a href="inbox.html"><i class="nav-icon i-Email"></i><span class="item-name">Inbox</span></a></li>
                    <li class="nav-item"><a href="chat.html"><i class="nav-icon i-Speach-Bubble-3"></i><span class="item-name">Chat</span></a></li>
                </ul>
                <ul class="childNav" data-parent="widgets">
                    <li class="nav-item"><a href="widget-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget card</span></a></li>
                    <li class="nav-item"><a href="widget-statistics.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget statistics</span></a></li>
                    <li class="nav-item"><a href="widget-list.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget List <span class="ml-2 badge badge-pill badge-danger">New</span></span></a></li>
                    <li class="nav-item"><a href="widget-app.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget App <span class="ml-2 badge badge-pill badge-danger"> New</span></span></a></li>
                    <li class="nav-item"><a href="weather-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Weather App <span class="ml-2 badge badge-pill badge-danger"> New</span></span></a></li>
                </ul>
                <!-- chartjs-->
                <ul class="childNav" data-parent="charts">
                    <li class="nav-item"><a href="charts.echarts.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">echarts</span></a></li>
                    <li class="nav-item"><a href="charts.chartsjs.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">ChartJs</span></a></li>
                    <li class="nav-item dropdown-sidemenu"><a href=""><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Apex Charts</span><i class="dd-arrow i-Arrow-Down"></i></a>
                        <ul class="submenu">
                            <li><a href="charts.apexAreaCharts.html">Area Charts</a></li>
                            <li><a href="charts.apexBarCharts.html">Bar Charts</a></li>
                            <li><a href="charts.apexBubbleCharts.html">Bubble Charts</a></li>
                            <li><a href="charts.apexColumnCharts.html">Column Charts</a></li>
                            <li><a href="charts.apexCandleStickCharts.html">CandleStick Charts</a></li>
                            <li><a href="charts.apexLineCharts.html">Line Charts</a></li>
                            <li><a href="charts.apexMixCharts.html">Mix Charts</a></li>
                            <li><a href="charts.apexPieDonutCharts.html">PieDonut Charts</a></li>
                            <li><a href="charts.apexRadarCharts.html">Radar Charts</a></li>
                            <li><a href="charts.apexRadialBarCharts.html">RadialBar Charts</a></li>
                            <li><a href="charts.apexScatterCharts.html">Scatter Charts</a></li>
                            <li><a href="charts.apexSparklineCharts.html">Sparkline Charts</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="childNav" data-parent="extrakits">
                    <li class="nav-item"><a href="image.cropper.html"><i class="nav-icon i-Crop-2"></i><span class="item-name">Image Cropper</span></a></li>
                    <li class="nav-item"><a href="loaders.html"><i class="nav-icon i-Loading-3"></i><span class="item-name">Loaders</span></a></li>
                    <li class="nav-item"><a href="ladda.button.html"><i class="nav-icon i-Loading-2"></i><span class="item-name">Ladda Buttons</span></a></li>
                    <li class="nav-item"><a href="toastr.html"><i class="nav-icon i-Bell"></i><span class="item-name">Toastr</span></a></li>
                    <li class="nav-item"><a href="sweet.alerts.html"><i class="nav-icon i-Approved-Window"></i><span class="item-name">Sweet Alerts</span></a></li>
                    <li class="nav-item"><a href="tour.html"><i class="nav-icon i-Plane"></i><span class="item-name">User Tour</span></a></li>
                    <li class="nav-item"><a href="upload.html"><i class="nav-icon i-Data-Upload"></i><span class="item-name">Upload</span></a></li>
                </ul>
                <ul class="childNav" data-parent="uikits">
                    <li class="nav-item"><a href="alerts.html"><i class="nav-icon i-Bell1"></i><span class="item-name">Alerts</span></a></li>
                    <li class="nav-item"><a href="accordion.html"><i class="nav-icon i-Split-Horizontal-2-Window"></i><span class="item-name">Accordion</span></a></li>
                    <li class="nav-item"><a href="badges.html"><i class="nav-icon i-Medal-2"></i><span class="item-name">Badges</span></a></li>
                    <li class="nav-item"><a href="buttons.html"><i class="nav-icon i-Cursor-Click"></i><span class="item-name">Buttons</span></a></li>
                    <li class="nav-item"><a href="cards.html"><i class="nav-icon i-Line-Chart-2"></i><span class="item-name">Cards</span></a></li>
                    <li class="nav-item"><a href="card.metrics.html"><i class="nav-icon i-ID-Card"></i><span class="item-name">Card Metrics</span></a></li>
                    <li class="nav-item"><a href="carousel.html"><i class="nav-icon i-Video-Photographer"></i><span class="item-name">Carousels</span></a></li>
                    <li class="nav-item"><a href="lists.html"><i class="nav-icon i-Belt-3"></i><span class="item-name">Lists</span></a></li>
                    <li class="nav-item"><a href="pagination.html"><i class="nav-icon i-Arrow-Next"></i><span class="item-name">Paginations</span></a></li>
                    <li class="nav-item"><a href="popover.html"><i class="nav-icon i-Speach-Bubble-2"></i><span class="item-name">Popover</span></a></li>
                    <li class="nav-item"><a href="progressbar.html"><i class="nav-icon i-Loading"></i><span class="item-name">Progressbar</span></a></li>
                    <li class="nav-item"><a href="tables.html"><i class="nav-icon i-File-Horizontal-Text"></i><span class="item-name">Tables</span></a></li>
                    <li class="nav-item"><a href="tabs.html"><i class="nav-icon i-New-Tab"></i><span class="item-name">Tabs</span></a></li>
                    <li class="nav-item"><a href="tooltip.html"><i class="nav-icon i-Speach-Bubble-8"></i><span class="item-name">Tooltip</span></a></li>
                    <li class="nav-item"><a href="modals.html"><i class="nav-icon i-Duplicate-Window"></i><span class="item-name">Modals</span></a></li>
                    <li class="nav-item"><a href="nouislider.html"><i class="nav-icon i-Width-Window"></i><span class="item-name">Sliders</span></a></li>
                </ul>
                <ul class="childNav" data-parent="sessions">
                    <li class="nav-item"><a href="../sessions/signin.html"><i class="nav-icon i-Checked-User"></i><span class="item-name">Sign in</span></a></li>
                    <li class="nav-item"><a href="../sessions/signup.html"><i class="nav-icon i-Add-User"></i><span class="item-name">Sign up</span></a></li>
                    <li class="nav-item"><a href="../sessions/forgot.html"><i class="nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li>
                </ul>
                <ul class="childNav" data-parent="others">
                    <li class="nav-item"><a href="../sessions/not-found.html"><i class="nav-icon i-Error-404-Window"></i><span class="item-name">Not Found</span></a></li>
                    <li class="nav-item"><a href="user.profile.html"><i class="nav-icon i-Male"></i><span class="item-name">User Profile</span></a></li>
                    <li class="nav-item"><a class="open" href="blank.html"><i class="nav-icon i-File-Horizontal"></i><span class="item-name">Blank Page</span></a></li>
                </ul>
            </div>
            <div class="sidebar-overlay"></div>
        </div>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">       
                
                <div class="row mb-4">
                   
                        <div class="card text-center">
                            
                            <div class="card-body">
                                <div class ="row ">
                                    <div class = "col"> <h4 class="card-title mb-3">GESTOR DE USUARIOS  </h4></div>
                                 <div clas ="col">
                                    <div class = "">
                                        <div class ="row " >
                                            <div class = "col" style ="padding-right: 0px" ><a class="btn btn-danger text-white  btn-rounded" href="#" target="_blank"><i class="material-icons">person_add</i></a></div>
                                            <div class = "col"></div>
                                        </div>   
                                     </div>
                                 </div>  
                                

                                </div>
                                
                                <p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code>.table</code> with <code>.table-responsive</code>. Or, pick a maximum breakpoint with
                                    which to have a responsive table up to by using <code>.table-responsive{-sm|-md|-lg|-xl}</code>.
                                </p>
                                
                                <div class="table table-responsive">
                                    <table class="table text-center" >
                                        <thead>
                                            <tr class="table">
                                                <th scope="col " width="10"> </th>
                                                <th scope="col">Tipo Usuario</th>
                                                <th scope="col">Datos</th>
                                                <th scope="col">Creditos</th>
                                                <th scope="col">Foto del perfil</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr >
                                                <th  scope="row" style=" line-height: 90px; background:  #ff8533; padding:2px;" ></th>
                                                <td style=" line-height: 100px;">
                                                    
                                                    <span class="badge badge-pill badge-outline-danger p-2 m-1" >Revendedor</span></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right" ><i class="material-icons">account_circle</i></div>
                                                        <div class="col-sm-8 text-left ">Paulo Cardenas</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons">mail_outline</i></i></div>
                                                        <div class="col-sm-8 text-left ">pcardenas@hotmail.com</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons xs">calendar_today</i></div>
                                                        <div class="col-sm-8 text-left ">20/02/2019</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons">local_atm</i></i></div>
                                                        <div class="col-sm-8 text-left " > <?php  echo number_format(2580).' credits'; ?>  </div>
                                                    </div>
                                                </td>
                                                <td style=" line-height: 100px;"><?php  echo number_format(9069).' credits'; ?> </td>
                                                <td style=" line-height: 100px;"><img class="rounded-circle m-0 avatar-md" src="../public/images/faces/1.jpg" alt="" /></td>
                                                <td style=" line-height: 100px;"><span class="badge badge-success">Activo</span></td>
                                                <td style=" line-height: 100px;">                                                    
                                                    <a href = "#" class="btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="top" title="Modificar usuario"><i class="fas fa-user "></i></a>
                                                    <a href = "#" class="btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="bottom" title="Creditos"><i class="fas fa-comment-dollar"></i></a>
                                                    <a href = "#" class="btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="top" title="Precios"><i class="fas fa-coins"></i></a>
                                                </td>
                                            </tr>
                                            <tr >
                                                <th scope="row" style=" line-height: 100px; background: #ffa64d; padding:2px;"></th>
                                                <td style=" line-height: 100px;"><span class="badge badge-pill badge-outline-info p-2 m-1">Cuenta</span></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right" ><i class="material-icons">account_circle</i></div>
                                                        <div class="col-sm-8 text-left ">Jorge Mongomery</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons">mail_outline</i></i></div>
                                                        <div class="col-sm-8 text-left ">jmongomery@hotmail.com</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons xs">calendar_today</i></div>
                                                        <div class="col-sm-8 text-left ">20/02/2019</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons">local_atm</i></i></div>
                                                        <div class="col-sm-8 text-left " > <?php  echo number_format(2580).' credits'; ?>  </div>
                                                    </div>
                                                </td>
                                                <td style=" line-height: 100px;"><?php  echo number_format(9069).' credits'; ?> </td>
                                                <td style=" line-height: 100px;"><img class="rounded-circle m-0 avatar-md" src="../public/images/faces/1.jpg" alt="" /></td>
                                                <td style=" line-height: 100px;"><span class="badge badge-warning">No Activo</span></td>
                                                <td style=" line-height: 100px;">
                                                    <a href = "#" class="btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="top" title="Modificar usuario"><i class="fas fa-user "></i></a>
                                                    <a href = "#" class="btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="bottom" title="Creditos"><i class="fas fa-comment-dollar"></i></a>
                                                    <a href = "#" class="btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="top" title="Precios"><i class="fas fa-coins"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style=" line-height: 100px;  background:  #ffcc66; padding:2px;"></th>
                                                <td style=" line-height: 100px;"><span class="badge badge-pill badge-outline-dark p-2 m-1">Subcuenta</span></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right" ><i class="material-icons">account_circle</i></div>
                                                        <div class="col-sm-8 text-left ">Mario Soto</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons">mail_outline</i></i></div>
                                                        <div class="col-sm-8 text-left ">masoto@hotmail.com</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons xs">calendar_today</i></div>
                                                        <div class="col-sm-8 text-left ">20/02/2019</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons">local_atm</i></i></div>
                                                        <div class="col-sm-8 text-left " > <?php  echo number_format(2580).' credits'; ?>  </div>
                                                    </div>
                                                </td>
                                                <td style=" line-height: 100px;"><?php  echo number_format(9069).' credits'; ?> </td>
                                                <td style=" line-height: 100px;"><img class="rounded-circle m-0 avatar-md" src="../public/images/faces/1.jpg" alt="" /></td>
                                                <td style=" line-height: 100px;"><span class="badge badge-info">Pendiente</span></td>
                                                <td style=" line-height: 100px;">
                                                    <a href = "#" class="btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="top" title="Modificar usuario"><i class="fas fa-user "></i></a>
                                                    <a href = "#" class="btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="bottom" title="Creditos"><i class="fas fa-comment-dollar"></i></a>
                                                    <a href = "#" class="btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="top" title="Precios"><i class="fas fa-coins"></i></a>
                                                </td>
                                            </tr>
                                            <tr style="  background:  #e6e6ff"  >
                                                <th scope="row" style=" line-height: 100px; background:  #ff8533; padding:2px;"></th>
                                                <td style=" line-height: 100px;"><span class="badge badge-pill badge-outline-danger p-2 m-1">Revendedor</span></td>
                                                <td >
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right" ><i class="material-icons">account_circle</i></div>
                                                        <div class="col-sm-8 text-left ">Elmer Perez</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons">mail_outline</i></i></div>
                                                        <div class="col-sm-8 text-left ">eperez@hotmail.com</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons xs">calendar_today</i></div>
                                                        <div class="col-sm-8 text-left ">20/02/2019</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons">local_atm</i></div>
                                                        <div class="col-sm-8 text-left " > <?php  echo number_format(2580).' credits'; ?>  </div>
                                                    </div>
                                                </td>
                                                <td style=" line-height: 100px;"><?php  echo number_format(9069).' credits'; ?> </td>
                                                <td style=" line-height: 100px;"><img class="rounded-circle m-0 avatar-md" src="../public/images/faces/1.jpg" alt="" /></td>
                                                <td style=" line-height: 100px;"><span class="badge badge-success">Activo</span></td>
                                                <td style=" line-height: 100px;">
                                                    <a href = "#" class="btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="top" title="Modificar usuario"><i class="fas fa-user "></i></a>
                                                    <a href = "#" class="btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="bottom" title="Creditos"><i class="fas fa-comment-dollar"></i></a>
                                                    <a href = "#" class="btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="top" title="Precios"><i class="fas fa-coins"></i></a>
                                                </td>
                                            </tr>
                                            <tr >
                                                <th scope="row" style=" line-height: 100px; background:  #ffa64d; padding:2px;"></th>
                                                <td style=" line-height: 100px;"><span class="badge badge-pill badge-outline-info p-2 m-1">Cuenta</span></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right" ><i class="material-icons">account_circle</i></div>
                                                        <div class="col-sm-8 text-left ">Pablo Contreras</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons">mail_outline</i></i></div>
                                                        <div class="col-sm-8 text-left ">pcontreras@hotmail.com</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons xs">calendar_today</i></div>
                                                        <div class="col-sm-8 text-left ">20/02/2019</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 text-right"><i class="material-icons">local_atm</i></i></div>
                                                        <div class="col-sm-8 text-left " > <?php  echo number_format(2580).' credits'; ?>  </div>
                                                    </div>
                                                </td>
                                                <td style=" line-height: 100px;"><?php  echo number_format(9069).' credits'; ?> </td>
                                                <td style=" line-height: 100px;"><img class="rounded-circle m-0 avatar-md" src="../public/images/faces/1.jpg" alt="" /></td>
                                               
                                                <td style=" line-height: 100px;"><span class="badge badge-success">Activo</span></td>
                                                <td style=" line-height: 100px;">
                                                    <a href = "#" class="btn btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="top" title="Modificar usuario"><i class="fas fa-user "></i></a>
                                                    <a href = "#" class="btn btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="bottom" title="Creditos"><i class="fas fa-comment-dollar"></i></a>
                                                    <a href = "#" class="btn btn text-dark m-1" type="button" data-toggle="tooltip" data-placement="top" title="Precios"><i class="fas fa-coins"></i></a>
                                                </td>
                                        </tr>
                                        </tbody>
                                    </table>
 
                            </div>

                        </div>
                    </div>
                    <!-- end of col-->
                    
                </div>
                <!-- end of row-->
                <!-- end of main-content -->
            </div><!-- Footer Start -->
            <div class="flex-grow-1"></div>
            <div class="app-footer">
                <div class="row">
                    <div class="col-md-9">
                        <p><strong>Gull - Laravel + Bootstrap 4 admin template</strong></p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero quis beatae officia saepe perferendis voluptatum minima eveniet voluptates dolorum, temporibus nisi maxime nesciunt totam repudiandae commodi sequi dolor quibusdam
                            <sunt></sunt>
                        </p>
                    </div>
                </div>
                <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                    <a class="btn btn-primary text-white btn-rounded" href="https://themeforest.net/item/gull-bootstrap-laravel-admin-dashboard-template/23101970" target="_blank">Buy Gull HTML</a>
                    <span class="flex-grow-1"></span>
                    <div class="d-flex align-items-center">
                        <img class="logo" src="../public/images/logo.png" alt="">
                        <div>
                            <p class="m-0">&copy; 2018 Gull HTML</p>
                            <p class="m-0">All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fotter end -->
        </div>
    </div><!-- ============ Search UI Start ============= -->
    <div class="search-ui">
        <div class="search-header">
            <img src="../public/images/logo.png" alt="" class="logo">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>
        <input type="text" placeholder="Type here" class="search-input" autofocus>
        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>
        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../public/images/products/headphone-1.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../public/images/products/headphone-2.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../public/images/products/headphone-3.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../public/images/products/headphone-4.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->
    <script src="../public/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="../public/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="../public/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../public/js/scripts/script.min.js"></script>
    <script src="../public/js/scripts/sidebar.large.script.min.js"></script>
    <script src="../public/js/scripts/tooltip.script.min.js"></script>
    <script>
        $("[data-toggle=popover]").popover();
    </script>
</body>

</html>