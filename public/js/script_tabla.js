$(document).ready(function(){
    $('#miTabla').DataTable({
        "language":{
            "lengthMenu":"Mostrar MENU registros por página",
            "zeroRecords":"No se encontraron registros",
            "info":"Mostrando página PAGE de PAGES",
            "infoEmpty":"No hay registros disponibles",
            "infoFiltered":"(filtrado de MAX registros totales)",
            "search":"Buscar",
            "paginate":{
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
    })