var usu_id = $('#usu_idx').val();
function init() {
    $("#social_media_form").on("submit", function (e) {
        guardaryeditar(e);
    });
}


function guardaryeditar(e) {
    e.preventDefault();
    var fromDate = new fromDate($("#social_media_form")[0]);

    $.ajax({
        url: "../controller/social_media.php?opc=guardaryeditar",
        type: "POST",
        data: fromDate,
        contentType: false,
        processData: false,

        success: function (date) {
            console.log(data);
            $('#social_media_data').DataTable().ajax.reload();
            $('#modalcrearRedes').modal('hide');

            Swal.fire({
                title: 'correcto!',
                text: 'Se registro correctamente',
                icon: 'success',
                confirmButtonText: 'aceptar'
            })
        }
    })
}
function nuevo(){
    $('#titulo_modal').html('Nueva Red Social');
    //$('#socialMedia_form')[0].reset();
    $('#modalcrearRedes').modal('show');
}

function editar(socmed_id) {
    $.post("/Portafolio/controller/social_media.php?opc=mostrar", { socmed_id: socmed_id }, function (data) {
        data = JSON.parse(data);
        $('#socmed_id').val(data.socmed_id);
        $('#socmed_icono').val(data.socmed_icono);
        $('#socmed_url').val(data.socmed_url);
    });

    $('#lbTitulo').html('Editar Red');
    $('#modalCrearRedes').modal('show');
}

function eliminarSocmed_id(id) {
    Swal.fire({
        title: "Eliminar",
        text: "Desea eliminar el Registro?",
        icon: "error",
        showCancelButton: true,
        confirmButtonText: "Aceptar",
        cancelButtonText: "Cancelar",
    }).then((result) => {
        if (result.value) {
            $.post("/portal/o/controller/social_media.php?op=eliminar", { id: id }, function (data) {
                if (data.status == 'Correcto') {
                    Swal.fire(
                        "Correcto!",
                        "Se Elimino Correctamente",
                        "success"
                    )
                    confirmButtonText: "Aceptar"
                }
            });
        }
    });
}

$(document).ready(function () {
    $('#social_media_data').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax": {
            url: '../controller/social_media.php?opc=listar',
            type: "post"
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 15,
        "order": [[0, "desc"]],
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "NO se encuentran resultados",
            "sEmptyTable": "NIngun dato disponible en esa tabla ",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLasr": "Ultimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera Descendente",
            }
        },

    })
});



