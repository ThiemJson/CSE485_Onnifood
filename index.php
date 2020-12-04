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
    <section class="container">
        <?php
        // Date service
        $dateService = new DataService();
        $conn = $dateService->openConnDatabase('root', '', 'MUSIC');

        $dateService->renderContent($conn);

        $dateService->closeConnDatabase();
        ?>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>


<!-- SQL QUERY -->
<!-- 
1) Liet ke cac bai hat tuoc ve the loai Nhac tru tinh DONE
SELECT baiviet.*
FROM theloai, baiviet
WHERE theloai.ma_tloai = baiviet.ma_tloai and theloai.ten_tloai like N'Nhạc trữ tình';

2) Liet ke cac bai viet cua tac gia “Nhacvietplus”. DONE
SELECT baiviet.*
FROM tacgia, baiviet
WHERE tacgia.ma_tgia = baiviet.ma_tgia and tacgia.ten_tgia like N'Nhacvietplus';

3) Liet ke cac the loai nhac chua co bai viet cam nhan nao.


select ma_tloai
from theloai
LEFT JOIN
SELECT DISTINCT theloai.ma_tloai
FROM theloai, baiviet
WHERE theloai.ma_tloai = baiviet.ma_tloai;

on ma_tloai
;


4) Liet ke cac bai viet voi thong tin sau: Ma bai viet, ten bai viet, ten bai hat, ten tac gia, ten the loai, ngay viet DONE
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet
FROM theloai, baiviet, tacgia
WHERE theloai.ma_tloai = baiviet.ma_tloai and baiviet.ma_tgia = tacgia.ma_tgia;

5) Tim the loai nhac co so bai viet nhieu nhat DONE
SELECT theloai.*
FROM theloai,baiviet
WHERE theloai.ma_tloai = baiviet.ma_tloai
GROUP BY theloai.ma_tloai
ORDER BY COUNT(theloai.ma_tloai) DESC LIMIT 1;

6) Liet ke 2 tac gia co so bai viet nhhieu nhat DONE
SELECT tacgia.* 
FROM tacgia, baiviet
WHERE tacgia.ma_tgia = baiviet.ma_tgia
GROUP BY tacgia.ma_tgia
ORDER BY COUNT(tacgia.ma_tgia) DESC  LIMIT 2;

7) Liet ke cac tac gia co it nhat 2 the loai nhac
SELECT tacgia.* 
FROM tacgia, theloai, baiviet
WHERER tacgia.ma_tgia = baiviet.ma_tgia and theloai.ma_tloai = baiviet.ma_tloai;

8) Liet le cac bafi viet co tua bai hat chua 1 trong cac tu yeu, thuong. anh, em DONE
ALTER TABLE baiviet ADD FULLTEXT (tomtat);
SELECT * FROM baiviet WHERE MATCH (tomtat) AGAINST (N'yêu thương anh em' IN NATURAL LANGUAGE MODE) 

9) Let ke cac bai viet ve cac bai hat co tieu de bafi hat ve hoac tua bai hat chua 1 trong cac tu yeu thuong anh e, DONE
ALTER TABLE baiviet ADD FULLTEXT (tieude);
SELECT * FROM baiviet WHERE MATCH (tomtat) AGAINST (N'yêu thương anh em' IN NATURAL LANGUAGE MODE) or MATCH (tieude) AGAINST (N'yêu thương anh em' IN NATURAL LANGUAGE MODE)
 -->

<?php
class DataService
{
    public $baivietTableHeader;
    public $result;

    function __construct()
    {
        $this->baivietTableHeader = "<th>Tiêu đề</th><th>Tên bài hát</th><th>Tóm tắt</th><th>Ngày viết</th>";
    }



    /** Close connection */
    public function closeConnDatabase()
    {
        exit();
        die();
    }

    /** Connect database using default Localhost */
    public function openConnDatabase($user, $pass, $databaseName)
    {
        $conn = mysqli_connect('localhost', $user, $pass, $databaseName);
        if (!$conn) {
            echo ("<p>Cant connect database $databaseName</p>");
            exit();
            die();
            return false;
        }
        return $conn;
    }

    /** DELETE , UPDATE, CREATE */
    public function executedNoneQuery($connectionVariable, $sqlQuery)
    {
        $result = mysqli_query($connectionVariable, $sqlQuery);
        return (!$result) ? false : true;
    }

    /** SELECT */
    public function executedQuery($connectionVariable, $sqlQuery)
    {
        $result = mysqli_query($connectionVariable, $sqlQuery);
        return (!$result) ? false : mysqli_fetch_all($result);
    }

    /** Render Table */
    public function renderDataTable($data, $tableDescription, $htmlTableHeader)
    {

        echo "<div class='container'>";
        echo "<h5 class='text-left .mt-10'>$tableDescription </h5>";
        echo "<table class='table table-hover table-dark'>";
        echo "<theader>";
        echo $htmlTableHeader;
        echo "</theader>";
        foreach ($data as $item) {
            echo "<tr>";
            for ($index = 0; $index < count($item); $index++) {
                echo "<td>$item[$index]</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }

    public function renderContent($connectionVariable)
    {
        // 1) Liet ke cac bai hat tuoc ve the loai Nhac tru tinh
        $this->result = $this->executedQuery($connectionVariable, "SELECT baiviet.tieude, baiviet.ten_bhat, baiviet.tomtat, baiviet.ngayviet
FROM theloai, baiviet
WHERE theloai.ma_tloai = baiviet.ma_tloai and theloai.ten_tloai like N'Nhạc trữ tình';");
        $this->renderDataTable($this->result, "Liệt kê các bài hát thuộc về thể loại trữ tình", $this->baivietTableHeader);

        // 2). Liet ke cac bai viet cua tac gia “Nhacvietplus”
        $this->result = $this->executedQuery($connectionVariable, "SELECT baiviet.tieude, baiviet.ten_bhat, baiviet.tomtat, baiviet.ngayviet
FROM tacgia, baiviet
WHERE tacgia.ma_tgia = baiviet.ma_tgia and tacgia.ten_tgia like N'Nhacvietplus';");
        $this->renderDataTable($this->result, "Liệt kê các bài hát của tác giả Nhacvietplus", $this->baivietTableHeader);

        // 4. Liet ke cac bai viet voi thong tin sau: Ma bai viet, ten bai viet, ten bai hat, ten tac gia, ten the loai, ngay viet
        $this->result = $this->executedQuery($connectionVariable, "SELECT baiviet.ma_bviet , baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai , baiviet.ngayviet
FROM tacgia, baiviet , theloai
WHERE tacgia.ma_tgia = baiviet.ma_tgia and tacgia.ten_tgia like N'Nhacvietplus' and theloai.ma_tloai = baiviet.ma_tloai;");
        $this->renderDataTable($this->result, "Liêt kê các bài viết với thông tin:", "<th>Ma bai viet</th>
        <th>Tieu de</th>
        <th>Bai hat</th>
        <th>Tac gia</th>
        <th>The loai</th>
        <th>Ngay viet</th>");

        // 5) Tim the loai nhac co so bai viet nhieu nhat DONE
    }
}
?>