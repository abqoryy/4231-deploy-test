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
                            <select name="league" class="form-select" id="league">
                            <?php 
                            $leagues = [
                                'Premier League', 'La Liga', 'Bundesliga', 'Serie A', 'Ligue 1'
                            ];
                            
                            foreach ($leagues as $league) : ?>
                                <option value="<?= $league?>" <?= ($league == $data['league']) ? 'selected' : ''?>><?= $league?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="country">Country</label>
                        <div class="col-sm-12 col-md-10">
                            <select name="league" class="form-select" id="league">
                                <?php 
                                $countries = [
                                    'England', 'Spain', 'Germany', 'Italy', 'France'
                                ];
                                
                                foreach ($countries as $country) : ?>
                                    <option value="<?= $country ?>" <?= ($country == $data['country']) ? 'selected' : '' ?>><?= $country ?></option>
                                <?php endforeach; ?>?>
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