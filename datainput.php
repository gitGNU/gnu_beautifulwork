<html>
<head>
<link rel="stylesheet" type="text/css" href="http://www.beautifulwork.org/css/bootstrap/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="http://www.beautifulwork.org/css/bootstrap/bootstrap-responsive.min.css" />
<link rel="stylesheet" type="text/css" href="http://www.beautifulwork.org/css/bootstrap/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="http://www.beautifulwork.org/css/bootstrap/bootstrap.min.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="http://www.beautifulwork.org/js/jquery-ui-1.8.9.min.js"></script>
<script type="text/javascript" src="http://www.beautifulwork.org/js/jquery.flot.min.js"></script>
<script type="text/javascript" src="http://www.beautifulwork.org/js/jstat-1.0.0.min.js"></script>
<script type="text/javascript" src="http://www.beautifulwork.org/js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="http://www.beautifulwork.org/js/bootstrap/bootstrap.js"></script>

<script type="text/javascript" src="http://www.beautifulwork.org/js/bootstrap/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>

<style>
body{margin: 4% 4% 4% 4%; background-color:#ff8080}
</style>

</head>
<body>

<!--

<h6>TRPS = TRANSFERS PER SECOND</h6>
<h6>RTPS = READ TRANSFERS PER SECOND</h6>

-->

<!--

<?php // echo get_option( real_bubble_sort_first, $default ); ?>
<div  style="font-family: 'Wellfleet', cursive;font-size:16px;background-color:#fff;">

-->

<div style="background-color:#ffe6e6;border-width:3px;border-style:solid;border-radius:10px;border-color:#ff0000">

<form  action="http://graph.beautifulwork.org/plot-iostat.php" method="post" >
<table class="table">
<tr>
<td>
DATA IDENTIFIER: <input type="text" placeholder="NAME TO IDENTIFY" name="tname" />
</td>
</tr>
<tr>
<td>
TRPS
</td>
<td>
RTPS
</td>
<td>
WTPS
</td>
<td>
BREAD/S
</td>
<td>
BWRTN/S
</td>
</tr>
<tr>
<td>
<input class="span1" type="text"  placeholder="" name="trps1" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="rtps1" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="wtps1" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="breads1" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="bwrtns1" />
</td>
</tr>
<tr>
<td>
<input class="span1" type="text"  placeholder="" name="trps2" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="rtps2" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="wtps2" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="breads2" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="bwrtns2" />
</td>
</tr>
<tr>
<td>
<input class="span1" type="text"  placeholder="" name="trps3" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="rtps3" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="wtps3" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="breads3" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="bwrtns3" />
</td>
</tr>
<tr>
<td>
<input class="span1" type="text"  placeholder="" name="trps4" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="rtps4" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="wtps4" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="breads4" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="bwrtns4" />
</td>
</tr>
<tr>
<td>
<input class="span1" type="text"  placeholder="" name="trps5" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="rtps5" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="wtps5" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="breads5" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="bwrtns5" />
</td>
</tr> 
</table>
<input style="margin-left:1%" class="btn btn-primary" type="submit" value="PLOT ON FLY" />
</form>
<br></br>
<form action="http://colorstat.beautifulwork.org/2012/10/01/plot-paging-statistics/" method="post" >
<table class="table">
<tr>
<td>
DATA IDENTIFIER: <input type="text" placeholder="NAME TO IDENTIFY" name="tname" />
</td>
</tr>
<tr>
<td>
PGPGIN
</td>
<td>
PGPGOUT
</td>
<td>
FAULT/S
</td>
<td>
MAJFLT/S
</td>
<td>
PGFREE/S
</td>
</tr>
<tr>
<td>
<input class="span1" type="text"  placeholder="" name="pgpgin" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="pgpgout" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="faults" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="majflts" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="pgfrees" />
</td>
</tr>
<tr>
<td>
PGSCANK/S
</td>
<td>
PGSCAND/S
</td>
<td>
PGSTEAL/S
</td>
<td>
%VMEFF
</td>
</tr>
<tr>
<td>
<input class="span1" type="text"  placeholder="" name="pgscanks" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="pgscands" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="pgsteals" />
</td>
<td>
<input class="span1" type="text"  placeholder="" name="pvmeff" />
</td>
</tr>
</table>
<input style="margin-left:1%" class="btn btn-primary" type="submit" value="PLOT ON FLY" />
</form>
</div> 
</body>
</html>
