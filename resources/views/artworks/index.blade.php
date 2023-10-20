@extends('layouts.app')
@section('title','Artwork')
@section('main')

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> -->


<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Artwork Application</h2>
                </div>
                <!--Hiển thị thông tin -->
                <div class="card-body">
                    <a href="{{ route('artworks.create')}}" class="btn btn-success btn-sm" title="Add New Artwork">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Artwork
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Artist_Name</th>
                                    <th>Description</th>
                                    <th>Art_Type</th>
                                    <th>Media_Link</th>
                                    <th>Cover_Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($artworks as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->artist_name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->art_type }}</td>
                                    <td>{{ $item->media_link }}</td>
                                    <td>{{ $item->cover_image }}</td>
                                    <td>
                                        <a href="{{ route('artwork\{$item->id}\edit')}}" title="Edit"><button class="btn btn-primary btn-sm">Edit</button></a> <!-- <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('&quot;Confirm delete?&quot;')"><i class="bi bi-trash"></i> </button> -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$item->id}}">Delete</button>
                                        <!-- Modal -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex">
                        {!! $artworks->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection