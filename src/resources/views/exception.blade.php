<!-- MyVendor\contactform\src\resources\views\contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
      <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
      <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

      <title>Exception Logs</title>
</head>
    <body>
        <div class="container">
            <h3>Exception Logs</h3>
            <div class="row">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Created Time</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
     </div>
    </body>
<script type="text/javascript">
    $(document).ready(function() {

        function formatStr (str) {
            return str.replace(/\w\S*/g, function(txt) {
                return txt.charAt(0).toUpperCase() + txt.substr(1);
            }).replace(/\_/g, " ");
        }

        var oTable = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            pagingType: "full_numbers",
            "ajax": {
                "url": "{!! 'exception-logs/datatable' !!}",
                "data": function ( d ) {
                }
            },
            columns: [
                { data: 'id', name:'id' },
                {
                    data:  null,
                    name: 'exception',
                    render:function(o){
                        var type = typeof o.exception;
                        var str = o.exception;
                        if (type=="object") {
                            str = "";
                            for (const [key, value] of Object.entries(o.exception)) {
                                str += " <p><b>"+formatStr(key)+" : </b> "+value+"</p>"
                            }
                        }
                        return str;
                    }
                },
                { data: 'created_at', name: 'created_at', width: 130},
            ],
    });

    });
</script>
</html>
