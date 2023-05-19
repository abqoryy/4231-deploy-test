<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container px-lg-5 text-center">
    <div class="m-4 m-lg-5">
        <h3 class="font-weight-bold">TEAMS</h3>
       <div class="pd-20 card-box mb-30">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Logo</td>
                    <td>Name</td>
                    <td>League</td>
                    <td>Country</td>
                    <td>Players</td>
                </tr>
            </thead>
            <tbody>
            <br />
            <?php $no = 0; ?>
            <?php foreach ($teams as $item): ?>
                <tr>
                    <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=50 height=50></td>
                    <td class="align-middle">
                                <?php if ($item['name'] === 'Manchester City'): ?>
                                    <a href="detail/page?name=<?= $item['name'] ?>" style="text-decoration: none"><?= $item['name'] ?></a>
                                <?php elseif ($item['name'] === 'Manchester United'): ?>
                                    <a href="detail/page?name=<?= $item['name'] ?>" style="text-decoration: none"><?= $item['name'] ?></a>
                                <?php elseif ($item['name'] === 'Barcelona'): ?>
                                    <a href="detail/page?name=<?= $item['name'] ?>" style="text-decoration: none"><?= $item['name'] ?></a>
                                <?php elseif ($item['name'] === 'Real Madrid'): ?>
                                    <a href="detail/page?name=<?= $item['name'] ?>" style="text-decoration: none"><?= $item['name'] ?></a>
                                <?php elseif ($item['name'] === 'Bayern Munchen'): ?>
                                    <a href="detail/page?name=<?= $item['name'] ?>" style="text-decoration: none"><?= $item['name'] ?></a>
                                <?php elseif ($item['name'] === 'Borussia Dortmund'): ?>
                                    <a href="detail/page?name=<?= $item['name'] ?>" style="text-decoration: none"><?= $item['name'] ?></a>
                                <?php elseif ($item['name'] === 'Ac Milan'): ?>
                                    <a href="detail/page?name=<?= $item['name'] ?>" style="text-decoration: none"><?= $item['name'] ?></a>
                                <?php elseif ($item['name'] === 'Inter Milan'): ?>
                                    <a href="detail/page?name=<?= $item['name'] ?>" style="text-decoration: none"><?= $item['name'] ?></a>
                                <?php elseif ($item['name'] === 'Paris Saint Germain'): ?>
                                    <a href="detail/page?name=<?= $item['name'] ?>" style="text-decoration: none"><?= $item['name'] ?></a>
                                <?php elseif ($item['name'] === 'Olympique de Marseille'): ?>
                                    <a href="detail/page?name=<?= $item['name'] ?>" style="text-decoration: none"><?= $item['name'] ?></a>
                                <?php endif; ?>
                            </td>
                    <td class="align-middle"><?= $item['league'] ?></td>
                    <td class="align-middle"><?= $item['country'] ?></td>
                    <td class="align-middle"><?= $item['players'] ?></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        <br />
            <div class="col-12 d-flex justify-content-center">
                <?= $pager->links('teams', 'team_pagination') ?>
            </div>
        </div>
        <br />
        <h3 class="font-weight-bold">PLAYERS</h3>
        <div class="pd-20 card-box mb-30">
        <div class="row">
            
            <br />
            <?php foreach ($details as $item): ?>
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
            <?php endforeach; ?>
        
            <br />
            <div class="col-12 d-flex justify-content-center">
                <?= $pager->links('details', 'detail_pagination') ?>
            </div>
        </div>
        </div>
        <br />
        <h3 class="font-weight-bold">TRANSFERS</h3>
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
            <br />
            <div class="col-12 d-flex justify-content-center">
                <?= $pager->links('transfers', 'transfer_pagination') ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>