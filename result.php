<?php  

$mov = strtolower(str_replace(" ","+",$_POST['movie']));
$url = "https://tastedive.com/api/similar?q=".$mov."&k=YOUR-API&info=1&limit=6";
$json = file_get_contents($url);
$data = json_decode($json, TRUE);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
        
        <title>REKI - Movie and TV Show Recommendation</title>

        
        <link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body class="grey lighten-4">
        <nav id="nav-grad">
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo valign-wrapper">
                    <img src="assets/images/logo.png" id="nav-img">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="https://github.com/rezayds/REKI"><i class="fab fa-github-square"></i></a></li>
                </ul>
            </div>
        </nav>
        
        <main>
            <div class="container" style="margin-top: 32px;padding-top-bottom: 32px;">

                <?php  
                foreach($data['Similar']['Info'] as $item) {
                    echo "<h5>Your recommendation based on <b>".$item['Name']."</b> ";

                    if($item['Type'] == 'movie'){
                        echo "<span class='new badge' data-badge-caption='Movie'></span>";
                    }else if($item['Type'] == 'show'){
                        echo "<span class='new badge' data-badge-caption='TV Show'></span>";
                    }
                    echo '</h5>';
                }

                foreach($data['Similar']['Results'] as $item) {
                    ?>
                    <div class="card white">
                        <div class="card-content blue-grey-text text-darken-2">
                            <span class="card-title"><b><?php echo $item['Name'] ?></b></span>
                            <p><?php echo $item['wTeaser'] ?> (<?php echo $item['wUrl'] ?>)</p>
                            <br>
                            <p><a href="<?php echo $item['yUrl'] ?>" class="btn blue" target="_blank"> Watch Trailer <i class="fab fa-youtube"></i></a></p>                    
                        </div>
                        <div class="card-action" id="nav-grad"></div>
                    </div>
                    <?php 
                    // echo 'ID '.$item['yID'].'<br>';
                    // echo ' '.$item['Name'].'<br>';
                    // echo '<p>'.$item['wTeaser'].'</p>';
                    // echo 'Sumber : '.$item['wUrl'].'<br>';
                    // echo 'Trailer <a href="'.$item['yUrl'].'">Youtube</a>';
                    // echo '<br><br><br>';
                }

                ?>

                
                
            </div>
        </main>       
    
        
        <footer class="page-footer" style="padding: 0">
            <div class="footer-copyright" id="nav-grad">
                <div class="container">
                    <b>© <?php echo date('Y') ?> Reza Yudhistira</b>
                </div>        
            </div>
        </footer>

        <!-- <form action="result.php" method="post">
            <h4>Insert movie</h4>
            <input type="text" name="movie" value="">
            <button type="submit" name="button">GO</button>
        </form> -->
        <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
        <script src="assets/js/materialize.min.js"></script>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.sidenav');
                var instances = M.Sidenav.init(elems, options);
            });
        </script>
    </body>
</html>



