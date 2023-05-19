<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container px-lg-5 text-center">
    <br />
    <a class="btn btn-success" href="/detail/new">Add Player</a>
    <br />
	<div class="card-box pd-20 mb-30">
        <div class="row">
            <form action="/detail/search" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search by name" name="search" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </div>
            </form>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope=col>No.</th>
                        <th scope=col>Name</th>
                        <th scope=col>Country</th>
                        <th scope=col>Age</th>
                        <th scope=col>Position</th>
                        <th scope=col>Market Value</th>
                        <th scope=col>Photo</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <br />
                <tbody>
                <br />
                <?php $no = 0; ?>
                <?php foreach ($details as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['country'] ?></td>
                        <td><?= $item['age'] ?></td>
                        <td><?= $item['position'] ?></td>
                        <td>$<?= $item['market_value'] ?>M</td>
                        <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=100 height=100></td>
                        <td>
                            <div class="btn-group " role="group " aria-label="Basic example ">
                                <form action="/detail/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
                                    <a href="/detail/<?= $item['id'] ?>/edit" class="btn btn-info text-white"><i class='bx bx-pencil'></i></a>
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