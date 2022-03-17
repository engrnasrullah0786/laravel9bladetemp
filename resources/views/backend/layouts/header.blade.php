<!doctype html>
<html lang="en" class="minimal-theme">


<!-- Mirrored from codervent.com/skodash/demo/collapsed-menu/ltr/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 10:34:41 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('backend/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">
    <?php
    use App\Models\Menu;
    ?>
    <!-- loader-->
    <link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet" />


    <!--Theme Styles-->
    <link href="{{ asset('backend/assets/css/dark-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/light-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/semi-dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/header-colors.css') }}" rel="stylesheet" />
    <script src="{{ URL::asset('assets/custom/js/customMainFunction.js') }}"></script>
    <title>Skodash - Bootstrap 5 Admin Template</title>
</head>

<body>


    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-icon d-xl-none">
                    <i class="bi bi-list"></i>
                </div>
                <div class="top-navbar d-none d-xl-block">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="index-2.html">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="app-emailbox.html">Email</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">Projects</a>
                        </li>
                        <li class="nav-item d-none d-xxl-block">
                            <a class="nav-link" href="javascript:;">Events</a>
                        </li>
                        <li class="nav-item d-none d-xxl-block">
                            <a class="nav-link" href="app-to-do.html">Todo</a>
                        </li>
                    </ul>
                </div>
                <div class="search-toggle-icon d-xl-none ms-auto">
                    <i class="bi bi-search"></i>
                </div>
                <form class="searchbar d-none d-xl-flex ms-auto">
                    <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i
                            class="bi bi-search"></i></div>
                    <input class="form-control" type="text" placeholder="Type here to search">
                    <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i
                            class="bi bi-x-lg"></i></div>
                </form>
                <div class="top-navbar-right ms-3">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown">
                                <div class="user-setting d-flex align-items-center gap-1">
                                    <img src="{{ asset('backend/assets/images/avatars/avatar-1.png') }}"
                                        class="user-img" alt="">
                                    <div class="user-name d-none d-sm-block">Jhon Deo</div>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('backend/assets/images/avatars/avatar-1.png') }}"
                                                alt="" class="rounded-circle" width="60" height="60">
                                            <div class="ms-3">
                                                <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                                                <small class="mb-0 dropdown-user-designation text-secondary">HR
                                                    Manager</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-user-profile.html">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-person-fill"></i></div>
                                            <div class="setting-text ms-3"><span>Profile</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-gear-fill"></i></div>
                                            <div class="setting-text ms-3"><span>Setting</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index2.html">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-speedometer"></i></div>
                                            <div class="setting-text ms-3"><span>Dashboard</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-piggy-bank-fill"></i></div>
                                            <div class="setting-text ms-3"><span>Earnings</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                                            </div>
                                            <div class="setting-text ms-3"><span>Downloads</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="authentication-signup-with-header-footer.html">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                                            <div class="setting-text ms-3"><span>Logout</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown">
                                <div class="projects">
                                    <i class="bi bi-grid-3x3-gap-fill"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="row row-cols-3 gx-2">
                                    <div class="col">
                                        <a href="ecommerce-orders.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-primary bg-gradient">
                                                    <i class="bi bi-cart-plus-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Orders</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:;">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-danger bg-gradient">
                                                    <i class="bi bi-people-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Users</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="ecommerce-products-grid.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-success bg-gradient">
                                                    <i class="bi bi-bank2"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Products</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="component-media-object.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-orange bg-gradient">
                                                    <i class="bi bi-collection-play-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Media</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="pages-user-profile.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-purple bg-gradient">
                                                    <i class="bi bi-person-circle"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Account</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:;">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-dark bg-info bg-gradient">
                                                    <i class="bi bi-file-earmark-text-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Docs</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="ecommerce-orders-detail.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-pink bg-gradient">
                                                    <i class="bi bi-credit-card-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Payment</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:;">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-bronze bg-gradient">
                                                    <i class="bi bi-calendar-check-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Events</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:;">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-dark bg-warning bg-gradient">
                                                    <i class="bi bi-book-half"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Story</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown">
                                <div class="messages">
                                    <span class="notify-badge">5</span>
                                    <i class="bi bi-messenger"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <div class="p-2 border-bottom m-2">
                                    <h5 class="h5 mb-0">Messages</h5>
                                </div>
                                <div class="header-message-list p-2">
                                    <div class="dropdown-item bg-light radius-10 mb-1">
                                        <form class="dropdown-searchbar position-relative">
                                            <div
                                                class="position-absolute top-50 start-0 translate-middle-y px-3 search-icon">
                                                <i class="bi bi-search"></i>
                                            </div>
                                            <input class="form-control" type="search" placeholder="Search Messages">
                                        </form>
                                    </div>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('backend/assets/images/avatars/avatar-1.png') }}"
                                                alt="" class="rounded-circle" width="52" height="52">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span
                                                        class="msg-time float-end text-secondary">1 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The
                                                    standard chunk of lorem...</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('backend/assets/images/avatars/avatar-2.png') }}"
                                                alt="" class="rounded-circle" width="52" height="52">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span
                                                        class="msg-time float-end text-secondary">7 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many
                                                    desktop publishing</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('backend/assets/images/avatars/avatar-3.png') }}"
                                                alt="" class="rounded-circle" width="52" height="52">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span
                                                        class="msg-time float-end text-secondary">2 h</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making
                                                    this the first true</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('backend/assets/images/avatars/avatar-4.png') }}"
                                                alt="" class="rounded-circle" width="52" height="52">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Peter Costanzo <span
                                                        class="msg-time float-end text-secondary">3 h</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">It
                                                    was popularised in the 1960</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('backend/assets/images/avatars/avatar-5.png') }}"
                                                alt="" class="rounded-circle" width="52" height="52">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Thomas Wheeler <span
                                                        class="msg-time float-end text-secondary">1 d</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">If
                                                    you are going to use a passage</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('backend/assets/images/avatars/avatar-6.png') }}"
                                                alt="" class="rounded-circle" width="52" height="52">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Johnny Seitz <span
                                                        class="msg-time float-end text-secondary">2 w</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">All
                                                    the Lorem Ipsum generators</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('backend/assets/images/avatars/avatar-1.png') }}"
                                                alt="" class="rounded-circle" width="52" height="52">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span
                                                        class="msg-time float-end text-secondary">1 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The
                                                    standard chunk of lorem...</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('backend/assets/images/avatars/avatar-2.png') }}"
                                                alt="" class="rounded-circle" width="52" height="52">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span
                                                        class="msg-time float-end text-secondary">7 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many
                                                    desktop publishing</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('backend/assets/images/avatars/avatar-3.png') }}"
                                                alt="" class="rounded-circle" width="52" height="52">
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span
                                                        class="msg-time float-end text-secondary">2 h</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making
                                                    this the first true</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <div>
                                        <hr class="dropdown-divider">
                                    </div>
                                    <a class="dropdown-item" href="#">
                                        <div class="text-center">View All Messages</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large d-none d-sm-block">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown">
                                <div class="notifications">
                                    <span class="notify-badge">8</span>
                                    <i class="bi bi-bell-fill"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <div class="p-2 border-bottom m-2">
                                    <h5 class="h5 mb-0">Notifications</h5>
                                </div>
                                <div class="header-notifications-list p-2">
                                    <div class="dropdown-item bg-light radius-10 mb-1">
                                        <form class="dropdown-searchbar position-relative">
                                            <div
                                                class="position-absolute top-50 start-0 translate-middle-y px-3 search-icon">
                                                <i class="bi bi-search"></i>
                                            </div>
                                            <input class="form-control" type="search" placeholder="Search Messages">
                                        </form>
                                    </div>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i class="bi bi-basket2-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">New Orders <span
                                                        class="msg-time float-end text-secondary">1 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You
                                                    have recived new orders</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i class="bi bi-people-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">New Customers <span
                                                        class="msg-time float-end text-secondary">7 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5
                                                    new user registered</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i
                                                    class="bi bi-file-earmark-bar-graph-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">24 PDF File <span
                                                        class="msg-time float-end text-secondary">2 h</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The
                                                    pdf files generated</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i class="bi bi-collection-play-fill"></i>
                                            </div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Time Response <span
                                                        class="msg-time float-end text-secondary">3 h</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5.1
                                                    min avarage time response</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i class="bi bi-cursor-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">New Product Approved <span
                                                        class="msg-time float-end text-secondary">1 d</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Your
                                                    new product has approved</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i class="bi bi-gift-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">New Comments <span
                                                        class="msg-time float-end text-secondary">2 w</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New
                                                    customer comments recived</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i class="bi bi-droplet-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">New 24 authors<span
                                                        class="msg-time float-end text-secondary">1 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">24
                                                    new authors joined last week</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i class="bi bi-mic-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Your item is shipped <span
                                                        class="msg-time float-end text-secondary">7 m</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Successfully
                                                    shipped your item</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i class="bi bi-lightbulb-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">Defense Alerts <span
                                                        class="msg-time float-end text-secondary">2 h</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">45%
                                                    less alerts last 4 weeks</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i class="bi bi-bookmark-heart-fill"></i>
                                            </div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">4 New Sign Up <span
                                                        class="msg-time float-end text-secondary">2 w</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New
                                                    4 user registartions</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i class="bi bi-briefcase-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">All Documents Uploaded <span
                                                        class="msg-time float-end text-secondary">1 mo</span></h6>
                                                <small
                                                    class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Sussessfully
                                                    uploaded all files</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <div>
                                        <hr class="dropdown-divider">
                                    </div>
                                    <a class="dropdown-item" href="#">
                                        <div class="text-center">View All Notifications</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--end top header-->
        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon"
                        alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Skodash</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
                </div>
            </div>
            <!--navigation-->

            <ul class="metismenu" id="menu">

                <li>
                    <a href="{{ route('backend.index') }}"><i class="bi bi-arrow-right-short"></i>Dashboard</a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bi bi-house-door"></i>
                        </div>
                        <div class="menu-title">Menus</div>
                    </a>
                    <ul>
                        <li> <a href="/admin/add-new-menus"><i class="bi bi-arrow-right-short"></i>Add Main Menu</a>
                        </li>
                        <li> <a href="/admin/view-menus-list"><i class="bi bi-arrow-right-short"></i>View Menus</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bi bi-house-door"></i>
                        </div>
                        <div class="menu-title">Sub Menus</div>
                    </a>
                    <ul>
                        <li> <a href="/admin/add-sub-menus"><i class="bi bi-arrow-right-short"></i>Add Sub Menu</a>
                        </li>
                        <li> <a href="/admin/view-sub-menus-list"><i class="bi bi-arrow-right-short"></i>View Sub Menus</a>
                        </li>

                    </ul>
                </li>

                <?php
                $MainMenuTitles = DB::table('main_menu_titles')
                    ->select(['menu_id', 'main_menu_id', 'title_name'])
                    ->where([['company_id', '=', 1], ['status', '=', 1]])
                    ->get();
                $counter = 1;
                ?>

                @foreach ($MainMenuTitles as $row)
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class="bi bi-grid"></i>
                            </div>

                            <div class="menu-title"><?php echo $row->main_menu_id; ?></div>
                        </a>
                        <ul>
                            <li>
                                <?php
                                $SubMenuTitles = DB::table('sub_menu_titles')
                                    ->select(['sub_navigation_title_name', 'm_controller_name', 'sub_menu_id'])
                                    ->where('menu_id', $row->menu_id)
                                    ->get();
                                
                                ?>
                                @forelse($SubMenuTitles as $SubMenuTitle)
                                    <a href="<?php echo url('' . $SubMenuTitle->m_controller_name); ?>"><i
                                            class="bi bi-arrow-right-short"></i><?php echo $SubMenuTitle->sub_navigation_title_name; ?></a>
                                @empty
                            <li class="text-center"><i class="bi bi-arrow-right-short">No Sub Menu Found</i></li>

                    </li>
                @endforelse

            </ul>
            </li>
            @endforeach

            </ul>
            <!--end navigation-->
        </aside>
        <!--end sidebar -->

        <main class="page-content">
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if (Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                    @endif
                @endforeach
            </div>
