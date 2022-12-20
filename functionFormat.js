function get_mask(input_value, event, element, options) {
    // Remove caracteres não numéricos
    var numbers = input_value.replace(/\D+/g, '');
    return "00.000.000/0000-00";
}

// Usa a função `get_mask` para definir a máscara
$('#cnpj_cpf').mask(get_mask, {
    onKeyPress: function (input_value, event, element, options) {
        element.mask(get_mask, options);
    }
});