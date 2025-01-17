@extends('layout.layout')
@section('content')
<div class='container'>
    <div class="row justify-content-center">
        <div class=col-md-8>
            <div card="card">
                <div class="card-header">data penulis
                    <a href="{{route('penulis.create')}}" class="btn btn-sm btn-primary" style="float: right">tambih
                    </a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>no</th>
                            <th>nama Penulis</th>
                            <th>Aksi</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach ( $penulis as $item )
                          <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->nama_penulis}}</td>
                            <td>
                                <form action="{{route('penulis.destroy',$item->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{route('penulis.edit',$item->id)}}" class="btn btn-sm btn-success">
                                        Edit
                                    </a>
                                    <a href="{{route('penulis.show',$item->id)}}" class="btn btn-sm btn-warning">
                                        Show
                                    </a>

                                    <button class="btn btn-sm btn-danger" type="submit"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                          </tr>
                        @endforeach
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

