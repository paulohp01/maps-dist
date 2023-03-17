      var selectElement = document.querySelector('#select1');
      var filtElement = document.querySelector('#filt');

      selectElement.onchange = function() {
        var opcaoSelecionada = selectElement.value;
        filtElement.textContent = opcaoSelecionada;
        

        if (opcaoSelecionada == "Volkswagen Pollo") {
          precoCar = 200.00;          

        }
        else if (opcaoSelecionada === "Hyundai Azera") {
          precoCar = 450.00;
        }

        else if (opcaoSelecionada === "Mercedes S600") {
          precoCar = 675.90;
        } 

      };