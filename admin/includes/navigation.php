<!-- Main navigation -->
<nav class="navbar navbar-default ">
  <div class="container">
    <nav>
      <ul class="nav navbar-nav">
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="addpost.php">Add post</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a></li>
        <li><a>Welcome <span class="admin"><?php echo $user_data['first_name']; ?></span></a></li>
      </ul>

    </nav>
  </div><!--end container -->
</nav>
