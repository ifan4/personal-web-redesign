<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" id="navbar-admin">
    <div class="container">
      
      <a class="navbar-brand" href="#">
        <button onclick="hideSidebar()" type="button" class="btn btn-light" id="btn-slide-sidebar">
          <i class="bi bi-arrow-bar-left" id="icon-slide-bar"></i>
        </button>
      </a>
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle link-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="/assets/ifana.jpg" alt="ifana" class="rounded-circle me-1" width="35px">
          {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li>
            <form method="post" action="/admin/logout">
              @csrf
              <button type="submit" class="dropdown-item" href="#">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>