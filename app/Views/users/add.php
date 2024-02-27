<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="container">
    <form action="#" method="post">
        <?= csrf_field() ?>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Add User</h5>
                <div class="mb-3">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" />
                </div>
                <div class="mb-3">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name" />
                </div>
                <div class="mb-3">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" />
                </div>
                <div class="mb-3">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" />
                </div>
                <div class="mb-3">
                    <label for="gender_id">Gender</label>
                    <select class="form-select" id="gender_id" name="gender_id">
                        <option value="" selected>N/A</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" />
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" />
                </div>
                <div class="mb-3">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" />
                </div>
                <div class="col-12 col-sm-3 float-end">
                    <button type="submit" class="btn btn-success w-100">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection('content') ?>
