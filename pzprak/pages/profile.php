<?php 
include("bd_connect/auth_session.php");
include("header.php");
?>





<div class="main-content"><!--фулл контент -->

        <div class="main-info">


                    <div class="profile-sect">

                        <div class="img-prof">
                        <img src="../img/userfoto.png" alt="" id="img-profil">
                        </div>
                        
                        <div class="info-prof">  
                           <p> Имя: <?php echo  $_SESSION['user_name_us'];?>  </p>
                            <p> Фамилия:  <?php echo  $_SESSION['user_name_last'];?></p>
                            <p> Год рождения:  <?php echo  $_SESSION['user_birthday'];?></p>
                            <a href="bd_connect/logout.php"><input type="button" value="Выход" class="logaut-btn-profil"></a>
                          
                
                        </div>

                  
          
                    </div>



       
        </div>

</div>