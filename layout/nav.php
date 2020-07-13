<!-- Navigation -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
    <a class="navbar-brand logo" href="<?php echo BASE_PATH;?>">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item <?php if($request ==  '/about/') echo ' active'?>">
                    <a href="<?php echo BASE_PATH;?>about/">
                    <i class="fas fa-address-card"></i>
                    <span>About</span></a>
                </li>
                
                <li class="nav-item <?php if($request ==  '/work/') echo ' active'?>">
                    <a  href="<?php echo BASE_PATH;?>work/">
                    <i class="fas fa-briefcase"></i><span>Work</span></a>
                </li>
       
                <li class="nav-item">
                    <a  href="mailto:hector@hector.tech?subject=Let's Talk&body=Hello Hector" target="_blank">
                    <i class="fas fa-envelope-open-text"></i> <span>Contact</span></a>
                </li>
                <li class="nav-item">
                    <a  href="https://www.linkedin.com/in/hectorfelizrecio/" target="_blank">
                    <i class="fab fa-linkedin"></i> <span>LinkedIn</span></a>
                </li>
                <li class="nav-item">
                    <a  href="https://github.com/hectorfeliz/" target="_blank">
                    <i class="fab fa-github"></i> <span>Github</span></a>
                </li>
                <li class="nav-item">
                    <a  href="https://www.flickr.com/photos/135497525@N05/" target="_blank">
                    <i class="fab fa-flickr"></i> <span>Flickr</span></a>
                </li>
            </ul>
        </div> 
    </div>
</nav>