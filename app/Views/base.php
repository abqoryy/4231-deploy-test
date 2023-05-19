<html>
<head>
    <?= $this->include('layouts/head') ?>
</head>
<body class="grey-background">
        <?= $this->include('layouts/navbar') ?>

        
        <?php if(!session()->loggedIn && current_url() !== site_url('login') && current_url() !== site_url('register')) { ?>  
            <?= $this->include('layouts/header') ?>
        <?php } ?>
        <main role="main" class="">
            <?php if(session()->loggedIn) { ?>  
            <div class="d-flex">
                <!-- Sidebar-->
                <div class="border-end bg-secondary">
                    <div class="list-group list-group-flush">
                        <a class="list-group-item list-group-item-action bg-secondary text-white p-3" href="/projek">Teams</a>
                        <a class="list-group-item list-group-item-action bg-secondary text-white p-3" href="/detail">Players</a>
                        <a class="list-group-item list-group-item-action bg-secondary text-white p-3" href="/transfer">Transfer</a>
                    </div>
                </div>
                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                </div>
            </div>
            <?php } ?>


            <!-- kalo ga login -->

            <?php if(!session()->loggedIn) { ?>  
                <div class="">
                    <?= $this->renderSection('content') ?>
                </div>
            <?php } ?>
        </main>
    
        <?= $this->include('layouts/footer') ?>
        
        <?= $this->include('layouts/scripts') ?>
</body>
</html>

