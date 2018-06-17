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