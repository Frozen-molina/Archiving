<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          
         <!--   <a href="#" class="list-group-item active">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>-->


           
          <div class="panel panel-primary">
           
             <div class="panel-heading"><h4>Research</h4></div>
              <div class="panel-body">  
                    
                    <?php
                    global $mydb; 
                
                    $mydb->setQuery("SELECT BOOKID,`TITLE` FROM `tblbooks` ORDER BY `DATEUPLOADED` ASC LIMIT 20");
                        loadresult();

                        function loadresult(){
                            global $mydb;
                            $cur = $mydb->loadResultlist();
                            foreach ($cur as $result) {
                               ECHO '<a href="index.php'.$result->BOOKID.'" >' . $result->TITLE.'</a> <br/>';
                            }
                        } 
                    ?>
              </div>
 
          </div>
            

        </div>
        <?php include'sidebar.php';?>
        </div><!--/.sidebar-offcanvas--