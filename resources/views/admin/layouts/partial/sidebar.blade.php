<!-- Sidebar Area -->
<aside class="sidebar-wrapper">
    <nav class="d-none d-md-block sidebar-navbar ">
    <ul class="metismenu mb-3" id="menu1">
        <li class="{{ request()->routeIs('slider-index','scrolling.*','scrolling-text.*','explore-sliders.*','testimonials.*') ? 'active' : '' }}">
            <a class="has-arrow menu-item
            {{ request()->routeIs('slider-index','scrolling.*','scrolling-text.*','explore-sliders.*','testimonials.*') ? 'active' : '' }}
            " href="#" aria-expanded="false">
                <span class="left-icon"><i class="ti-home"></i></span>
                <span class="menu-text">Home Page</span>
            </a>
            <ul class="submenu-angle dashboard-menu" aria-expanded="false">
                <li><a class="{{ request()->routeIs('slider-index') ? 'active' : '' }}" href="{{ route('slider-index') }}">Hero Slider</a></li>
                <li><a class="{{ request()->routeIs('scrolling.*') ? 'active' : '' }}" href="{{ route('scrolling.index') }}">Scrolling Effect Section</a></li>
                <li><a class="{{ request()->routeIs('scrolling-text.*') ? 'active' : '' }}" href="{{ route('scrolling-text.index') }}">Ticker/News</a></li>
                <li><a class="{{ request()->routeIs('explore-sliders.*') ? 'active' : '' }}" href="{{ route('explore-sliders.index') }}">Explore Slider</a></li>
                <li><a class="{{ request()->routeIs('testimonials.*') ? 'active' : '' }}" href="{{ route('testimonials.index') }}">Testimonial</a></li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('others-page-hero.*','properties.*','locations.*','categories.*','site.settings.*','meeting-sections.*') ? 'active' : '' }}">
            <a class="has-arrow menu-item
            {{ request()->routeIs('others-page-hero.*','properties.*','locations.*','categories.*','site.settings.*','meeting-sections.*') ? 'active' : '' }}
            " href="#" aria-expanded="false">
                <span class="left-icon"><i class="ti-package"></i></span>
                <span class="menu-text">Global Section</span>
            </a>
            <ul class="submenu-angle dashboard-menu" aria-expanded="false">
                <li><a class="{{ request()->routeIs('others-page-hero.*') ? 'active' : '' }}" href="{{ route('others-page-hero.index') }}" >Others Page Hero</a></li>
                <li><a class="{{ request()->routeIs('locations.*') ? 'active' : '' }}" href="{{ route('locations.index') }}">Locations</a></li>
                <li><a class="{{ request()->routeIs('categories.*') ? 'active' : '' }}" href="{{ route('categories.index') }}">Categories</a></li>
                <li><a class="{{ request()->routeIs('properties.*') ? 'active' : '' }}" href="{{ route('properties.index') }}" >Properties</a></li>
                <li><a class="{{ request()->routeIs('meeting-sections.*') ? 'active' : '' }}" href="{{ route('meeting-sections.index') }}">Meeting Section</a></li>
                <li><a class="{{ request()->routeIs('site.settings.edit') ? 'active' : '' }}" href="{{ route('site.settings.edit') }}">Site Settings</a></li>
            </ul>
        </li>


        <li class="{{ request()->routeIs('teams.*','chairman.*') ? 'active' : '' }}">
            <a class="has-arrow menu-item
            {{ request()->routeIs('teams.*','chairman.*') ? 'active' : '' }}
            " href="#" aria-expanded="false">
                <span class="left-icon"><i class="ti-credit-card"></i></span>
                <span class="menu-text">About Page</span>
            </a>
            <ul class="submenu-angle dashboard-menu" aria-expanded="false">
                <li><a class="{{ request()->routeIs('teams.*') ? 'active' : '' }}" href="{{ route('teams.index') }}" >Team Page</a></li>
                <li><a class="{{ request()->routeIs('chairman.*') ? 'active' : '' }}" href="{{ route('chairman.index') }}" >Chairman's Message</a></li>
                <li><a class="" href="" >Terms & Conditions</a></li>
                <li><a class="" href="" >Privacy Policy</a></li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('office-contact.*') ? 'active' : '' }}">
            <a href="{{ route('office-contact.index') }}" class="menu-item {{ request()->routeIs('office-contact.*') ? 'active' : '' }}">
                <span class="left-icon"><i class="fa fa-calendar"></i></span>
                <span class="menu-text">Contact Page</span>
            </a>
        </li>
        <li class="{{ request()->routeIs('career-admin.*') ? 'active' : '' }}">
            <a href="{{ route('career-admin.index') }}" class="menu-item {{ request()->routeIs('career-admin.*') ? 'active' : '' }}">
                <span class="left-icon"><i class="fa fa-calendar"></i></span>
                <span class="menu-text">Career</span>
            </a>
        </li>

        <li >
            <a class="has-arrow menu-item
            
            " href="#" aria-expanded="false">
                <span class="left-icon"><i class="ti-credit-card"></i></span>
                <span class="menu-text">About Page</span>
            </a>
            <ul class="submenu-angle dashboard-menu" aria-expanded="false">
                <li><a class="{{ request()->routeIs('teams.*') ? 'active' : '' }}" href="{{ route('teams.index') }}" >Team Page</a></li>
                <li><a class="{{ request()->routeIs('chairman.*') ? 'active' : '' }}" href="{{ route('chairman.index') }}" >Chairman's Message</a></li>
                <li><a class="" href="" >Terms & Conditions</a></li>
                <li><a class="" href="" >Privacy Policy</a></li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('mails.*','lands.*','messages.*') ? 'active' : '' }}">
            <a class="has-arrow menu-item 
            {{ request()->routeIs('mails.*','lands.*','messages.*') ? 'active' : '' }}
            " href="#" aria-expanded="false">
            <span class="left-icon"><i class="ti-email"></i></span>
            <span class="menu-text">Mailbox</span>
            </a>
            <ul class="dashboard-menu">
                <li><a class="{{ request()->routeIs('mails.index','mails.show','messages.*') ? 'active' : '' }}" href="{{ route('mails.index') }}">Contact Box</a></li>
                <li><a class="{{ request()->routeIs('lands.*') ? 'active' : '' }}" href="{{ route('lands.index') }}">Professionals</a></li>
            </ul>
        </li>







    <li class="">
        <a class="has-arrow menu-item " href="#" aria-expanded="false">
            <span class="left-icon"><i class="ti-home"></i></span>
            <span class="menu-text">Dasboard</span>
        </a>
        <ul class="submenu-angle dashboard-menu" aria-expanded="false">
            <li><a class="" href="index.html">Dashbord One</a></li>
            <li><a href="{{ route('home') }}">Frontend</a></li>
            <li><a href="index3.html">Dashbord Three</a></li>
        </ul>
    </li>
    <li>
            <a class="has-arrow menu-item" href="#" aria-expanded="false">
            <span class="left-icon"><i class="ti-pencil-alt"></i></span>
                <span class="menu-text">Forms</span>
            </a>
            <ul class="dashboard-menu">
                <li><a href="forms_basic.html">Basic Forms</a></li>
                <li><a href="forms_validation.html">Validation Forms</a></li>
                <li><a href="form_input_group.html">Input Group</a></li>
                <li><a href="form_mask.html">Form Mask</a></li>
                <li><a href="form_select.html">Select</a></li>
                <li><a href="form_touchspin.html">Touchspin</a></li>
                <li><a href="forms_cropper.html">Cropper</a></li>
                <li><a href="forms_editor_ck.html">CK Editor</a></li>
                <li><a href="forms_editor_summernote.html">Summernote</a></li>
                <li><a href="forms_editor_markdown.html">Markdown</a></li>
                <li><a href="forms_editor_trumbowyg.html">Trumbowyg</a></li>
                <li><a href="forms_wysihtml5.html">Wysihtml5</a></li>
                <li>
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="menu-text">Form Wizard</span>
                </a>
                <ul class="dashboard-menu">
                    <li><a href="form_wizard.html" class="submenu-item" >Wizard One</a></li>
                    <li><a href="form_wizard2.html" class="submenu-item" >Wizard Two</a></li>
                    <li><a href="form_wizard3.html" class="submenu-item" >Wizard Three</a></li>
                    <li><a href="form_wizard4.html" class="submenu-item" >Wizard Four</a></li>
                </ul>
                </li>

            </ul>
        </li>
        <li>
            <a class="has-arrow menu-item" href="#" aria-expanded="false">
            <span class="left-icon"><i class="fas fa-table"></i></span>
            <span class="menu-text">Table</span>
            </a>
            <ul class="dashboard-menu">
            <li><a href="table.html">Simple Table</a></li>
            <li><a href="data-table.html">Data Table</a></li>
            <li><a href="table_basic.html">Multiple Table</a></li>
            <li><a href="table_column_rendering.html">Rendering Table</a></li>
            <li><a href="table_record_selection.html">Record Table</a></li>
            <li><a href="table_scrollable.html">Scrollable Table</a></li>
            <li><a href="footable.html">Foo Table</a></li>
            <li><a href="x-editable.html">X-Editable</a></li>
            </ul>
        </li>
        <li>
            <a class="has-arrow menu-item" href="#" aria-expanded="false">
            <span class="left-icon"><i class="fa fa-sort-alpha-desc"></i></span>
            <span class="menu-text">UI Elements</span>
            </a>
            <ul class="dashboard-menu">
            <li><a href="typography.html">Typography</a></li>
            <li><a href="button.html">Buttons</a></li>
            <li><a href="notification.html">Notification</a></li>
            <li><a href="panels.html">Panels</a></li>
            <li><a href="tabs.html">Tab</a></li>
            <li><a href="modals.html">Modals</a></li>
            <li><a href="progressbars.html">Progressber</a></li>
            <li><a href="list.html">List View</a></li>
            <li><a href="icheck_toggle_pagination.html">iCheck, Toggle</a></li>
            <li><a href="label-badge-alert.html">labels, Badges</a></li>
            <li><a href="treeview.html">Tree View</a></li>
            </ul>
        </li>
        <li>
            <a class="has-arrow menu-item" href="#" aria-expanded="false">
            <span class="left-icon"><i class="fa fa-bar-chart"></i></span>
            <span class="menu-text">Charts</span>
            </a>
            <ul class="dashboard-menu">
            <li><a href="chart-float.html">Float Chart</a></li>
            <li><a href="chart_morris.html">Morris Chart</a></li>
            <li><a href="charts_js.html">Chart JS</a></li>
            <li><a href="charts_am.html">Am Chart</a></li>
            <li><a href="chart_google.html">Google Chart</a></li>
            <li><a href="charts_sparklin.html">Chart Sparklin</a></li>
            </ul>
        </li>
        <li>
            <a class="has-arrow menu-item" href="#" aria-expanded="false">
            <span class="left-icon"><i class="fa fa-font-awesome"></i></span>
            <span class="menu-text">Icons</span>
            </a>
            <ul class="dashboard-menu">
            <li><a href="icons-bootstrap.html"><i class="fa fa-bold"></i>Bootstrap Icons</a></li>
            <li><a href="icons-fontawesome.html"><i class="fa fa-font-awesome"></i>Fontawesome</a></li>
            <li><a href="icons-flag.html"><i class="fa fa-flag-checkered"></i>Flag Icons</a></li>
            <li><a href="icons-material.html"><i class="fa fa-meetup"></i>Material Icons</a></li>
            <li><a href="icons-weather.html"><i class="fa fa-bolt"></i>Weather Icons </a></li>
            <li><a href="icons-line.html"><i class="fa fa-lemon-o"></i>Line Icons</a></li>
            <li><a href="icons-pe.html"><i class="fa fa-diamond"></i>Pe Icons</a></li>
            <li><a href="icons-socicon.html"><i class="fa fa-share-alt"></i>Socicon Icons</a></li>
            </ul>
        </li>
        <li>
            <a class="has-arrow menu-item" href="#" aria-expanded="false">
            <span class="left-icon"><i class="ti-location-pin"></i></span>
            <span class="menu-text">Maps</span>
            </a>
            <ul class="dashboard-menu">
            <li><a href="maps_amcharts.html">Amcharts Maps</a></li>
            <li><a href="maps_data.html">Data Maps</a></li>
            <li><a href="maps_jvector.html">Jvector Maps</a></li>
            <li><a href="maps_google.html">Google map</a></li>
            <li><a href="maps_snazzy.html">Snazzy Map</a></li>
            </ul>
        </li>
        
        <li>
            <a class="has-arrow menu-item" href="#" aria-expanded="false">
            <span class="left-icon"><i class="ti-mobile"></i></span>
            <span class="menu-text">App View</span>
            </a>
            <ul class="dashboard-menu">
            <li><a href="invoice.html">Invoice</a></li>
            <li><a href="timeline.html">Vertical timeline</a></li>
            <li><a href="horizontal_timeline.html">Horizontal timeline</a></li>
            <li><a href="pricing.html">Pricing Table</a></li>
            <li><a href="slider.html">Slider</a></li>
            <li><a href="carousel.html">Carousel</a></li>
            <li><a href="code_editor.html">Code editor</a></li>
            <li><a href="gridSystem.html">Grid System</a></li>
            </ul>
        </li>
        <li>
            <a class="has-arrow menu-item" href="#" aria-expanded="false">
            <span class="left-icon"><i class="ti-agenda"></i></span>
            <span class="menu-text">Other pages</span>
            </a>
            <ul class="dashboard-menu">
            <li><a href="login.html">Login</a></li>
            <li><a href="register.html">Register</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li><a href="forget_password.html">Forget password</a></li>
            <li><a href="lockscreen.html">Lockscreen</a></li>
            <li><a href="404.html">404 Error</a></li>
            <li><a href="505.html">505 Error</a></li>
            </ul>
        </li>
        <li>
        <a href="calender.html" class="menu-item">
            <span class="left-icon"><i class="fa fa-calendar"></i></span>
            <span class="menu-text">Calender</span>
        </a>
        </li>
        <li>
        <a href="blank.html" class="menu-item">
            <span class="left-icon"><i class="fa fa-file-o"></i></span>
            <span class="menu-text">Blank Page</span>
        </a>
        </li>
        <li>
            <a class="has-arrow menu-item" href="#" aria-expanded="false">
            <span class="left-icon"><i class="ti-direction-alt"></i></span>
            <span class="menu-text">Multilevel</span>
            </a>
            <ul class="dashboard-menu">
            <li><a href="#">Level One</a></li>
            <li>
                <a class="has-arrow menu-item" href="#" aria-expanded="false">
                <span class="menu-text">Level One</span>
                </a>
                <ul class="dashboard-menu">
                <li><a href="form_wizard.html" class="submenu-item" >Level Tow</a></li>
                <li>
                    <a class="has-arrow menu-item" href="#" aria-expanded="false">
                    <span class="menu-text">Level Two</span>
                    </a>
                    <ul class="dashboard-menu">
                    <li><a href="form_wizard.html" class="submenu-item" >Level Three</a></li>
                    <li><a href="form_wizard2.html" class="submenu-item" >Level Three</a></li>
                    <li><a href="form_wizard3.html" class="submenu-item" >Level Three</a></li>
                    </ul>
                </li>
                <li><a href="form_wizard3.html" class="submenu-item" >Level Tow</a></li>
                </ul>
            </li>
            <li><a href="#">Level One</a></li>
            </ul>
        </li>




    </ul>
    </nav>
</aside><!-- /sidebar Area-->
