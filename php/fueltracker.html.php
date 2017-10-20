

<DOCTYPE! html>

<head>

<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<style type="text/css">

body {
background:
#f2f2f2;
}

form { 
padding: 10px 50px;
background: #fff;
width: 57%;
margin-left: 20%;
margin-right: 20%;
margin-top: 10px;
height: auto;

}

h1 {
font-family: avalon bold, sans-serif;
font-size: 36px;
color: #615b57;
margin-bottom: 15px;
}



h2 {
font-family: avalon bold, sans-serif;
font-size: 32px;
color: #bf1a04;
}

p {
font-family: Avalon, sans-serif;
font-size: 22px; 
color: #615b57;
font-weight: semibold; 
}


hr {
color: #f2f2f2; 
}


select, input[type=email], input[type=text], input[type=date], input[type=calendar] {
    width: 98%;
    height: 4em;
    padding: 16px 20px;
    border-radius: 4px;
    background-color: #fff;
    margin-right: 2%;
    box-sizing: border-box;
    border: 2px solid #ddd;
    outline: none;
    font-family: sans-serif;
    font-size: 12pt;
    color: #615b57;

}


input[type=radio],  input[type=checkbox]  {
  font-family: sans-serif;
  font-size: 20px;
  height: 1.2em;
  width: 1.2em;   
}

.fieldarea {
width: 45%;
height: 9em;
display: inline-block; 
margin: 0.5em 2.5em 1em 0em;   
}

.fieldareafull {
width: 94%;
height: 11em;
float: left; 
margin: 0.25em 2.5em 0em 0em; 
display: block;  
}
 
.fieldareatall {
width: 94%;
height: 14.5em;
float: left; 
margin: 0.5em 2.5em 0em 0em; 
display: block;  
} 

fieldset {
width: 97%;
display: block;
border: 1px solid #999999;

height: 20em;    
}


textarea {
width: 97%;
    height: 6em;
    padding: 16px 20px;
    border-radius: 4px;
    background-color: #fff;
    border: 2px solid #ddd;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;  
    font-family: sans-serif;
    font-size: 12pt;
    color: #615b57;
}


button {
  font-family: Fette,sans-serif;
    font-size: .8em;
    line-height: 1.4em;
    background-color: #bf1a04;
    border-radius: 20px;
    border: 2px solid #bf1a04;
    color: #fff;
    display: block;
    letter-spacing: .05em;
    padding: 8px 25px;
    text-decoration: none!important;
    text-transform: uppercase;
    cursor: pointer;
    float: none;

}

button:hover {
opacity: 0.9;  
}


#banner {
margin: 0 0 2% 0;
display: inline-block;
}

hr {
opacity: 0.4;    +
}

small {
font-size: 13px; 
}




@media screen and (max-width: 1440px) {
form {
width: 88%;
margin-left: 4%;
margin-right: 8%;
height: 190em;    
 }    
}


#summary {
display: block;


}


</style>


  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

<meta name="robots" content="noindex, nofollow">

</head>

<body>


<!--Form Action Post-->


<form action="?" method="post">

<!--End-->



<!--Heading Section-->


<h1>Mazda Fuel Tracker </h1>
<h2>Diesel</h2>

<hr/>

<!--End heading Section-->




<!--Date-->

<div class="fieldarea">

<p>*Date:</p> 

<input name="calendar" type="calendar" class="calendar" id="datepicker">



</input>

</div>

<!--End-->


<!--Location-->

<span class="fieldarea">

<p>*Location</p> 

<input name="location" type="text" id="location" maxlength="50">

</input>

</span>




<!--End-->


<!--Fuel Type-->

<span class="fieldarea">

<p>*Fuel Type</p> 

<select name="fuel_type" type="text">

<option>Diesel</option>

<option>Unleaded</option>

<option>Gas</option>


</select>

</span>


<!--End-->




<!--Price per litre-->

<span class="fieldarea">

<p>*Price per litre</p> 

<input name="price_per_litre" type="text" id="title">

</input>

</span>

<br/>



<!--End-->


<span class="fieldarea">

<p>*Litres</p> 

<input name="litres" type="text" id="litres" maxlength="3">

</input>

</span>





<span class="fieldarea">

<p>*Cost:</p>

<input name="cost" type="text" id="cost" maxlength="8">


</input>

</span>

<span class="fieldarea">

<p>*Trip A/B kms</p>

<input name="trip_ab_kms" type="text" maxlength="4" id="trip_ab_kms">


</input>
</span>


<span class="fieldarea">

<p>*Odometer</p>

<input name="odometer" type="text" maxlength="6" id="odometer">


</input>
</span>

        
<div class="fieldareafull" style="height: 5em;">

<br/>
   
<button type="submit" value="add">submit
</button>

</div>


</section>


<section id = "summary">

<p>*Fuel Economy Summary</p>

<fieldset>




</fieldset>    

</section>


</form>


</body>
</html>

