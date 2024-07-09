<?php include 'dbcon.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add Student</h2>
        <form action="create.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <button type="submit" name="create" class="btn btn-primary">Add Student</button>
        </form>
    </div>

    <?php
    if (isset($_POST['create'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];

        $sql = "INSERT INTO students (name, age, phone) VALUES ('$name', '$age', '$phone')";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success'>New student added successfully</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
        }
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
