<?php
    session_start();
    require("D:/PHP/htdocs/news/componets/coon.php");
    //查询代码
    $sql = "select uncode.Countrychn Countrychn,count(GLOBALEVENTID) as count_country
            FROM country,uncode 
            where country.country=uncode.UNCode
            GROUP BY country.Country
            ORDER BY count_country DESC";
    $result = mysqli_query($link, $sql);

    $data = array();
    $as = "";
    class User
    {
        public $Countrychn;
        public $count_country;
    }

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $user = new User();
        $user->Countrychn=$row['Countrychn'];
        $user->count_country = $row['count_country'];
        $data[] = $user;
    }
    echo json_encode($data);
    //mysqli_close($conn);// 关闭MySQL数据库连接
?>