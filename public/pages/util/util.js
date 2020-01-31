$(document).ready(function () {
    $(".btn-delete").on("click", function (e) {
        let el = $(this);
        e.preventDefault;
        Swal.fire({
            title: 'Confirma deletar ?',
            type: 'warning',
            reverseButtons: true,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, Confirmo!',
            cancelButtonText: 'Não'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: el.attr('data-route'),
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        "_token": el.attr('data-csrf')
                    },
                    success: function (data) {
                        Swal.fire({
                            title: 'Deletado com Sucesso !!!',
                            type: 'success',
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ok',
                            timer: 1500
                        }).then(() =>{
                            location.reload();
                        });
                    },
                    error: function () {
                        Swal.fire({
                            title: 'Ops Não foi possivel deletar este item, tente novamente !!!',
                            type: 'error',
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ok',
                            timer: 1500
                        })
                    }
                });
            } else {
                Swal.fire({
                    title: 'Cancelado !!!',
                    type: 'error',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok',
                    timer: 1500
                })
            }
        })
    });
});
