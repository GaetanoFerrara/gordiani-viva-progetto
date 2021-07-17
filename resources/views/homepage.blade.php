<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- swiper --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    {{-- /swiper --}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Gordiani Viva</title>
</head>
<body>

    <div id="app">

    
        @include('partials.header')

        <main>
            <section id="retraining">
                <h2 class="section_title dynamic" @click="openTutorials = !openTutorials">
                    <span class="text">Smart Heritage</span>
                </h2>

                <div class="chevron">
                    <i v-if="!openTutorials" class="fas fa-angle-double-down"></i>
                    <i v-else class="fas fa-angle-double-up"></i>
                </div>
                
                <p class="section_subtitle playfair_font">Un'app volta alla riqualificazione digitale al fine di favorire il protocollo d’intesa, sottoscritto nel 2019, tra il Municipio V di Roma, l’Accademia di Belle Arti di Roma e il prof. Arch. Alessandro De Masi.</p>
                
                
                <div v-if="openTutorials" id="tutorials">
                    <ul class="tutorials_list">
                        <li class="tutorial_item">
                            <div class="tutorial_item_image">
                                <img src="{{ asset('img/tutorials/discover_1.png') }}" alt="" class="img100">
                            </div>
                            <div class="tutorial_item_desc">
                                <div class="item_desc_top"><span class="item_num">1</span><span class="item_separator"></span></div>
                                <p class="item_desc_text">Scarica gratuitamente l'applicazione Gordiani Viva dal sito</p>
                            </div>
                        </li>
                        <li class="tutorial_item">
                            <div class="tutorial_item_image">
                                <img src="{{ asset('img/tutorials/discover_2.png') }}" alt="" class="img100">
                            </div>
                            <div class="tutorial_item_desc">
                                <p class="item_desc_text">Individua i pannelli espositivi presenti nell'area di Villa Gordiani e di Teano</p>
                                <div class="item_desc_top"><span class="item_num">2</span><span class="item_separator"></span></div>
                            </div>
                        </li>
                        <li class="tutorial_item">
                            <div class="tutorial_item_image">
                                <img src="{{ asset('img/tutorials/discover_3.png') }}" alt="" class="img100">
                            </div>
                            <div class="tutorial_item_desc">
                                <div class="item_desc_top"><span class="item_num">3</span><span class="item_separator"></span></div>
                                <p class="item_desc_text">Inquadra i marker attivando la fotocamera del proprio smartphone</p>
                            </div>
                        </li>
                        <li class="tutorial_item">
                            <div class="tutorial_item_image">
                                <img src="{{ asset('img/tutorials/discover_4.png') }}" alt="" class="img100">
                            </div>
                            <div class="tutorial_item_desc">
                                <p class="item_desc_text">Goditi i contenuti multimediali dei percorsi Storia, Cinema e Oggi</p>
                                <div class="item_desc_top"><span class="item_num">4</span><span class="item_separator"></span></div>
                            </div>
                        </li>
                    </ul>
                </div>


                <div id="retraining_content">
                    <ul class="block_list">
                        @foreach($territories as $territory)
                            <li class="retraining_item" style="background-image: url('{{ asset('img/territories/' . $territory->img_path) }}')">
                                <div class="retraining_content_description">
                                    <h3>{{ $territory->name }}</h3>
                                </div>
                                <span class="retraining_btn" @click="getResources({{ $territory->id }})">
                                    <i class="fas fa-long-arrow-alt-down"></i>
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                

                <div v-if="contentsVisibility" id="retraining_sub_content">

                    <h2 class="section_title">
                        <span class="text">Paesaggio e Beni Paesaggistici</span>
                    </h2>

                    <p class="section_subtitle playfair_font">Analisi dei connotati fondamentali del paesaggio esaminato e dei suoi meccanismi di funzionamento attraverso carte tematiche di base intese come sintesi delle analisi di riunificazione e sistematizzazione delle diverse informazioni ambientali. Informazioni idonee ad individuare le famiglie dei tipi di paesaggio.</p>

                    <ul class="block_list">
                        <li v-for="resource in resources" class="retraining_sub_item" :style="'background-image: url({{ asset('img/resources') }}/' + resource.img_path + ')'">
                            <div class="retraining_sub_item_description">
                                <h4>@{{ resource.title }}</h4>
                            </div>
                            <div class="retraining_sub_item_layover">
                                <ul class="layover_list">
                                    <li v-for="link in resource.links">
                                        <span>@{{ link.title }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="path_btn">
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <section v-if="contentsVisibility" id="paths">
                <h2 class="section_title">
                    <span class="text">Percorsi multimediali</span>
                </h2>
                <p class="section_subtitle playfair_font">Scopri i percorsi mediante una rivoluzione estetica multimediale.</p>

                <ul id="paths_list">
                    @foreach ($paths as $path)
                        <li class="path_item">
                            <div class="path_item_pic">
                                <img src="{{ asset('img/paths') . "/" . $path->logo . ".jpg" }}" class="img100">
                                <a href="{{ route('path.path_detail', ['slug' => $path->slug]) }}" class="path_btn">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                            <div class="path_item_description">
                                <h3>{{ $path->name }}</h3>
                                <p class="playfair_font">{{ $path->description }} <strong>Vivi gordiani {{ $path->name }}</strong></p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </section>


            <section class="video">
                <h2 class="section_title">
                    <span class="text">Scopri Gordiani Viva</span>
                </h2>
                <p class="section_subtitle playfair_font">Se non hai la possibilità di recarti fisicamente di fronte ai pannelli espositivi di Gordiani Viva, puoi fruire dei contenuti attraverso la piattaforma.</p>

                <div class="video_container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SMGtjPIS8eY" title="YouTube video player" frameborder="0"></iframe>
                </div>


            </section>

        </main>

        @include('partials.footer')


    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>

</body>
</html>