@include('dashboard.common.includes.login._tpl_start')

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

@include('dashboard.common.includes.login._tpl_end')