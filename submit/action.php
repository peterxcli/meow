<?php

    $story = $_POST['story'];
    if ($story == '' || $story == 'meow') {
        echo "<script> if(confirm( '好像怪怪的 重傳一次啦QQ'))  location.href='/meow/submit/';else location.href='/meow/submit/'; </script>";
        die();
    }
    // $memberlist = fopen('member.txt', 'r');
    $server = '';
    $usr ='';
    $pwd = '';
    $db = '';
    $conn = mysqli_connect($server, $usr, $pwd, $db); 
    if ($conn->connect_error) {
        die("QQ: " . $conn->connect_error);
    }

    mysqli_query($conn , "set names utf8");

    $sql = "INSERT INTO stories (story) VALUES ('$story')";

    if ($conn->query($sql) === TRUE) {
        echo "submit success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    echo "<script> if(confirm( '送出成功, 是否要查看畢聯會最新活動'))  location.href='https://www.youtube.com/watch?v=dQw4w9WgXcQ';else location.href='/meow/submit/'; </script>"; 

    // header('Location: /meow/submit/');

    // $sql = "insert into stories (story) values ('$story')";
    // mysqli_query($conn, $sql);
    // $sql ="select * from stories "; //SQL語句
    // $result = mysqli_query($conn, $sql);
    // while($row = mysqli_fetch_array($result))
    // {
    //     echo "<div style=\"height:24px; line-height:24px; font-weight:bold;\">";
    //     echo $row['story'] . "<br/>";
    //     echo "</div>";
    // }
    // mysqli_close($conn); //關閉MySQL連線
    // echo($story);
?>