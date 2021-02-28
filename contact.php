  <?php
if(isset($_POST['submit'])){

    if ($_POST['name'] == "" OR $_POST['email'] == "" OR $_POST['subject'] == "" OR $_POST['message'] == "") {
      $messageStats = false;
      ?>
<script type="text/javascript">
 alert("All field is required!");
    window.location="index.php?page=5";
</script>
    <?php
    }else{  
      //`MSGID`, `SENDERNAME`, `SENDEREMAIL`, `SENDERSUBJ`, `SENDERMSG`
      $MSG = New Msg();
    //  $MSG->MSGID       = $_POST['user_id'];
      $MSG->SENDERNAME     = $_POST['name'];
      $MSG->SENDEREMAIL    = $_POST['email'];
      $MSG->SENDERSUBJ     = $_POST['subject'];
      $MSG->SENDERMSG      = $_POST['message'];
      $MSG->create();
      ?>
<script type="text/javascript">
 alert("Your message has been sent  successfully!");
    window.location="index.php";
</script>
    <?php

      
    }
    }


  ?>
  <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <!--Header-->
 <?php // include'header.php';?>
                    <?php   check_message();  ?>   

      <div class="panel panel-default">
        
              <div class="panel-body">  
                <div class="col-xs-12 col-sm-12">
          <div class="row">
          <form class="form-horizontal" action="http://localhost/sscbc/index.php?page=5" method="post">
          <fieldset>
            <legend>Contact us</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>

            <!-- sUBJECT input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="subject">Subject</label>
              <div class="col-md-9">
                <input id="subject" name="subject" type="text" placeholder="Subject" class="form-control">
              </div>
            </div>
    
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>

          </div><!--/row-->
          </div>
          </div>
          </div>
        </div><!--/.col-xs-12.col-sm-9-->

        <!--Sidebar-->
      <?php include'sidebar.php';?>
      </div><!--/row-->





