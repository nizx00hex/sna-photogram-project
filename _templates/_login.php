<?php    
    
$username = $_POST['username'];
$password = $_POST['password'];

$result = validateCredentials($email, $password);
if($result){
  ?>
<main class="container">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Login Success.</h1>
    <p class="lead">You can login now.</p>
  </div>
</main>

  <?php
} else {

?>
<main class="form-signin w-100 m-auto">
    <form method="post" action="login.php"> 
        <img
          class="mb-4"
          src="https://nisath.elitefort.net/fortrix.png"
          alt=""
          width="205"
          height="190"
        />
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <div class="form-floating">
          <input
            type="text"
            name="password"
            class="form-control"
            id="floatingInput"
            placeholder="username"
          />
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            name="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
          />
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-check text-start my-3">
          <input
            class="form-check-input"
            type="checkbox"
            value="remember-me"
            id="checkDefault"
          />
          <label class="form-check-label" for="checkDefault">
            Remember me
          </label>
        </div>
        <button class="btn btn-primary w-100 py-2 hvr-grow-rotate" type="submit">
          Sign in
        </button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2025</p>
      </form>
</main>
<?php
}
?>