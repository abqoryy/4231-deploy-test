<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="pd-20 card-box mb-30">
        <div class="row mb-4">
            <div class="col-12">
                <form action="/transfer" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="name">Player Name</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="text" class="form-control" id="name" placeholder="Player name" name="name" />
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="country">Country</label>
                        <div class="col-sm-12 col-md-10">
                        <select name="country" class="form-select" id="country">
                            <?php 
                            $countries = [
                                "Argentina", "Australia", "Austria", "Belgium", "Bolivia", "Bosnia and Herzegovina", "Brazil", "Bulgaria", "Cameroon",
                                "Canada", "Chile", "China PR", "Colombia", "Croatia", "Czech Republic", "Denmark", "Ecuador", "Egypt", "England",
                                "Finland", "France", "Germany", "Ghana", "Greece", "Hungary", "Iceland", "India", "Ireland", "Italy", "Ivory Coast",
                                "Japan", "Mexico", "Netherlands", "New Zealand", "Northern Ireland", "Norway", "Paraguay", "Peru", "Poland", "Portugal",
                                "Romania", "Russia", "Saudi Arabia", "Scotland", "Serbia", "Slovakia", "Slovenia", "South Africa", "South Korea", "Spain",
                                "Sweden", "Switzerland", "Turkey", "Ukraine", "United Arab Emirates", "United States", "Uruguay", "Venezuela", "Wales",
                                "Indonesia"
                            ];
                            sort($countries);

                            foreach ($countries as $country) : ?>
                                <option value="<?= $country; ?>"><?php echo $country; ?></option>
                            <?php endforeach; ?>
                        </select>
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
                            <?php 
                            $positions = [
                                'ST', 'CF', 'RW', 'LW', 'RM', 'LM', 'CAM', 'CM', 'CDM',
                                'RB', 'LB', 'CB', 'RWB', 'LWB', 'GK', 'Coach'
                            ];
                            
                            foreach ($positions as $position) : ?>
                                <option value="<?= $position; ?>"><?php echo $position; ?></option>
                            <?php endforeach; ?>?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="team">Team</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="text" class="form-control" id="team" placeholder="Current Team" name="team" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="previous">Previous Team</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="text" class="form-control" id="previous" placeholder="Previous Team" name="previous" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="price">Transfer Fee</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="text" class="form-control" id="price" placeholder="Transfer Fee" name="price" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label" for="wage">Wage</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="number" class="form-control" min="1" id="wage" placeholder="Player Wage" name="wage" />
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