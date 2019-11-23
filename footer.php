
<script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>


<footer class="footer mt-auto py-3">
  <div class="container">
    
    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
	<a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
	<a href="https://www.google.com.tw/" class="fa fa-google"></a>
	<a href="https://ca.linkedin.com/" class="fa fa-linkedin"></a>
	<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
	<a href="https://www.instagram.com/" class="fa fa-instagram"></a>

    <?php displayCopyrightInfo(); ?>

    <?php 

session_start(); 

if(isset($_SESSION['views'])) 
	$_SESSION['views'] = $_SESSION['views']+1; 
else
	$_SESSION['views']=1; 
	
echo"Number of Times Website Viewed = ".$_SESSION['views']; 

?> 


  </div>
</footer>


</body>


</html>