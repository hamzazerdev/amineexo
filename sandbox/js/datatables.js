$(document).ready(function(){
    $('#data_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "../serverside/getdata.php"
    });
});