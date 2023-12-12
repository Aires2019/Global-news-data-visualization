<?php
    session_start();
    require("D:/PHP/htdocs/news/componets/coon.php");
    //查询代码
    $sql = "SELECT QuadClass,SUM(NumArticles) num FROM export GROUP BY QuadClass";
    $result = mysqli_query($link, $sql);

    $data = array();
    $as = "";
    class User
    {
        public $class;
        public $num;
    }

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $user = new User();
        $user->class = $row['QuadClass'];
        $user->num = $row['num'];
        $data[] = $user;
    }
    echo json_encode($data);
    //mysqli_close($conn);// 关闭MySQL数据库连接
?>