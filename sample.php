<?php 
$title = 'Home'; 
include('template/header.php');
 ?>

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

        <!-- Control Panel Button Group starts here -->
        <div class="row">
            <div class="col-md-12 "  >
                    <div class="text-center">
                        <div class="btn-group btn-admin-group " role="group" >
				 
                                <button class="btn btn-success btn-md  btn-admin" type="button">
                                    Score Sheet Codes
                                </button> 
                                <button class="btn btn-success btn-md btn-admin" type="button">
                                    Team Selection
                                </button> 
                                <button class="btn btn-success btn-md btn-admin" type="button">
                                        Player Registration
                                </button> 
                                <button class="btn btn-success btn-md btn-admin" type="button">
                                    Edit Player Detail
                                </button>
                        </div>
                    </div>
            </div>
        </div>
          <!-- Control Panel Button Group Ends here -->

          <!-- Responsive Table starts here -->
        <div class="row">
            <div class="col-md-12 ">
                        
                        <table class="table-resp">
                          <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Points</th>
                            <th>Points</th>
                            <th>Points</th>
                            <th>Points</th>
                            <th>Points</th>
                            <th>Points</th>
                            <th>Points</th>
                            <th>Points</th>
                            <th>Points</th>
                            <th>Longest heading </th>
                          </tr>
                          <tr>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>50</td>
                            <td>50</td>
                            <td>50</td>
                            <td>50</td>
                            <td>50</td>
                            <td>50</td>
                            <td>50</td>
                            <td>50</td>
                            <td>50</td>
                          </tr>
                          <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>94</td>
                            <td>94</td>
                            <td>94</td>
                            <td>94</td>
                            <td>94</td>
                            <td>94</td>
                            <td>94</td>
                            <td>94</td>
                            <td>94</td>
                          </tr>
                          <tr>
                            <td>Adam</td>
                            <td>Johnson</td>
                            <td>67</td>
                            <td>67</td>
                            <td>67</td>
                            <td>67</td>
                            <td>67</td>
                            <td>67</td>
                            <td>67</td>
                            <td>67</td>
                            <td>67</td>
                            <td>100</td>
                          </tr>
                        </table>
               
            </div>
        </div>
          <!-- Responsive Table starts here -->
    
</div>
    
 <!-- Content Ends-->
   
<?php include('template/footer.php'); ?>