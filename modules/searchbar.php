<div class="row">
    <div class="col-12">
        <div class="jumbotron bg-dark">
            <h1 class="display-4">Search Your Stats</h1>
            <form class="input-group" onsubmit="EditSelector(event)">
                <div class="input-group-prepend">
                <select class="btn btn-outline-secondary text-light btn-primary" id="SearchSelector">
                        <option value="pc" selected>Pc</option>
                        <option value="xbox">Xbox</option>
                        <option value="ps4">Playstation</option>
                        <option disabled>Switch not supported</option>
                    </select>
                </div>
                <input type="text" class="form-control" id="SearchBar">
        </form>              
        </div>
    </div>
</div>