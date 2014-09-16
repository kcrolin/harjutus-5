<!DOCTYPE HTML>
  <head>
    <title>6. ül</title>
    <meta charset="utf-8">

  </head>
  <body>
  <h2>Booleans</h2>
  <?php 

$result1 = true;
$result2 =  false;
 ?>
 
Result 1: <?php echo $result1; ?><br>
Result 2: <?php  echo $result2;?><br>

 <?php echo "Kas result1 on boolean? " . is_bool($result1); ?><br>
 <?php echo "Kas result2 on boolean? " . is_bool($result2); ?><br>
 <?php $result3 = "mõte"; ?>
 <?php echo "Kas result3 on boolean? " . is_bool($result3); ?><br>
 
 <h2>Andmetüüpide olekud</h2> 
 <h3>NULL</h3>
 <h2>NULL</h2> 
   
 <?php 
 $var1 = null;
 $var2 = "";
 $var3 = 0;
 $var4;
 ?>
  
  <?php echo "Kas var1 on null? " . is_null($var1); ?><br>
 <?php echo "Kas var2 on null? " . is_null($var2); ?><br>
 <?php echo "Kas var3 on nul? " . is_null($var3); ?><br>
 <?php echo "Kas var4 on null? " . is_null($var4); ?><br>
  
<h3>Set</h3>  
  <?php echo "Kas var1 on väärtustatud? " . isset($var1); ?><br>
  <?php echo "Kas var2 on väärtustatud? " . isset($var2); ?><br>
<?php echo "Kas var3 on väärtustatud? " . isset($var3); ?><br>
<?php echo "Kas var4 on väärtustatud? " . isset($var4); ?><br>  
	
<?php 
$var1= "";
$var2 = "0";
$var3= 0;
$var4 = 0.0;
$var5 = array();
$var6 = NULL;
$var7 = false;
?>	
	
<?php echo "Kas var1 on empty? " . empty($var1); ?><br>	
<?php echo "Kas var2 on empty? " . empty($var2); ?><br>	
<?php echo "Kas var3 on empty? " . empty($var3); ?><br>	
<?php echo "Kas var4 on empty? " . empty($var4); ?><br>	
<?php echo "Kas var5 on empty? " . empty($var5); ?><br>	
<?php echo "Kas var6 on empty? " . empty($var6); ?><br>	
<?php echo "Kas var7 on empty? " . empty($var7); ?><br>		

 <h2>Andmetüüpide teisendamine</h2> 
	
<?php 
$count = 2;
echo $count;
echo "<br>";
echo gettype($count);
?>		
<br>	
<?php settype($count, "string");
echo $count;
echo "<br>";
echo gettype($count); ?>	

<?php settype($count, "float");
echo $count;
echo "<br>";
echo gettype($count); ?>
	
<?php settype($count, "array");?>
<pre><?php print_r ($count);?></pre>
<?php echo "<br>";
echo gettype($count); ?>

<br>
<?php settype($count, "bool");
echo $count;
echo "<br>";
echo gettype($count); ?>	

 <h2>Konstandid</h2> 

 <?php define("MAX_WIDTH", 980);
echo MAX_WIDTH; ?>

<?php define("MAX_WITDH", 999); ?>
<?php echo MAX_WIDTH; ?>

 
  </body>
</html>
