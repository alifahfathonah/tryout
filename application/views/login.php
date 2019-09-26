<!DOCTYPE html>
<html lang="en" >

  <head>
    <meta charset="UTF-8">
    <title>Bedah kampus</title>
    
    
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

    <link rel="stylesheet" href="<?php echo base_url('dst/css/login/style.css'); ?>">
   
  </head>

  <body>

    <p class="tip"></p>
    <div class="cont">
      <div class="form sign-in">
        <h2>LOGIN</h2>
        <?php echo form_open('siswa/login'); ?>
          <label>
            <span>Email</span>
            <input type="email" name="email">
          </label>
          <label>
            <span>Password</span>
            <input type="password" name="password">
          </label>
          <p class="forgot-pass">Forgot password?</p>
          <button type="submit" class="submit">Sign In</button>
        <?php echo form_close(); ?>
      </div>
      <div class="sub-cont">
        <div class="img">
          <div class="img__text m--up">
            <h2>Belum terdaftar?</h2>
            <p>Sign up dan ikuti try out bedah kampus </p>
          </div>
          <div class="img__text m--in">
            <h2>sudah memiliki akun tryout?</h2>
            <p>jika anda sudah memiliki akun bedah kampus, silakan login </p>
          </div>
          <div class="img__btn">
            <span class="m--up">Sign Up</span>
            <span class="m--in">Sign In</span>
          </div>
        </div>
        <div class="form sign-up">
          <form action="../Siswa/signup" method="post">
            <label>
              <span>Name</span>
              <input type="text" name="nama" />
            </label>
            <label>
              <span>Email</span>
              <input type="email" name="email" />
            </label>
            <label>
              <span>Password</span>
              <input type="password" name="password" />
            </label>
            <label>
              <span>tgl lahir</span>
              <input type="date" name="tgl_lhr" />
            </label>
            <label>
              <span>telpon</span>
              <input type="text" name="tlp" />
            </label>
            <button type="submit" class="submit">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
    <script  src="<?php echo base_url('dst/js/index.js'); ?>"></script>

  </body>

</html>
