<?php

$user = auth()->user(); ?>

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box text-center">
                <a href="/" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/sra-logo.png') }}" alt="logo-sm-dark" height="22" />
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/sra-logo.png') }}" alt="logo-dark" height="24" />
                    </span>
                </a>

                <a href="/" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/favicon.png') }}" alt="logo-sm-light" height="22" />
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/sra-logo.png') }}" alt="logo-light" height="24" />
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

            <!-- App Search-->
            <!-- <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search..." />
                    <span class="ri-search-line"></span>
                </div>
            </form> -->
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ri-search-line"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">
                    <form class="p-3">
                        <div class="mb-3 m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." />
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/favicon.png') }}"
                        alt=" Header Avatar" />
                    <span class="d-none d-xl-inline-block ms-1">
                        @if (isset($user))
                            {{ ucwords($user->name) }}
                        @else
                            {{ 'Admin' }}
                        @endif
                    </span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->

                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger" href="logout">
                            <i class="ri-shut-down-line align-middle me-1 text-danger"></i>
                            Logout</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</header>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>


                {{-- <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="mdi mdi-home-variant-outline"></i>
                        <span>Dashboard</span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('online_status') }}" class="waves-effect">
                        <i class="mdi mdi-home-variant-outline"></i>
                        <span>Online Status</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('job_description') }}" class="waves-effect">
                        <i class="mdi mdi-android-auto"></i>
                        <span>Job Description</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('rgApp.index') }}" class="waves-effect">
                        <i class="mdi mdi-application"></i>
                        <span>Reg Applications</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
