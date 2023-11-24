function formata(data) {
    return data.getFullYear() + '-' + pad(data.getMonth() + 1) + '-' + pad(data.getDate())
          + 'T' + pad(data.getHours()) + ':' + pad(data.getMinutes());
}

var hoje = formata(new Date());

// DOMContentLoaded: assim que carregar a página
document.addEventListener('DOMContentLoaded', function() {
    var campo = document.querySelector('#data');
    // seta a data mínima para o campo
    campo.min = hoje;

    // mostra mensagem de erro customizada (caso não queira a mensagem padrão do browser)
    campo.addEventListener('invalid', function(e) {
        e.target.setCustomValidity(`A data não pode ser anterior a ${hoje}`);
    });
    campo.addEventListener('input', function(e) {
        e.target.setCustomValidity('');
        e.target.checkValidity();
    });
});