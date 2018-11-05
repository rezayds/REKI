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
                    <li><a href="#"><i class="fab fa-github-square"></i></a></li>
                </ul>
            </div>
        </nav>
        
        
        <main>
            <div class="container" style="margin-top: 72px">
                <div class="row">
                    <div class="col l6">
                        <div class="card white">
                            <div class="card-content blue-grey-text text-darken-4">
                                <span class="card-title center">
                                    <b>How to use</b>
                                </span>
                               <p>
                                   First, input a movie or tv shows title that you like the most or you watched it recently. Then, REKI will give you a movie or tv shows recommendation that similar to your input.
                               </p>
                            </div>
                            <div class="card-action" id="nav-grad"></div>
                        </div>
                    </div>
                    <div class="col l6">
                        <div class="card white">
                            <div class="card-content blue-grey-text text-darken-4">
                                <span class="card-title center">
                                    <b>Give it a try!</b>
                                </span>
                                <div class="row">
                                    <form action="result.php" method="POST">
                                        <div class="col s12">
                                            <div class="row">                                            
                                                <div class="input-field col s12">
                                                    <i class="fas fa-film prefix  teal-text"></i>
                                                    <input type="text" id="movie" name="movie" class="validate">
                                                    <label for="movie">Insert Your Favorite Movie Here!</label>
                                                    <span class="helper-text">Make sure the title you entered is correct</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <button type="submit" class="btn right">Give Me a Recommendation!</button>
                                        </div>       
                                    </form>                        
                                </div>
                            </div>
                            <div class="card-action" id="nav-grad"></div>
                        </div>
                    </div>
                </div>
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