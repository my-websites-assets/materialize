<!DOCTYPE html>

<!-- =========================================================
* Materialize - Material Design HTML Admin Template | v1.0.0
==============================================================

* Product Page: https://1.envato.market/materialize_admin
* Created by: Pixinvent
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright Pixinvent (https://pixinvent.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html class="light-style layout-menu-fixed layout-compact" data-assets-path="../../assets/" data-template="horizontal-menu-template" data-theme="theme-default" dir="ltr" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" name="viewport"/>
<title>Dashboard - Analytics | Materialize - Material Design HTML Admin Template</title>
<meta content="Materialize â is the most developer friendly &amp; highly customizable Admin Dashboard Template." name="description"/>
<meta content="dashboard, material, material design, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5" name="keywords"/>
<!-- Canonical SEO -->
<link href="https://1.envato.market/materialize_admin" rel="canonical"/>
<!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5J3LMKC');</script>
<!-- End Google Tag Manager -->
<!-- Favicon -->
<link href="../../assets/img/favicon/favicon.ico" rel="icon" type="image/x-icon">
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Icons -->
<link href="../../assets/vendor/fonts/materialdesignicons.css" rel="stylesheet">
<link href="../../assets/vendor/fonts/flag-icons.css" rel="stylesheet">
<!-- Menu waves for no-customizer fix -->
<link href="../../assets/vendor/libs/node-waves/node-waves.css" rel="stylesheet">
<!-- Core CSS -->
<link class="template-customizer-core-css" href="../../assets/vendor/css/rtl/core.css" rel="stylesheet"/>
<link class="template-customizer-theme-css" href="../../assets/vendor/css/rtl/theme-default.css" rel="stylesheet"/>
<link href="../../assets/css/demo.css" rel="stylesheet"/>
<!-- Vendors CSS -->
<link href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet"/>
<link href="../../assets/vendor/libs/typeahead-js/typeahead.css" rel="stylesheet"/>
<link href="../../assets/vendor/libs/apex-charts/apex-charts.css" rel="stylesheet"/>
<link href="../../assets/vendor/libs/swiper/swiper.css" rel="stylesheet"/>
<!-- Page CSS -->
<link href="../../assets/vendor/css/pages/cards-statistics.css" rel="stylesheet"/>
<link href="../../assets/vendor/css/pages/cards-analytics.css" rel="stylesheet"/>
<!-- Helpers -->
<script src="../../assets/vendor/js/helpers.js"></script>
<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
<script src="../../assets/vendor/js/template-customizer.js"></script>
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="../../assets/js/config.js"></script>
</link></link></link></link></head>
<body>
<!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" style="display: none; visibility: hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Layout wrapper -->
<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
<div class="layout-container">
<!-- Navbar -->
<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
<div class="container-xxl">
<div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
<a class="app-brand-link gap-2" href="index.html">
<span class="app-brand-logo demo">
<span style="color:var(--bs-primary);">
<svg fill="none" height="150" viewbox="0 0 38 20" width="268" xmlns="http://www.w3.org/2000/svg">
<path d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z" fill="currentColor"></path>
<path d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z" fill="url(#paint0_linear_2989_100980)" fill-opacity="0.4"></path>
<path d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z" fill="currentColor"></path>
<path d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z" fill="currentColor"></path>
<path d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z" fill="url(#paint1_linear_2989_100980)" fill-opacity="0.4"></path>
<path d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z" fill="currentColor"></path>
<defs>
<lineargradient gradientunits="userSpaceOnUse" id="paint0_linear_2989_100980" x1="5.36642" x2="10.532" y1="0.849138" y2="24.104">
<stop offset="0" stop-opacity="1"></stop>
<stop offset="1" stop-opacity="0"></stop>
</lineargradient>
<lineargradient gradientunits="userSpaceOnUse" id="paint1_linear_2989_100980" x1="5.19475" x2="10.3357" y1="0.849139" y2="24.1155">
<stop offset="0" stop-opacity="1"></stop>
<stop offset="1" stop-opacity="0"></stop>
</lineargradient>
</defs>
</svg>
</span>
</span>
<span class="app-brand-text demo menu-text fw-bold">Materialize</span>
</a>
<a class="layout-menu-toggle menu-link text-large ms-auto d-xl-none" href="javascript:void(0);">
<i class="mdi mdi-close align-middle"></i>
</a>
</div>
<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
<i class="mdi mdi-menu mdi-24px"></i>
</a>
</div>
<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
<ul class="navbar-nav flex-row align-items-center ms-auto">
<!-- Search -->
<li class="nav-item navbar-search-wrapper me-1 me-xl-0">
<a class="nav-link search-toggler fw-normal" href="javascript:void(0);">
<i class="mdi mdi-magnify mdi-24px scaleX-n1-rtl"></i>
</a>
</li>
<!-- /Search -->
<!-- Language -->
<li class="nav-item dropdown-language dropdown me-1 me-xl-0">
<a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" href="javascript:void(0);">
<i class="mdi mdi-translate mdi-24px"></i>
</a>
<ul class="dropdown-menu dropdown-menu-end">
<li>
<a class="dropdown-item" data-language="en" data-text-direction="ltr" href="javascript:void(0);">
<span class="align-middle">English</span>
</a>
</li>
<li>
<a class="dropdown-item" data-language="fr" data-text-direction="ltr" href="javascript:void(0);">
<span class="align-middle">French</span>
</a>
</li>
<li>
<a class="dropdown-item" data-language="ar" data-text-direction="rtl" href="javascript:void(0);">
<span class="align-middle">Arabic</span>
</a>
</li>
<li>
<a class="dropdown-item" data-language="de" data-text-direction="ltr" href="javascript:void(0);">
<span class="align-middle">German</span>
</a>
</li>
</ul>
</li>
<!--/ Language -->
<!-- Style Switcher -->
<li class="nav-item dropdown-style-switcher dropdown me-1 me-xl-0">
<a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" href="javascript:void(0);">
<i class="mdi mdi-24px"></i>
</a>
<ul class="dropdown-menu dropdown-menu-end dropdown-styles">
<li>
<a class="dropdown-item" data-theme="light" href="javascript:void(0);">
<span class="align-middle"><i class="mdi mdi-weather-sunny me-2"></i>Light</span>
</a>
</li>
<li>
<a class="dropdown-item" data-theme="dark" href="javascript:void(0);">
<span class="align-middle"><i class="mdi mdi-weather-night me-2"></i>Dark</span>
</a>
</li>
<li>
<a class="dropdown-item" data-theme="system" href="javascript:void(0);">
<span class="align-middle"><i class="mdi mdi-monitor me-2"></i>System</span>
</a>
</li>
</ul>
</li>
<!-- / Style Switcher-->
<!-- Quick links  -->
<li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-1 me-xl-0">
<a aria-expanded="false" class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-auto-close="outside" data-bs-toggle="dropdown" href="javascript:void(0);">
<i class="mdi mdi-view-grid-plus-outline mdi-24px"></i>
</a>
<div class="dropdown-menu dropdown-menu-end py-0">
<div class="dropdown-menu-header border-bottom">
<div class="dropdown-header d-flex align-items-center py-3">
<h5 class="text-body mb-0 me-auto">Shortcuts</h5>
<a class="dropdown-shortcuts-add text-muted" data-bs-placement="top" data-bs-toggle="tooltip" href="javascript:void(0)" title="Add shortcuts"><i class="mdi mdi-view-grid-plus-outline mdi-24px"></i></a>
</div>
</div>
<div class="dropdown-shortcuts-list scrollable-container">
<div class="row row-bordered overflow-visible g-0">
<div class="dropdown-shortcuts-item col">
<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
<i class="mdi mdi-calendar fs-4"></i>
</span>
<a class="stretched-link" href="app-calendar.html">Calendar</a>
<small class="text-muted mb-0">Appointments</small>
</div>
<div class="dropdown-shortcuts-item col">
<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
<i class="mdi mdi-file-document-outline fs-4"></i>
</span>
<a class="stretched-link" href="app-invoice-list.html">Invoice App</a>
<small class="text-muted mb-0">Manage Accounts</small>
</div>
</div>
<div class="row row-bordered overflow-visible g-0">
<div class="dropdown-shortcuts-item col">
<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
<i class="mdi mdi-account-outline fs-4"></i>
</span>
<a class="stretched-link" href="app-user-list.html">User App</a>
<small class="text-muted mb-0">Manage Users</small>
</div>
<div class="dropdown-shortcuts-item col">
<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
<i class="mdi mdi-shield-check-outline fs-4"></i>
</span>
<a class="stretched-link" href="app-access-roles.html">Role Management</a>
<small class="text-muted mb-0">Permission</small>
</div>
</div>
<div class="row row-bordered overflow-visible g-0">
<div class="dropdown-shortcuts-item col">
<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
<i class="mdi mdi-chart-pie-outline fs-4"></i>
</span>
<a class="stretched-link" href="index.html">Dashboard</a>
<small class="text-muted mb-0">Analytics</small>
</div>
<div class="dropdown-shortcuts-item col">
<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
<i class="mdi mdi-cog-outline fs-4"></i>
</span>
<a class="stretched-link" href="pages-account-settings-account.html">Setting</a>
<small class="text-muted mb-0">Account Settings</small>
</div>
</div>
<div class="row row-bordered overflow-visible g-0">
<div class="dropdown-shortcuts-item col">
<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
<i class="mdi mdi-help-circle-outline fs-4"></i>
</span>
<a class="stretched-link" href="pages-faq.html">FAQs</a>
<small class="text-muted mb-0">FAQs &amp; Articles</small>
</div>
<div class="dropdown-shortcuts-item col">
<span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
<i class="mdi mdi-dock-window fs-4"></i>
</span>
<a class="stretched-link" href="modal-examples.html">Modals</a>
<small class="text-muted mb-0">Useful Popups</small>
</div>
</div>
</div>
</div>
</li>
<!-- Quick links -->
<!-- Notification -->
<li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
<a aria-expanded="false" class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-auto-close="outside" data-bs-toggle="dropdown" href="javascript:void(0);">
<i class="mdi mdi-bell-outline mdi-24px"></i>
<span class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
</a>
<ul class="dropdown-menu dropdown-menu-end py-0">
<li class="dropdown-menu-header border-bottom">
<div class="dropdown-header d-flex align-items-center py-3">
<h6 class="mb-0 me-auto">Notification</h6>
<span class="badge rounded-pill bg-label-primary">8 New</span>
</div>
</li>
<li class="dropdown-notifications-list scrollable-container">
<ul class="list-group list-group-flush">
<li class="list-group-item list-group-item-action dropdown-notifications-item">
<div class="d-flex gap-2">
<div class="flex-shrink-0">
<div class="avatar me-1">
<img alt="" class="w-px-40 h-auto rounded-circle" src="../../assets/img/avatars/1.png"/>
</div>
</div>
<div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
<h6 class="mb-1 text-truncate">Congratulation Lettie ð</h6>
<small class="text-truncate text-body">Won the monthly best seller gold badge</small>
</div>
<div class="flex-shrink-0 dropdown-notifications-actions">
<small class="text-muted">1h ago</small>
</div>
</div>
</li>
<li class="list-group-item list-group-item-action dropdown-notifications-item">
<div class="d-flex gap-2">
<div class="flex-shrink-0">
<div class="avatar me-1">
<span class="avatar-initial rounded-circle bg-label-danger">CF</span>
</div>
</div>
<div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
<h6 class="mb-1 text-truncate">Charles Franklin</h6>
<small class="text-truncate text-body">Accepted your connection</small>
</div>
<div class="flex-shrink-0 dropdown-notifications-actions">
<small class="text-muted">12hr ago</small>
</div>
</div>
</li>
<li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
<div class="d-flex gap-2">
<div class="flex-shrink-0">
<div class="avatar me-1">
<img alt="" class="w-px-40 h-auto rounded-circle" src="../../assets/img/avatars/2.png"/>
</div>
</div>
<div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
<h6 class="mb-1 text-truncate">New Message âï¸</h6>
<small class="text-truncate text-body">You have new message from Natalie</small>
</div>
<div class="flex-shrink-0 dropdown-notifications-actions">
<small class="text-muted">1h ago</small>
</div>
</div>
</li>
<li class="list-group-item list-group-item-action dropdown-notifications-item">
<div class="d-flex gap-2">
<div class="flex-shrink-0">
<div class="avatar me-1">
<span class="avatar-initial rounded-circle bg-label-success"><i class="mdi mdi-cart-outline"></i></span>
</div>
</div>
<div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
<h6 class="mb-1 text-truncate">Whoo! You have new order ð </h6>
<small class="text-truncate text-body">ACME Inc. made new order $1,154</small>
</div>
<div class="flex-shrink-0 dropdown-notifications-actions">
<small class="text-muted">1 day ago</small>
</div>
</div>
</li>
<li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
<div class="d-flex gap-2">
<div class="flex-shrink-0">
<div class="avatar me-1">
<img alt="" class="w-px-40 h-auto rounded-circle" src="../../assets/img/avatars/9.png"/>
</div>
</div>
<div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
<h6 class="mb-1 text-truncate">Application has been approved ð </h6>
<small class="text-truncate text-body">Your ABC project application has been approved.</small>
</div>
<div class="flex-shrink-0 dropdown-notifications-actions">
<small class="text-muted">2 days ago</small>
</div>
</div>
</li>
<li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
<div class="d-flex gap-2">
<div class="flex-shrink-0">
<div class="avatar me-1">
<span class="avatar-initial rounded-circle bg-label-success"><i class="mdi mdi-chart-pie-outline"></i></span>
</div>
</div>
<div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
<h6 class="mb-1 text-truncate">Monthly report is generated</h6>
<small class="text-truncate text-body">July monthly financial report is generated </small>
</div>
<div class="flex-shrink-0 dropdown-notifications-actions">
<small class="text-muted">3 days ago</small>
</div>
</div>
</li>
<li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
<div class="d-flex gap-2">
<div class="flex-shrink-0">
<div class="avatar me-1">
<img alt="" class="w-px-40 h-auto rounded-circle" src="../../assets/img/avatars/5.png"/>
</div>
</div>
<div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
<h6 class="mb-1 text-truncate">Send connection request</h6>
<small class="text-truncate text-body">Peter sent you connection request</small>
</div>
<div class="flex-shrink-0 dropdown-notifications-actions">
<small class="text-muted">4 days ago</small>
</div>
</div>
</li>
<li class="list-group-item list-group-item-action dropdown-notifications-item">
<div class="d-flex gap-2">
<div class="flex-shrink-0">
<div class="avatar me-1">
<img alt="" class="w-px-40 h-auto rounded-circle" src="../../assets/img/avatars/6.png"/>
</div>
</div>
<div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
<h6 class="mb-1 text-truncate">New message from Jane</h6>
<small class="text-truncate text-body">Your have new message from Jane</small>
</div>
<div class="flex-shrink-0 dropdown-notifications-actions">
<small class="text-muted">5 days ago</small>
</div>
</div>
</li>
<li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
<div class="d-flex gap-2">
<div class="flex-shrink-0">
<div class="avatar me-1">
<span class="avatar-initial rounded-circle bg-label-warning"><i class="mdi mdi-alert-circle-outline"></i></span>
</div>
</div>
<div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
<h6 class="mb-1">CPU is running high</h6>
<small class="text-truncate text-body">CPU Utilization Percent is currently at 88.63%,</small>
</div>
<div class="flex-shrink-0 dropdown-notifications-actions">
<small class="text-muted">5 days ago</small>
</div>
</div>
</li>
</ul>
</li>
<li class="dropdown-menu-footer border-top p-2">
<a class="btn btn-primary d-flex justify-content-center" href="javascript:void(0);">
                  View all notifications
                </a>
</li>
</ul>
</li>
<!--/ Notification -->
<!-- User -->
<li class="nav-item navbar-dropdown dropdown-user dropdown">
<a class="nav-link dropdown-toggle hide-arrow" data-bs-toggle="dropdown" href="javascript:void(0);">
<div class="avatar avatar-online">
<img alt="" class="w-px-40 h-auto rounded-circle" src="../../assets/img/avatars/1.png"/>
</div>
</a>
<ul class="dropdown-menu dropdown-menu-end">
<li>
<a class="dropdown-item" href="pages-account-settings-account.html">
<div class="d-flex">
<div class="flex-shrink-0 me-3">
<div class="avatar avatar-online">
<img alt="" class="w-px-40 h-auto rounded-circle" src="../../assets/img/avatars/1.png"/>
</div>
</div>
<div class="flex-grow-1">
<span class="fw-medium d-block">John Doe</span>
<small class="text-muted">Admin</small>
</div>
</div>
</a>
</li>
<li>
<div class="dropdown-divider"></div>
</li>
<li>
<a class="dropdown-item" href="pages-profile-user.html">
<i class="mdi mdi-account-outline me-2"></i>
<span class="align-middle">My Profile</span>
</a>
</li>
<li>
<a class="dropdown-item" href="pages-account-settings-account.html">
<i class="mdi mdi-cog-outline me-2"></i>
<span class="align-middle">Settings</span>
</a>
</li>
<li>
<a class="dropdown-item" href="pages-account-settings-billing.html">
<span class="d-flex align-items-center align-middle">
<i class="flex-shrink-0 mdi mdi-credit-card-outline me-2"></i>
<span class="flex-grow-1 align-middle ms-1">Billing</span>
<span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
</span>
</a>
</li>
<li>
<div class="dropdown-divider"></div>
</li>
<li>
<a class="dropdown-item" href="pages-faq.html">
<i class="mdi mdi-help-circle-outline me-2"></i>
<span class="align-middle">FAQ</span>
</a>
</li>
<li>
<a class="dropdown-item" href="pages-pricing.html">
<i class="mdi mdi-currency-usd me-2"></i>
<span class="align-middle">Pricing</span>
</a>
</li>
<li>
<div class="dropdown-divider"></div>
</li>
<li>
<a class="dropdown-item" href="auth-login-cover.html" target="_blank">
<i class="mdi mdi-logout me-2"></i>
<span class="align-middle">Log Out</span>
</a>
</li>
</ul>
</li>
<!--/ User -->
</ul>
</div>
<!-- Search Small Screens -->
<div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
<input aria-label="Search..." class="form-control search-input border-0" placeholder="Search..." type="text"/>
<i class="mdi mdi-close search-toggler cursor-pointer"></i>
</div>
</div>
</nav>
<!-- / Navbar -->
<!-- Layout container -->
<div class="layout-page">
<!-- Content wrapper -->
<div class="content-wrapper">
<!-- Menu -->
<aside class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0" id="layout-menu">
<div class="container-xxl d-flex h-100">
<ul class="menu-inner">
<!-- Dashboards -->
<li class="menu-item active">
<a class="menu-link menu-toggle" href="javascript:void(0)">
<i class="menu-icon tf-icons mdi mdi-home-outline"></i>
<div data-i18n="Dashboards">Dashboards</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-dashboard.html">
<i class="menu-icon tf-icons mdi mdi-cart-outline"></i>
<div data-i18n="eCommerce">eCommerce</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="dashboards-crm.html">
<i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
<div data-i18n="CRM">CRM</div>
</a>
</li>
<li class="menu-item active">
<a class="menu-link" href="index.html">
<i class="menu-icon tf-icons mdi mdi-chart-timeline-variant"></i>
<div data-i18n="Analytics">Analytics</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-logistics-dashboard.html">
<i class="menu-icon tf-icons mdi mdi-truck-outline"></i>
<div data-i18n="Logistics">Logistics</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-academy-dashboard.html">
<i class="menu-icon tf-icons mdi mdi-notebook-outline"></i>
<div data-i18n="Academy">Academy</div>
</a>
</li>
</ul>
</li>
<!-- Layouts -->
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0)">
<i class="menu-icon tf-icons mdi mdi-window-maximize"></i>
<div data-i18n="Layouts">Layouts</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="layouts-without-menu.html">
<i class="menu-icon tf-icons mdi mdi-page-layout-header-footer"></i>
<div data-i18n="Without menu">Without menu</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="../vertical-menu-template/" target="_blank">
<i class="menu-icon tf-icons mdi mdi-dock-left"></i>
<div data-i18n="Vertical">Vertical</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="layouts-fluid.html">
<i class="menu-icon tf-icons mdi mdi-dock-top"></i>
<div data-i18n="Fluid">Fluid</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="layouts-container.html">
<i class="menu-icon tf-icons mdi mdi-dock-window"></i>
<div data-i18n="Container">Container</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="layouts-blank.html">
<i class="menu-icon tf-icons mdi mdi-page-layout-body"></i>
<div data-i18n="Blank">Blank</div>
</a>
</li>
</ul>
</li>
<!-- Apps -->
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0)">
<i class="menu-icon tf-icons mdi mdi-apps"></i>
<div data-i18n="Apps">Apps</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="app-email.html">
<i class="menu-icon tf-icons mdi mdi-email-outline"></i>
<div data-i18n="Email">Email</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-chat.html">
<i class="menu-icon tf-icons mdi mdi-message-outline"></i>
<div data-i18n="Chat">Chat</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-calendar.html">
<i class="menu-icon tf-icons mdi mdi-calendar-blank-outline"></i>
<div data-i18n="Calendar">Calendar</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-kanban.html">
<i class="menu-icon tf-icons mdi mdi-view-grid-outline"></i>
<div data-i18n="Kanban">Kanban</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-cart-outline"></i>
<div data-i18n="eCommerce">eCommerce</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-dashboard.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Dashboard">Dashboard</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Products">Products</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-product-list.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Product List">Product List</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-product-add.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Add Product">Add Product</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-category-list.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Category List">Category List</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Order">Order</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-order-list.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Order List">Order List</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-order-details.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Order Details">Order Details</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Customer">Customer</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-customer-all.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="All Customers">All Customers</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Customer Details">Customer Details</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-customer-details-overview.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Overview">Overview</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-customer-details-security.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Security">Security</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-customer-details-billing.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Address &amp; Billing">Address &amp; Billing</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-customer-details-notifications.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Notifications">Notifications</div>
</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-manage-reviews.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Manage Reviews">Manage Reviews</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-referral.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Referrals">Referrals</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Settings">Settings</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-settings-detail.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Store details">Store Details</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-settings-payments.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Payments">Payments</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-settings-checkout.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Checkout">Checkout</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-settings-shipping.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Shipping &amp; Delivery">Shipping &amp; Delivery</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-settings-locations.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Locations">Locations</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-ecommerce-settings-notifications.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Notifications">Notifications</div>
</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-notebook-outline"></i>
<div data-i18n="Academy">Academy</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="app-academy-dashboard.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Dashboard">Dashboard</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-academy-course.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="My Course">My Course</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-academy-course-details.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Course Details">Course Details</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-truck-outline"></i>
<div data-i18n="Logistics">Logistics</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="app-logistics-dashboard.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Dashboard">Dashboard</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-logistics-fleet.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Fleet">Fleet</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
<div data-i18n="Invoice">Invoice</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="app-invoice-list.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="List">List</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-invoice-preview.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Preview">Preview</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-invoice-edit.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Edit">Edit</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-invoice-add.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Add">Add</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-account-outline"></i>
<div data-i18n="Users">Users</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="app-user-list.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="List">List</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="View">View</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="app-user-view-account.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Account">Account</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-user-view-security.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Security">Security</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-user-view-billing.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Billing &amp; Plans">Billing &amp; Plans</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-user-view-notifications.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Notifications">Notifications</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-user-view-connections.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Connections">Connections</div>
</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-shield-outline"></i>
<div data-i18n="Roles &amp; Permissions">Roles &amp; Permission</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="app-access-roles.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Roles">Roles</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="app-access-permission.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Permission">Permission</div>
</a>
</li>
</ul>
</li>
</ul>
</li>
<!-- Pages -->
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0)">
<i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
<div data-i18n="Pages">Pages</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-flip-to-front"></i>
<div data-i18n="Front Pages">Front Pages</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="../front-pages/landing-page.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Landing">Landing</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="../front-pages/pricing-page.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Pricing">Pricing</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="../front-pages/payment-page.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Payment">Payment</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="../front-pages/checkout-page.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Checkout">Checkout</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="../front-pages/help-center-landing.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Help Center">Help Center</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-card-account-details-outline"></i>
<div data-i18n="User Profile">User Profile</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="pages-profile-user.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Profile">Profile</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="pages-profile-teams.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Teams">Teams</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="pages-profile-projects.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Projects">Projects</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="pages-profile-connections.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Connections">Connections</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-account-cog-outline"></i>
<div data-i18n="Account Settings">Account Settings</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="pages-account-settings-account.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Account">Account</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="pages-account-settings-security.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Security">Security</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="pages-account-settings-billing.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Billing &amp; Plans">Billing &amp; Plans</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="pages-account-settings-notifications.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Notifications">Notifications</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="pages-account-settings-connections.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Connections">Connections</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link" href="pages-faq.html">
<i class="menu-icon tf-icons mdi mdi-frequently-asked-questions"></i>
<div data-i18n="FAQ">FAQ</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="pages-pricing.html">
<i class="menu-icon tf-icons mdi mdi-currency-usd"></i>
<div data-i18n="Pricing">Pricing</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-file-outline"></i>
<div data-i18n="Misc">Misc</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="pages-misc-error.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Error">Error</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="pages-misc-under-maintenance.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Under Maintenance">Under Maintenance</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="pages-misc-comingsoon.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Coming Soon">Coming Soon</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="pages-misc-not-authorized.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Not Authorized">Not Authorized</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="pages-misc-server-error.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Server Error">Server Error</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-lock-outline"></i>
<div data-i18n="Authentications">Authentications</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Login">Login</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="auth-login-basic.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Basic">Basic</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="auth-login-cover.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Cover">Cover</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Register">Register</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="auth-register-basic.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Basic">Basic</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="auth-register-cover.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Cover">Cover</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="auth-register-multisteps.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Multi-steps">Multi-steps</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Verify Email">Verify Email</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="auth-verify-email-basic.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Basic">Basic</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="auth-verify-email-cover.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Cover">Cover</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Reset Password">Reset Password</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="auth-reset-password-basic.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Basic">Basic</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="auth-reset-password-cover.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Cover">Cover</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Forgot Password">Forgot Password</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="auth-forgot-password-basic.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Basic">Basic</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="auth-forgot-password-cover.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Cover">Cover</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Two Steps">Two Steps</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="auth-two-steps-basic.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Basic">Basic</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="auth-two-steps-cover.html" target="_blank">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Cover">Cover</div>
</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-transit-connection-horizontal"></i>
<div data-i18n="Wizard Examples">Wizard Examples</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="wizard-ex-checkout.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Checkout">Checkout</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="wizard-ex-property-listing.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Property Listing">Property Listing</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="wizard-ex-create-deal.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Create Deal">Create Deal</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link" href="modal-examples.html">
<i class="menu-icon tf-icons mdi mdi-vector-arrange-below"></i>
<div data-i18n="Modal Examples">Modal Examples</div>
</a>
</li>
</ul>
</li>
<!-- Components -->
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0)">
<i class="menu-icon tf-icons mdi mdi-layers-outline"></i>
<div data-i18n="Components">Components</div>
</a>
<ul class="menu-sub">
<!-- Cards -->
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
<div data-i18n="Cards">Cards</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="cards-basic.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Basic">Basic</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="cards-advance.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Advance">Advance</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="cards-statistics.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Statistics">Statistics</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="cards-analytics.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Analytics">Analytics</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="cards-gamifications.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Gamifications">Gamifications</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="cards-actions.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Actions">Actions</div>
</a>
</li>
</ul>
</li>
<!-- User interface -->
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0)">
<i class="menu-icon tf-icons mdi mdi-palette-swatch-outline"></i>
<div data-i18n="User interface">User interface</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="ui-accordion.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Accordion">Accordion</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-alerts.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Alerts">Alerts</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-badges.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Badges">Badges</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-buttons.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Buttons">Buttons</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-carousel.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Carousel">Carousel</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-collapse.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Collapse">Collapse</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-dropdowns.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Dropdowns">Dropdowns</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-footer.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Footer">Footer</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-list-groups.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="List groups">List groups</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-modals.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Modals">Modals</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-navbar.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Navbar">Navbar</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-offcanvas.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Offcanvas">Offcanvas</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-pagination-breadcrumbs.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-progress.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Progress">Progress</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-spinners.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Spinners">Spinners</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-tabs-pills.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-toasts.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Toasts">Toasts</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-tooltips-popovers.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Tooltips &amp; Popovers">Tooltips &amp; Popovers</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="ui-typography.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Typography">Typography</div>
</a>
</li>
</ul>
</li>
<!-- Extended components -->
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0)">
<i class="menu-icon tf-icons mdi mdi-star-outline"></i>
<div data-i18n="Extended UI">Extended UI</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="extended-ui-avatar.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Avatar">Avatar</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="extended-ui-blockui.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="BlockUI">BlockUI</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="extended-ui-drag-and-drop.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Drag &amp; Drop">Drag &amp; Drop</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="extended-ui-media-player.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Media Player">Media Player</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="extended-ui-perfect-scrollbar.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Perfect Scrollbar">Perfect Scrollbar</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="extended-ui-star-ratings.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Star Ratings">Star Ratings</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="extended-ui-sweetalert2.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="SweetAlert2">SweetAlert2</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="extended-ui-text-divider.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Text Divider">Text Divider</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Timeline">Timeline</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="extended-ui-timeline-basic.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Basic">Basic</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="extended-ui-timeline-fullscreen.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Fullscreen">Fullscreen</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link" href="extended-ui-tour.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Tour">Tour</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="extended-ui-treeview.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Treeview">Treeview</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="extended-ui-misc.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Miscellaneous">Miscellaneous</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link" href="icons-mdi.html">
<i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
<div data-i18n="Icons">Icons</div>
</a>
</li>
</ul>
</li>
<!-- Forms -->
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0)">
<i class="menu-icon tf-icons mdi mdi-checkbox-marked-outline"></i>
<div data-i18n="Forms">Forms</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-form-select"></i>
<div data-i18n="Form Elements">Form Elements</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="forms-basic-inputs.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Basic Inputs">Basic Inputs</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="forms-input-groups.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Input groups">Input groups</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="forms-custom-options.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Custom Options">Custom Options</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="forms-editors.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Editors">Editors</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="forms-file-upload.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="File Upload">File Upload</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="forms-pickers.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Pickers">Pickers</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="forms-selects.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Select &amp; Tags">Select &amp; Tags</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="forms-sliders.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Sliders">Sliders</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="forms-switches.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Switches">Switches</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="forms-extras.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Extras">Extras</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
<div data-i18n="Form Layouts">Form Layouts</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="form-layouts-vertical.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Vertical Form">Vertical Form</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="form-layouts-horizontal.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Horizontal Form">Horizontal Form</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="form-layouts-sticky.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Sticky Actions">Sticky Actions</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-transit-connection-horizontal"></i>
<div data-i18n="Form Wizard">Form Wizard</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="form-wizard-numbered.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Numbered">Numbered</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="form-wizard-icons.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Icons">Icons</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link" href="form-validation.html">
<i class="menu-icon tf-icons mdi mdi-checkbox-marked-circle-outline"></i>
<div data-i18n="Form Validation">Form Validation</div>
</a>
</li>
</ul>
</li>
<!-- Tables -->
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0)">
<i class="menu-icon tf-icons mdi mdi-table"></i>
<div data-i18n="Tables">Tables</div>
</a>
<ul class="menu-sub">
<!-- Tables -->
<li class="menu-item">
<a class="menu-link" href="tables-basic.html">
<i class="menu-icon tf-icons mdi mdi-grid-large"></i>
<div data-i18n="Tables">Tables</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-grid"></i>
<div data-i18n="Datatables">Datatables</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="tables-datatables-basic.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Basic">Basic</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="tables-datatables-advanced.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Advanced">Advanced</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="tables-datatables-extensions.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Extensions">Extensions</div>
</a>
</li>
</ul>
</li>
</ul>
</li>
<!-- Charts & Maps -->
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0)">
<i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
<div data-i18n="Charts &amp; Maps">Charts &amp; Maps</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link menu-toggle" href="javascript:void(0);">
<i class="menu-icon tf-icons mdi mdi-chart-line"></i>
<div data-i18n="Charts">Charts</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a class="menu-link" href="charts-apex.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="Apex Charts">Apex Charts</div>
</a>
</li>
<li class="menu-item">
<a class="menu-link" href="charts-chartjs.html">
<i class="menu-icon tf-icons mdi mdi-circle-medium mdi-20px"></i>
<div data-i18n="ChartJS">ChartJS</div>
</a>
</li>
</ul>
</li>
<li class="menu-item">
<a class="menu-link" href="maps-leaflet.html">
<i class="menu-icon tf-icons mdi mdi-map-outline"></i>
<div data-i18n="Leaflet Maps">Leaflet Maps</div>
</a>
</li>
</ul>
</li>
</ul>
</div>
</aside>
<!-- / Menu -->
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
<div class="row gy-4">
<!-- Gamification Card -->
<div class="col-md-12 col-lg-8">
<div class="card h-100">
<div class="d-flex align-items-end row">
<div class="col-md-6 order-2 order-md-1">
<div class="card-body">
<h4 class="card-title pb-xl-2">Congratulations John!ð</h4>
<p class="mb-0">You have done <span class="h6 mb-0">68%</span>ð more sales today.</p>
<p>Check your new badge in your profile.</p>
<a class="btn btn-primary" href="javascript:;">View Profile</a>
</div>
</div>
<div class="col-md-6 text-center text-md-end order-1 order-md-2">
<div class="card-body pb-0 px-0 px-md-4 ps-0">
<img alt="View Profile" data-app-dark-img="illustrations/illustration-john-dark.png" data-app-light-img="illustrations/illustration-john-light.png" height="180" src="../../assets/img/illustrations/illustration-john-light.png"/>
</div>
</div>
</div>
</div>
</div>
<!--/ Gamification Card -->
<!-- Statistics Total Order -->
<div class="col-lg-2 col-sm-6">
<div class="card h-100">
<div class="card-body">
<div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
<div class="avatar">
<div class="avatar-initial bg-label-primary rounded">
<i class="mdi mdi-cart-plus mdi-24px"></i>
</div>
</div>
<div class="d-flex align-items-center">
<p class="mb-0 text-success me-1">+22%</p>
<i class="mdi mdi-chevron-up text-success"></i>
</div>
</div>
<div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
<h5 class="mb-2">155k</h5>
<p class="mb-lg-2 mb-xl-3">Total Orders</p>
<div class="badge bg-label-secondary rounded-pill">Last 4 Month</div>
</div>
</div>
</div>
</div>
<!--/ Statistics Total Order -->
<!-- Sessions line chart -->
<div class="col-lg-2 col-sm-6">
<div class="card h-100">
<div class="card-header pb-0">
<div class="d-flex align-items-end mb-1 flex-wrap gap-2">
<h4 class="mb-0 me-2">$38.5k</h4>
<p class="mb-0 text-success">+62%</p>
</div>
<span class="d-block mb-2 text-body">Sessions</span>
</div>
<div class="card-body pt-0">
<div id="sessions"></div>
</div>
</div>
</div>
<!--/ Sessions line chart -->
<!-- Total Transactions & Report Chart -->
<div class="col-12 col-xl-8">
<div class="card h-100">
<div class="row">
<div class="col-md-7 col-12 order-2 order-md-0">
<div class="card-header">
<h5 class="mb-0">Total Transactions</h5>
</div>
<div class="card-body">
<div id="totalTransactionChart"></div>
</div>
</div>
<div class="col-md-5 col-12 border-start">
<div class="card-header">
<div class="d-flex justify-content-between">
<h5 class="mb-1">Report</h5>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn p-0" data-bs-toggle="dropdown" id="totalTransaction" type="button">
<i class="mdi mdi-dots-vertical mdi-24px"></i>
</button>
<div aria-labelledby="totalTransaction" class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="javascript:void(0);">Refresh</a>
<a class="dropdown-item" href="javascript:void(0);">Share</a>
<a class="dropdown-item" href="javascript:void(0);">Update</a>
</div>
</div>
</div>
<p class="mb-0 text-body">Last month transactions $234.40k</p>
</div>
<div class="card-body pt-3">
<div class="row">
<div class="col-6 border-end">
<div class="d-flex flex-column align-items-center">
<div class="avatar">
<div class="avatar-initial bg-label-success rounded">
<div class="mdi mdi-trending-up mdi-24px"></div>
</div>
</div>
<p class="my-2">This Week</p>
<h6 class="mb-0">+82.45%</h6>
</div>
</div>
<div class="col-6">
<div class="d-flex flex-column align-items-center">
<div class="avatar">
<div class="avatar-initial bg-label-primary rounded">
<div class="mdi mdi-trending-down mdi-24px"></div>
</div>
</div>
<p class="my-2">This Week</p>
<h6 class="mb-0">-24.86%</h6>
</div>
</div>
</div>
<hr class="my-4"/>
<div class="d-flex justify-content-around flex-wrap gap-2">
<div>
<p class="mb-1">Performance</p>
<h6 class="mb-0">+94.15%</h6>
</div>
<div>
<button class="btn btn-primary" type="button">view report</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--/ Total Transactions & Report Chart -->
<!-- Performance Chart -->
<div class="col-12 col-xl-4 col-md-6">
<div class="card h-100">
<div class="card-header pb-1">
<div class="d-flex justify-content-between">
<h5 class="mb-1">Performance</h5>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn p-0" data-bs-toggle="dropdown" id="performanceDropdown" type="button">
<i class="mdi mdi-dots-vertical mdi-24px"></i>
</button>
<div aria-labelledby="performanceDropdown" class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
<a class="dropdown-item" href="javascript:void(0);">Last Month</a>
<a class="dropdown-item" href="javascript:void(0);">Last Year</a>
</div>
</div>
</div>
</div>
<div class="card-body pb-0 pt-1">
<div id="performanceChart"></div>
</div>
</div>
</div>
<!--/ Performance Chart -->
<!-- Project Statistics -->
<div class="col-md-6 col-xl-4">
<div class="card h-100">
<div class="card-header d-flex align-items-center justify-content-between">
<h5 class="card-title m-0 me-2">Project Statistics</h5>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn p-0" data-bs-toggle="dropdown" id="projectStatus" type="button">
<i class="mdi mdi-dots-vertical mdi-24px"></i>
</button>
<div aria-labelledby="projectStatus" class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
<a class="dropdown-item" href="javascript:void(0);">Last Month</a>
<a class="dropdown-item" href="javascript:void(0);">Last Year</a>
</div>
</div>
</div>
<div class="d-flex justify-content-between py-2 px-4 border-bottom">
<h6 class="mb-0 small">NAME</h6>
<h6 class="mb-0 small">BUDGET</h6>
</div>
<div class="card-body">
<ul class="p-0 m-0">
<li class="d-flex mb-4">
<div class="avatar avatar-md flex-shrink-0 me-3">
<div class="avatar-initial bg-lighter rounded">
<div>
<img alt="User" class="h-25" src="../../assets/img/icons/misc/3d-illustration.png"/>
</div>
</div>
</div>
<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
<div class="me-2">
<h6 class="mb-0">3D Illustration</h6>
<small>Blender Illustration</small>
</div>
<div class="badge bg-label-primary rounded-pill">$6,500</div>
</div>
</li>
<li class="d-flex mb-4">
<div class="avatar avatar-md flex-shrink-0 me-3">
<div class="avatar-initial bg-lighter rounded">
<div>
<img alt="User" class="h-25" src="../../assets/img/icons/misc/finance-app-design.png"/>
</div>
</div>
</div>
<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
<div class="me-2">
<h6 class="mb-0">Finance App Design</h6>
<small>Figma UI Kit</small>
</div>
<div class="badge bg-label-primary rounded-pill">$4,290</div>
</div>
</li>
<li class="d-flex mb-4">
<div class="avatar avatar-md flex-shrink-0 me-3">
<div class="avatar-initial bg-lighter rounded">
<div>
<img alt="User" class="h-25" src="../../assets/img/icons/misc/4-square.png"/>
</div>
</div>
</div>
<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
<div class="me-2">
<h6 class="mb-0">4 Square</h6>
<small>Android Application</small>
</div>
<div class="badge bg-label-primary rounded-pill">$44,500</div>
</div>
</li>
<li class="d-flex mb-4">
<div class="avatar avatar-md flex-shrink-0 me-3">
<div class="avatar-initial bg-lighter rounded">
<div>
<img alt="User" class="h-25" src="../../assets/img/icons/misc/delta-web-app.png"/>
</div>
</div>
</div>
<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
<div class="me-2">
<h6 class="mb-0">Delta Web App</h6>
<small>React Dashboard</small>
</div>
<div class="badge bg-label-primary rounded-pill">$12,690</div>
</div>
</li>
<li class="d-flex">
<div class="avatar avatar-md flex-shrink-0 me-3">
<div class="avatar-initial bg-lighter rounded">
<div>
<img alt="User" class="h-25" src="../../assets/img/icons/misc/ecommerce-website.png"/>
</div>
</div>
</div>
<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
<div class="me-2">
<h6 class="mb-0">eCommerce Website</h6>
<small>Vue + Laravel</small>
</div>
<div class="badge bg-label-primary rounded-pill">$10,850</div>
</div>
</li>
</ul>
</div>
</div>
</div>
<!--/ Project Statistics -->
<!-- Multiple widgets -->
<div class="col-md-6 col-xl-4">
<div class="row g-4">
<!-- Total Revenue chart -->
<div class="col-md-6 col-sm-6">
<div class="card h-100">
<div class="card-header pb-0">
<div class="d-flex align-items-end mb-1 flex-wrap gap-2">
<h4 class="mb-0 me-2">$42.5k</h4>
<p class="mb-0 text-danger">-22%</p>
</div>
<span class="d-block mb-2 text-body">Total Revenue</span>
</div>
<div class="card-body">
<div id="totalRevenue"></div>
</div>
</div>
</div>
<!--/ Total Revenue chart -->
<div class="col-md-6 col-sm-6">
<div class="card h-100">
<div class="card-body">
<div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
<div class="avatar">
<div class="avatar-initial bg-label-success rounded">
<i class="mdi mdi-currency-usd mdi-24px"></i>
</div>
</div>
<div class="d-flex align-items-center">
<p class="mb-0 text-success me-1">+38%</p>
<i class="mdi mdi-chevron-up text-success"></i>
</div>
</div>
<div class="card-info mt-4 pt-3">
<h5 class="mb-2">$13.4k</h5>
<p class="text-body">Total Sales</p>
<div class="badge bg-label-secondary rounded-pill mt-1">Last Six Month </div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="card h-100">
<div class="card-body">
<div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
<div class="avatar">
<div class="avatar-initial bg-label-info rounded">
<i class="mdi mdi-link mdi-24px"></i>
</div>
</div>
<div class="d-flex align-items-center">
<p class="mb-0 text-success me-1">+62%</p>
<i class="mdi mdi-chevron-up text-success"></i>
</div>
</div>
<div class="card-info mt-4 pt-4">
<h5 class="mb-2">142.8k</h5>
<p class="text-body">Total Impression</p>
<div class="badge bg-label-secondary rounded-pill">Last One Year</div>
</div>
</div>
</div>
</div>
<!-- overview Radial chart -->
<div class="col-md-6 col-sm-6">
<div class="card h-100">
<div class="card-header pb-0">
<div class="d-flex align-items-end mb-1 flex-wrap gap-2">
<h4 class="mb-0 me-2">$67.1k</h4>
<p class="mb-0 text-success">+49%</p>
</div>
<span class="d-block mb-2 text-body">Overview</span>
</div>
<div class="card-body pt-0">
<div class="d-flex align-items-center" id="overviewChart"></div>
</div>
</div>
</div>
<!--/ overview Radial chart -->
</div>
</div>
<!--/ Multiple widgets -->
<!-- Sales Country Chart -->
<div class="col-12 col-xl-4 col-md-6">
<div class="card h-100">
<div class="card-header">
<div class="d-flex justify-content-between">
<h5 class="mb-1">Sales Country</h5>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn p-0" data-bs-toggle="dropdown" id="salesCountryDropdown" type="button">
<i class="mdi mdi-dots-vertical mdi-24px"></i>
</button>
<div aria-labelledby="salesCountryDropdown" class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
<a class="dropdown-item" href="javascript:void(0);">Last Month</a>
<a class="dropdown-item" href="javascript:void(0);">Last Year</a>
</div>
</div>
</div>
<p class="mb-0 text-body">Total $42,580 Sales</p>
</div>
<div class="card-body pb-1 px-0">
<div id="salesCountryChart"></div>
</div>
</div>
</div>
<!--/ Sales Country Chart -->
<!-- Top Referral Source  -->
<div class="col-12 col-xl-8">
<div class="card h-100">
<div class="card-header d-flex justify-content-between">
<div class="card-title m-0">
<h5 class="mb-1">Top Referral Sources</h5>
<p class="text-body mb-0">82% Activity Growth</p>
</div>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn p-0" data-bs-toggle="dropdown" id="earningReportsTabsId" type="button">
<i class="mdi mdi-dots-vertical mdi-24px"></i>
</button>
<div aria-labelledby="earningReportsTabsId" class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="javascript:void(0);">View More</a>
<a class="dropdown-item" href="javascript:void(0);">Delete</a>
</div>
</div>
</div>
<div class="card-body pb-3">
<ul class="nav nav-tabs nav-tabs-widget pb-3 gap-4 mx-1 d-flex flex-nowrap" role="tablist">
<li class="nav-item">
<div aria-controls="navs-orders-id" aria-selected="true" class="nav-link btn active d-flex flex-column align-items-center justify-content-center" data-bs-target="#navs-orders-id" data-bs-toggle="tab" role="tab">
<button class="btn btn-icon rounded-pill btn-label-google-plus" type="button">
<i class="mdi mdi-google mdi-20px"></i>
</button>
</div>
</li>
<li class="nav-item">
<div aria-controls="navs-sales-id" aria-selected="false" class="nav-link btn d-flex flex-column align-items-center justify-content-center" data-bs-target="#navs-sales-id" data-bs-toggle="tab" role="tab">
<button class="btn btn-icon rounded-pill btn-label-facebook" type="button">
<i class="mdi mdi-facebook mdi-20px"></i>
</button>
</div>
</li>
<li class="nav-item">
<div aria-controls="navs-profit-id" aria-selected="false" class="nav-link btn d-flex flex-column align-items-center justify-content-center" data-bs-target="#navs-profit-id" data-bs-toggle="tab" role="tab">
<button class="btn btn-icon rounded-pill btn-label-instagram" type="button">
<i class="mdi mdi-instagram mdi-20px"></i>
</button>
</div>
</li>
<li class="nav-item">
<div aria-controls="navs-income-id" aria-selected="false" class="nav-link btn d-flex flex-column align-items-center justify-content-center" data-bs-target="#navs-income-id" data-bs-toggle="tab" role="tab">
<button class="btn btn-icon rounded-pill btn-label-twitter" type="button">
<i class="mdi mdi-twitter mdi-20px"></i>
</button>
</div>
</li>
<li class="nav-item">
<div aria-selected="false" class="nav-link btn d-flex align-items-center justify-content-center disabled" data-bs-toggle="tab" role="tab">
<button class="btn btn-icon rounded bg-label-secondary" type="button">
<i class="mdi mdi-plus mdi-20px"></i>
</button>
</div>
</li>
</ul>
<div class="tab-content p-0 ms-0 ms-sm-2">
<div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
<div class="table-responsive text-nowrap">
<table class="table table-borderless">
<thead class="border-bottom">
<tr>
<th class="fw-medium ps-0 text-heading">Parameter</th>
<th class="pe-0 fw-medium text-heading">Status</th>
<th class="pe-0 fw-medium text-heading">Conversion</th>
<th class="pe-0 text-end text-heading">total revenue</th>
</tr>
</thead>
<tbody>
<tr>
<td class="h6 ps-0">Email Marketing Campaign</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
<td class="pe-0 text-success">+24%</td>
<td class="pe-0 text-end h6">$42,857</td>
</tr>
<tr>
<td class="h6 ps-0">Google Workspace</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-warning">Completed</span></td>
<td class="text-danger pe-0">-12%</td>
<td class="pe-0 text-end h6">$850</td>
</tr>
<tr>
<td class="h6 ps-0">Affiliation Program</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
<td class="text-success pe-0">+24%</td>
<td class="pe-0 text-end h6">$5,576</td>
</tr>
<tr>
<td class="h6 ps-0">Google Adsense</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-info">In Draft</span></td>
<td class="text-success pe-0">0%</td>
<td class="pe-0 text-end h6">$0</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
<div class="table-responsive text-nowrap">
<table class="table table-borderless">
<thead class="border-bottom">
<tr>
<th class="fw-medium ps-0 text-heading">parameter</th>
<th class="pe-0 fw-medium text-heading">Status</th>
<th class="pe-0 fw-medium text-heading">Conversion</th>
<th class="pe-0 text-end text-heading">total revenue</th>
</tr>
</thead>
<tbody>
<tr>
<td class="h6 ps-0">Create Audiences in Ads Manager</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
<td class="pe-0 text-danger">-8%</td>
<td class="pe-0 text-end h6">$322</td>
</tr>
<tr>
<td class="h6 ps-0">Facebook page advertising</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
<td class="text-success pe-0">+19%</td>
<td class="pe-0 text-end h6">$5,634</td>
</tr>
<tr>
<td class="h6 ps-0">Messenger advertising</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-danger">Expired</span></td>
<td class="text-danger pe-0">-23%</td>
<td class="pe-0 text-end h6">$751</td>
</tr>
<tr>
<td class="h6 ps-0">Video campaign</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-warning">Completed</span></td>
<td class="text-success pe-0">+21%</td>
<td class="pe-0 text-end h6">$3,585</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="tab-pane fade" id="navs-profit-id" role="tabpanel">
<div class="table-responsive text-nowrap">
<table class="table table-borderless">
<thead class="border-bottom">
<tr>
<th class="fw-medium ps-0 text-heading">parameter</th>
<th class="pe-0 fw-medium text-heading">Status</th>
<th class="pe-0 fw-medium text-heading">Conversion</th>
<th class="pe-0 text-end text-heading">total revenue</th>
</tr>
</thead>
<tbody>
<tr>
<td class="h6 ps-0">Create shopping advertising</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-info">In Draft</span></td>
<td class="pe-0 text-danger">-15%</td>
<td class="pe-0 text-end h6">$599</td>
</tr>
<tr>
<td class="h6 ps-0">IGTV advertising</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-warning">Completed</span></td>
<td class="text-success pe-0">+37%</td>
<td class="pe-0 text-end h6">$1,467</td>
</tr>
<tr>
<td class="h6 ps-0">Collection advertising</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-info">In Draft</span></td>
<td class="text-danger pe-0">0%</td>
<td class="pe-0 text-end h6">$0</td>
</tr>
<tr>
<td class="h6 ps-0">Stories advertising</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
<td class="text-success pe-0">+29%</td>
<td class="pe-0 text-end h6">$4,546</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="tab-pane fade" id="navs-income-id" role="tabpanel">
<div class="table-responsive text-nowrap">
<table class="table table-borderless">
<thead class="border-bottom">
<tr>
<th class="fw-medium ps-0 text-heading">Parameter</th>
<th class="pe-0 fw-medium text-heading">Status</th>
<th class="pe-0 fw-medium text-heading">Conversion</th>
<th class="pe-0 text-end text-heading">total revenue</th>
</tr>
</thead>
<tbody>
<tr>
<td class="h6 ps-0">Interests advertising</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-danger">Expired</span></td>
<td class="pe-0 text-success">+2%</td>
<td class="pe-0 text-end h6">$404</td>
</tr>
<tr>
<td class="h6 ps-0">Community advertising</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
<td class="text-success pe-0">+25%</td>
<td class="pe-0 text-end h6">$399</td>
</tr>
<tr>
<td class="h6 ps-0">Device advertising</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-warning">Completed</span></td>
<td class="text-success pe-0">+21%</td>
<td class="pe-0 text-end h6">$177</td>
</tr>
<tr>
<td class="h6 ps-0">Campaigning</td>
<td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
<td class="text-danger pe-0">-5%</td>
<td class="pe-0 text-end h6">$1,139</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<!--/ Top Referral Source  -->
<!-- Weekly Sales Chart-->
<div class="col-12 col-xl-4 col-md-6">
<div class="card h-100">
<div class="card-header">
<div class="d-flex justify-content-between">
<h5 class="mb-1">Weekly Sales</h5>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn p-0" data-bs-toggle="dropdown" id="weeklySalesDropdown" type="button">
<i class="mdi mdi-dots-vertical mdi-24px"></i>
</button>
<div aria-labelledby="weeklySalesDropdown" class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="javascript:void(0);">Refresh</a>
<a class="dropdown-item" href="javascript:void(0);">Update</a>
<a class="dropdown-item" href="javascript:void(0);">Share</a>
</div>
</div>
</div>
<p class="text-body mb-0">Total 85.4k Sales</p>
</div>
<div class="card-body">
<div class="row mb-2">
<div class="col-6 d-flex align-items-center">
<div class="avatar">
<div class="avatar-initial bg-label-primary rounded">
<i class="mdi mdi-trending-up mdi-24px"></i>
</div>
</div>
<div class="ms-3 d-flex flex-column">
<small class="text-body mb-1">Net Income</small>
<h6 class="mb-0">$438.5K</h6>
</div>
</div>
<div class="col-6 d-flex align-items-center">
<div class="avatar">
<div class="avatar-initial bg-label-warning rounded">
<i class="mdi mdi-currency-usd mdi-24px"></i>
</div>
</div>
<div class="ms-3 d-flex flex-column">
<small class="text-body mb-1">Expense</small>
<h6 class="mb-0">$22.4K</h6>
</div>
</div>
</div>
<div id="weeklySalesChart"></div>
</div>
</div>
</div>
<!--/ Weekly Sales Chart-->
<!-- visits By Day Chart-->
<div class="col-12 col-xl-4 col-md-6">
<div class="card h-100">
<div class="card-header pb-1">
<div class="d-flex justify-content-between">
<h5 class="mb-1">Visits by Day</h5>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn p-0" data-bs-toggle="dropdown" id="visitsByDayDropdown" type="button">
<i class="mdi mdi-dots-vertical mdi-24px"></i>
</button>
<div aria-labelledby="visitsByDayDropdown" class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="javascript:void(0);">Refresh</a>
<a class="dropdown-item" href="javascript:void(0);">Update</a>
<a class="dropdown-item" href="javascript:void(0);">Share</a>
</div>
</div>
</div>
<p class="mb-0 text-body">Total 248.5k Visits</p>
</div>
<div class="card-body pt-0">
<div id="visitsByDayChart"></div>
<div class="d-flex justify-content-between mt-3">
<div>
<h6 class="mb-1">Most Visited Day</h6>
<p class="mb-0">Total 62.4k Visits on Thursday</p>
</div>
<div class="avatar">
<div class="avatar-initial bg-label-warning rounded">
<i class="mdi mdi-chevron-right mdi-24px scaleX-n1-rtl"></i>
</div>
</div>
</div>
</div>
</div>
</div>
<!--/ visits By Day Chart-->
<!-- Activity Timeline -->
<div class="col-12 col-xl-8">
<div class="card h-100">
<div class="card-header">
<div class="d-flex justify-content-between">
<h5 class="mb-1">Activity Timeline</h5>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn p-0" data-bs-toggle="dropdown" id="timelineDropdown" type="button">
<i class="mdi mdi-dots-vertical mdi-24px"></i>
</button>
<div aria-labelledby="timelineDropdown" class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
<a class="dropdown-item" href="javascript:void(0);">Last Month</a>
<a class="dropdown-item" href="javascript:void(0);">Last Year</a>
</div>
</div>
</div>
</div>
<div class="card-body pt-4 pb-1">
<ul class="timeline card-timeline mb-0">
<li class="timeline-item timeline-item-transparent">
<span class="timeline-point timeline-point-primary"></span>
<div class="timeline-event">
<div class="timeline-header mb-1">
<h6 class="mb-2">Create youtube video for next product ð</h6>
<small class="text-muted">Tomorrow</small>
</div>
<p class="mb-2">Product introduction and details video</p>
<div class="d-flex">
<a class="text-truncate" href="https://www.youtube.com/@pixinvent1515" target="_blank">
<span class="badge badge-center rounded-pill bg-danger w-px-20 h-px-20 me-2">
<i class="mdi mdi-play text-white"></i>
</span>
<span class="fw-medium">https://www.youtube.com/@pixinvent1515</span>
</a>
</div>
</div>
</li>
<li class="timeline-item timeline-item-transparent">
<span class="timeline-point timeline-point-info"></span>
<div class="timeline-event">
<div class="timeline-header mb-1">
<h6 class="mb-2">Received payment from usa client ð
                </h6>
<small class="text-muted">January, 18</small>
</div>
<p class="mb-2">Received payment $1,490 for banking ios app</p>
</div>
</li>
<li class="timeline-item timeline-item-transparent border-transparent">
<span class="timeline-point timeline-point-warning"></span>
<div class="timeline-event pb-1">
<div class="timeline-header mb-1">
<h6 class="mb-2">Meeting with joseph morgan for next project</h6>
<small class="text-muted">April, 23</small>
</div>
<p class="mb-2">Meeting Video call on zoom at 9pm</p>
<div class="d-flex">
<a class="me-3" href="javascript:void(0)">
<img alt="PDF image" class="me-2" src="../../assets/img/icons/misc/pdf.png" width="20"/>
<span class="fw-medium">presentation.pdf</span>
</a>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
<!-- Activity Timeline -->
</div>
</div>
<!--/ Content -->
<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
<div class="container-xxl">
<div class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
<div class="mb-2 mb-md-0">
        Â© <script>
        document.write(new Date().getFullYear())

        </script>, made with <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span> by <a class="footer-link fw-medium" href="https://pixinvent.com" target="_blank">Pixinvent</a>
</div>
<div class="d-none d-lg-inline-block">
<a class="footer-link me-4" href="https://themeforest.net/licenses/standard" target="_blank">License</a>
<a class="footer-link me-4" href="https://1.envato.market/pixinvent_portfolio" target="_blank">More Themes</a>
<a class="footer-link me-4" href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/" target="_blank">Documentation</a>
<a class="footer-link d-none d-sm-inline-block" href="https://pixinvent.ticksy.com/" target="_blank">Support</a>
</div>
</div>
</div>
</footer>
<!-- / Footer -->
<div class="content-backdrop fade"></div>
</div>
<!--/ Content wrapper -->
</div>
<!--/ Layout container -->
</div>
</div>
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>
<!--/ Layout wrapper -->
<div class="buy-now">
<a class="btn btn-danger btn-buy-now" href="https://1.envato.market/materialize_admin" target="_blank">Buy Now</a>
</div>
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../assets/vendor/libs/popper/popper.js"></script>
<script src="../../assets/vendor/js/bootstrap.js"></script>
<script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../../assets/vendor/libs/hammer/hammer.js"></script>
<script src="../../assets/vendor/libs/i18n/i18n.js"></script>
<script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="../../assets/vendor/js/menu.js"></script>
<!-- endbuild -->
<!-- Vendors JS -->
<script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="../../assets/vendor/libs/swiper/swiper.js"></script>
<!-- Main JS -->
<script src="../../assets/js/main.js"></script>
<!-- Page JS -->
<script src="../../assets/js/dashboards-analytics.js"></script>
</body>
</html>
<!-- beautify ignore:end -->
