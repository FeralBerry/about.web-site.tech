@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-list"></i> {{ __('Posts List') }}</div>

                    <div class="card-body">
                        @session('success')
                        <div class="alert alert-success" role="alert">
                            {{ $value }}
                        </div>
                        @endsession

                        <div id="notification">

                        </div>


                            <p><strong>Create New Post</strong></p>
                            <form enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" id="title" name="title" class="form-control" />
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="body">Body:</label>
                                    <textarea id="body" class="form-control" name="body"></textarea>
                                    @error('body')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <button onclick="CreatePost(event)" class="btn btn-success btn-block"><i class="fa fa-save"></i> Submit</button>
                                </div>
                            </form>

                        <p class="mt-4"><strong>Post List:</strong></p>
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th width="70px">ID</th>
                                <th>Title</th>
                                <th>Body</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->body }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">There are no posts.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
        <script>
            function CreatePost(e) {
                e.preventDefault()
                let title = document.getElementById('title').value
                let body = document.getElementById('body').value

                axios.post('/posts',
                    {title:title ,body:body}
                ).then(() => {
                    title = ''
                    body = ''
                });
            }
        </script>
        <script type="module">


            window.Echo.channel('posts')
                .listen('.create', (data) => {
                    console.log('Order status updated: ', data);
                    var d1 = document.getElementById('notification');
                    d1.innerHTML = '<div class="alert alert-success alert-dismissible show"><span><i class="fa fa-circle-check"></i>  '+data.message+'</span></div>';

                });
        </script>

@endsection
