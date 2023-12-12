<?php
    session_start();
    require("D:/PHP/htdocs/news/componets/coon.php");
    //查询代码
    $sql = "SELECT p.MonthYear monthyear, p.AvgTone avgtone, round(p.count_event*100/s.sum,2) per
            FROM (select MonthYear, AvgTone, Count(GLOBALEVENTID) as count_event
            FROM avgtone_mod
            GROUP BY MonthYear, AvgTone) p,
                (select MonthYear,count(GLOBALEVENTID) as sum
                FROM avgtone_mod
                GROUP BY MonthYear) s
            WHERE p.MonthYear=s.MonthYear";
    $result = mysqli_query($link, $sql);

    $data = array();
    $as = "";
    class User
    {
        public $monthyear;
        public $avgtone;
        public $per;
    }

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $user = new User();
        $user->monthyear=$row['monthyear'];
        $user->avgtone = $row['avgtone'];
        $user->per = $row['per'];
        $data[] = $user;
    }
    echo json_encode($data);
    //mysqli_close($conn);// 关闭MySQL数据库连接
?>