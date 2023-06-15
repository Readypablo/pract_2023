<?php 
include("header.php");
require('bd_connect/db.php');
?>


<?php 


if(isset($_REQUEST['first_name'])){
    // имя
    $first_name = stripcslashes($_REQUEST['first_name']);
    $first_name = mysqli_real_escape_string($con,$first_name);
    // фамилия
    $last_name = stripcslashes($_REQUEST['last_name']);
    $last_name = mysqli_real_escape_string($con,$last_name);


    // мобильный
    $mobile = stripcslashes($_REQUEST['mobile']);
    $mobile = mysqli_real_escape_string($con,$mobile);

    // дата
    $birthday = stripcslashes($_REQUEST['birthday']);
    $birthday = mysqli_real_escape_string($con,$birthday);

    // пороль
    $password = stripcslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);

 

    $query = "INSERT into `users` (first_name, last_name, mobile, birthday,password) VALUES ('$first_name', '$last_name', '$mobile', '$birthday', '$password')";



    $ult = mysqli_query($con, $query);

    // чекаем все поля все ли хорошо там
    if($ult){
        echo "      <div class='main-content'>
        <div class='main-info'><div class='form'>
        <h3>Регистрация прошла  спешно!</h3><br/>
        <p class='link'>Вход в профиль<a href='login.php'>Login</a></p>
        </div>  </div>
        </div>";
    }else{
        echo "      <div class='main-content'>
        <div class='main-info'><div class='form'>
        <h3>Вы заполнил не все поля .</h3><br/>
        <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
        </div>  </div>
        </div>";
         }    
    
}else{
    ?>




<div class="main-content"><!--фулл контент -->

        <div class="main-info">
        <form action="" class="form" method="post">
<h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="first_name" placeholder="имя" required />
        <input type="text" class="login-input" name="last_name" placeholder="фамилия" required>

        <input type="text" class="login-input"  minlength="8" name="mobile" placeholder="телефон" required>

        <input type="date" class="login-input" name="birthday" placeholder="Дата рождения" required>


        <input type="password" class="login-input" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>

</form>
        </div>

</div>




<script >
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

    <?php }?>