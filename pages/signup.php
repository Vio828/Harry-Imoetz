<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up - Kizuna</title>
    <link rel="stylesheet" type="text/css" href="/styles/sign-up.css" />
    <link rel="website icon" type="png" href="/image/Logo footer.png" />
  </head>
  <body>
    <div class="Image">
      <img src="/image/Side Background.jpg" alt="" />
    </div>

    <div class="Judul">
      <h1>New Here? Sign up in seconds</h1>
    </div>

    <form action="signup_process.php" method="POST">
      <div class="input">
        <div class="Nama"><h1>Name</h1></div>
        <input type="text" name="name" placeholder="Enter your name" required />

        <div class="Gmail"><h1>Email</h1></div>
        <input
          type="email"
          name="email"
          placeholder="you@example.com"
          required
        />

        <div class="Password"><h1>Password</h1></div>
        <input
          type="password"
          name="password"
          placeholder="Enter your password"
          required
        />

        <div class="Konfirmasi"><h1>Password Confirmation</h1></div>
        <input
          type="password"
          name="confirm"
          placeholder="Confirm your password"
          required
        />
      </div>

      <label class="checkbox-label">
        <input type="checkbox" id="agree" required />
        I agree to all <strong><u>Terms</u></strong> and
        <strong><u>Privacy Policy</u></strong>
      </label>

      <div class="tombol">
        <button type="submit"><h1>Sign Up</h1></button>
      </div>
    </form>

    <div class="divider">
      <hr />
      <span>Or</span>
      <hr />
    </div>

    <div class="social-login">
      <div class="social-icon google">
        <img src="/image/Google.png" alt="Google" />
      </div>
      <div class="social-icon apple">
        <img src="/image/Apple.png" alt="Apple" />
      </div>
      <div class="social-icon facebook">
        <img src="/image/Facebook.png" alt="Facebook" />
      </div>
    </div>

    <div class="akun">
      <h1>
        Already have an account?
        <a href="/pages/sign-in.html"
          ><strong><u>Sign in</u></strong></a
        >
      </h1>
    </div>
  </body>
</html>
