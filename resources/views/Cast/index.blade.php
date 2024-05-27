@extends('template.master')


@section('title-page', 'Form')
@section('Content')

<div class="main-content">
    <div class="section_content section_content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-36">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Action</th>
                                  </tr>
                            </thead>
                            <tbody>
                                @forelse ($casts as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->nama }}</td>
                                        <td>{{ $value->umur }}</td>
                                        <td><form action="" method="post">
                                            <a href="" class="btn btn-sm btn-info">Detail</a>
                                            {{-- @if(Auth::check())
                                            @can('isAdmin') --}}
                                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                            <input type="submit" class="btn btn-sm btn-danger my-1" value="Delete">
                                            {{-- @endcan --}}
                                        </form>
                                        {{-- @endif --}}
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center">No data available</td>
                                  </tr>
                                @endforelse                                                            
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection