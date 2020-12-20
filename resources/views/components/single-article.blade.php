<div class="col-10 pt-2 pb-4">
    <p class="small">Pubblicato il, {{ $date }}</p>
    <h2 class="card-title pt-2 pb-2 font-weight-bold text-main" data-aos="fade-left" data-aos-duration="700">{{ $title }}</h2>
    <p class="card-text text-accent text-1 pb-2" data-aos="fade-right" data-aos-duration="700" data-aos-offset="100">{{ $description }}</p>

    <div class="row" data-aos="fade-in" data-aos-duration="700" data-aos-offset="100">
        <div class="col-12">
            <div class="slider-for">
                <div>
                    <img src="{{ $carouselimg[0] }}" class="img-fluid rounded">
                </div>
                <div>
                    <img src="{{ $carouselimg[1] }}" class="img-fluid rounded">
                </div>
                <div>
                    <img src="{{ $carouselimg[2] }}" class="img-fluid rounded">
                </div>
                <div>
                    <img src="{{ $carouselimg[3] }}" class="img-fluid rounded">
                </div>
                <div>
                    <img src="{{ $carouselimg[4] }}" class="img-fluid rounded">
                </div>
            </div>
        </div>
        <div class="col-12 pt-3">
            <div class="slider-nav">
                <div class="px-2 thumbNail">
                    <img src="{{ $carouselimg[0] }}" class="img-fluid rounded">
                </div>
                <div class="px-2 thumbNail">
                    <img src="{{ $carouselimg[1] }}" class="img-fluid rounded">
                </div>
                <div class="px-2 thumbNail">
                    <img src="{{ $carouselimg[2] }}" class="img-fluid rounded">
                </div>
                <div class="px-2 thumbNail">
                    <img src="{{ $carouselimg[3] }}" class="img-fluid rounded">
                </div>
                <div class="px-2 thumbNail">
                    <img src="{{ $carouselimg[4] }}" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</div>