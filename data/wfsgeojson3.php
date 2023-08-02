<?php
	// $wfsUrl = file_get_contents("http://geoportal.slemankab.go.id/geoserver/geonode/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=geonode:analisis_resiko_bencana_gunung_api&outputFormat=json");

	$wfsUrl = file_get_contents("http://localhost:8080/geoserver/SLEMAN_COVID19_MAP/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=SLEMAN_COVID19_MAP%3AFAS_KESEHATAN_PT_SLEMAN_APOTEK_Proj&outputFormat=application%2Fjson");

	header('Content-type: application/json');
	echo ($wfsUrl);
	# Jika terdapat &maxFeatures=50 pada url wfs geojson, dihapus supaya jumlah feature tidak dibatasi
?>