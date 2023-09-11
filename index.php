<?php include('header.php') ?>

<section class="bg-image vh-100 d-flex">
  <div class="col-3 m-auto">
    <div class="card">
      <div class="card-body">
        <!-- Text added above the login form -->
        <h2 class="text-center mb-4">Welcome to Faculty Management Portal</h2>

        <div class="border rounded-circle mx-auto d-flex" style="width: 100px; height: 100px">
          <img src="geulogo.png" alt="">
        </div>
        <form action="actions/login.php" method="POST">
          <!-- Material input for email -->
          <div class="md-form">
            <input type="email" id="email" name="email" class="form-control">
            <label for="email">Your Email</label>
          </div>
          <!-- Material input for password -->
          <div class="md-form">
            <input type="password" id="password" name="password" class="form-control">
            <label for="password">Your Password</label>
          </div>
          <div class="text-center">
            <button class="btn btn-secondary" name="login">Login</button>
          </div>
        </form>
        
        <!-- Register button with margin-top -->
        <div class="text-center" style="margin-top: 20px;">
          <a href="register.php" class="btn btn-primary">Register</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php') ?>
