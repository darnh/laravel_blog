@extends('admin.layouts.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex" >
                    <h1 class="m-0 mr-2 align-items-center">{{ $tag->title }}</h1>
                    <a href="{{ route('admin.tag.edit', $tag->id) }}" class="text-success">Editing</a>
                    <form action="{{ route('admin.tag.delete', $tag->id) }}"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button class=" border-0 bg-transparent">
                            <i class="text-danger" role="button">Trash</i>
                        </button>
                    </form>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.user.index') }}">Tag list</a></li>
                        <li class="breadcrumb-item active">{{ $tag->title }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Id</td>
                                        <td>{{ $tag->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Title</td>
                                        <td>{{ $tag->title }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
