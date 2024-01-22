@extends("app")
@section('content')

<div class="card">
    <div class="card-header bg-primary text-light text-center">
      DATA TAMU MIN 2 KOTA MALANG
    </div>
    <div class="card-body">
        <table class="table" id="myTable">
            <thead class="table-dark">
                <tr>
                    <th >No</th>
                    <th>NAMA</th>
                    <th>NO TELP</th>
                    <th>TUJUAN</th>
                    <th>PESAN & KESAN</th>
                    <th>AKSI</th>
                  </tr>
            </thead>
            <tbody>
                @forEach($data as $key=> $item)
                <tr>
                    <th scope="row">{{$key+ 1}}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->notlp}}</td>
                    <td>{{$item->tujuan}}</td>
                    <td>{{$item->pesan}}</td>
                    <td> 
                      <form action="{{url('/admin/hapus-data')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    </td>
                  </tr>
                  @endforeach
            </tbody>
          </table>
    </div>
  </div>
@endsection
@section('script')
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection