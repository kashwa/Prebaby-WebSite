<!DOCTYPE html>
<html>
    <title>Third Trimester</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            
        @guest
                {{-- Insert some content here --}}
                @foreach ($articles as $article)
            
                    <div class="w3-container w3-white" style="padding:70px 16px ; border-top: 1px solid #ccc">

                    <div class="w3-row-padding">
                        <div class="w3-col m6 w3-light-grey  w3-card" name="firstArt" style="padding: 15px ; margin-bottom: 20px;color: #000">
                            <h2>{{ $article->title }}</h2><br>
                            {{ $article->body }}
                        </div>
                            
                        </div>
                    </div>

                </div>

             @endforeach
        @else
            
            @include('admin.admincontent')
            
        @endguest

        

            
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