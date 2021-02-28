
<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Panpacific University Urdaneta City</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo WEB_ROOT; ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo WEB_ROOT; ?>assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo WEB_ROOT; ?>css/offcanvas.css" rel="stylesheet">
    <link href="<?php echo WEB_ROOT; ?>css/bootstrap.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo WEB_ROOT; ?>assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->





  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Panpacific University Urdaneta City</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo WEB_ROOT; ?>index.php">Home</a></li>
            <li><a href="<?php echo WEB_ROOT; ?>index.php?page=2">Capstone Projects and Thesis Titles</a></li>
            <li><a href="<?php echo WEB_ROOT; ?>index.php?page=3">About</a></li>
            <li><a href="<?php echo WEB_ROOT; ?>index.php?page=5">Contact</a></li>

    <?php if (isset($_SESSION['ADMIN_ROLE'])) { ?> 
            <li><a href="<?php echo WEB_ROOT; ?>admin/logout.php">Logout</a></li>

    <?php  } else { ?> 

             <li><a href="http://localhost/sscbc/admin">Login</a></li>
    <?php } ?>            
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
  
  <!--Container here-->
    <?php check_message(); ?>
       
    <?php require_once $content;?>

      <hr>

      <footer>
        <p>&copy; 2021 Panpacific University Urdaneta City.</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo WEB_ROOT; ?>assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo WEB_ROOT; ?>js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo WEB_ROOT; ?>assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="<?php echo WEB_ROOT; ?>js/offcanvas.js"></script>
    <script src="<?php echo WEB_ROOT; ?>jquery/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT; ?>jquery/pagination.js"></script>
<script>
/*Get the total rows in the table*/
var maxrow = '<?php echo $maxrow; ?>';
/*Set the page limit*/
var pageLimit = 5;
 
/**load the method in validating the records in the page document*/
$(function () {  
            load = function() {
                window.tp = new Pagination('#pagination', {
                    /*load the total rows in the table*/
                    itemsCount: maxrow,
                    /*load the page limit*/
                    pageSize: pageLimit,
                    
                    /*Set the events for changing the page of records*/
                    onPageChange: function (paging) { 
                        var start = paging.pageSize * (paging.currentPage - 1), /*set the starting page */
                            end = start + paging.pageSize, /**/
                            $rows = $('#wrap').find('.data'); /*fetching data in the table*/
                            $rows.hide(); /*hidding the existing rows*/
                            for (var i = start; i < end; i++) {
                                $rows.eq(i).show(); /*retrieving records per page*/
                            }
                    }
                });
            }

        load();
    });
</script>
  </body>
</html>
