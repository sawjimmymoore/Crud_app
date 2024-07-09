<?php include 'auth.php'; ?>
<?php include 'dbcon.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: linear-gradient(to right, #f3e5f5, #e1bee7);
            font-family: 'Cinzel', serif;
        }
        .container {
            flex: 1;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
        }
        footer a {
            color: #6a1b9a;
        }
        .table {
            background: rgba(255, 255, 255, 0.9);
        }
        .table thead {
            background-color: #6a1b9a;
            color: #fff;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f3e5f5;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #007bff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <?php if (isset($_GET['message'])): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($_GET['message']); ?></div>
        <?php elseif (isset($_GET['error'])): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>
        <h2>Students List</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM students";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $count = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$count}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['age']}</td>
                            <td>{$row['phone']}</td>
                            <td>
                                <a href='update.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                            </td>
                        </tr>";
                        $count++;
                    }
                } else {
                    echo "<tr><td colspan='5'>No students found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <footer>
        <p>Built by <a href="https://www.example.com" target="_blank">JMM&HEPH</a></p>
        <p>Contact us at: <a href="mailto:registercrud.contact@mit.com">registercrud.contact@mit.com</a></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
