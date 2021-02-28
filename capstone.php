
  <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <!--Header-->
           <?php
        $server = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'sscbcdb';
        $con    = mysqli_connect($server, $dbuser, $dbpass);
    if (isset($con)) {
        # code...
        $dbSelect = mysqli_select_db($con, $dbname);
        if (!$dbSelect) {
            echo "Problem in selecting database! Please contact administraator";
            die(mysqli_error($con));
        }
    } else {
        echo "Problem in database connection! Please contact administraator";
        die(mysqli_error($con));
    }
    ?> 
 <?php include'header.php';?>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
     <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <form class="navbar-form navbar-left" action="<?php echo WEB_ROOT; ?>index.php?page=2" method="POST">
        <div class="form-group">
        <label for="Course">Search Filer by Course</label> 
          <select class="form-control input-bg btn-primary" name="Course" id="Course">
              <option value="None">Select Course</option>
              <option value="BSIT">BSIT</option>
              <option value="BSCS">BSCS</option>
              <option value="BSBA">BSBA</option>
            </select> 
        </div>
        <button type="submit" name ="search" class="btn btn-info">Search</button> 
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="panel panel-default">
        
              <div class="panel-body">  
                <div class="col-xs-12 col-sm-12 blog-main">
          <form action="#"> 
          <div id="wrap">

<?php  
        if (isset($_POST['search'])) {
          $sqlQuery = "SELECT `BOOKID`, `TITLE`, `AUTHOR`, `COURSE`, `MEMBERS`, `ADVISER`, `GRAMMARIAN`,LEFT( `ABSTRACT`,160) AS 'ABSTRACT', `PUBYEAR`, `UPLOADEDBY`, `DATEUPLOADED` FROM `tblbooks` where COURSE like '%". $_POST['Course']."%'";
          # code...
        }else{

           /*set a query for retrieving data in the database*/
                $sqlQuery = "SELECT `BOOKID`, `TITLE`, `AUTHOR`, `COURSE`, `MEMBERS`, `ADVISER`, `GRAMMARIAN`,LEFT( `ABSTRACT`,160) AS 'ABSTRACT', `PUBYEAR`, `UPLOADEDBY`, `DATEUPLOADED` FROM `tblbooks`";
        }
                /*Execute the query*/
                $result = mysqli_query($con, $sqlQuery) or die(mysqli_error($con));
                /*get the total rows in the table*/
                $maxrow = mysqli_num_rows($result); 
                /*load data in the table*/
                while ($row = mysqli_fetch_array($result)) {
                  echo '<div class="data blog-post">';  
                  echo  '<h2 class="blog-post-title">'.$row['TITLE'].'</h2>
                        <h5 class=""><b>Date Uploaded:</b> '.$row['DATEUPLOADED'].'</h5>
                        <h5 class=""><b>Uploaded By:</b> '.$row['UPLOADEDBY'].'</h5>
                        <h5 class=""><b>Members:</b> '.$row['MEMBERS'].'</h5>
                        <h5 class=""><b>Adviser :</b> '.$row['ADVISER'].'</h5>
                        <h5 class=""><b>Grammarian :</b> '.$row['GRAMMARIAN'].'</h5>';  
                   
                  echo  '<h5 class=""><b>Abstract:</b> </h5><p>'.$row['ABSTRACT'].'</p><a class="btn-primary btn-sm active" role="button"  href="index.php?page=4&id='.$row['BOOKID'].'">Read more</a>';
                  echo  '<h5 class=""><b>Year :</b> '.$row['PUBYEAR'].'</h5>';
                  echo '</div>';
 
                }
            
          ?>
          <ul id ="pagination"> </ul> 


          </div>

</form>
                </div>
                </div>
                </div>
              </div><!--/.col-xs-12.col-sm-9-->
<script type="text/javascript" src="<?php echo WEB_ROOT; ?>jquery/pagination.js"></script>
<script>
/*Get the total rows in the table*/
var maxrow = '<?php echo $maxrow; ?>';
/*Set the page limit*/
var pageLimit = 3;
 
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
        <!--Sidebar-->
        <?php include'sidebar.php';?>
      </div><!--/row-->
