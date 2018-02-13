function lookupGeoData() {            
	myGeoPositionGeoPicker({
		startAddress     : 'Cebu City Hall',
		returnFieldMap   : { 
			'geoposition1a' : '<LAT>',
			'geoposition1b' : '<LNG>',
			'geoposition1c' : '<CITY>',   /* ...or <COUNTRY>, <STATE>, <DISTRICT>,
			<CITY>, <SUBURB>, <ZIP>, <STREET>, <STREETNUMBER> */
			'geoposition1d' : '<ADDRESS>'
		}
	});
}

