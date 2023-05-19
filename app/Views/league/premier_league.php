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
                    <img src="/photos/premier league.png" width="175" height="120"></img>
                </div>
                <br />
                <br />
                <?php $no = 0; ?>
                <?php foreach ($teams as $item): ?>
                    <?php if ($item['league'] === 'Premier League'): ?>
                        <tr>
                            <td class="align-middle"><?= $no += 1; ?></td>
                            <td><img src="/photos/<?= $item['photo'] ?>" alt="" width="40" height="40"></td>
                            <td class="align-middle">
                                <?php if ($item['name'] === 'Manchester City'): ?>
                                    <a href="detail/page?name=<?= $item['name'] ?>" style="text-decoration: none"><?= $item['name'] ?></a>
                                <?php elseif ($item['name'] === 'Manchester United'): ?>
                                    <a href="detail/page?name=<?= $item['name'] ?>" style="text-decoration: none"><?= $item['name'] ?></a>
                                <?php endif; ?>
                            </td>
                            <td class="align-middle"><?= $item['league'] ?></td>
                            <td class="align-middle"><?= $item['country'] ?></td>
                            <td class="align-middle"><?= $item['players'] ?></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?= $this->endSection() ?>
