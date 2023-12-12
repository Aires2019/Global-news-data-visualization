<?php
    session_start();
    require("D:/PHP/htdocs/news/componets/coon.php");
    //查询代码
    $sql = "SELECT MonthYear,COUNT(GLOBALEVENTID) num
    FROM export_rus_ukr
    GROUP BY MonthYear
    ORDER BY MonthYear";
    $result = mysqli_query($link, $sql);

    $data = array();
    $as = "";
    class User
    {
        public $monthyear;
        public $num;
    }

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $user = new User();
        $user->monthyear = $row['MonthYear'];
        $user->num = $row['num'];
        $data[] = $user;
    }
    echo json_encode($data);
    //mysqli_close($conn);// 关闭MySQL数据库连接
?>