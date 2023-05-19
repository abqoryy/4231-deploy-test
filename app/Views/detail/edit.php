<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="pd-20 card-box mb-30">
        <div class="row mb-4">
            <div class="col-12">
                <form action="/detail/<?= $data['id'] ?>/update" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put" />

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="name">Edit Player</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="text" class="form-control" id="name" placeholder="Player name" name="name" value="<?= $data['name'] ?>" />
                   
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="country">Country</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="text" class="form-control" id="country" placeholder="Player country" name="country" value="<?= $data['country'] ?>" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="age">Age</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="number" class="form-control" min="1" id="age" placeholder="Player age" name="age" value="<?= $data['age'] ?>" />
                    
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="position">Position</label>
                        <div class="col-sm-12 col-md-10">
                            <select name="position" class="form-select" id="position">
                                <option value="ST" <?= $data['position'] == "ST" ? "selected" : ""?>>ST</option>
                                <option value="CF" <?= $data['position'] == "CF" ? "selected" : ""?>>CF</option>
                                <option value="RW" <?= $data['position'] == "RW" ? "selected" : ""?>>RW</option>
                                <option value="LW" <?= $data['position'] == "LW" ? "selected" : ""?>>LW</option>
                                <option value="RM" <?= $data['position'] == "RM" ? "selected" : ""?>>RM</option>
                                <option value="LM" <?= $data['position'] == "LM" ? "selected" : ""?>>LM</option>
                                <option value="CAM" <?= $data['position'] == "CAM" ? "selected" : ""?>>CAM</option>
                                <option value="CM" <?= $data['position'] == "CM" ? "selected" : ""?>>CM</option>
                                <option value="CDM" <?= $data['position'] == "CDM" ? "selected" : ""?>>CDM</option>
                                <option value="RB" <?= $data['position'] == "RB" ? "selected" : ""?>>RB</option>
                                <option value="LB" <?= $data['position'] == "LB" ? "selected" : ""?>>LB</option>
                                <option value="CB" <?= $data['position'] == "CB" ? "selected" : ""?>>CB</option>
                                <option value="RWB" <?= $data['position'] == "RWB" ? "selected" : ""?>>RWB</option>
                                <option value="LWB" <?= $data['position'] == "LWB" ? "selected" : ""?>>LWB</option>
                                <option value="GK" <?= $data['position'] == "GK" ? "selected" : ""?>>GK</option>
                                <option value="Coach" <?= $data['position'] == "Coach" ? "selected" : ""?>>Coach</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="team">Team</label>
                        <div class="col-sm-12 col-md-10">
                            <select name="team" class="form-select" id="team">
                                <option value="Manchester City" <?= $data['team'] == "Manchester City" ? "selected" : "" ?>>Manchester City</option>
                                <option value="Manchester United" <?= $data['team'] == "Manchester United" ? "selected" : "" ?>>Manchester United</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label" for="market_value">Market Value</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="number" class="form-control" min="1" id="market_value" placeholder="Market Value" name="market_value" 
                                value="<?= $data['market_value'] ?>" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="photo">Photo</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="file" class="form-control" id="photo" aria-describedby="photoHelp" name="photo" value="<?= $data['photo'] ?>>
                            <small id="photoHelp" class="form-text text-muted">Please choose a photo to upload</small>
                            <?php if (!empty($data['photo'])): ?>
                            <div>
                                <img src="/photos/<?= $data['photo'] ?>" alt="Current Photo" width="200" height="200">
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>