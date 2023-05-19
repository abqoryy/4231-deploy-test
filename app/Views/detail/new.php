<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="pd-20 card-box mb-30">
        <div class="row mb-4">
            <div class="col-12">
                <form action="/detail" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="name">Player Name</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="text" class="form-control" id="name" placeholder="Player name" name="name" />
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="country">Country</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="text" class="form-control" id="country" placeholder="Player country" name="country" />
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="age">Age</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="number" class="form-control" min="1" id="age" placeholder="Player age" name="age" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="position">Position</label>
                        <div class="col-sm-12 col-md-10">
                            <select name="position" class="form-select" id="position">
                                <option value="ST">ST</option>
                                <option value="CF">CF</option>
                                <option value="RW">RW</option>
                                <option value="LW">LW</option>
                                <option value="RM">RM</option>
                                <option value="LM">LM</option>
                                <option value="CAM">CAM</option>
                                <option value="CM">CM</option>
                                <option value="CDM">CDM</option>
                                <option value="RB">RB</option>
                                <option value="LB">LB</option>
                                <option value="CB">CB</option>
                                <option value="RWB">RWB</option>
                                <option value="LWB">LWB</option>
                                <option value="GK">GK</option>
                                <option value="Coach">Coach</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="team">Team</label>
                        <div  class="col-sm-12 col-md-10">
                            <select name="team" class="form-select" id="team">
                                <option value="Manchester City">Manchester City</option>
                                <option value="Manchester United">Manchester United</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Real Madrid">Real Madrid</option>
                                <option value="Bayern Munchen">Bayern Munchen</option>
                                <option value="Dortmund">Dortmund</option>
                                <option value="AC Milan">AC Milan</option>
                                <option value="Inter Milan">Inter Milan</option>
                                <option value="Paris Saint Germain">Paris Saint Germain</option>
                                <option value="Marseille">Marseille</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="market_value">Market Value</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="number" class="form-control" min="" id="market_value" placeholder="Market Value" name="market_value" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="photo">Photo</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="file" class="form-control" id="photo" aria-describedby="photoHelp" name="photo">
                        </div>
                        <small id="photoHelp" class="form-text text-muted">Please choose a photo to upload</small>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
<?= $this->endSection() ?>