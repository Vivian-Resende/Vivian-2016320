function initMap() {
    var myLatLng = {lat: 53.3242381, lng: -6.3857872};

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: myLatLng
    });

    function markStore(storeInfo){

		// Create a marker and set its position.
		var marker = new google.maps.Marker({
			map: map,
			position: storeInfo.location,
			title: storeInfo.name
		});

		// show store info when marker is clicked
		marker.addListener('click', function(){
			showStoreInfo(storeInfo);
		});
	}

	// show store info in text box
	function showStoreInfo(storeInfo){
		var info_div = document.getElementById('info_div');
		info_div.innerHTML = 'Store name: '
			+ storeInfo.name
			+ '<br>Hours: ' + storeInfo.hours;
	}

	var stores = [
	
		{
			name: 'Enable Ireland Charity Shop',
			location: {lat: 53.1714693, lng: -6.7449823},
			hours: '9AM to 7PM'
        },
        {
			name: "Vincent's",
			location: {lat: 53.354188, lng: -6.265801},
			hours: '10AM to 7PM'
        },
        {
			name: 'TK Maxx',
			location: {lat: 53.466299, lng: -6.1739067},
			hours: '9AM to 10PM'
        },
        {
			name: 'NCBI Home',
			location: {lat: 53.284892899999996, lng: -6.2923751999999995},
			hours: '9AM to 5PM'
        }
       
	];

	stores.forEach(function(store){
		markStore(store);
	});

  }





