var table = $('#tabla').DataTable();
var filteredData = table
    .columns( [0, 1] )
    .data()
    .flatten()
    .filter( function ( value, index ) {
        return value > 20 ? true : false;
    } );