<?PHP

?>

<input type="hidden" id="alert" value="<?=$alerts?>">

<div id="foot">
	Powered by Innovation Gate ,Inc.
</div>

<?PHP
if(count($js)){
	foreach($js as $key=>$val){
?>
<script src="<?=D_URL?>js/test/type48/<?=$val?>.js" type="text/javascript"></script>
<?PHP
	}
}
?>

