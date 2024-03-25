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
        <h2>FDR Manage </h2>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Sceeme Name</th>
                        <th>Address</th>
                        <th>Bank Name</th>
                        <th>Bank Name</th>
                        <th>Bank Approve</th>
                        <th>Bank Command</th>
                        <th>Received</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $info)
                    <tr>
                        <td>{{$info->name }}</td>
                        <td>{{$info->email }}</td>
                        <td>Edinburgh</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>{{ $info->brank_verifyed == 0 ? "False" : "True" }}</td>
                        <td>{{ $info->bank_comment }}</td>
                        <td>
                            @if($info->brank_verifyed)
                            <button type="button" class="btn btn-{{ $info->brank_verifyed == 1 ? 'info' : 'danger' }}"
                                data-bs-toggle="modal" data-bs-target="#exampleModal_{{ $info->id }}">Received</button>
                            @else
                            <a class="btn btn-danger btn-block">Approve</a>
                            @endif
                        </td>
                        <td>
                        <a class="btn btn-info btn-block">View</a>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal_{{ $info->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel_{{ $info->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel_{{ $info->id }}">{{$info->name }}
                                    </h3>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url('/bangladeshBank/approve')}}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" value="{{ $info->id }}" name="id" hidden>
                                        <div class="form-group">
                                            <label for="selectOption">Decition Approve/Reject:</label>
                                            <select class="form-control" id="selectOption" name="Approve" required>
                                                <option value="" disabled selected>Select an option</option>
                                                <option value="1">Approve</option>
                                                <option value="0">Reject</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="textArea">Commend:</label>
                                            <textarea class="form-control" name="commend" required id="textArea"
                                                rows="3">{{ $info->bdbank_comment }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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