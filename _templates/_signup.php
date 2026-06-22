<?php


$signup = false;
if(isset($_POST['username']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $error = User::signup($username, $password, $email, $phone);
    // var_dump($error);
    // exit;
    $signup = true;
}

if($signup){
  ?>
    <?php 
    if(!$error) {
    ?>
        <main class="container">
            <div class="bg-body-tertiary p-5 rounded">
                <h1>Registration Success.</h1>
                <p class="lead">You can login now. <a href="/login.php">Here.</a></p>
            </div>
        </main>
    <?php        
    } else {
    ?>
        <main class="container">
            <div class="bg-body-tertiary p-5 rounded">
                <h1>Registration Failed.</h1>
                <p class="lead">Something went wrong, <?php echo $error?><a href="/signup.php">Register again.</a></p>
            </div>
        </main>
    <?php
    }
    ?>

  <?php
} else {

?>
<main class="form-signin w-100 m-auto">
    <form method="post" action="signup.php"> 
        <img
          class="mb-4"
          src="https://nisath.elitefort.net/fortrix.png"
          alt=""
          width="205"
          height="190"
        />
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
        
        <div class="form-floating">
          <input
            type="text"
            name="username"
            class="form-control"
            id="floatingInput"
            placeholder="name@example.com"
          />
          <label for="floatingInput">Username</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            name="phone"
            class="form-control"
            id="floatingInput"
            placeholder="name@example.com"
          />
          <label for="floatingInput">Phone</label>
        </div>

        <div class="form-floating">
          <input
            type="email"
            name="email"
            class="form-control"
            id="floatingInput"
            placeholder="name@example.com"
          />
          <label for="floatingInput">Email address</label>
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
          <!-- <label class="form-check-label" for="checkDefault">
            Remember me
          </label> -->
        </div>
        <button class="btn btn-primary w-100 py-2 hvr-grow-rotate" type="submit">
          Sign up
          
        </button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2025</p>
      </form>
</main>
<?php
}
?>