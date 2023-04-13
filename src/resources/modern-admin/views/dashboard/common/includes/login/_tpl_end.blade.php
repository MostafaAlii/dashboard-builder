<!-- BEGIN: Vendor JS-->
<script src="{{ asset('dashboard/app-assets/vendors/js/material-vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('dashboard/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('dashboard/app-assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('dashboard/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('dashboard/app-assets/js/core/app.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('dashboard/app-assets/js/scripts/pages/material-app.js') }}"></script>
<script src="{{ asset('dashboard/app-assets/js/scripts/forms/form-login-register.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- END: Page JS-->
@yield('js')
</body>
<!-- END: Body-->

</html>