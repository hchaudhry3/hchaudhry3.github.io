 <?php ;?>
    <nav class ="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- In the following code:
                navbar-toggle represents triple line toggling -->
            <button type="button" class="navbar-toggle" 
                data-toggle="collapse"
                data-target=".navbar-collapse">
                <!-- add triple bar responsive collapse -->
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#">Hosna Chaudhry</a>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="#">Home</a></li>
                    <li class=""><a href="#">About</a></li>
                    <li class="dropdown">
                        <a href="project.php" class="dropdown-toggle"
                        data-toggle="dropdown">Projects
                        <b class="caret"></b>
                            <ul class="dropdown-menu">
                                <li><a href="#">Personal Website</a></li>
                                <li><a href="#">Notetaker Web App</a></li>
                                <li><a href="#">Fatal Police Shootings Visualization</a></li>
                                <li><a href="#">Computational Photography</a></li>
                                <li><a href="#">Train Reservation System</a></li>
                            </ul>
                    </a></li>
                    <li class=""><a href="#">Resume</a>
                </ul>
            </div>
        </div>
    </nav>