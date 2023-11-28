<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Register</title>
</head>

<body>

    <div class="row" style="margin-top:40px">
        <div class="col-md-4 offset-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    Registrasi
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('home/aksi_register'); ?>">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" autocomplete="off" required>
                            <small><span class="text-danger"><?= form_error('username'); ?></span></small>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" autocomplete="off" required>
                            <small><span class="text-danger"><?= form_error('password'); ?></span></small>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <input type="text" name="lvl" class="form-control" autocomplete="off" required>
                            <small><span class="text-danger"><?= form_error('lvl'); ?></span></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Registrasi</button>
                    </form>
                    <br>
                    <p class="mb-0">
                        <a href="<?= base_url('home/login') ?>" class="text-center">Sudah punya akun? klik disini untuk login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>