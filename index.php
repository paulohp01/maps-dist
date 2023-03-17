<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rota App || Calculo de rota e aluguel de veículo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/format.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCidMgJus3iuHziQAKkaAJZjJuxop1dN_w"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>


<body>
  <div class="container-fluid"> 
    <div>
      <div class="col-md-6 formato">
          <div class="card">
            <div class="card-header">
              <h5>Preencha as informações</h5>
            </div>
            
          <div class="card-body">
            <p class="card-text">
                <form onsubmit="getDistanceValue(); return false;">
                    <div class="form-group">
                      <label for="destination">Origem</label>
                      <input type="text" class="form-control" id="origin" placeholder="endereço">
                    </div>

                    <div class="form-group">
                      <label for="destination">Destino</label>
                      <input type="text" class="form-control" id="destination" placeholder="Destino">
                    </div>

                    <div class="form-group">
                      <label for="destination">Selecione um veículo</label>              
                          <select class="form-control" id="select1">  
                              <option class="form-control">selecione</option>
                              <option class="form-control" value="Volkswagen Pollo">Volkswagen Pollo</option>
                              <option class="form-control" value="Hyundai Azera">Hyundai Azera</option>
                              <option class="form-control" value="Mercedes S600">Mercedes S600</option>
                          </select>
                      <span id="filt"></span>
                    </div>
                      <input type="button" value="Calcular distância" class="btn btn-primary" onclick="getDistanceValue()" />
                </form>
            </p>
                <ul class="list-group" id="litResultado"></ul>

            </div>
          </div>
      </div>

      <div class="col-md-6 formato">
        <iframe scrolling="no" class="mapas" frameborder="0" id="map" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?saddr=Brasilia&output=embed"></iframe>
      </div>

    </div>
  </div>
</div>

<script src="js/selecao.js"></script>
</body>
</html>