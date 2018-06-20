<!DOCTYPE html>
<html>
   <title>First Trimester</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{url('/')}}/images/prebabyLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ URL::to('js/myapp.js') }}"></script>

    {{-- navbar --}}
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a class="w3-bar-item w3-button w3-wide">Prebaby</a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
            <a href="/" class="w3-bar-item w3-button" style="color:#0f7e9b"><i class="fa fa-home"></i> HOME</a>
            </div>
        </div>
    </div>
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    body, html {
        height: 100%;
        line-height: 1.8;
    }

    .w3-bar .w3-button {
        padding: 16px;
    }
    </style>
        
    <body>

        {{-- include this at admin area --}}
        {{-- @include('layouts.postArticle') --}}

        {{-- {{ $articles = $article }} --}}
        @foreach ($articles as $article)

        <link rel="stylesheet" href="/css/bootstrap.css">
            <div class="w3-container w3-white" style="padding:50px 16px">
            <section class="row">
            <div class="col-md-6 col-md-offset-3 w3-light-gray" style="margin-left: 7% ; margin-top: 7% ; padding: 17px">
            <header>
                <h3>Edit Article</h3><br>

                <form action="{{ route('article.edit', ['article' => $articles->id]) }}" method="POST">
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="form-group">
                    <input type="text" class="form-control" name="title" id="new-title" style="margin-bottom: 7px" value="{{$articles->title}}">
                    <textarea class="form-control" name="body" id="new-article" rows="10">{{$articles->body}}</textarea>
                        <input type="text" name="trimester" id="new-trimester" value="{{$articles->trimester}}">
                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                        <button type="submit" class="btn btn-primary" style="margin: 7px">Edit</button>
                    </div>
                </form>
            </header>
            </div>
            </section>
        </div>
        {{-- <div class="w3-container w3-light-gray" style="margin-top: 118px">
                        {{ dd($articles->trimester) }}
            TEST WITH THIS PART
        </div> --}}
        @endforeach

            
        <!-- Footer -->
        <footer class="w3-center w3-blue-grey w3-padding-64">
            <div class="w3-xlarge w3-section">
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
            </div>
            <p>&copy; 2018 Publisher Team, Faculty of computers and information (Egypt, menoufia), All rights reserved.</p>
        </footer>

    </body>
</html>