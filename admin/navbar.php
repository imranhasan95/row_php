<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">admin Deshboer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="guest_message.php"> Guest Message

          <!-- <?php
            // require_once '../db.php';

            $get_total_messges_query = "SELECT COUMT(*) AS total_unread_messges FROM message WHERE read_status =1";
            $total_messges_from_db = mysqli_query($db_connent,$get_total_messges_query);
            $after_assoc_total_messges_from_db = mysqli_fetch_assoc($total_messges_from_db);
           ?>

          <span class="badge badge-success"><?=$after_assoc_total_messges_from_db['total_unread_messges']?></span> -->

          <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Dashboard</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!-- <?php
            echo $_SESSION['user_email'];
           ?> -->
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php">profile</a>
          <a class="dropdown-item" href="password_change.php">password_change</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php"> <span class="text-danger">Logout</span></a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
