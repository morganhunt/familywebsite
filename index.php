<?php session_start(); ?>
<?php include('templateopen.php'); ?>
	

	<div id="content">
		<iframe id="contentiframe" src="http://huntfamilyinfo.wordpress.com" width="100%" height="830px"></iframe>
	</div>
	<script type="text/javascript">
	var iframe = document.getElementById('contentiframe');
	iframe.onload = function() {
		var iframe = document.getElementById('contentiframe');
		var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
		innerDoc.getElementById('masthead').delete() // or .remove()??
		// alert('test1');
		// alert(iframe);
		// alert(innerDoc);
		// alert('test2');
	}
	</script>

<?php include('templateclose.php'); ?>