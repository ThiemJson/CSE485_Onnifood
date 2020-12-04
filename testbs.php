<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header class="container-fluid">
        <?php
        // Quy trinh 4 buoc
        // B1: Connect database server
        $conn = mysqli_connect('localhost', 'root','', 'music');
        if (!$conn) {
            die('Khong the ket noi, khong the ket noi');
            exit();
        }

        //B2: Khai bao truy van
        $sql = "SELECT * FROM Users";
        $result = mysqli_query($conn, $sql);

        // B3. Xy ly ketqua
        $users = mysqli_fetch_all($result);
        // echo "<pre class ='table'>";
        //     echo print_r($users);
        // echo "<pre>";


        echo "<div class ='container'>";
            echo "<table>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>User ID</th>";
                    echo "<th>User Name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Create at</th>";
                echo "</tr>";
                echo "</thead>";
                foreach ($users as $user ){
                    echo "<tr>";
                        echo "<th>$user[0]</th>";
                        echo "<th>$user[1]</th>";
                        echo "<th>$user[2]</th>";
                        echo "<th>$user[3]t</th>";
                    echo "</tr>";
                }
            echo "</table>";
        echo "</div>";
            
        ?>
    </header>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>