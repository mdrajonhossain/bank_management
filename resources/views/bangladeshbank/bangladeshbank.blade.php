<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangladesh Bank</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/user/styles.css') }}" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>

    <!-- Header -->
    @include('bangladeshbank.header')

    @include('bangladeshbank.leftbar')


    <!-- Content -->
    <div class="content">
        <h2 style="font-size: 20px; font-weight: bolder; margin-top: 05px; margin-bottom: 30px;">FDR Manage </h2>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th style="font-size: 14px; color: rgb(33, 111, 237);">Name</th>
                        <th style="font-size: 14px; color: rgb(33, 111, 237);">Email</th>
                        <th style="font-size: 14px; color: rgb(33, 111, 237); white-space: nowrap;">Phone Number</th>
                        <th style="font-size: 14px; color: rgb(33, 111, 237); white-space: nowrap;">Sceeme Name</th>
                        <th style="font-size: 14px; color: rgb(33, 111, 237);">Address</th>
                        <th style="font-size: 14px; color: rgb(33, 111, 237); white-space: nowrap;">Bank Name</th>                        
                        <th style="font-size: 14px; color: rgb(33, 111, 237); white-space: nowrap;">Bank Approve</th>
                        <th style="font-size: 14px; color: rgb(33, 111, 237); white-space: nowrap;">BD Bank Command</th>
                        <th style="font-size: 14px; color: rgb(33, 111, 237);">Received</th>
                        <th style="font-size: 14px; color: rgb(33, 111, 237);">View</th>
                    </tr>
                </thead>
                <tbody>                    
                    <tr>                        
                        <td style="font-size: 14px; font-weight: 500;">Edinburgh</td>                                                
                        <td style="font-size: 14px; font-weight: 500;">2011/04/25</td>
                        <td style="font-size: 14px; font-weight: 500;">2011/04/25</td>
                        <td style="font-size: 14px; font-weight: 500;">2011/04/25</td>
                        <td style="font-size: 14px; font-weight: 500;">2011/04/25</td>
                        <td style="font-size: 14px; font-weight: 500;">2011/04/25</td>
                        <td style="font-size: 14px; font-weight: 500;">$320,800</td>                                              
                        <td style="font-size: 14px; font-weight: 500;">$320,800</td>                                              
                        <td style="font-size: 14px; font-weight: 500;">$320,800</td>                                              
                        <td style="font-size: 14px; font-weight: 500;">$320,800</td>                                              
                    </tr>
                                        
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>




    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>

</body>

</html>