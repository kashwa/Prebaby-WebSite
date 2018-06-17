<link rel="stylesheet" href="/css/bootstrap.css">
<div class="w3-container w3-white" style="padding:70px 16px">
    <section class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-left: 7% ; margin-top: 7%">
            <header>
                <h3>Create an Article</h3><br>

                <form action="{{ route('article.create') }}" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" id="new-title" placeholder="Enter a Title" style="margin-bottom: 7px">
                        <textarea class="form-control" name="body" id="new-article" rows="5" placeholder="Write new Article"></textarea>
                        <input type="text" name="trimester" id="new-trimester" placeholder="    Enter Trimester">
                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                        <button type="submit" class="btn btn-primary" style="margin: 7px">Post</button>
                    </div>
                </form>
            </header>
        </div>
    </section>
</div>

@if(count($errors) > 0)
	@foreach($errors -> all() as $error)
		<div class="alert alert-danger">
			{{$error}}
		</div>
	@endforeach
@endif

@if(session('success'))
	<div class="alert alert-success">
		<strong>Successfully!</strong> {{session('success')}}
	</div>
@endif