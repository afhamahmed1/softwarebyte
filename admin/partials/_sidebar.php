<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="assets/images/logo.png" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">Software Byte</span>
          <!-- <span class="text-secondary text-small">Project Manager</span> -->
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#services" aria-expanded="false" aria-controls="services">
        <span class="menu-title">Services</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-earth"></i>
      </a>
      <div class="collapse" id="services">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="view_services.php"> View Services </a></li>
          <li class="nav-item"> <a class="nav-link" href="add_service.php?section=service"> Add Service </a></li>
          <li class="nav-item"> <a class="nav-link" href="view_categories.php?section=service"> View Category </a></li>

          <li class="nav-item"> <a class="nav-link" href="add_category.php"> Add Category </a></li>

          <li class="nav-item"> <a class="nav-link" href="view_tags.php?section=service"> View Tags </a></li>

          <li class="nav-item"> <a class="nav-link" href="add_tag.php"> Add Tags </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#project" aria-expanded="false" aria-controls="project">
        <span class="menu-title">Project</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-earth"></i>
      </a>
      <div class="collapse" id="project">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="view_projects.php"> View Projects </a></li>
          <li class="nav-item"> <a class="nav-link" href="add_project.php?section=project"> Add Project </a></li>
          <li class="nav-item"> <a class="nav-link" href="view_categories.php?section=project"> View Category </a></li>

          <li class="nav-item"> <a class="nav-link" href="add_category.php"> Add Category </a></li>

          <li class="nav-item"> <a class="nav-link" href="view_tags.php?section=project"> View Tags </a></li>

          <li class="nav-item"> <a class="nav-link" href="add_tag.php"> Add Tags </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#blog" aria-expanded="false" aria-controls="blog">
        <span class="menu-title">Blog</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-earth"></i>
      </a>
      <div class="collapse" id="blog">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item"> <a class="nav-link" href="view_blogs.php"> View Blogs </a></li>
          <li class="nav-item"> <a class="nav-link" href="add_blog.php?section=blog"> Add Blog </a></li>
          <li class="nav-item"> <a class="nav-link" href="view_categories.php?section=blog"> View Category </a></li>

          <li class="nav-item"> <a class="nav-link" href="add_category.php"> Add Category </a></li>

          <li class="nav-item"> <a class="nav-link" href="view_tags.php?section=blog"> View Tags </a></li>

          <li class="nav-item"> <a class="nav-link" href="add_tag.php"> Add Tags </a></li>

        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#pricing_plan" aria-expanded="false" aria-controls="pricing_plan">
        <span class="menu-title">Pricing Plan</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-earth"></i>
      </a>
      <div class="collapse" id="pricing_plan">
        <ul class="nav flex-column sub-menu">



          <li class="nav-item"> <a class="nav-link" href="view_pricing_plans.php"> View Pricing Plans </a></li>
          <li class="nav-item"> <a class="nav-link" href="add_pricing_plan.php"> Add Pricing Plan </a></li>
          <li class="nav-item"> <a class="nav-link" href="view_tiers.php"> View Tier </a></li>

          <li class="nav-item"> <a class="nav-link" href="add_tier.php"> Add Tier </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#testimonial" aria-expanded="false" aria-controls="testimonial">
        <span class="menu-title">testimonial</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-earth"></i>
      </a>
      <div class="collapse" id="testimonial">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="view_testimonials.php"> View Testimonials </a></li>
          <li class="nav-item"> <a class="nav-link" href="add_testimonial.php"> Add Testimonial </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#message" aria-expanded="false" aria-controls="message">
        <span class="menu-title">Message</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-earth"></i>
      </a>
      <div class="collapse" id="message">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="view_messages.php"> View messages </a></li>
          <li class="nav-item"> <a class="nav-link" href="newsletter.php"> View newsletter </a></li>
        </ul>
      </div>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">Basic UI Elements</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.php">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.php">Typography</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/icons/mdi.php">
        <span class="menu-title">Icons</span>
        <i class="mdi mdi-contacts menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/forms/basic_elements.php">
        <span class="menu-title">Forms</span>
        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/charts/chartjs.php">
        <span class="menu-title">Charts</span>
        <i class="mdi mdi-chart-bar menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/tables/basic-table.php">
        <span class="menu-title">Tables</span>
        <i class="mdi mdi-table-large menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Sample Pages</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-medical-bag menu-icon"></i>
      </a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.php"> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.php"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.php"> Register </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.php"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.php"> 500 </a></li>
        </ul>
      </div>
    </li> -->
    <li class="nav-item sidebar-actions">
      <span class="nav-link">
        <div class="border-bottom">
          <h6 class="font-weight-normal mb-3">Projects</h6>
        </div>
        <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>

      </span>
    </li>

  </ul>
</nav>