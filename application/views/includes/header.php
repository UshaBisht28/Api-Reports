<style>
  .nav-item{
    font-size: 1.2rem;
    font-weight: 600;
    text-transform: capitalize;
  }
  .navbar{
    background: #fff;
    box-shadow: 0px 3px 21px 0px rgba(89, 100, 255, 0.08);
    padding: 1rem;
  }
  .nav-link{
    font-size: 1.8rem;
    font-weight: 500;
    margin-right: 2rem;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="home">
          <img src="<?php echo base_url() ?>assets/image/inditab.png" alt="Inditab" width="100" height="auto" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
           <!--  <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Documentation
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Json Api Documentation</a></li>
                <li><a class="dropdown-item" href="#">Pdf Api Documentation</a></li>
                <li><a class="dropdown-item" href="#">API SDK's</a></li>
              </ul>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>