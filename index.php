<?php 
    $conn = mysqli_connect('localhost', 'root', '123456');
    mysqli_select_db($conn, 'opentutorials');
    $result = mysqli_query($conn, 'SELECT * FROM topic');  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="http://localhost:8000/style.css">
    </head>
    <body id="target">
        <header>            
             <img src="https://s3-ap-northeast-1.amazonaws.com/opentutorialsfile/course/94.png" alt="생활코딩"/>
             <h1><a href="http://localhost:8000/index.php">JavaScript</a></h1>
        </header>
        <nav>
            <ol>
                <?php     
                // 연관배열 데이터 형식으로 데이터를 가져옴.
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<li><a href="http://localhost:8000/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
                }
                ?>
            </ol>
        </nav>
        <div id="control">        
            <input type="button" value="white" onclick="document.getElementById('target').className = 'white'"/>
            <input type="button" value="black" onclick="document.getElementById('target').className = 'black'"/>     
        </div>
        <article>
            <?php 
            if(empty($_GET['id']) === false) {
                $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                echo '<h2>'.$row['title'].'</h2>';
                echo $row['description'];
            }
            ?>
        </article>
    </body>
</html>