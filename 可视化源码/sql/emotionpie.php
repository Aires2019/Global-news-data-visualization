<?php
    session_start();
    require("D:/PHP/htdocs/news/componets/coon.php");
    //查询代码
    $sql = "SELECT p.AvgTone avgtone, p.count_event/s.sum per
            FROM (select AvgTone, Count(GLOBALEVENTID) as count_event
            FROM avgtone_mod
            GROUP BY AvgTone) p,
                (select count(GLOBALEVENTID) as sum
                FROM avgtone_mod) s";
    $result = mysqli_query($link, $sql);

    $data = array();
    $as = "";
    class User
    {
        public $avgtone;
        public $per;
    }

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $user = new User();
        $user->avgtone = $row['avgtone'];
        $user->per = $row['per'];
        $data[] = $user;
    }
    echo json_encode($data);
    //mysqli_close($conn);// 关闭MySQL数据库连接
?>