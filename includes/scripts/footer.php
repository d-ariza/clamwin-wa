    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

    <script>
        $(document).ready(function(){
            // https://stackoverflow.com/questions/16237780/get-last-part-of-uri
            var href = window.location.pathname.split("/").slice(-1)[0];
            
            $('.sidebar li a[href="'+href+'"]').closest('li').addClass('active');
    	});
    </script>
