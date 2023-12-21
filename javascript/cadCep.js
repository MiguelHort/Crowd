document.addEventListener('DOMContentLoaded', function () {
    var cepInput = document.getElementById('cep');
    var cidadeInput = document.getElementById('cidade');
    var estadoInput = document.getElementById('estado');

    cepInput.addEventListener('blur', function () {
        var cep = cepInput.value.replace(/\D/g, '');

        if (cep.length === 8) { //quantidade de digitos CEP

            // Faz a requisição API ViaCEP
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => response.json())
                .then(data => {
                    if (!data.erro) {
                        cidadeInput.value = data.localidade;
                        estadoInput.value = data.uf;
                    } else {
                        resetarCampos();
                        alert('CEP não foi encontrado. Por favor, verificar campo CEP.');
                    }
                })
                .catch(error => {
                    resetarCampos();
                    console.error('Erro na requisição:', error);
                });
        } else {
            resetarCampos();
        }
    });

    function resetarCampos() {
        cidadeInput.value = '';
        estadoInput.value = '';
    }
});
