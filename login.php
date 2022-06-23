<?php include_once('./partials/header.php'); ?>

<main class="mb-5 pb-5 mb-md-0">
  <form action="">
    <!--  <img class="mb-4" src="./assets/logo.png" alt="">  -->
    <h1>Login</h1>
    <div class="form-floating">
      <input type="email" class="form-control" id="" placeholder="Email" autocomplete="on" required>
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me">
        "Remerber me"
      </label>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </div>
    <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
  </form>
</main>

<?php include('./partials/footer.php') ?>