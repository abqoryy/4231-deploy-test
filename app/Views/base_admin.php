<html>
<head>
    <?= $this->include('layouts/head') ?>
</head>
<body id="page-top">

        <?= $this->include('layouts/navbar') ?>

        <?= $this->include('layouts/header') ?>
        <main role="main" class="">
            <div class="flex items-center justify-center">
                <?= $this->renderSection('content') ?>
            </div>
        </main>
    
        <?= $this->include('layouts/footer') ?>
        
        <?= $this->include('layouts/scripts') ?>
</body>
</html>