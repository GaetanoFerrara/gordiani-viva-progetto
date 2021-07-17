<header>

    @include('partials.navbar')

    <section id="jumbotron" class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($jumbotrons as $jumbotron)
                <div class="swiper-slide">
                    <div class="jumbotron_item" style="background-image: url('{{ asset('img/jumbotrons/' . $jumbotron->img_path) }}');">
                        <div class="jumbotron_item_text">
                            <span class="jumbotron_subtitle">{{ $jumbotron->subtitle }}</span>
                            <h3 class="jumbotron_title">{{ $jumbotron->title }}</h3>
                            <a href="{{ $jumbotron->link }}" target="_blank" class="jumbotron_link">Visita <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev">
            <i class="fas fa-long-arrow-alt-left"></i>
        </div>
        <div class="swiper-button-next">
            <i class="fas fa-long-arrow-alt-right"></i>
        </div>
    </section>

</header>