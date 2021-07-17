<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Gordiani Viva - {{ $path->name }}</title>
</head>
<body>

    @include('partials.navbar')

    <div id="path">
        
        <section id="path_jumbotron">
            <div class="path_jumbotron_item">
                <h2 class="static_title">Gordiani Viva</h2>
                <h2 class="dynamic_title text-uppercase">{{ $path->name }}</h2>
            </div>
            <div class="path_jumbotron_item">
                <img src="{{ asset('img/path_detail/logos') . "/" . $path->logo . ".png" }}" class="logo_img">
            </div>
            <div class="path_jumbotron_item">
                <p class="path_description playfair_font">{{  $path->description  }}</p>
            </div>
        </section>
    
        <section id="panels">
            <h2 class="section_title mb-5">
                <span class="text">Scopri i contenuti multimediali</span>
            </h2>
            {{-- <p class="section_subtitle playfair_font">Un'app volta alla riqualificazione digitale al fine di favorire il protocollo d’intesa, sottoscritto nel 2019, tra il Municipio V di Roma, l’Accademia di Belle Arti di Roma e il prof. Arch. Alessandro De Masi.</p> --}}
            
            <ul id="panels_list">
                @foreach ($panels as $key => $panel)
                    <li class="panel_item" @click="openPanelPopup({{ $panel }})">
                        <div class="panel_item_img">
                            <img src="{{ asset('img/path_detail/panels' . "/" . $panel->panel) }}" alt="{{ $panel->title }}" class="img100">
                        </div>
                        <div class="panel_item_text">
                            <h3 class="panel_title text-uppercase">{{ $panel->title }}</h3>
                        </div>
                    </li>
                @endforeach
            </ul>
        </section>

        @if($path->name == "Cinema")
            <section class="video">
                <h2 class="section_title">
                    <span class="text">Cinema Channel</span>
                </h2>

                <div class="video_container">

                    <div class="video_item">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/EsmaTfZqb1U" title="YouTube video player" frameborder="0"></iframe>
                    </div>

                    <div class="video_item">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RvFAst6yQpw" title="YouTube video player" frameborder="0"></iframe>
                    </div>
                </div>


            </section>
        @endif
    
    
        @include('partials.footer')


        <div id="overlay_popup" class="d-none" :class="panelPopup">
            <div id="panel_popup">
                <span class="close_btn" @click="panelPopup = !panelPopup">
                    <i class="fas fa-times"></i>
                </span>
                <div class="panel_popup_top">
                    <div class="panel_title">
                        <h2 class="text-uppercase">@{{ panel.title }}</h2>
                    </div>
                    <div class="panel_top_items">
                        <div class="panel_top_item">
                            <img :src="'{{ asset('img/path_detail/pictures') . '/' }}' + panel.picture" :alt="'picture ' + panel.title">
                        </div>
                        <div class="panel_top_item">
                            <img :src="'{{ asset('img/path_detail/gif') . '/' }}' + panel.gif" :alt="'gif ' + panel.title">
                        </div>
                    </div>
                </div>
                <div class="panel_popup_bottom">
                    <p>@{{ panel.description }}</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/path.js') }}"></script>
    
</body>
</html>