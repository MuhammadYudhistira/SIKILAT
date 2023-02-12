@extends('layouts.app')

@section('title', "Daftar Tamu")

@section('bread_crumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-5" style="background-color:white">
        <li class="breadcrumb-item active" aria-current="page" style="margin-top:5px">
            <i class="fas fa-users mr-2" style="color:black"></i>
            <b style="font-size:20px; color:black">Daftar Tamu</b>
        </li>
    </ol>
</nav>
@endsection

@section('content')
<body>
    {{-- <button><a href="/tipe/create">Tambah Tipe Kamar</a></button> <br><br> --}}
    <div  class="card-body" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div>
            <b style="font-size:25px">Data Tamu</b><br>
            <a>Data dibawah ini adalah data tamu yang sudah melakukan check in</a>
            <br>
            <br>
            <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." style="width:200px; height:30px">
            <table id="myTable" class="table table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr class=" text-center " scope="col" style="font-size:16px;color:white; background-color: #013555; padding: 100px;">
                        <th style="width:5%; ">No.</th>
                        <th style="width:25%">Nama Tamu</th>
                        <th style="width:15%">Tipe Kamar</th>
                        <th style="width:15%">Tanggal Cek In</th>
                        <th style="width:15%">Tanggal Cek Out</th>
                        <th style="width:25%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>rererere</td>
                        <td>standar</td>
                        <td>123456</td>
                        <td>34567890</td>
                        <td>
                            <a type="button" href=" " style="padding:2px; width:95px;height:30px; border-radius:10px"   class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5ZM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5Z"/>
                                </svg>    
                                <b style="font-size:15px;">Cek Out</b> 
                            </a>
                            <a type="button" href=" " style="padding:2px; width:95px;height:30px; border-radius:10px"   class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-medical" viewBox="0 0 16 16">
                                    <path d="M7.5 5.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L6 7l-.549.317a.5.5 0 1 0 .5.866l.549-.317V8.5a.5.5 0 1 0 1 0v-.634l.549.317a.5.5 0 1 0 .5-.866L8 7l.549-.317a.5.5 0 1 0-.5-.866l-.549.317V5.5zm-2 4.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                </svg>    
                                <b style="font-size:15px;">Lihat</b> 
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>qweqeqwre</td>
                        <td>standar</td>
                        <td>123456</td>
                        <td>9876540</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>fgfhff</td>
                        <td>standar</td>
                        <td>123456</td>
                        <td>34567890</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>xbxvc</td>
                        <td>standar</td>
                        <td>123456</td>
                        <td>34567890</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<!-- script tabel -->

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<!-- <script>
    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
}); -->
</script>

</body>
</html>
@endsection


        <!-- <tbody>
            @foreach ($tamu as $t)
            <tr class="text-center">
                <td>{{ $loop->iteration }}.</td>
                <td>{{ $t->nama }}</td>
                <td>Standar</td>
                <td>{{ $t->nohp }}</td>
                <td>{{ $t->status }}</td>
                {{-- <td>

                    <a href="/tipe/{{ $t->id }}/edit" class="btn btn-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg>
                    </a>
                    <a href="/tipe/{{ $t->id }}" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                          </svg>
                    </a>
                </td> --}}
            </tr>
            @endforeach
        </tbody> -->