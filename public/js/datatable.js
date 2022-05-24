$(document).ready(function()
{
    $('#schedule').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                    var data = row.data();
                    return 'Details for '+data[0]+' '+data[1];
                }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                })
            }
        }
    });
    setTimeout(function(){
        $("#response_message").remove();
    }, 5000 );
});

// update the content of the webpage each 15 min.
// setTimeout(function(){
//     window.location.reload(1);
//  }, 150000);

