<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-header mulish-font fw-bold py-md-3">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/logo-ifn.png') }}" alt="" width="30" class="d-inline-block align-text-middle">
            Ifan.studio
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item me-2">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" 
            href="{{ Request::is('feedback') ? '../' : '#headline-section' }}">
              <i class="bi bi-house-door me-1"></i>
              Home
            </a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link" 
            href="{{ Request::is('/') ? '#project-section' : '../#project-section' }}">
              <i class="bi bi-file-earmark-code me-1"></i>
              Projects
            </a>
          </li>
          <li class="nav-item dropdown me-2">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-list-columns me-1"></i>
              About
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" 
                href="{{ Request::is('/') ? '#skills-section' : '../#skills-section' }}">Skills</a>
              </li>
              <li><a class="dropdown-item" 
                href="{{ Request::is('/') ? '#partners-section' : '../#partners-section' }}">Partners</a>
              </li>
              <li><a class="dropdown-item" 
                href="{{ Request::is('/') ? '#about-section' : '../#about-section' }}">About Me</a>
              </li>
            </ul>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link" href="#" onclick="alert('on development')">
              <i class="bi bi-briefcase me-1"></i>
              Service
            </a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link {{ Request::is('feedback') ? 'active' : '' }}" href="/feedback">
              <i class="bi bi-chat-square-text me-1"></i>
              Feedback
            </a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link" href="#" onclick="alert('on development')">
              <i class="bi bi-journal-album me-1"></i>
              Blog
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>