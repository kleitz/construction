<div id="sidebar-wrapper">
    <ul class="sidebar-nav" style="z-index:999999">
        <li class="sidebar-brand">
            <a href="/login-success">
               Venus Construction
            </a>
        </li>
        <li>
            <a href=""></a>
        </li>

        
        <li>
            <a href="/report">Reports</a>
        </li>
        <li>
            <a href="/logout">Logout</a>
        </li>
        <li>
            <a href="/bago">Bag-o</a>
        </li>

        <?php if ($this->session->userdata('type') == 1): ?>
        <li>
            <a href="/project-site">Construction</a>
        </li>

        <li>
            <a href="/registration">Registration</a>
        </li>
        <li>
            <a href="/add_scopework">Add Scope of Work</a>
        </li>

        <?php endif ?>
       
    </ul>
</div>
