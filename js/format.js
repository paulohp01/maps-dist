    function getDistanceValue() {

    var origin = $("#origin").val();
    var destination = $("#destination").val();
    var service = new google.maps.DistanceMatrixService;
        service.getDistanceMatrix({
          origins: [origin],
          destinations: [destination],
          travelMode: 'DRIVING',
          unitSystem: google.maps.UnitSystem.METRIC,
          avoidHighways: false,
          avoidTolls: false

        },

        function(response, status) {
          
        if (status == "OK") {
          var pricePerKM = 1.20;
          var carroSel = filtElement.textContent;

        var distance = response.rows[0].elements[0].distance.value;
        var distanceKM = (distance/1000);        
        var price = (Math.ceil(distanceKM) * pricePerKM + precoCar).toFixed(2);
        var preco = (Math.ceil(precoCar)).toFixed(2);
        
        $('#litResultado').html(
            "<li class='list-group-item'><strong>Origem</strong>: " + response.originAddresses[0] + "</li>"
            + "<li class='list-group-item'><strong>Destino</strong>: " + response.destinationAddresses[0] + "</li>"
            + "<li class='list-group-item'><strong>Distância</strong>: " + response.rows[0].elements[0].distance.text + "</li>"
            + "<li class='list-group-item'><strong>Veículo Selecionado</strong>: "+ carroSel +"</li>"
            + "<li class='list-group-item'><strong>Valor do Veículo</strong>: "+ preco +"</li>"
            + "<li class='list-group-item list-group-item-success'><strong>Total</strong>: " + price + "</li>");

        $("#map").attr("src", "https://maps.google.com/maps?saddr=" + response.originAddresses + "&daddr=" + response.destinationAddresses + "&mode=" + response.travelMode + "&output=embed&key=AIzaSyCidMgJus3iuHziQAKkaAJZjJuxop1dN_w");         

      } else {
        $('#litResultado').html('Ocorreu um erro');
      }   
        }
    );
      
    }