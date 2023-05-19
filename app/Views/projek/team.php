<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="page-section container px-lg-5 text-center">
    <div class="m-4 m-lg-5">
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
       
        </div>
    </div>
</div>
<?= $this->endSection() ?>