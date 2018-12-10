<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
    @extends('layouts.partials.scripts')
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        @include('layouts.partials.Navbar-header')
        @include('layouts.partials.side-bar')
    </nav>


    <div id="page-wrapper">
        @yield('BlankContent')
        @yield("gridContent")
        @yield("IndexContent")
        @yield("flotContent")
        @yield("FormContent")
    </div>

</div>
<!-- /#wrapper -->

@include('layouts.footer')
