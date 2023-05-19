<?= $this->extend('base') ?>

<?= $this->section('content') ?>

<div class="container px-lg-5 text-center">
    <div class="m-4 m-lg-5">
        <?php foreach ($transfers as $item): ?>
        <div class="pd-20 card-box mb-30">
            <div class="row">
                <h4 class="font-weight-bold">HERE WE GO</h4>
                
                <div class="col-md-4">
                    <br />
                    <img src="/photos/<?= $item['photo'] ?>" alt="" width="350" height="220">
                </div>
                <div class="col-md-8">
                    <div class="desc">
                        <p><?= $item['team'] ?>  have signed <?= $item['country'] ?> born <?= $item['position'] ?> <?= $item['name'] ?> from <?= $item['previous'] ?> . 
                            Club representative have confirmed the deal was worth <?= $item['price'] ?> and the player has agreed $<?= $item['wage'] ?>M per-year salary, 
                            and will complete a medical in the coming days. </p>
                        <p>
                        The <?= $item['age'] ?>-year old's arrival at <?= $item['team'] ?> is sure to shake up the squad and have a few players looking nervously over their shoulder. 
                        "Every club needs competition for places and ours is no different," said a resolute manager, 
                        "I want to keep pushing my lads to give one hundred percent every match and to do that they need to know their places are always under threat. 
                        The signing of <?= $item['name'] ?> is a signal of my intent
                        </p>
                    <div class="bottom-right pd-20">
                        <small class="form-text text-muted">According to Fabrizio Romano</small>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>


<?= $this->endSection()?>