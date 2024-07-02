<div class="wrapper">
    <link rel="stylesheet" type="text/css" href="login.css"> 
    <div class="logo"> <img src=" ../admin/assets/img/logo.jpg" alt=""> </div><br>

    <div class="container">
    <div class="bg-primary text-white text-center">
      <b><p style="text-align: center; font-size: 33; color: #067425; " > Login </p></b>
      <br>
    </div></div>
    
     <form action="../login.php" method="post" class="p-3 mt-3">
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> 
        <input type="text" name="username" id="username" placeholder="Username"> </div>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> 
        <input type="password" name="password" id="pwd" placeholder="Password"> </div> 
        <button type="submit" class="btn masthead-subheading"> Login</button>
     </form>
    </div>