@extends ('layouts.master')

@section ('content')
    <div class="col-md-8 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title">Create a post</h2>
            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
            <hr>
            <form method="POST" action="/posts">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="title" class="form-control" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea id="body" name="body" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>

                @include ('layouts.errors')
            </form>
        </div><!-- /.blog-post -->

    </div><!-- /.blog-main -->
@endsection