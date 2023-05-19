<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <div class="container px-lg-5 text-center">
	    <div class="m-4 m-lg-5">
            <div class="pd-20 card-box mb-30">
            <h5 class="mb-4">Hello <?= session('name') ?> </h5>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Logo</td>
                        <td>Name</td>
                        <td>League</td>
                        <td>Country</td>
                        <td>Players</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                <div>
                    <a class="btn btn-success" href="/projek/new">Add New Team</a>
                </div>
                <br />
                <br />
                <?php $no = 0; ?>
                <?php foreach ($teams as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=50 height=50></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['league'] ?></td>
                        <td><?= $item['country'] ?></td>
                        <td><?= $item['players'] ?></td>
                        <td>
                            <div class="btn-group " role="group " aria-label="Basic example ">
                                <form action="/projek/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
                                    <a href="/projek/<?= $item['id'] ?>/edit" class="btn btn-info text-white"><i class='bx bx-pencil'></i></a>
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger text-white" type="submit">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>