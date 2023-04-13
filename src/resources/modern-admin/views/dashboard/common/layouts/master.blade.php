@include('dashboard.common.includes._tpl_start')
@include('dashboard.common.includes._header')
@include('dashboard.common.includes._sidebar')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-header row"></div>
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->
@include('dashboard.common.includes._footer')
@include('dashboard.common.includes._tpl_end')
