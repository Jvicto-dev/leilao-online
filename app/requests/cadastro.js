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

function cadastroPessoaFisica() {
    // dados pessoais
    var nome = $("#nome").val()
    var email = $("#email").val()
    var cpf = $("#cpf").val()
    var rg = $("#rg").val()
    var sexo = $("#sexo").val()
    var telefone = $("#telefone").val()
    var celular = $("#celular").val()

    //endereco
    var cep = $("#cep").val()
    var bairro = $("#bairro").val()
    var numero = $("#numero").val()
    var logradouro = $("#logradouro").val()
    var complemento = $("#complemento").val()
    var estado = $("#estado").val()
    var localidade = $("#localidade").val()

    //documentos
    var doc_identidade = $("#doc_identidade").val()
    var doc_comp_residencia = $("#doc_comp_residencia").val()

    var senha = $("#senha").val()
    var re_senha = $("#re_senha").val()

    var aniversario = {
        dia: $("#dia").val(),
        mes: $("#mes").val(),
        ano: $("#ano").val()
    }

    var array_values = [nome, email, cpf, rg, sexo, celular, aniversario.dia, aniversario.mes, aniversario.ano, senha, re_senha
        , cep, bairro, numero, logradouro, estado, localidade
    ]

    if (!verifyValues(array_values) || !(verifyExtension(doc_identidade)) || !(verifyExtension(doc_comp_residencia))) {
        Swal.fire(
            'Ops !',
            'Você deixou algum campo em branco',
            'warning'
        )
    } else {
        if (senha != re_senha) {
            Swal.fire(
                'Ops !',
                'As senha fornecidas são diferentes !',
                'warning'
            )
        } else {
            $("#form-cadastro-pessoa-fisica").submit()
        }
    }

}

function cadastroPessoaJuridica() {
    // dados pessoais
    var nome = $("#nome").val()
    var email = $("#email").val()
    var cnpj = $("#cnpj").val()
    var ie = $("#ie").val()
    var sexo = $("#sexo").val()
    var telefone = $("#telefone").val()
    var celular = $("#celular").val()

    //endereco
    var cep = $("#cep").val()
    var bairro = $("#bairro").val()
    var numero = $("#numero").val()
    var logradouro = $("#logradouro").val()
    var complemento = $("#complemento").val()
    var estado = $("#estado").val()
    var localidade = $("#localidade").val()

    //documentos
    var doc_identidade = $("#doc_identidade").val()
    var doc_comp_residencia = $("#doc_comp_residencia").val()

    //senha
    var senha = $("#senha").val()
    var re_senha = $("#re_senha").val()

    var aniversario = {
        dia: $("#dia").val(),
        mes: $("#mes").val(),
        ano: $("#ano").val()
    }

    var array_values = [nome, email, cnpj, ie, sexo, celular, aniversario.dia, aniversario.mes, aniversario.ano, senha, re_senha
        , cep, bairro, numero, logradouro, estado, cidade
    ]


    if (!verifyValues(array_values)) {
        Swal.fire(
            'Ops !',
            'Você deixou algum campo em branco',
            'warning'
        )
    } else {
        if (senha != re_senha) {
            Swal.fire(
                'Ops !',
                'As senha fornecidas são diferentes !',
                'warning'
            )
        } else {
            $("#form-cadastro-pessoa-fisica").submit()
        }
    }






}

function dia() {

    var day = "";

    for (let i = 1; i <= 31; i++) {

        day += `<option value="` + i + `">` + i + `</option>`

    }

    $("#dia").html(`<option value='---'>Dia</option>` + day)
    $("#dia").select2();

}

function mes() {
    var mes = ""
    for (let i = 1; i <= 12; i++) {

        mes += `<option value="` + i + `">` + i + `</option>`


    }

    $("#mes").html(`<option value='---'>Mês</option>` + mes)
    $("#mes").select2();
}

function ano() {
    const d = new Date();
    let year = d.getFullYear();

    var ano = ""

    for (let i = 1950; i < (year - 17); i++) {

        ano += `<option value="` + i + `">` + i + `</option>`
    }

    $("#ano").html(`<option value='---'>Ano</option>` + ano)
    $("#ano").select2();
}

dia()
mes()
ano()