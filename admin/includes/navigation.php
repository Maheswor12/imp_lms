 <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Administrator</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="signout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?=($page=="home")?'active':'';?>" href="index.php?page=home">

                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=($page=="pages")?'active':'';?>" href="index.php?page=pages">
                  <span data-feather="file"></span>
                  Pages
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=($page=="student")?'active':'';?>" href="index.php?page=student">
                  <span data-feather="shopping-cart"></span>
                  Students
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=($page=="classes")?'active':'';?>" href="index.php?page=classes">
                  <span data-feather="users"></span>
                  Classes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=($page=="teacher")?'active':'';?>" href="index.php?page=teacher">
                  <span data-feather="bar-chart-2"></span>
                  Teacher
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=($page=="subject")?'active':'';?>" href="index.php?page=subject">
                  <span data-feather="layers"></span>
                  Subject
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=($page=="profile")?'active':'';?>" href="index.php?page=profile">
                  <span data-feather="layers"></span>
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=($page=="picture")?'active':'';?>" href="index.php?page=picture">
                  <span data-feather="layers"></span>
                  Picture
                </a>
              </li>
            </ul>

          </div>
        </nav>
        
       
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
         <?php include 'pages/'.$page.'.php';?>
        </main>
      </div>
    </div>
