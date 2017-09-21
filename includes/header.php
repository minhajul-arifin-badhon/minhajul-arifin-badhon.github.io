<header class="bd-header-wrapper">
    <div class="bd-header-container">
        <div class="bd-header-title">
            <h2 class="bd-header-title-top">Hello</h2>
        </div>
        <div class="bd-primary-nav-container">
            <a class="bd-primary-nav-item" href="../index.html">Home</a>
            <a class="bd-primary-nav-item <?php echo $_GET['tab']=='profile'?'active':''; ?>" href="profile.php">Profile</a>
            <a class="bd-primary-nav-item <?php echo $_GET['tab']=='projects'?'active':''; ?>" href="projects.php">Projects</a>
            <a class="bd-primary-nav-item" href="http://minhajul-arifin-badhon.webflow.io/achievements">Achievements</a>
            <a class="bd-primary-nav-item <?php echo $_GET['tab']=='contact'?'active':''; ?>" href="contact.php">Contact</a>
        </div>
    </div>
</header>
