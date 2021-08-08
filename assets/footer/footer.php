		<script>
			function change() {
			    var decider = document.getElementById('switch');
			    if(decider.checked){
			        document.cookie = "theme=dark";
					location.reload();
			    } else {
			      document.cookie = 'theme=; Max-Age=0';
			      location.reload();
			    }
			}
		</script>
<script src="https://smtpjs.com/v3/smtp.js"></script> 
<script src="../assets/vendor/sweetalert2/js/sweetalert2.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="../assets/vendor/sweetalert2/css/sweetalert2.min.css"></script>
<!--<script src="../Auth/js/jquery-3.6.0.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
-->
</body>
</html>