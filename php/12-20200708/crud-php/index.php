<?php include('process.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>CRUD PHP</title>

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>

    <?php if (isset($_SESSION['msg'])) : ?>
        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-4">
                    <div class="alert alert-<?= $_SESSION['msg_type'] ?> p-3 rounded text-center">
                        <?php
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-9">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th class="font-weight-bold text-success text-center" scope="col">#</th>
                            <th class="font-weight-bold text-success text-center" scope="col">Name</th>
                            <th class="font-weight-bold text-success text-center" scope="col">Location</th>
                            <th class="font-weight-bold text-success text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tbody>
                            <tr>
                                <td class="font-weight-bold text-success text-center"><?php echo $row["id"]; ?></td>
                                <td class="text-center"><?php echo $row["name"]; ?></td>
                                <td class="text-center"><?php echo $row["location"]; ?></td>
                                <td class="text-center">
                                    <a class="btn btn-warning font-weight-bold" href="index.php?edit=<?php echo $row["id"]; ?>">
                                        Edit
                                    </a>
                                    <a class="btn btn-danger font-weight-bold" href="process.php?del=<?php echo $row["id"]; ?>">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-4">
            <form action="process.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label class="font-weight-bold text-primary">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold text-primary">Location</label>
                    <input type="text" name="location" class="form-control" value="<?php echo $location; ?>" placeholder="Enter your location">
                </div>
                <div class="form-group">
                    <?php if ($update == true) : ?>
                        <button class="btn btn-primary btn-block font-weight-bold" name="update">Update</button>
                    <?php else : ?>
                        <button class="btn btn-primary btn-block font-weight-bold" name="save">Save</button>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>

</body>

</html>