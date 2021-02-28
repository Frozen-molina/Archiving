<?php  

  $BOOKID = $_GET['id'];
  $book = New Books();
  $singlebook = $book->single_book($BOOKID);

?>
   <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <!--Header-->
 <?php include'header.php';?>
        <div class="panel panel-default">
        
            <div class="panel-body">  
              <div class="col-xs-12 col-sm-12">
                <div class="row">
                 

                  <div class="data blog-post">
                  <h2 class="blog-post-title">Book Details</h2>
                  <h5 class=""><b>Title : </b> : <?php echo $singlebook->TITLE; ?></h5>
                  <h5 class=""><b>Author : </b> <?php echo $singlebook->AUTHOR; ?></h5>
                  <h5 class=""><b>Course : </b> <?php echo $singlebook->COURSE; ?></h5>
                  <h5 class=""><b>Members : </b> <?php echo $singlebook->MEMBERS; ?></h5>
                  <h5 class=""><b>Adviser : </b> <?php echo $singlebook->ADVISER; ?></h5>
                  <h5 class=""><b>Grammarian : </b> <?php echo $singlebook->GRAMMARIAN; ?></h5>
                  <h5 class=""><b>Abstract : </b> </h5><p><?php echo $singlebook->ABSTRACT; ?></p>
                  <h5 class=""><b>Publised Year : </b> <?php echo $singlebook->PUBYEAR; ?></h5>
                  <h5 class=""><b>Uploaded By : </b> <?php echo $singlebook->UPLOADEDBY; ?></h5>
                  <h5 class=""><b>Date Uploaded : </b> <?php echo $singlebook->DATEUPLOADED; ?></h5>
                  <?php
                  if ($singlebook->LOCATION == NULL) {

                    echo '<a href="download.php?bid='. $_GET['id'].'" class="btn btn-warning btn-lg " disabled="disabled">Full Document not available...</a>';
                  }else{
                        ECHO '<a href="download.php?bid='. $_GET['id'].'" class="btn btn-primary btn-lg active" role="button">Download the full Document here...</a>';
                  }
                  ?>
                                    

                  </div>
                              
                            
                                
                </div><!--/row-->
            </div>
            </div>
          </div>
        </div><!--/.col-xs-12.col-sm-9-->

        <!--Sidebar-->
      <?php include'sidebar.php';?>
      </div><!--/row-->