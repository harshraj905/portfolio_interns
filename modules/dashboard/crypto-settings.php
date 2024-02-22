<?php 
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        

        <meta charset="utf-8" />
                <title>Admin's Dashboard</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="assets/images/favicon.ico">

       

         <!-- App css -->
         <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body id="body" class="dark-sidebar">
        <!-- leftbar-tab-menu -->
        <div class="left-sidebar">
            <!-- LOGO -->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>
                        <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <div class="sidebar-user-pro media border-end">                    
                <div class="position-relative mx-auto">
                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-md">
                    <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
                </div>
                <div class="media-body ms-2 user-detail align-self-center">
                    <h5 class="font-14 m-0 fw-bold">Akriti </h5>  
                    <p class="opacity-50 mb-0">akritiom2003@gmail.com</p>          
                </div>                    
            </div>
            <div class="border-end">
                <ul class="nav nav-tabs menu-tab nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#Main" role="tab" aria-selected="true">M<span>ain</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#Extra" role="tab" aria-selected="false">E<span>xtra</span></a>
                    </li>
                </ul>
            </div>
            <!-- Tab panes -->
    
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <div class="menu-body navbar-vertical">
                    <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                        <!-- Navigation -->
                        <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">M<span>ain</span><br><span class="font-10 text-secondary fw-normal">Unique Dashboard</span></li>                    
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAnalytics">
                                    <i class="ti ti-stack menu-icon"></i>
                                    <span>Analytics</span>
                                </a>
                                <div class="collapse " id="sidebarAnalytics">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard.php">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="analytics-customers.html" class="nav-link ">Customers</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="analytics-reports.html" class="nav-link ">Reports</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarAnalytics-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarCrypto" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCrypto">
                                    <i class="ti ti-currency-bitcoin menu-icon"></i>
                                    <span>Crypto</span>
                                </a>
                                <div class="collapse " id="sidebarCrypto">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="crypto-index.html">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="crypto-exchange.html">Exchange</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="crypto-wallet.html">Wallet</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="crypto-news.html">Crypto News</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="crypto-ico.html">ICO List</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="crypto-settings.php">Settings</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarCrypto-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarProjects">
                                    <i class="ti ti-brand-asana menu-icon"></i>
                                    <span>Projects</span>
                                </a>
                                <div class="collapse " id="sidebarProjects">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-index.html">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-clients.html">Clients</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-team.html">Team</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-project.html">Project</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-task.html">Task</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-kanban-board.html">Kanban Board</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-chat.html">Chat</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-users.html">Users</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-create.html">Project Create</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarProjects-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarEcommerce" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEcommerce">
                                    <i class="ti ti-shopping-cart menu-icon"></i>
                                    <span>Ecommerce</span>
                                </a>
                                <div class="collapse " id="sidebarEcommerce">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-index.html">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-products.html">Products</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-product-list.html">Product List</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-product-detail.html">Product Detail</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-cart.html">Cart</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-checkout.html">Checkout</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarEcommerce-->
                            </li><!--end nav-item-->

                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">A<span>pps</span><br><span class="font-10 text-secondary fw-normal">Morder Applications</span></li>

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarEmail" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEmail">
                                    <i class="ti ti-mail menu-icon"></i>
                                    <span>Email</span>
                                </a>
                                <div class="collapse " id="sidebarEmail">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-email-inbox.html">Inbox</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-email-read.html">Read Email</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarEmail-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="apps-chat.html"><i class="ti ti-brand-hipchat menu-icon"></i><span>Chat</span></a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="apps-contact-list.html"><i class="ti ti-headphones menu-icon"></i><span>Contact List</span></a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="apps-calendar.html"><i class="ti ti-calendar menu-icon"></i><span>Calendar</span></a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="apps-invoice.html"><i class="ti ti-file-invoice menu-icon"></i><span>Invoice</span></a>
                            </li><!--end nav-item-->
                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">C<span>omponents</span><br><span class="font-10 text-secondary fw-normal">Bootstrap & Custom</span></li> 
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarElements">
                                    <i class="ti ti-planet menu-icon"></i>
                                <span>UI Elements</span>
                                </a>
                                <div class="collapse " id="sidebarElements">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-alerts.html">Alerts</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-avatar.html">Avatar</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-buttons.html">Buttons</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-badges.html">Badges</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-cards.html">Cards</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-carousels.html">Carousels</a>
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-dropdowns.html">Dropdowns</a>
                                        </li><!--end nav-item-->                                   
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-grids.html">Grids</a>
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-images.html">Images</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-list.html">List</a>
                                        </li><!--end nav-item-->                                   
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-modals.html">Modals</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-navs.html">Navs</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-navbar.html">Navbar</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-paginations.html">Paginations</a>
                                        </li><!--end nav-item-->   
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-popover-tooltips.html">Popover & Tooltips</a>
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-progress.html">Progress</a>
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-spinners.html">Spinners</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                        </li><!--end nav-item-->                               
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-typography.html">Typography</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-videos.html">Videos</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarElements-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAdvancedUI" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAdvancedUI">
                                    <i class="ti ti-chart-bubble menu-icon"></i>
                                    <span>Advanced UI</span>
                                </a>
                                <div class="collapse " id="sidebarAdvancedUI">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-animation.html">Animation</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-clipboard.html">Clip Board</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-dragula.html">Dragula</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-files.html">File Manager</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-highlight.html">Highlight</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-rangeslider.html">Range Slider</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-ratings.html">Ratings</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-ribbons.html">Ribbons</a>
                                        </li><!--end nav-item-->                                  
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-sweetalerts.html">Sweet Alerts</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-toasts.html">Toasts</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarAdvancedUI-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarForms">
                                    <i class="ti ti-forms menu-icon"></i>
                                    <span>Forms</span>
                                </a>
                                <div class="collapse " id="sidebarForms">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-elements.html">Basic Elements</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-advanced.html">Advance Elements</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-validation.html">Validation</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-wizard.html">Wizard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-editors.html">Editors</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-uploads.html">File Upload</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-img-crop.html">Image Crop</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarForms-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCharts">
                                    <i class="ti ti-chart-donut menu-icon"></i>
                                <span>Charts</span>
                                </a>
                                <div class="collapse " id="sidebarCharts">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="charts-apex.html">Apex</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="charts-justgage.html">JustGage</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="charts-chartjs.html">Chartjs</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="charts-toast-ui.html">Toast</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarCharts-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarTables">
                                    <i class="ti ti-table menu-icon"></i>
                                    <span>Tables</span>
                                </a>
                                <div class="collapse " id="sidebarTables">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="tables-basic.html">Basic</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="tables-datatable.html">Datatables</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="tables-editable.html">Editable</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarTables-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarIcons">
                                    <i class="ti ti-parachute menu-icon"></i>
                                <span>Icons</span>
                                </a>
                                <div class="collapse " id="sidebarIcons">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="icons-materialdesign.html">Material Design</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="icons-fontawesome.html">Font awesome</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="icons-tabler.html">Tabler</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="icons-feather.html">Feather</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarIcons-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarMaps">
                                    <i class="ti ti-map menu-icon"></i>
                                    <span>Maps</span>
                                </a>
                                <div class="collapse " id="sidebarMaps">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="maps-google.html">Google Maps</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="maps-leaflet.html">Leaflet Maps</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="maps-vector.html">Vector Maps</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end sidebarMaps-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarEmailTemplates" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEmailTemplates">
                                    <i class="ti ti-target menu-icon"></i>
                                    <span>Email Templates</span>
                                </a>
                                <div class="collapse " id="sidebarEmailTemplates">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-templates-basic.html">Basic Action Email</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-templates-alert.html">Alert Email</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-templates-billing.html">Billing Email</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarEmailTemplates-->
                            </li><!--end nav-item-->
                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">C<span>rafted</span><br><span class="font-10 text-secondary fw-normal">Unique Extra Pages</span></li>  
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarPages">
                                    <i class="ti ti-file-diff menu-icon"></i>
                                    <span>Pages</span>
                                </a>
                                <div class="collapse " id="sidebarPages">
                                    <ul class="nav flex-column">
                                       <li class="nav-item">
                                            <a class="nav-link" href="pages-profile.html">Profile</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-tour.html">Tour</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-timeline.html">Timeline</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-treeview.html">Treeview</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-starter.html">Starter Page</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-pricing.html">Pricing</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-blogs.html">Blogs</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-faq.html">FAQs</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-gallery.html">Gallery</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarPages-->
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAuthentication">
                                    <i class="ti ti-shield-lock menu-icon"></i>
                                    <span>Authentication</span>
                                </a>
                                <div class="collapse " id="sidebarAuthentication">
                                    <ul class="nav flex-column">
                                       <li class="nav-item">
                                            <a class="nav-link" href="auth-login.html">Log in</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-register.html">Register</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-recover-pw.html">Re-Password</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-lock-screen.html">Lock Screen</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-404.html">Error 404</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-500.html">Error 500</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarAuthentication-->
                            </li><!--end nav-item-->
                        </ul>
                        <ul class="navbar-nav tab-pane" id="Extra" role="tabpanel">
                            <li>
                                <div class="update-msg text-center position-relative">
                                    <button type="button" class="btn-close position-absolute end-0 me-2" aria-label="Close"></button>
                                    <img src="assets/images/speaker-light.png" alt="" class="" height="110">
                                    <h5 class="mt-0">Akriti</h5>
                                    <p class="mb-3">I Design and Develop Clean and High Quality Web Applications</p>
                                    <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
                                </div>
                            </li>
                        </ul><!--end navbar-nav--->
                    </div><!--end sidebarCollapse-->
                </div>
            </div>    
        </div>
        <!-- end left-sidenav-->
        <!-- end leftbar-tab-menu-->

        <!-- Top Bar Start -->
        <!-- Top Bar Start -->
        <div class="topbar">            
            <!-- Navbar -->
            <nav class="navbar-custom" id="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-end mb-0">
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/flags/us_flag.jpg" alt="" class="thumb-xxs rounded">
                    </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/us_flag.jpg" alt="" height="15" class="me-2">English</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="15" class="me-2">Spanish</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="15" class="me-2">German</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="15" class="me-2">French</a>
                        </div>
                    </li><!--end topbar-language-->
            
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="ti ti-mail"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
                
                            <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                Emails <span class="badge bg-soft-primary badge-pill">3</span>
                            </h6> 
                            <div class="notification-menu" data-simplebar>
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">2 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="assets/images/users/user-1.jpg" alt="" class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">10 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">40 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="assets/images/users/user-2.jpg" alt="" class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">1 hr ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">2 hrs ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="ti ti-bell"></i>
                            <span class="alert-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
                
                            <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                Notifications <span class="badge bg-soft-primary badge-pill">2</span>
                            </h6> 
                            <div class="notification-menu" data-simplebar>
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">2 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i class="ti ti-chart-arcs"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">10 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i class="ti ti-device-computer-camera"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">40 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">                                                    
                                            <i class="ti ti-diamond"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">1 hr ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i class="ti ti-drone"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">2 hrs ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i class="ti ti-users"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                                <div>
                                    <small class="d-none d-md-block font-11">Admin</small>
                                    <span class="d-none d-md-block fw-semibold font-12">Akriti <i
                                            class="mdi mdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="pages-profile.html"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                        <a class="dropdown-item" href="crypto-settings.php"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i> Settings</a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item" href="logout.php"><i class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
                    </div>
                    </li><!--end topbar-profile-->
                    <li class="notification-list">
                        <a class="nav-link arrow-none nav-icon offcanvas-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                            <i class="ti ti-settings ti-spin"></i>
                        </a>
                    </li>   
                </ul><!--end topbar-nav-->

                <ul class="list-unstyled topbar-nav mb-0">                        
                    <li>
                        <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                            <i class="ti ti-menu-2"></i>
                        </button>
                    </li> 
                    <li class="hide-phone app-search">
                        <form role="search" action="#" method="get">
                            <input type="search" name="search" class="form-control top-search mb-0" placeholder="Type text...">
                            <button type="submit"><i class="ti ti-search"></i></button>
                        </form>
                    </li>                       
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
        <!-- Top Bar End -->

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content-tab">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Unikit</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item"><a href="#">Crypto</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item active">Settings</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Settings</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="align-self-center">
                                    <button type="button" class="btn btn-de-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalSend"><i data-feather="navigation" class="align-self-center icon-xs me-2"></i>Send</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalSend" tabindex="-1" aria-labelledby="exampleModalSendLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title m-0" id="exampleModalDefaultSend">Send Coin</h6>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-2">
                                                        <label for="cryptocurrency">Crypto Currency</label>              
                                                        <select class="form-select" aria-label="Default select example">
                                                           <option selected>-- Currency --</option>
                                                            <option value="BTC">BTC</option>
                                                            <option value="ETH">ETH</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="cryptocurrency">Currency From</label>              
                                                        <select class="form-select" aria-label="Default select example">
                                                           <option selected>-- My wallet --</option>
                                                            <option value="BTC">BTC</option>
                                                            <option value="ETH">ETH</option>
                                                        </select>
                                                    </div>
                                                    <div class=" mb-2">
                                                        <label for="toaddress">To</label> 
                                                        <div class="input-group">                                                            
                                                            <span class="input-group-text" id="QUcode"><i class="fas fa-qrcode"></i></span>
                                                            <input type="text" class="form-control" placeholder="Can you scan" aria-label="Scancode">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <label for="toaddress">USD</label> 
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="US-dollor"><i class="fas fa-dollar-sign"></i></span>
                                                                    <input type="text" class="form-control" placeholder="USD" aria-label="US-dollor">
                                                                </div>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <label for="BTC">BTC</label> 
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="BTC-coin"><i class="fab fa-btc"></i></span>
                                                                    <input type="text" class="form-control" placeholder="BTC" aria-label="BTC-coin">
                                                                </div>
                                                            </div>                                                            
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                    <div class="mb-2">
                                                        <label for="Description">Description</label>              
                                                        <textarea class="form-control" rows="3" aria-label="With textarea"></textarea>
                                                    </div>
                                                    <div class="mt-2 mb-1">
                                                        <label for="NetworkFree">Network Free</label>
                                                    </div>
                                                    <div class="form-check form-check-inline mb-0">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Regular" value="option1">
                                                        <label class="form-check-label" for="Regular">Regular</label>
                                                    </div>
                                                    <div class="form-check form-check-inline mb-0">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Priority" value="option2">
                                                        <label class="form-check-label" for="Priority">Priority</label>
                                                    </div>
                                                </div><!--end modal-body-->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-de-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-de-primary btn-sm" type="button">Continue</button>
                                                </div><!--end modal-footer-->
                                            </div><!--end modal-content-->
                                        </div><!--end modal-dialog-->
                                    </div><!--end modal-->                                    

                                    <button type="button" class="btn btn-de-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalRequest"><i data-feather="download" class="align-self-center icon-xs me-2"></i>Request</button>
                                    <div class="modal fade" id="exampleModalRequest" tabindex="-1" aria-labelledby="exampleModalRequestLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title m-0" id="exampleModalRequestLabel">Request Coin</h6>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-2">
                                                        <label for="cryptocurrency">Crypto Currency</label>              
                                                        <select class="form-select" aria-label="Default select example">
                                                           <option selected>-- Currency --</option>
                                                            <option value="BTC">BTC</option>
                                                            <option value="ETH">ETH</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="cryptocurrency">Receive To</label>              
                                                        <select class="form-select" aria-label="Default select example">
                                                           <option selected>-- My wallet --</option>
                                                            <option value="BTC">BTC</option>
                                                            <option value="ETH">ETH</option>
                                                        </select>
                                                    </div>
                                                    <div class=" mb-2">
                                                        <label for="toaddress">Address</label> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"  id="W-Address" value="c12b001a15f9bd46ef1c6551386c">
                                                            <button class="btn btn-outline-light" type="button" id="Copy_link"><i class="fas fa-copy"></i></button>
                                                        </div>
                                                    </div>                                                    
                                                </div><!--end modal-body-->
                                                <div class="modal-footer">
                                                    <button class="btn btn-de-success btn-sm" type="button">Done</button>
                                                </div><!--end modal-footer-->
                                            </div><!--end modal-content-->
                                        </div><!--end modal-dialog-->
                                    </div><!--end modal-->
                                </div><!--end /div-->
                                <div class="media">
                                    <img src="assets/images/logos/btc.png" class="me-2 thumb-sm align-self-center rounded-circle" alt="...">
                                    <div class="media-body align-self-center">     
                                        <p class="mb-1 text-muted">Total Balance</p>                                                       
                                        <h5 class="mt-0 text-dark mb-1">122.00125503 BTC</h5>                                                                                                      
                                    </div><!--end media-body-->
                                </div><!--end media-->
                            </div><!--end /div-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="met-profile">
                                        <div class="row">
                                            <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                                <div class="met-profile-main">
                                                    <div class="met-profile-main-pic">
                                                        <img src="assets/images/users/user-4.jpg" alt="" height="110" class="rounded-circle">
                                                        <span class="met-profile_main-pic-change">
                                                            <i class="fas fa-camera"></i>
                                                        </span>
                                                    </div>
                                                    <div class="met-profile_user-detail">
                                                        <h5 class="met-user-name">Akriti</h5>                                                        
                                                        <p class="mb-0 met-user-name-post">UI/UX Designer, India</p>                                                        
                                                    </div>
                                                </div>                                                
                                            </div><!--end col-->
                                            
                                            <div class="col-lg-4 ms-auto align-self-center">
                                                <ul class="list-unstyled personal-detail mb-0">
                                                    <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> phone </b> : +91 8434094917</li>
                                                    <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : akritiom2003@gmail.com</li>
                                                    <li class="mt-2"><i class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b> Website </b> : 
                                                        <a href="https://mannatthemes.com/" class="font-14 text-primary">https://akriti.online/</a> 
                                                    </li>                                                   
                                                </ul>
                                               
                                            </div><!--end col-->
                                            <div class="col-lg-4 align-self-center">
                                                <div class="row">
                                                    <div class="col-auto text-end border-end">
                                                        <button type="button" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm mb-2">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </button>
                                                        <p class="mb-0 font-weight-semibold">Facebook</p>
                                                        <h4 class="m-0 font-weight-bold">25k <span class="text-muted font-12 font-weight-normal">Followers</span></h4>
                                                    </div><!--end col-->
                                                    <div class="col-auto">
                                                        <button type="button" class="btn btn-soft-info btn-icon-circle btn-icon-circle-sm mb-2">
                                                            <i class="fab fa-twitter"></i>
                                                        </button>
                                                        <p class="mb-0 font-weight-semibold">Twitter</p>
                                                        <h4 class="m-0 font-weight-bold">58k <span class="text-muted font-12 font-weight-normal">Followers</span></h4>
                                                    </div><!--end col-->
                                                </div><!--end row-->                                               
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end f_profile-->                                                                                
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
    
                    <div class="row">                        
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST">                                           
                                        <label class="form-label" for="setFullName">Full Name</label>
                                        <input type="text" class="form-control" id="setFullName" name="setFullName" placeholder="Full Name">                                    
                                        <label class="form-label mt-2" for="setEmail">Email address</label>
                                        <input type="email" class="form-control" id="setEmail" name="setEmail" placeholder="Enter email">                                    
                                        <label class="form-label mt-2" for="setPassword">Password</label>
                                        <input type="password" class="form-control" id="setPassword" name="setPassword" placeholder="Password">  

                                        <label class="form-label" for="setDiscription">Description</label>
                                        <input type="text" class="form-control" id="setDiscription" name="setDiscription" placeholder="Discription">                                    
                                        <label class="form-label mt-2" for="setPhone">Phone Number</label>
                                        <input type="text" class="form-control" id="setPhone" name="setPhone" placeholder="Phone Number">                                    
                                        <div class="mb-3" style="margin-top: 10px;">
                                          <label for="formFileSm" class="form-label">Upload CV</label>
                                          <input class="form-control form-control-sm" name="setCV" id="setCV" type="file">
                                        </div>                                      
                                      
                                        <button type="submit" name="register" class="btn btn-primary btn-sm mt-3">Save Change</button>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <form method="POST">                                           
                                        <label class="form-label" for="setFullName">Full Name</label>
                                        <input type="text" class="form-control" id="setFullName" name="setFullName" placeholder="Full Name">                                    
                                        <label class="form-label mt-2" for="setEmail">Email address</label>
                                        <input type="email" class="form-control" id="setEmail" name="setEmail" placeholder="Enter email">                                    
                                        <label class="form-label mt-2" for="setPassword">Password</label>
                                        <input type="password" class="form-control" id="setPassword" name="setPassword" placeholder="Password">  

                                        <label class="form-label" for="setDiscription">Discription</label>
                                        <input type="text" class="form-control" id="setDiscription" name="setDiscription" placeholder="Discription">                                    
                                        <label class="form-label mt-2" for="setPhone">Phone Number</label>
                                        <input type="email" class="form-control" id="setPhone" name="setPhone" placeholder="Phone Number">                                    
                                        <div class="mb-3" style="margin-top: 10px;">
                                          <label for="formFileSm" class="form-label">Upload CV</label>
                                          <input class="form-control form-control-sm" name="setCV" id="setCV" type="file">
                                        </div>                                      
                                      
                                        <button type="submit" name="register" class="btn btn-primary btn-sm mt-3">Save Change</button>
                                    </form> -->
                                     <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->


                        


                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Notification Setting</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">                                   
                                    <form>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="ICOnotify">
                                            <label class="form-check-label" for="ICOnotify">Get notification, New coin ICO in crypto market</label>
                                        </div>
                                        <div class="form-check form-switch mt-2">
                                            <input class="form-check-input" type="checkbox" id="notyfySound">
                                            <label class="form-check-label" for="notyfySound">Notification with sound</label>
                                        </div>
                                        <div class="form-check form-switch mt-2">
                                            <input class="form-check-input" type="checkbox" id="notifyF_friends">
                                            <label class="form-check-label" for="notifyF_friends">Get notification, Only my facebook's friends</label>
                                        </div>
                                        <div class="form-check form-switch mt-2">
                                            <input class="form-check-input" type="checkbox" id="autoLockWallet" checked>
                                            <label class="form-check-label" for="autoLockWallet">Auto lock my wallet</label>
                                        </div>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">                                    
                                    <div class="media">
                                        <div class="d-flex justify-content-center align-items-center align-self-center thumb-md bg-soft-primary rounded-circle not-hover">
                                            <i data-feather="smartphone" class="align-self-center"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2"> 
                                            <h5 class="mt-0 mb-1">SMS Auth</h5>
                                            <p class="text-muted mb-2">Used for withdrawals and security modifications</p>   
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="btnradio1" id="Enable1" autocomplete="off" checked>
                                                <label class="btn btn-outline-secondary btn-sm" for="Enable1">Enable</label>
                                                <input type="radio" class="btn-check" name="btnradio1" id="Enable2" autocomplete="off">
                                                <label class="btn btn-outline-secondary btn-sm" for="Enable2">Disable</label>
                                            </div>                                                                                         
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">                                    
                                    <div class="media">
                                        <div class="d-flex justify-content-center align-items-center align-self-center thumb-md bg-soft-success rounded-circle not-hover">
                                            <i data-feather="chrome" class="align-self-center"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2"> 
                                            <h5 class="mt-0 mb-1">Google Auth</h5>
                                            <p class="text-muted mb-2">Used for withdrawals and security modifications</p>   
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="btnradio1" id="Enable1" autocomplete="off" checked>
                                                <label class="btn btn-outline-secondary btn-sm" for="Enable1">Enable</label>
                                                <input type="radio" class="btn-check" name="btnradio1" id="Enable2" autocomplete="off">
                                                <label class="btn btn-outline-secondary btn-sm" for="Enable2">Disable</label>
                                            </div>                                                                                         
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">                                    
                                    <div class="media">
                                        <div class="d-flex justify-content-center align-items-center align-self-center thumb-md bg-soft-danger rounded-circle not-hover">
                                            <i data-feather="database" class="align-self-center"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2"> 
                                            <h5 class="mt-0 mb-1">API</h5>
                                            <p class="text-muted mb-2">Used for withdrawals and security modifications</p>   
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="btnradio1" id="Enable1" autocomplete="off" checked>
                                                <label class="btn btn-outline-secondary btn-sm" for="Enable1">Enable</label>
                                                <input type="radio" class="btn-check" name="btnradio1" id="Enable2" autocomplete="off">
                                                <label class="btn btn-outline-secondary btn-sm" for="Enable2">Disable</label>
                                            </div>                                                                                         
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">  
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->               
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->
                 
                <!--Start Footer-->
                <!-- Footer Start -->-
                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Akriti <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Akriti</span>
                </footer>
                <!-- end Footer -->                
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->   
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
    <!--end body-->
</html>

<?php 
$fullname = $_POST['setFullName'];
$email = $_POST['setEmail'];
$password = $_POST['setPassword'];
$discription = "setDiscription";
$phone = $_POST['setPhone'];

 
if(isset($_POST['register']))
{
  $checkEntry = mysqli_query($config,"SELECT * FROM user_detail WHERE fullname = '$fullname' OR email='$email'");

  if(mysqli_num_rows($checkEntry)>0)
  {
    echo "<script>alert('User with same Credentials already exists. Please login or recover your password to access the Dashboard.')</script>";
    echo "<script>window.location.href='http://localhost/portfolio_interns/dashboard.php'</script>";
  }

  elseif(mysqli_num_rows($checkEntry) == 0)
  {
    mysqli_query($config,"INSERT INTO user_detail(fullname,email,password,discription,phone) VALUES('$fullname','$email','$password','$discription','$phone')");

    echo "<script>alert('Data Entered')</script>";

    echo "<script>window.location.href='http://localhost/portfolio_interns/dashboard.php'</script>";
  }  
  else
  {
    echo "<script>alert('No Data Entered')</script>";
  }
}