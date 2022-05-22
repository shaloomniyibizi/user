<link rel="icon" type="image/jpg" href="./mine.jpg">
</head>
<body class="">
    <div role="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="../user/index.php" class="navbar-brand">MYWEB.COM</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../user/index.php">Home</a></li>
          </ul>
          <?php
          if(empty($_SESSION["adminUserid"]) && empty($_SESSION["userid"])) {
            ?>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle bg-success" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Login As <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../user/admin/login.php">Admin</a></li>
                  <li><a href="../user/login.php">User</a></li>
                </ul>
              </li>
            </ul>
            <?php
          }
          ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<!-- Split button -->