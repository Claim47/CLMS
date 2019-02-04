<?php 
$title = 'Live Games'; 
include('template/header.php');
 ?>
<!-- Header ends-->
<!-- Content Starts-->
<div id="main" class="container">
  <div class="row">
    <div class="col-md-12">
      <form>
        <div class="form-group">
          <label for="code">Game Scoring Code</label>
          <input type="email" class="form-control" id="code" aria-describedby="codeHelp" placeholder="Enter Code">
          <small id="codeHelp" class="form-text text-muted">Scoring Code is unique for each Batting Inning</small>
        </div>
       
      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<!-- Content Ends-->

<?php include('template/footer.php'); ?>