<div class="box-search col-md-8 mx-auto rounded p-4 d-flex flex-column">
    <h5 class="text-center font-weight-bold">Premier League Standings Search</h5>
    <hr class="my-1">
    <h5 class="text-center text-secondary">
        write any teams name in the search box<
    </h5>
    <form action="details.php" method="POST" class="form-control">
        <div class="input-group">
            <input type="text" name="search" id="search" class="input-form-control form-control-lg border-dark rounded-start-1" placeholder="search player" autocomplete="off" required>
            <div class="input-group-append">
                <input type="submit" name="submit" value="Search" class="btn btn-dark btn-lg rounded-start-1">
            </div>
        </div>
    </form>
</div>