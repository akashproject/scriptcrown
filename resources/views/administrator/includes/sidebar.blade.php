<!-- Menu -->
   <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      <div class="app-brand demo">
      <a href="{{ route('admin-dashboard') }}" class="app-brand-link">
         
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
         <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
      </div>

      <div class="menu-inner-shadow"></div>

      <ul class="menu-inner py-1">
         <!-- Dashboard -->
         <li class="menu-item active">
            <a href="{{ route('admin-dashboard') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-home-circle"></i>
               <div data-i18n="Analytics">Dashboard</div>
            </a>
         </li>

         <!-- Layouts -->
         <li class="menu-item">
            <a href="{{ route('website') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-globe"></i>
               <div data-i18n="globe">Visit Site</div>
            </a>
         </li>
         <li class="menu-header small text-uppercase"><span class="menu-header-text">Apparence</span></li>
         <li class="menu-item">
            <a href="{{ route('admin-media') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-image"></i>
               <div data-i18n="Settings">Media Library</div>
            </a>
         </li>
         <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
               <i class="menu-icon tf-icons bx bx-book"></i>
               <div data-i18n="Services">Services</div>
            </a>
            <ul class="menu-sub">
               <li class="menu-item">
                  <a href="{{ route('admin-category') }}" class="menu-link">
                     <div data-i18n="Notifications">Category</div>
                  </a>
               </li>
               <li class="menu-item">
                  <a href="{{ route('admin-services') }}" class="menu-link">
                     <div data-i18n="Notifications">Services</div>
                  </a>
               </li>
            </ul>
         </li>
         <li class="menu-item">
            <a href="{{ route('admin-projects') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-file"></i>
               <div data-i18n="Projects">Projects</div>
            </a>
         </li>
         <li class="menu-item">
            <a href="{{ route('admin-businesses') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-hotel"></i>
               <div data-i18n="Business">Businesses</div>
            </a>
         </li>
         <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
               <i class="menu-icon tf-icons bx bx-laptop"></i>
               <div data-i18n="Technologies">Technologies</div>
            </a>
            <ul class="menu-sub">
               <li class="menu-item">
                  <a href="{{ route('admin-technologies') }}" class="menu-link">
                     <div data-i18n="Technologies">Technologies</div>
                  </a>
               </li>
               <li class="menu-item">
                  <a href="{{ route('admin-tech-types') }}" class="menu-link">
                     <div data-i18n="Types">Types</div>
                  </a>
               </li>
            </ul>
         </li>
         <li class="menu-item">
            <a href="{{ route('admin-pages') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-file"></i>
               <div data-i18n="Pages">Pages</div>
            </a>
         </li>
         <li class="menu-item">
            <a href="{{ route('admin-faqs') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-chat"></i>
               <div data-i18n="Faqs">Faqs</div>
            </a>
         </li>
         <li class="menu-item">
            <a href="{{ route('admin-clients') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-user"></i>
               <div data-i18n="Clients">Clients</div>
            </a>
         </li>
         <li class="menu-item">
            <a href="{{ route('admin-testimonials') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-chat"></i>
               <div data-i18n="Testimonials">Testimonials</div>
            </a>
         </li>
         <li class="menu-item">
            <a href="{{ route('admin-settings') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-cog"></i>
               <div data-i18n="Settings">Settings</div>
            </a>
         </li>
         
      </ul>
   </aside>
<!-- / Menu -->