@extends(layouts.app)
@section('main')
<div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                        </div>

                        <!-- Page Heading -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h1 class="mb-0">List Author</h1>
                            <a href="{{ route('authors.create)}}" class="btn btn-primary">Add Author</a>
                        </div>
                        <hr />
                        <table class="table table-hover" id="dataTable">
                            <thead class="table-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Name Author</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($author->count() > 0)
                                @foreach($author as $aut)
                                <tr>
                                    <td class="align-middle">{{ $aut->id}}</td>
                                    <td class="align-middle">{{ $aut->name}}</td>
                                    <td class="align-middle">{{ $aut->created_at}}</td>
                                    <td class="align-middle">{{ $aut->updated_at}}</td>
                                    <td class="align-middle">
                                        <div class="btn-group " role="group" aria-label="Basic example">
                                            <a href="" class="btn btn-link"><i class="fas fa-solid fa-eye text-success"></i></a>
                                            <a href="" class="btn btn-link"><i class="fas fa-solid fa-pen text-primary"></i></a>
                                            <button class="btn m-0 deleteAuthorBtn" data-toggle="modal" data-target="#deleteModal" value="">
                                                <i class="fas fa-solid fa-trash" style="color: red"></i>
                                            </button>
                                        
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td class="text-center" colspan="5">Author not found</td>
                                </tr>
                                @endif
                            </tbody>

                        </table>

                        <!-- Content Row -->
                    </div>
                    <!-- /.container-fluid -->
@endsection