



{{--map--}}
@stack('location-picker')




{{--@include('sweet::alert')--}}

<!-- Vendor -->
<script src="{{ asset('admin-assets/assets/vendor/jquery/jquery.js')}}"></script>
<script src="{{ asset('admin-assets/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
<script src="{{ asset('admin-assets/assets/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
<script src="{{ asset('admin-assets/assets/vendor/jquery-placeholder/jquery-placeholder.js')}}"></script>
<script src="{{ asset('admin-assets/assets/vendor/jquery-appear/jquery-appear.js')}}"></script>

<script src="{{ asset('admin-assets/assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{ asset('admin-assets/assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
<script src="{{ asset('admin-assets/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('admin-assets/assets/vendor/owl.carousel/owl.carousel.js')}}"></script>
		<!-- Specific Page Vendor -->

<script src="{{ asset('admin-assets/assets/vendor/isotope/isotope.js')}}"></script>
		<!-- Theme Base, Components and Settings -->

<script src="{{ asset('admin-assets/assets/javascripts/theme.js')}}"></script>
		<!-- Theme Custom -->

<script src="{{ asset('admin-assets/assets/javascripts/theme.custom.js')}}"></script>
		<!-- Theme Initialization Files -->

<script src="{{ asset('admin-assets/assets/javascripts/theme.init.js')}}"></script>
		<!-- Examples -->

<script src="{{ asset('admin-assets/assets/javascripts/dashboard/examples.landing.dashboard.js')}}"></script>

		
<script> 

$(document).ready(function(){
   
});
</script>
<script> 
        $(document).ready(function() {
            $('#datatable-default').DataTable();
            $('#datatable-default_filter input').addClass('form-control')
            $('#datatable-default_filter input').css('width','100%');
        	$('td,th').addClass('text-center');
    
        } );
    </script>
@yield('script')
</body>
</html>
