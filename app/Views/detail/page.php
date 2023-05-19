<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<?php 
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        // Use the $name value for further processing
    }
?>
    <div class="container px-lg-5 text-center">
	    <div class="m-4 m-lg-5">
            <h3 class="display-8"><?= $name ?></h1>
        </div>
        <div class="row">
            <?php $count = 0; ?>
            <?php foreach ($details as $item): ?>
                <?php if ($item['team'] === $name): ?>
                    <div class="col-md-3">
                        <div class="gallery-item">
                            <img src="/photos/<?= $item['photo'] ?>" alt="" width="200" height="200">
                            <div class="desc">
                                <div class="font-weight-bold">Name:</div>
                                <?= $item['name'] ?>
                                <div class="font-weight-bold">Country:</div>
                                <?= $item['country'] ?>
                                <div class="font-weight-bold">Age:</div>
                                <?= $item['age'] ?>
                                <div class="font-weight-bold">Position:</div>
                                <?= $item['position'] ?>
                                <div class="font-weight-bold">Market Value:</div>
                                $<?= $item['market_value'] ?>M
                            </div>
                        </div>
                    </div>
                    <?php $count++; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        </div>
    </div>
<?= $this->endSection() ?>