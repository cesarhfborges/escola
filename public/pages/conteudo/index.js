$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
        }
    });

    $('tbody.reorder').sortable({
        handle: ".drag-handler",
        tolerance: 'pointer',
        revert: 'invalid',
        placeholder: 'span2 well placeholder tile',
        forceHelperSize: true
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip({trigger: 'hover focus', click: 'hide'})
    });

    $(".datepicker").datetimepicker({
        locale: 'pt-BR',
        format: "DD/MM/YYYY",
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: "fa fa-chevron-left",
            next: "fa fa-chevron-right",
            today: "fa fa-screenshot",
            clear: "fa fa-trash",
            close: "fa fa-remove"
        }
    });

    $("#inicio").on("dp.change", function (e) {
        $('#termino').data("DateTimePicker").minDate(e.date);
    });
    $("#termino").on("dp.change", function (e) {
        $('#inicio').data("DateTimePicker").maxDate(e.date);
    });

    $('.modifAcesso').on('click', function () {
        let id = $(this).attr('data-id');
        let action = $(this).attr('data-action');
        let route = $(this).attr('data-route');

        // {{--$.ajax({--}}
        //     {{--    url: "{{route('image.upload')}}",--}}
        //     {{--    type: "POST",--}}
        //     {{--    data: { image : canvas},--}}
        //     {{--    beforeSend: function() {--}}
        //         {{--        swal('Aguarde', 'Enviando...', 'warning').catch(swal.noop);--}}
        //         {{--    },--}}
        //     {{--    error: function(jqXHR, exception) {--}}
        //         {{--        swal('Ops...', 'Não foi possivel salvar.', 'error').catch(swal.noop);--}}
        //         {{--    },--}}
        //     {{--    success: function (response) {--}}
        //         {{--        swal.close();--}}
        //         {{--        swal('Aguarde', 'Enviando...', 'success').catch(swal.noop);--}}
        //         {{--    }--}}
        //     {{--});--}}

        swal('Aguarde', 'Enviando...', 'success').catch(swal.noop);
        console.log([id, action, route]);
    });
});
