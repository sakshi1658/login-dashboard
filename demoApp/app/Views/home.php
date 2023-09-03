
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar" style="height: 100vh">
                <div class="position-sticky">
                    <p class="h2">Web</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo base_url('home') ?>">
                                Users
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="col-9">
                <div class="d-flex justify-content-between align-items-center">
                <?php if (!empty($title)): ?>
                    <h1><?= esc($title) ?></h1>
                <?php endif ?>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#createUserModel">
                        Create User
                    </button>
                </div>
                <?php if (!empty($users) && is_array($users)): ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">email</th>
                                <!-- <th scope="col">Handle</th> -->
                            </tr>
                        </thead>

                        <?php foreach ($users as $user): ?>

                            <tbody>
                                <tr>
                                    <th scope="row"><?= esc($user['id']) ?></th>
                                    <td>
                                        <?= esc($user['name']) ?>
                                    </td>
                                    <td>
                                        <?= esc($user['email']) ?>
                                    </td>
                                </tr>
                            </tbody>

                        <?php endforeach ?>

                    </table>
                <?php else: ?>

                    <h3>No Users</h3>

                    <p>Unable to find any user.</p>

                <?php endif ?>

                <!-- Modal -->
                <div class="modal fade" id="createUserModel" tabindex="-1" aria-labelledby="createUserModel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <?= \Config\Services::validation()->listErrors(); ?>

                                <form action="<?php echo base_url('users') ?>" method="post">
                                    <label for="name">name</label>
                                    <input type="text" name="name" id="name" required>
                                    <br>

                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" required>
                                    <br>


                                    <input type="submit" value="Create User">
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>