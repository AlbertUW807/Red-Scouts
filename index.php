<?php

include "include/footer.php";

?>
	
    
    
    <div class="content"><!-- mulai content -->
    	
        <?php
          if(isset($_POST["sign_up"])){include "pages/sign_up.php";}
          elseif(isset($_POST["home"])){include "pages/home.php";}
          elseif(isset($_POST["index"])){include "pages/front.php";}
          elseif(isset($_POST["connect"])){include "pages/connect.php";}
          elseif(isset($_POST["profile"])){include "pages/profile.php";}
          else {include "pages/front.php";}

        ?>

    </div><!-- akhir content -->
	
    
</div>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>