
<!-- Fixed navbar -->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase sticky-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/">4231</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <!-- kalo ga login muncul tombol ini -->
                
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/team">Teams</a><li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="transfer/home">Transfers</a></li>
                    <li class="nav-item mx-0 mx-lg-1 dropdown">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded dropdown-toggle" href="#" id="navbarDropdownLeague" role="button" data-bs-toggle="dropdown" aria-expanded="false">League</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownLeague">
                            <li><a class="dropdown-item" href="/premier_league">Premier League</a></li>
                            <li><a class="dropdown-item" href="/la_liga">La Liga</a></li>
                            <li><a class="dropdown-item" href="/bundesliga">Bundesliga</a></li>
                            <li><a class="dropdown-item" href="/serie_a">Serie A</a></li>
                            <li><a class="dropdown-item" href="/ligue1">Ligue 1</a></li>
                        </ul>
                    </li>
                <?php if(!session()->loggedIn) { ?>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/login">Login</a></li>
                <?php } ?>
                <!-- kalo login muncul tombol ini -->
                <?php if(session()->loggedIn) { ?>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/projek"><?= session('name') ?></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/logout">Logout</a></li>
                <?php } ?>
                

            </ul>
            </div>
        </div>
    </div>
</nav>
