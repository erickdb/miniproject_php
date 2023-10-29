<?php
    $obj_person = new contact_person();
	$data = $_GET['id'];
    $rs = $obj_person->deletePerson($data);

?>

<script type="text/javascript">
		alert ("Data Berhasil di Hapus");
		window.location.href="?hal=contact_person";
</script>