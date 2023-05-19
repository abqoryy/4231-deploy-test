<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container px-lg-5 text-center">
    <br />
    <a class="btn btn-success" href="/transfer/new">Add News</a>
    <br />
	<div class="card-box pd-20 mb-30">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope=col>No.</th>
                        <th scope=col>Name</th>
                        <th scope=col>Country</th>
                        <th scope=col>Age</th>
                        <th scope=col>Position</th>
                        <th scope=col>Price</th>
                        <th scope=col>Wage</th>
                        <th scope=col>Current Team</th> 
                        <th scope=col>Previous Team</th>
                        <th scope=col>Photo</th>
                        <th scope="col">Operations</th>
                    </tr>
                    <!-- name, age, team, price, wage, previous, country, position, photo -->
                </thead>
                <br />
                <tbody>
                <br />
                <?php $no = 0; ?>
                <?php foreach ($transfers as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['country'] ?></td>
                        <td><?= $item['age'] ?></td>
                        <td><?= $item['position'] ?></td>
                        <td><?= $item['price'] ?></td>
                        <td><?= $item['wage'] ?></td>
                        <td><?= $item['team'] ?></td>
                        <td><?= $item['previous'] ?></td>
                        <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=100 height=100></td>
                        <td>
                            <div class="btn-group " role="group " aria-label="Basic example ">
                                <form action="/transfer/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
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