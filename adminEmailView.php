<!DOCTYPE html>
<html lang="en">
 <head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" href="stylesheets/styles.css"> -->
  <script type="text/javascript" src="script.js"></script>
  <script src="jquery-1.10.2.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Quicksand:300' rel='stylesheet'type='text/css'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <style type="text/css">
      .mainDiv{
          width: 50%;
         
          margin-right: auto;
          margin-left: auto;
      }   
  input:checked + label{
      background-color:#4CAF50;

    }
   
 .panel{
  border:none;
  padding:0;
}

      
      .labelA{
          background-color: white; 
          color: black; 
          border: 2px solid #4CAF50;
          padding-right: 15px;
          
      }
      .labelA:hover{
          background-color: #4CAF50;
          color: white;
      }
      .labelB{
          background-color: white; 
          color: black; 
          border: 2px solid #4CAF50;
          text-align: center;
          padding-right: 15px;
      }
      .labelB:hover{
          background-color: #4CAF50;
          color: white;
      }
      .labelC{
         background-color: white; 
          color: black; 
          border: 2px solid #4CAF50;
          text-align: center;
          padding-right: 15px;
          border-radius:.25em;
      }
      .labelC:hover{
          background-color: #4CAF50;
          color: white;
      }
      .submitButton{
          background-color: white; 
          color: black; 
          border: 2px solid #4CAF50;
          text-align: center;
          border-radius:.25em;
      }
      .submitButton:hover{
          background-color: #4CAF50;
          color: white;
      }
      .feedback {
          background-color: white; 
          color: black; 
          border: 2px solid #4CAF50;
          text-align:center;
          padding-left:20px;
          border-radius:.25em;
       }
       .feedback:hover{
           background-color: #4CAF50;
          color: white;
       }
       img{
           width:100px;
           height:100px;
           
       }
       .sendEmail{
          background-color: white; 
          color: black; 
          border: 2px solid #4CAF50;
          text-align:center;
          padding-left:20px;
          border-radius:.25em;
          
          
           
       }
       .sendEmail:hover{
           background-color: #4CAF50;
          color: white;
       }
       
              
    


  </style>
 
 </head>
    



     
<body>
    <div style="text-align:center;" > 
    <label style="font-size:20px;">Send To:</label>&emsp;
    <textarea rows="1" cols="30"></textarea>
    <!--Here we create a form that'll take the employer to the actual website needed using FORM
      Still need to decide which website we'll sent eh employer to, so we'll use
      http://connectwork.dptechgroup.com/en_Employers.html  for now -->
      </div>
<div class='mainDiv'>
    <form method="GET" action="">
        
    <div style="text-align:center;border-style:solid;border-bottom: none;">
        <img src="connectWorkLogo.png"> 
        <h2>We have new candidates for you!</h2><br>
    </div>
   <div  style="border-style:solid; border-top: none;" class="col-xs-12 col-sm-12 col-lg-12">
<div class="candidates">
<div class="panel-group" id="accordion">    
   <?php

$num_of_resumes = 3; 
$candidates =['Allyson','Enrique','Jovanka'];
$collapse='colapse';

for ($i=1;$i<=$num_of_resumes;$i++)
{
    echo '<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
                <a id="collapseStyle" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$i.'">'.$candidates[$i-1].' </a>
            </h4>
          </div>
          <div id="collapse'.$i.'" class="panel-collapse collapse">
            <div class="panel-body">

              <table>
              <tr><td>Resume</td></tr>
            </table>
            <div class="checkbox" style="text-align:center;">
              <!-- The input type here is a checkbox, we need to create a php file that processes which are checked and which are not and then send that file to the site that we want the employer to go directly to-->
              <input type="checkbox" id= "box'.$i.'" name="candidate[]" value="'.$candidates[i-1].'" style="display:none;"/>
              <label class=labelA for="boxA">Add Candidate</label>
            </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        ';
}

?>
    </div>
    </div>
    <div class="buttonCount" style="text-align:center">
      <input class="submitButton" type="submit" name="submit" value="Save Candidates" >
    </div>
  </form>

    <footer>
      <!-- Copyright@2017 -->
      <div style="margin-top:40px; text-align:center;">
        <textarea rows="4" cols="50">
        Leave your comments here...
        </textarea>
        <br/>
        <label class="feedback">I'd like to talk more</label>
        <br/>
        <br/>
        <label class="feedback">Not Interested</label>
        <label class="feedback">I want more like this</label>
      </div>
     
    </footer>
    <br/>
    <br/>

</div>
    <br/>
    <br/>
    <div style="text-align:center;">
           
        <button class='sendEmail'>Send Email?</button>
    </div>
    
</div>

</body>
    
    
</html>
