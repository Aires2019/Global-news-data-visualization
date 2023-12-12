<?php
    session_start();
    require("D:/PHP/htdocs/news/componets/coon.php");
    //查询代码
    $sql = "select p.MonthYear monthyear, p.QuadClass quadclass, round(p.count_event*100/s.sum_event,2) as per
            from (SELECT monthyear, quadclass, count(GLOBALEVENTID) as count_event
                FROM AvgTone_mod 
                GROUP BY MonthYear, QuadClass ) p,
            (SELECT MonthYear,count(GLOBALEVENTID) as sum_event 
                from AvgTone_mod 
                GROUP BY MonthYear) s
            where p.monthyear=s.MonthYear
            ORDER BY MonthYear";
    $result = mysqli_query($link, $sql);

    $data = array();
    $as = "";
    class User
    {
        public $monthyear;
        public $quadclass;
        public $per;
    }

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $user = new User();
        $user->monthyear = $row['monthyear'];
        $user->quadclass = $row['quadclass'];
        $user->per = $row['per'];
        $data[] = $user;
    }
    echo json_encode($data);
    //mysqli_close($conn);// 关闭MySQL数据库连接
?>