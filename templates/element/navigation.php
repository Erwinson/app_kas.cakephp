<nav class="app-header navbar navbar-expand bg-body">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                  <i class="bi bi-list"></i>
                </a>
              </li>
            </ul>
            <!--end::Start Navbar Links-->
            <!--begin::End Navbar Links-->
            <ul class="navbar-nav ms-auto">
              <!--begin::Navbar Search-->
              <!--end::Navbar Search-->
              <!--begin::Messages Dropdown Menu-->
              <!--end::Messages Dropdown Menu-->
              <!--begin::Notifications Dropdown Menu-->
              <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                  <i class="bi bi-bell-fill"></i>
                  <span class="navbar-badge badge text-bg-warning">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                  <span class="dropdown-item dropdown-header">15 Notifications</span>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class="bi bi-envelope me-2"></i> 4 new messages <span class="float-end text-secondary fs-7">3 mins</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class="bi bi-people-fill me-2"></i> 8 friend requests <span class="float-end text-secondary fs-7">12 hours</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports <span class="float-end text-secondary fs-7">2 days</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
                </div>
              </li>
              <!--end::Notifications Dropdown Menu-->
              <!--begin::Fullscreen Toggle-->
              <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                  <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                  <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i>
                </a>
              </li>
              <!--end::Fullscreen Toggle-->
              <!--begin::User Menu Dropdown-->
              <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <?=$this->Html->image('users/'.$userLogin['Auth']->photo, ['class' => 'user-image rounded-circle shadow', 'alt' => 'photo'])?>
                  <span class="d-none d-md-inline"><?=$userLogin['Auth']->name;?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                  <!--begin::User Image-->
                  <li class="user-header text-bg-primary">
                    <?=$this->Html->image('users/'.$userLogin['Auth']->photo, ['class' => 'rounded-circle shadow', 'alt' => 'photo'])?>
                    <p> <?=$userLogin['Auth']->name;?> <small><?=$userLogin['Auth']->email;?></small>
                    </p>
                  </li>
                  <!--end::User Image-->
                  <!--begin::Menu Footer-->
                  <li class="user-footer">
                    <!-- <a href="#" class="btn btn-default btn-flat">Profile</a>
                    <a href="#" class="btn btn-default btn-flat float-end">Sign out</a> -->
                      <?=$this->Html->link('<i class="bi bi-person"></i>Profile', ['controller' => 'users', 'action' => 'profile', $userLogin['Auth']->id], ['class' => 'btn btn-default btn-flat', 'escape' => false])?>
                      <?=$this->Html->link('<i class="bi bi-box-arrow-right"></i>', ['controller' => 'users', 'action' => 'logout'], ['class' => 'btn btn-default btn-flat float-end', 'escape' => false])?>
                  </li>
                  <!--end::Menu Footer-->
                </ul>
              </li>
              <!--end::User Menu Dropdown-->
            </ul>
            <!--end::End Navbar Links-->
          </div>
          <!--end::Container-->
        </nav>