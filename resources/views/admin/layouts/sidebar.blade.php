<ul class="nav flex-column" id="sidebar-admin">
    <h1 class="text-center px-2 fs-3 my-3">Admin Ifan's Web</h1>

    <li class="nav-item">
      <a class="nav-link d-flex align-items-center {{ Request::is('admin/home*') ? 'active' : '' }}" aria-current="page" href="home">
        <i class="bi bi-house me-2"></i>
        Home
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link d-flex align-items-center" href="#">
        <i class="bi bi-pencil-square me-2"></i>
        Posts
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link d-flex align-items-center {{ Request::is('admin/feedbacks*') ? 'active' : '' }}" href="feedbacks">
        <i class="bi bi-chat-left-text me-2"></i>
        Feedbacks
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link d-flex align-items-center" href="#">
        <i class="bi bi-journal-code me-2"></i>
        Projects
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link d-flex align-items-center" href="#">
        <i class="bi bi-wrench me-2"></i>
        Skills
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link d-flex align-items-center" href="#">
        <i class="bi bi-diagram-2 me-2"></i>
        Partners
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link d-flex align-items-center" href="#">
        <i class="bi bi-building me-2"></i>
        Works Experience
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link d-flex align-items-center" href="#">
        <i class="bi bi-mortarboard me-2"></i>
        Education
      </a>
    </li>
  </ul>