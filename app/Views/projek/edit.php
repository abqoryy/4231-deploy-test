<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="pd-20 card-box mb-30">
        <div class="row mb-4">
            <div class="col-12">
                <form action="/projek/<?= $data['id'] ?>/update" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put" />

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="name">Team Name</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="text" class="form-control" id="name" placeholder="Input team name" name="name" value="<?= $data['name'] ?>" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="league">League</label>
                        <div class="col-sm-12 col-md-10">
                            <select name="league" id="league" class="form-select">
                                <option value="Premier League" <?= $data['league'] == "Premier League" ? "selected" : "" ?>>Premier League</option>
                                <option value="La Liga" <?= $data['league'] == "La Liga" ? "selected" : "" ?>>La Liga</option>
                                <option value="Bundesliga" <?= $data['league'] == "Bundesliga" ? "selected" : "" ?>>BundesLiga</option>
                                <option value="Serie A"<?= $data['league'] == "Serie A" ? "selected" : "" ?>>Serie A</option>
                                <option value="Ligue 1" <?= $data['league'] == "Ligue 1" ? "selected" : "" ?>>Ligue 1</option>
                                <option value="Eredivisie" <?= $data['league'] == "Eredivisie" ? "selected" : "" ?>>Eredivisie</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="country">Country</label>
                        <div class="col-sm-12 col-md-10">
                            <select name="country" id="country" class="form-select">
                                <option value="England" <?= $data['country'] == "England" ? "selected" : "" ?>>England</option>
                                <option value="Spain" <?= $data['country'] == "Spain" ? "selected" : "" ?>>Spain</option>
                                <option value="Germany" <?= $data['country'] == "Germany" ? "selected" : "" ?>>Germany</option>
                                <option value="Italy" <?= $data['country'] == "Italy" ? "selected" : "" ?>>Italy</option>
                                <option value="France" <?= $data['country'] == "France" ? "selected" : "" ?>>France</option>
                                <option value="Netherland" <?= $data['country'] == "Netherland" ? "selected" : "" ?>>Netherland</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="players">Players</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="number" min="1"class="form-control" id="players" placeholder="Input total players" name="players" value="<?= $data['players'] ?>" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="photo">Photo</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="file" class="form-control" id="photo" aria-describedby="photoHelp" name="photo">
                            <small id="photoHelp" class="form-text text-muted">Please choose a photo to upload</small>
                        </div>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>