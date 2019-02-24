<?php 
$title = 'Home'; 
$showMenue ='false';
include('template/header.php');
 ?>

    <!-- Header ends-->
    <!-- Content Starts-->
    <div id="main" class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                  <?php 
                  $RankCardTitle ='Premier Batting';
                  $RankCardPlayer= 'Kevin Trusko Butcher';
                  $RankCardPlayerTeam = 'Vicotry Eleven';
                  $param1Title='Runs';                  $param1Value='134';
                  $param2Title = 'Inn';                  $param2Value ='4';
                  $param3Title = 'Avg';                  $Param3Value ='4.5';
                  include('template/includes/RankCard.php'); ?>
                  </div>
                  <div class="col-md-4">
                  <?php 
                  $RankCardTitle ='Premier Bowling';
                  $RankCardPlayer= 'Tom Smith';
                  $RankCardPlayerTeam = 'Lazers';
                  $param1Title='Wickets';                  $param1Value='5';
                  $param2Title = 'Overs';                  $param2Value ='25';
                  $param3Title = 'NR';                  $Param3Value ='4.8';
                  include('template/includes/RankCard.php'); ?>
                  </div>
                  <div class="col-md-4">
                  <?php
                  $RankCardTitle ='Premier MVP';
                  $RankCardPlayer= 'Frank Gothiuer';
                  $RankCardPlayerTeam = 'Bison Stars';
                  $param1Title='Points';                  $param1Value='227';
                  $param2Title = 'Wickets';                  $param2Value ='20';
                  $param3Title = 'Runs';                  $Param3Value ='186';
                   include('template/includes/RankCard.php'); ?>
                  </div>
                </div>
                <div style="margin:20px">
                  <!-- Spacer -->
                </div>
                <div class="row">
                  <div class="col-md-4">
                  <?php 
                  $RankCardTitle ='Div 1 Batting';
                  $RankCardPlayer= 'Keith Remier';
                  $RankCardPlayerTeam = 'Patriots Eleven';
                  $param1Title='Runs';                  $param1Value='152';
                  $param2Title = 'Inn';                  $param2Value ='5';
                  $param3Title = 'Avg';                  $Param3Value ='3.5';
                  include('template/includes/RankCard.php'); ?>
                  </div>
                  <div class="col-md-4">
                  <?php 
                  $RankCardTitle ='Div 1 Bowling';
                  $RankCardPlayer= 'Garry Mitchell';
                  $RankCardPlayerTeam = 'Beamers';
                  $param1Title='Wickets';                  $param1Value='15';
                  $param2Title = 'Overs';                  $param2Value ='35';
                  $param3Title = 'NR';                  $Param3Value ='1.8';
                  include('template/includes/RankCard.php'); ?>
                  </div>
                  <div class="col-md-4">
                  <?php
                  $RankCardTitle ='Div 1 MVP';
                  $RankCardPlayer= 'Jason Widler';
                  $RankCardPlayerTeam = 'Ozies';
                  $param1Title='Points';                  $param1Value='148';
                  $param2Title = 'Wickets';                  $param2Value ='8';
                  $param3Title = 'Runs';                  $Param3Value ='80';
                   include('template/includes/RankCard.php'); ?>
                  </div>
                </div>
                <div style="margin:20px">
                  <!-- Spacer -->
                </div>
                <div class="row">
                  <div class="col-md-4">
                  <?php 
                  $RankCardTitle ='Div 2 Batting';
                  $RankCardPlayer= 'Riaz Mughal';
                  $RankCardPlayerTeam = 'Tigers';
                  $param1Title='Runs';                  $param1Value='341';
                  $param2Title = 'Inn';                  $param2Value ='10';
                  $param3Title = 'Avg';                  $Param3Value ='4.62';
                  include('template/includes/RankCard.php'); ?>
                  </div>
                  <div class="col-md-4">
                  <?php 
                  $RankCardTitle ='Div 2 Bowling';
                  $RankCardPlayer= 'Aslam M Arain';
                  $RankCardPlayerTeam = 'Jessy United';
                  $param1Title='Wickets';                  $param1Value='23';
                  $param2Title = 'Overs';                  $param2Value ='36';
                  $param3Title = 'NR';                  $Param3Value ='5.23';
                  include('template/includes/RankCard.php'); ?>
                  </div>
                  <div class="col-md-4">
                  <?php
                  $RankCardTitle ='Div 2 MVP';
                  $RankCardPlayer= 'Juashua Carter';
                  $RankCardPlayerTeam = 'Machlines';
                  $param1Title='Points';                  $param1Value='321';
                  $param2Title = 'Wickets';                  $param2Value ='22';
                  $param3Title = 'Runs';                  $Param3Value ='236';
                   include('template/includes/RankCard.php'); ?>
                  </div>
                </div>
              </div>
            </div>
    </div>
    
 <!-- Content Ends-->
   
<?php include('template/footer.php'); ?>