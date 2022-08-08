function numberToReal(numero) {
    numero = parseFloat(numero);
    var numero = numero.toFixed(2).split('.');
    numero[0] = "R$" + numero[0].split(/(?=(?:...)*$)/).join('.');
    return numero.join(',');
}

function k(element) {
    $("#" + element.id).maskMoney({
        prefix: "R$",
        decimal: ",",
        thousands: "."
    });
}

function convertToFloat(number) {
    let text = number;
    let r1 = text.replace("R$", "");
    let r2 = r1.replace(".", "");
    let r3 = r2.replace(",", ".");
    return parseFloat(r3)
}

function verifyValues(array_values) {
    var verify = []

    array_values.forEach(element => {
        if (element == "" || element == null || element == '---') {
            verify.push('F')
        } else {
            verify.push('V')
        }
    });

    if (verify.indexOf('F') > -1) {
        return false
    } else {
        return true
    }
}

function verifyExtension(arq) {
    let validos = /(\.jpg|\.png|\.gif|\.pdf|\.txt|\.doc|\.docx)$/i;

    if (validos.test(arq)) {
        return true
    } else {
        return false
    }
}

var mask_cpf = {
    mask: [{
        mask: '000.000.000-00',
        maxLength: 11
    }]
}

var mask_cnpj = {
    mask: [{
        mask: '00.000.000/0000-00',
        maxLength: 11
    }]
}

var telefone = {
    mask: [{
        mask: '(00) 0 0000-0000',
        maxLength: 11
    }]
}

var celular = {
    mask: [{
        mask: '(00) 0 0000-0000',
        maxLength: 11
    }]
}
