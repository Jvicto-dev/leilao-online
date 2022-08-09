function getSlides() {
    axios.post('../../api/controller.php', {
        action: "get-slides",
        values: []
    }).then((res) => {
        const data = res.data
        var html = ""
        data.forEach(slides => {
            html += `
            <div class="card">
                    <div class="card-header mt-3">
                        <b>Banner #${slides.id_slides}</b>
                    </div>
                    <div class="card-body">
                        <img src="../../files/${slides.slide}" class="card-img-top" alt="..." width="50px;" style="border: solid 3px black; padding: 5px;">
                    </div>
                    <div class="card-footer mb-3">
                        <button onclick="excluirSlide(${slides.id_slides})" type="button" class="btn btn-danger btn-lg" style="float: right;">
                            Excluir
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
            </div>`
        });
        $("#div_slides").html(html)
    })
}


function excluirSlide(id_slide) {
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
                action: "deletar-slide",
                values: [
                    id_slide
                ]
            }).then((res) => {
                if (res.status == 200) {
                    Swal.fire({
                        // position: 'center',
                        icon: 'success',
                        title: 'Slide excluido com sucesso !',
                        showConfirmButton: true,
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.reload()
                        } else if (result.isConfirmed) {
                            location.reload()
                        } else {
                            location.reload()
                        }
                    })
                }
            }).catch(function (error) {
                if (error.response) {
                    Swal.fire(
                        'Ops',
                        'Ocorreu um erro com a aplicação !',
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
