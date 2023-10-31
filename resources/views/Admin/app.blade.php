<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Budget Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> -->

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        <p class="bg-info text-center py-3 my-1">
                                            <i class="fa-4x fas fa-user-circle"></i>
                                        </p>
                                        <button class="btn float-left border">Profile</button>
                                        <button class="btn float-right border">Logout</button>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> -->
            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link text-center">
                <span class="brand-text font-weight-light text-uppercase">Budget Management</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <router-link to="/" class="nav-link">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/transactions" class="nav-link">
                                <i class="fas fa-list"></i>
                                <p>
                                    Transactions
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/scheduled" class="nav-link">
                                <i class="fab fa-rev"></i>
                                <p>
                                    Scheduled Transactions
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/accounts" class="nav-link">
                                <i class="fas fa-university"></i>
                                <p>
                                    Account
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/credit" class="nav-link">
                                <i class="fas fa-credit-card"></i>
                                <p>
                                    Credit Card
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/budgets" class="nav-link">
                                <i class="fas fa-wallet"></i>
                                <p>
                                    Budget
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/debts" class="nav-link">
                                <i class="fas fa-stopwatch"></i>
                                <p>
                                    Debts
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/calendar" class="nav-link">
                                <i class="fas fa-calendar-day"></i>
                                <p>
                                    Calendar
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-chart-pie"></i>
                                <p>
                                    Charts
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <router-link to="/charts/categories" class="nav-link ">
                                        <p>Categories</p>
                                    </router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link to="/charts/time" class="nav-link">
                                        <p>Time</p>
                                    </router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link to="/charts/future" class="nav-link">
                                        <p>Time (Future)</p>
                                    </router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link to="/charts/forecast" class="nav-link">
                                        <p>Forecasts</p>
                                    </router-link>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-file-export"></i>
                                <p>
                                    Data Tranfer
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <router-link to="/tools/csv/ExportPDF" class="nav-link ">
                                        <p>Export PDF file</p>
                                    </router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link to="/tools/csv/ExportCSV" class="nav-link">
                                        <p>Export CSV file</p>
                                    </router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link to="/tools/import" class="nav-link">
                                        <p>Import CSV/XLS file</p>
                                    </router-link>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-project-diagram"></i>
                                <p>
                                    Preferences
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <router-link to="/pref/categories" class="nav-link ">
                                        <p>Categories Management</p>
                                    </router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link to="/pref/transactions" class="nav-link">
                                        <p>Transactions Management</p>
                                    </router-link>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <router-link to="/setting" class="nav-link">
                                <i class="fas fa-cog"></i>
                                <p>
                                    Setting
                                </p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-toggle-off"></i>
                                <!-- <i class="fas fa-toggle-off"></i> -->
                                <p>
                                    Dark mode
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper">
            <router-view></router-view>
        </div>


        <aside class="control-sidebar control-sidebar-dark">

            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>


        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>

            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
</body>

</html>