<link rel="stylesheet" href="public/style/SignIn.css">
<main id="login">
  <form action="">
    <h1 class="title">Sign In</h1>
    <ul class="inputs">
      <li class="input">
        <p>Username</p>
        <input type="text" id="username">
      </li>
      <li class="input">
        <p>Password</p>
        <input type="password" id="password">
      </li>
      <li class="find-password">
        <a href="#">forgot password?</a>
      </li>
    </ul>
    <div class="buttons">
      <button id="signin-button">Sign in</button>
      <button type="button" id="signup-button" onclick="location.href='/sign-up'">Sign up</button>
    </div>
  </form>
  <div class="video">
    <video src="public/mp4/Login.mp4" autoplay loop muted></video>
  </div>
</main>
<script src="public/script/Login.js"></script>