<?= $this->extend('base') ?>

<?= $this->section('content') ?>

<div class="container px-lg-5 text-center">
	    <div class="m-4 m-lg-5">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope=col>No.</th>
                        <th scope=col>Logo</th>
                        <th scope=col>Name</th>
                        <th scope=col>League</th>
                        <th scope=col>Country</th>
                        <th scope=col>Players</th>
                    </tr>
                </thead>
                <tbody>
                <div>
                    <img src="/photos/laliga.png" width="100" height="100"></img>
                </div>
                <br />
                <br />
                <?php $no = 0; ?>
                <?php foreach ($teams as $item): ?>
                    <?php if ($item['league'] === 'La Liga'): ?>
                    <tr>
                        <td class="align-middle"><?= $no += 1; ?></td>
                        <td><img src="/photos/<?= $item['photo'] ?>" alt="" width="40" height="40"></td>
                        <td class="align-middle">
                            <?php if ($item['name'] === 'Barcelona'): ?>
                                <a href="detail/barcelona" style="text-decoration: none"><?= $item['name'] ?></a>
                            <?php elseif ($item['name'] === 'Real Madrid'): ?>
                                <a href="detail/madrid" style="text-decoration: none"><?= $item['name'] ?></a>
                            <?php else: ?>
                                <?= $item['name'] ?>
                            <?php endif; ?>
                        </td>
                        <td class="align-middle"><?= $item['league'] ?></td>
                        <td class="align-middle"><?= $item['country'] ?></td>
                        <td class="align-middle"><?= $item['players'] ?></td>
                    </tr>
                    <?php endif; ?>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
<?= $this->endSection() ?>
