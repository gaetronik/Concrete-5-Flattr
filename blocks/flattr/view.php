<?php
if ($hidden){
	$hide="1";
}
else {
	$hide="0";
}
echo '<a class="FlattrButton" style="display:none;" rev="flattr;button:compact;uid:'.$uid.';category:'.$category.';tags='.implode(",",explode(" ",$tags)).';hidden:'.$hide.';language='.$language.'" title="'.$title.'" href="'.$url.'">';
?>
<?php echo $description?></a>

