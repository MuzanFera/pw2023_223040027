<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Bandung | SignUp</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="container main">
        <div
          class="row"
          style="
            width: 900px;
            height: 550px;
            border-radius: 10px;
            background: #000000e7;
            box-shadow: 5px 5px 10px 1px rgba(0, 0, 0, 0.2);
          "
        >
          <div class="col-md-6 side-image">
            <!-- image -->
            <img class="img-logres" src="" alt="" />
            <div class="text">
              <p></p>
            </div>
          </div>
          <div class="col-md-6 right">
            <div class="input-box">
              <header>Create account</header>
              <div class="input-field">
                <input
                  type="text"
                  class="input"
                  id="username"
                  autocomplete="off"
                  required
                />
                <label for="email">Username</label>
              </div>
              <div class="input-field">
                <input
                  type="text"
                  class="input"
                  id="email"
                  autocomplete="off"
                  required
                />
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input
                  type="password"
                  class="input"
                  id="password"
                  autocomplete="off"
                  required
                />
                <label for="password">Password</label>
              </div>
              <div class="input-field">
                <input type="submit" class="submit" value="Sign Up" />
              </div>
              <div class="signin">
                <span>Sudah memiliki akun? <a href="login.php">Login</a></span>
              </div>
              <div class="signin">
                <span><a href="index.php">Masuk</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/bootstrap/bootstrap.min.js"></script>
  </body>
</html>
