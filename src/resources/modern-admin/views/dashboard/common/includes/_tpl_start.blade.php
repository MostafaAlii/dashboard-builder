<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="{{app()->getLocale() === 'ar' ? 'rtl' : 'ltr'}}">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/material-icons/material-icons.css') }}">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/material-vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/meteocons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/morris.css') }}">
    <!-- Latest version of jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.2/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.2/datatables.min.js"></script>
    <!-- END: Vendor CSS-->

    @if(app()->getLocale()=='ar') 
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/material-vendors-rtl.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/selects/select2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
        <link rel="stylesheet" type="text/css"href="{{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/material.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/components.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/bootstrap-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/material-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/material-colors.css') }}">
        <!-- END: Theme CSS-->
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/menu/menu-types/material-vertical-menu-modern.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/loaders/loaders.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/colors/palette-loader.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/colors/palette-gradient.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/pages/timeline.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/pages/dashboard-ecommerce.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/plugins/animate/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-rtl.css') }}">
        <!-- END: Page CSS-->
    @else
        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/material.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/material-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/material-colors.css') }}">
        <!-- END: Theme CSS-->
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/material-vertical-menu-modern.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/timeline.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-ecommerce.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <!-- END: Page CSS-->
    @endif
    
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/all.min.css') }}">
    
    <!-- END: Page CSS-->
    @yield('css')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
