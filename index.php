<?php 
    require("config/config.php");
    require("lib/db.php");
    $conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
    $result = mysqli_query($conn, 'SELECT * FROM topic');  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="stylesheet" type="text/css" href="http://localhost:8000/style.css">
        
        <!-- Bootstrap -->
        <link href="http://localhost:8000/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
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
                    echo '<li><a href="http://localhost:8000/index.php?id='.$row['id'].'">'.htmlspecialchars( $row['title'] ).'</a></li>'."\n";
                }
                ?>
            </ol>
        </nav>
        <div id="control">        
            <input type="button" value="white" onclick="document.getElementById('target').className = 'white'"/>
            <input type="button" value="black" onclick="document.getElementById('target').className = 'black'"/> 
            <a href="http://localhost:8000/write.php">쓰기</a>    
        </div>
        <article>
            <?php 
            if(empty($_GET['id']) === false) {
                $sql = "SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$_GET['id'];
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
                echo '<p>'.htmlspecialchars($row['name']).'</p>';
                echo strip_tags($row['description'],'<a><h1><h2><h3><h4><h5><ul><ol><li>');
            }
            ?>
        </article>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="http://localhost:8000/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    </body>
</html>