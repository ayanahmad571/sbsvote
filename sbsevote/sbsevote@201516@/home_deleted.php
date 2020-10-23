
 <?php  /*
<div class="row">

 
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div id="myCarouselcomp" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

       
<?php 


$sql = "SELECT * FROM voting_events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$xx =1;
    // output data of each row
    while($row = $result->fetch_assoc()) {

if($xx == 1){echo '      <div class="item active ">
';}else{echo '      <div class="item">
';}

echo '<div class="row" style="text-align:center"><h3>'. $_SESSION['SESS_HOUSE'].', '.$row['event_name'].' Candidates 
</h3></div>';


#NESTED START







                                	$overallvotecount = "
									
								SELECT count(*) as votecountallhouse from votes_".$row['event_keyword_url']." 
								

									
								";

                                $overallvotecountresult = $conn->query($overallvotecount);
                                
                                if ($overallvotecountresult->num_rows > 0) {
                                    // output data of each row
                                    $overallvotecountrow = $overallvotecountresult->fetch_assoc();
                                        $overallvotecountno = $overallvotecountrow['votecountallhouse'];
										 
                                    
                                } else {
                                   $overallvotecountno = 0;
										
                                }






#ihovuij                                
									$housevotescount = "
									
								SELECT cadidates_".$row['event_keyword_url'].".house ,count(votes_".$row['event_keyword_url'].".candidate_id)as votecounthouse
								FROM
								votes_".$row['event_keyword_url']." left join cadidates_".$row['event_keyword_url']." on cadidates_".$row['event_keyword_url'].".random_algorithm = votes_".$row['event_keyword_url'].".candidate_id
								WHERE  cadidates_".$row['event_keyword_url'].".house = '".strtoupper($_SESSION['SESS_HOUSE'])."'
								
								group by cadidates_".$row['event_keyword_url'].".house
								order by cadidates_".$row['event_keyword_url'].".house ASC;

									
								";
                                $housevotescountresult = $conn->query($housevotescount);
                                
                                if ($housevotescountresult->num_rows > 0) {
                                    // output data of each row
                                    $housevotecountrow = $housevotescountresult->fetch_assoc();
                                        $housevotescountno = $housevotecountrow['votecounthouse'];
                                    
                                } else {
                                    $housevotescountno = 0;
                                }

#klok								
								$personcountvote = "

SELECT count(*) as count FROM `members` WHERE stu_id = ".$_SESSION['SESS_ADMISNO']."";


$personcountvote_res = $conn->query($personcountvote);

if ($personcountvote_res->num_rows > 0) {
    // output data of each row
    while($personcountvote_row = $personcountvote_res->fetch_assoc()) {
        $personmaxvotes = $personcountvote_row['count'];
    }
} else {
echo 'ERROR SON';

}







echo '




 <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Student vote History</h3>
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    
                    <div class="col-md-12">
                      <p class="text-center">
                        <strong>Goal Completion</strong>
                      </p>
                     ';
							  
                                 
                                
									$eachstuvote = "
									
							
								SELECT cadidates_".$row['event_keyword_url'].".name, cadidates_".$row['event_keyword_url'].".stu_id 
								,count(votes_".$row['event_keyword_url'].".candidate_id)as stuindividualvotecount 
								FROM votes_".$row['event_keyword_url']." left join cadidates_".$row['event_keyword_url']." on
								cadidates_".$row['event_keyword_url'].".random_algorithm =
								votes_".$row['event_keyword_url'].".candidate_id WHERE  cadidates_".$row['event_keyword_url'].".house =
								'".strtoupper($_SESSION['SESS_HOUSE'])."'  group by cadidates_".$row['event_keyword_url'].".name order by
								cadidates_".$row['event_keyword_url'].".house ASC

									
								";
								
                                $eachstuvoteresult = $conn->query($eachstuvote);
                                
                                if ($eachstuvoteresult->num_rows > 0) {
                                    // output data of each row
									$coloursarray = array('yellow','red','aqua','green');
                                    while($eachstuvoterow = $eachstuvoteresult->fetch_assoc()) {
                                        echo '<div class="progress-group">
                        <span class="progress-text">'.$eachstuvoterow['name'].'\'s Result</span>
                        <span class="progress-number"><b>'.substr($eachstuvoterow['stuindividualvotecount'],0,5).'</b>/'.substr($housevotescountno,0,5) .'</b></span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-'.$coloursarray[array_rand($coloursarray,1)].'" style="width: '.substr( (($eachstuvoterow['stuindividualvotecount'] / $housevotescountno ) *100 ) ,0,5  )  .'%"></div>
                        </div>
                      </div><!-- /.progress-group -->';
                                    }
                                } else {
									
									
									
									
									
									
																		$candidatesfetch = "
									
							
								SELECT * FROM cadidates_".$row['event_keyword_url']." where house ='".$_SESSION['SESS_HOUSE']."'

									
								";
                                $candidatesfetchres = $conn->query($candidatesfetch);
                                

									
									
									
								// output data of each row
									$coloursarray = array('yellow','red','aqua','green');
                                    while($candidatesfetchresrow = $candidatesfetchres->fetch_assoc()) {
                                        echo '<div class="progress-group">
                        <span class="progress-text">'.$candidatesfetchresrow['name'].'\'s Result</span>
                        <span class="progress-number"><b>0/0</b></span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-'.$coloursarray[array_rand($coloursarray,1)].'" style="width: 0%"></div>
                        </div>
                      </div><!-- /.progress-group -->';	
									}
									
									
									
									
									
								}
                                
                              echo '
                      
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-6 col-xs-6">
                      <div class="description-block border-right">
                        <h5 class="description-header">
                        '. $overallvotecountno .'
                         </h5>
                        <span class="description-text">overall vote count</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-6 col-xs-6">
                      <div class="description-block border-right">
                        <h5 class="description-header">
                        '. $housevotescountno .'
                         </h5>
                        <span class="description-text">Total votes for '. ucwords($_SESSION['SESS_HOUSE']) .'</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>






';






#END NESTED
								
								echo '</div>';
								$xx++;
								
					}
} else {
    echo "0 results";
}



 ?>
       
      </div>
    </div>


  </div>
  

            </div>
 
            
              <!-- Left and right controls -->
 <div class="row">
 
  <style>
 .controller{
	 vertical-align:central;
	     margin: auto;
    font-size: 2em;
	padding: 0px;

 }
 </style>
 
  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" >
 </div>
  <div class="controller col-lg-1 col-md-1 col-sm-1 col-xs-1" >
    <a class=" pull-left" href="#myCarouselcomp" role="button" data-slide="prev">
      <span style="color:#000000" class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
 </div>
 <div class="controller col-lg-1 col-md-1 col-sm-1 col-xs-1" >
    <a class=" pull-right" href="#myCarouselcomp" role="button" data-slide="next">
      <span style="color:#000000" class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
 </div>
   <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" >
 </div>

 
 
 </div>
            
            
  */ ?>




<?php  /*
<?php 

$userwidget = "SELECT * FROM cadidates_housecaptain WHERE house='".$_SESSION['SESS_HOUSE']."' order by name ASC";
$userwidgetresult = $conn->query($userwidget);

if ($userwidgetresult->num_rows > 0) {
    // output data of each row
	$numrows = $userwidgetresult->num_rows;
	
	if($numrows == 3){
		$col = 4;
	}if($numrows == 4){
		$col = 3;
	}else{
		$col = 12/ $numrows ;
	}
    while($userwidgetrow = $userwidgetresult->fetch_assoc()) {
        echo '
		
		
		<div class="col-md-'.$col.' col-lg-'.$col.' col-sm-6 col-xs-12">
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-aqua-active">
                  <h3 class="widget-user-username">'.ucwords($userwidgetrow['name']).'</h3>
                  <h5 class="widget-user-desc">Founder & CEO</h5>
                </div>
                <div class="widget-user-image">
                  <img class="img-circle" src="http://stepsys.org/images/stu_pics/'.$userwidgetrow['stu_id'].'_8.jpg" alt="User Avatar">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-12 ">
                      <div class="description-block">
                        <br>
							'.'I believe that i can change the way our school thinks '#$userwidgetrow['desc-box']
							.'
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.widget-user -->
            </div><!-- /.col ends -->
		
		
		';
    }
} else {
    echo "0 results";
}

 ?>
     
 */ ?> <?php  /*
 <div class="row">

 
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

       

<?php 


$sql = "SELECT * FROM voting_events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$xx =1;
    // output data of each row
    while($row = $result->fetch_assoc()) {

if($xx == 1){echo '      <div class="item active ">
';}else{echo '      <div class="item">
';}

echo '<div class="row" style="text-align:center"><h3>'. $_SESSION['SESS_HOUSE'].', '.$row['event_name'].' Candidates 
</h3></div>';
								$userwidget = "SELECT * FROM cadidates_".$row['event_keyword_url']." WHERE house='".$_SESSION['SESS_HOUSE']."' order by name ASC";
								$userwidgetresult = $conn->query($userwidget);
								
								if ($userwidgetresult->num_rows > 0) {
									// output data of each row
									$numrows = $userwidgetresult->num_rows;
									
									if($numrows == 3){
										$col = 4;
									}if($numrows == 4){
										$col = 3;
									}else{
										$col = 12/ $numrows ;
									}
									while($userwidgetrow = $userwidgetresult->fetch_assoc()) {
										echo '
																
									
										<div class="col-md-'.$col.' col-lg-'.$col.' col-sm-6 col-xs-12">
											  <!-- Widget: user widget style 1 -->
											  <div class="box box-widget widget-user">
												<!-- Add the bg color to the header using any of the bg-* classes -->
												<div class="widget-user-header bg-aqua-active">
												  <h3 class="widget-user-username">'.ucwords($userwidgetrow['name']).'</h3>
												  <h5 class="widget-user-desc">Founder & CEO</h5>
												</div>
												<div class="widget-user-image">
												  <img class="img-circle" src="http://stepsys.org/images/stu_pics/'.$userwidgetrow['stu_id'].'_8.jpg" alt="User Avatar">
												</div>
												<div class="box-footer">
												  <div class="row">
													<div class="col-sm-12 ">
													  <div class="description-block">
														<br>
															'.'I believe that i can change the way our school thinks '#$userwidgetrow['desc-box']
															.'
													  </div><!-- /.description-block -->
													</div><!-- /.col -->
												  </div><!-- /.row -->
												</div>
											  </div><!-- /.widget-user -->
											</div><!-- /.col ends -->
										
										';
									}
								} else {
									echo "0 results";
								}
								echo '</div>';
								$xx++;
								
					}
} else {
    echo "0 results";
}



 ?>
 */ ?>
 
   <?php  /*
 </div>
    </div>


  </div>
  

            </div>
            
              <!-- Left and right controls -->

<div class="row">

  <style>
 .controller{
	 vertical-align:central;
	     margin: auto;
    font-size: 2em;
	padding: 0px;

 }
 </style>
 
  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" >
 </div>
  <div class="controller col-lg-1 col-md-1 col-sm-1 col-xs-1" >
    <a class=" pull-left" href="#myCarousel" role="button" data-slide="prev">
      <span style="color:#000000" class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
 </div>
 <div class="controller col-lg-1 col-md-1 col-sm-1 col-xs-1" >
    <a class=" pull-right" href="#myCarousel" role="button" data-slide="next">
      <span style="color:#000000" class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
 </div>
   <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" >
 </div>

 
 
 </div>
 */ ?>
            
            
            
     <!-- Main row -->
          <?php  /*
<div class="row">
            <!-- Left col -->
            <div class="col-md-12 col-lg-12">
              

              <!-- TABLE: LATEST ORDERS -->
              <h3 align="center">Votes Table</h3>
              <div class="box box-info">
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>S.NO</th>
                          <th>Desc</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                      
                      
                      
                      <?php
$voting_events = 'SELECT * FROM voting_events ';
#$voting_events = 'SELECT * FROM voting_events where find_in_set("",event_available)';

$voting_events_res = $conn->query($voting_events);

if ($voting_events_res->num_rows > 0) {
    // output data of each row
	$x =1;
    while($voting_events_row = $voting_events_res->fetch_assoc()) {
		# -24 0,-24
        echo '
		
		<tr>
                          
                          
						  
						  
						  ';
						  					
											$inocomplete= 'SELECT * FROM 
											votes_'.$voting_events_row['event_keyword_url'].' where
											 stu_id = '.$_SESSION['SESS_ADMISNO'].'';
						  				$inocomplete_res = $conn->query($inocomplete);
										$inocomplete_row = $inocomplete_res->fetch_assoc();
									
									if ($inocomplete_res->num_rows > 0) {
										echo '
										<td>'.$x.'</td>
                          				<td>'.$voting_events_row['event_name'].'</td>
										
										<td><span class="label label-success">Completed</span></td>
										
										';
									} else {
										echo '
										<td>'.$x.'</td>
                          				<td>'.$voting_events_row['event_name'].'</td>
										
										<td><span class="label label-danger">Incompleted</span></td>
										
										
										  
										  ';
									}
						  
						  
						  echo'
                          
                        </tr>
                        
		
		';
		
		
		$x++;
    }
} else {
    echo "Waiting For Server Responce";
}
?>
     
                       
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            </div>
 */ ?><!-- /.row -->