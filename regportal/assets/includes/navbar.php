<div class="container-fluid nav_bg px-0 fixed-top">  
  <div class="row">
    <div class="col-md-12 py-1">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{% url 'home">
          <img src="assets/images/Tyro.png" alt="" width="60" height="30"
            class="d-inline-block align-text-top">
          <!-- <img src="images/q1.png" alt="" width="80" height="30"
            class="d-inline-block align-text-top"> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
              <a href="home.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="signup.html">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../index.php">Logout</a>
            </li>
            <!-- {% endif %} -->
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>