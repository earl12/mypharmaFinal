 function controlButtons{ 


      var controlMarkerUI = document.createElement('DIV');
      controlMarkerUI.style.cursor = 'pointer';
      controlMarkerUI.style.backgroundImage = "url(http://localhost/dist/my_location.png)";
      controlMarkerUI.style.height = '28px';
      controlMarkerUI.style.width = '25px';
      controlMarkerUI.style.top = '11px';
      controlMarkerUI.style.left = '120px';
      controlMarkerUI.title = 'On My Current Location';
      //myLocationControlDiv.appendChild(controlUI);

      map.controls[google.maps.ControlPosition.LEFT_TOP].push(controlMarkerUI);

      //### Add a button on Google Maps ...
      var controlTrashUI = document.createElement('DIV');
      controlTrashUI.style.cursor = 'pointer';
      controlTrashUI.style.backgroundImage = "url(http://localhost/trash.png)";
      controlTrashUI.style.height = '28px';
      controlTrashUI.style.width = '25px';
      controlTrashUI.style.top = '11px';
      controlTrashUI.style.left = '150px';
      controlTrashUI.title = 'Click to set the map to Home';
      //myLocationControlDiv.appendChild(controlUI);

      map.controls[google.maps.ControlPosition.LEFT_TOP].push(controlTrashUI);
}


