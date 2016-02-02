<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->
    @include('layout.header')
<!-- END HEADER -->

<!-- BEGIN PAGE CONTAINER -->
<div class="wrapper wrapper-content">
    <div class="container">

    @yield('content')

    </div>
</div>
<!-- END PAGE CONTAINER -->
    @include('layout.bottom')
<!-- BEGIN PRE-FOOTER -->
