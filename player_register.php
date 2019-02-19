<?php 
$title = 'Home'; 
include('template/header.php');
 ?>

 <!-- OnLoad Code -->
<script>

$( document ).ready(function() {
    console.log( "ready!" );
    //Load_existing_players()
});
</script>
    <!-- Header ends-->
    <!-- Content Starts-->
<div id="main" class="container">
        <!-- Heading of the page starts here -->
        <div class="row">
            <div class="col-md-12">
                <h3>Panel Heading goes here</h3>
                <h4>Sub heading of the page goes here</h4>
            </div>
        </div>
        <!-- Heading of the page ends here -->
        <!-- Adding Player Block Starts-->
        <form class="form-inline">
        <div class="row">
          <div class="col-md-12">
                <div class="input-group ">   
                  <input type="search" class="form-control" id="players" placeholder="Player Name">
                  <span class="input-group-btn">
                  <button class="btn btn-primary" id="Add" type="button">+</button>    
                </span>

            </div>  
          </div>
        </div>
       
           
        </form>
        <form>
          <div class="row">
            <div class="col-md-12">

            <table  id="team_players_table" class="table-resp">
                          <tr>
                              <th scope="col">Player Id</th>
                              <th scope="col">First Name</th>
                              <th scope="col">Last Name</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                              <th scope="col">Request Date</th>     
                          </tr>
                          <tr>
                            <td>222</td>
                            <td>John</td>
                            <td>Rosmary</td>
                            <td>Ready to Play</td>
                            <td>Action here</td>
                            <td>2018-02-6</td>
                          </tr> 
                          
               </table>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                  
                  <a id="commit_btn"  href="#" contenteditable="true" class="btn btn-success btn-sm" role="button" >Commit Changes</a>
									<a id="back_btn" "  href="#" contenteditable="true" class="btn btn-info btn-sm" role="button"> Back </a> 
									<a id="exit_btn"    href="#" contenteditable="true" class="btn btn-default btn-sm" role="button"> Exit </a> 
              </div>
            </div>
          </div>
        </form> 
        <div class="alert alert-danger"> ** All  non confirmed requests will be deleted automatically after two hours</div>
        <!-- Adding Players Block Ends-->
        

    
</div>
    
 <!-- Content Ends-->
   
<?php include('template/footer.php'); ?>