function getCategorias() {
    axios.post('../../api/controller.php', {
        action: "get-categorias",
        values: [
            
        ],
    }).then((res) => {
        const data = res.data
        var html = ""

        data.forEach(cats => {
            html += `
                <tr>
                    <td>${cats.id_categorias}</td>
                    <td>${cats.nome_categoria}</td>
                    <td>${cats.icone}</td>
                    <td>
                        <button type="button" class="btn btn-primary" onclick="editarCategoria(${cats.id_categorias})"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="button" class="btn btn-danger" onclick="excluirCategoria(${cats.id_categorias})"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
                `
        });

        $("#tbody_categorias").html(html)

        load_tabela_main('table')

    })
}

function excluirCategoria(id_categoria) {
    Swal.fire({
        title: 'Tem certeza disso ?',
        text: "Você não poderá reverter isso!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, faça isso!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            axios.post('../../api/controller.php', {
                action: "deletar-categoria",
                values: [
                    id_categoria
                ]
            }).then(function (response) {
                if (response.status == 201) {
                    Swal.fire(
                        'Sucesso',
                        'Categoria excluída com sucesso',
                        'success'
                    );
                    $("#table").DataTable().destroy()
                    getCategorias()
                }
            }).catch(function (error) {
                if (error.response) {
                    Swal.fire(
                        'Ops :(',
                        'Não foi possivel executar a ação !',
                        'error'
                    );
                    // A requisição foi feita e o servidor respondeu com um código de status
                    // que sai do alcance de 2xx
                    console.error(error.response.data);
                    console.error(error.response.status);
                    console.error(error.response.headers);
                } else if (error.request) {
                    // A requisição foi feita mas nenhuma resposta foi recebida
                    // `error.request` é uma instância do XMLHttpRequest no navegador e uma instância de
                    // http.ClientRequest no node.js
                    console.error(error.request);
                } else {
                    // Alguma coisa acontenceu ao configurar a requisição que acionou este erro.
                    console.error('Error', error.message);
                }
                console.error(error.config);
            });
        }
    })
}


function adicionarCategoria() {
    var nome_categoria = $("#nome_categoria").val()
    var icone_categoria = $("#icone_categoria").val()


    if (nome_categoria == "" || icone_categoria == "") {
        Swal.fire(
            'Ops !',
            'Você deixou algum campo em branco !',
            'warning'
        )
    } else {
        axios.post('../../api/controller.php', {
            action: "adicionar-categoria",
            values: [nome_categoria, icone_categoria]
        }).then((res) => {
            if (res.status == 201) {
                Swal.fire(
                    'Sucesso',
                    'Categoria adicionada com sucesso',
                    'success'
                );
                $("#table").DataTable().destroy()
                getCategorias()
                $("#nome_categoria").val('')
                $("#icone_categoria").val('')
            }
        }).catch(function (error) {
            if (error.response) {
                Swal.fire(
                    'Ops :(',
                    'Não foi possivel executar a ação !',
                    'error'
                );
                // A requisição foi feita e o servidor respondeu com um código de status
                // que sai do alcance de 2xx
                console.error(error.response.data);
                console.error(error.response.status);
                console.error(error.response.headers);
            } else if (error.request) {
                // A requisição foi feita mas nenhuma resposta foi recebida
                // `error.request` é uma instância do XMLHttpRequest no navegador e uma instância de
                // http.ClientRequest no node.js
                console.error(error.request);
            } else {
                // Alguma coisa acontenceu ao configurar a requisição que acionou este erro.
                console.error('Error', error.message);
            }
            console.error(error.config);
        });
    }

}

function editarCategoria(id_categoria) {
    axios.post('../../api/controller.php', {
        action: "get-one-categoria",
        values: [
            id_categoria
        ]
    }).then((res) => {
        const data = res.data[0]
        $("#modal_editar_categoria").modal('show')
        $("#editar_nome_categoria").val(data.nome_categoria)
        $("#editar_icone_categoria").val(data.icone)
        $("#id_categoria").val(data.id_categorias)
        $("#icone_show").html(data.icone)

    })
}


function updateCategoria() {
    var editar_nome_categoria = $("#editar_nome_categoria").val()
    var editar_icone_categoria = $("#editar_icone_categoria").val()
    var id_categoria = $("#id_categoria").val()

    if (editar_nome_categoria == "" ||
        editar_icone_categoria == "" ||
        id_categoria == "") {
        Swal.fire(
            'Ops !',
            'Você deixou algum campo em branco',
            'warning'
        )
    } else {
        axios.post('../../api/controller.php', {
            action: "update-categoria",
            values: [
                editar_nome_categoria,
                editar_icone_categoria,
                id_categoria
            ]
        }).then((res) => {
            if (res.status == 201) {
                Swal.fire(
                    'Sucesso',
                    'Categoria adicionada com sucesso',
                    'success'
                );
                $("#table").DataTable().destroy()
                getCategorias()
                $("#modal_editar_categoria").modal('hide')
                $("#editar_nome_categoria").val('')
                $("#editar_icone_categoria").val('')
            }
        }).catch(function (error) {
            if (error.response) {
                Swal.fire(
                    'Ops :(',
                    'Não foi possivel executar a ação !',
                    'error'
                );
                // A requisição foi feita e o servidor respondeu com um código de status
                // que sai do alcance de 2xx
                console.error(error.response.data);
                console.error(error.response.status);
                console.error(error.response.headers);
            } else if (error.request) {
                // A requisição foi feita mas nenhuma resposta foi recebida
                // `error.request` é uma instância do XMLHttpRequest no navegador e uma instância de
                // http.ClientRequest no node.js
                console.error(error.request);
            } else {
                // Alguma coisa acontenceu ao configurar a requisição que acionou este erro.
                console.error('Error', error.message);
            }
            console.error(error.config);
        });
    }

}