<footer id="fh5co-footer" class="fh5co-bg" role="contentinfo">
    <div class="overlay"></div>
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-4 fh5co-widget">
                <h3>About Techcube</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                <p><a class="btn btn-accent" href="{{ route('register') }}">Iscriviti oggi</a></p>
            </div>
            <div class="col-md-8 d-flex">
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <ul class="fh5co-footer-links">
                        <li><h3>Menù</h3></li>
                        <li><a class="{{ Route::is('home') ? 'text-white font-weight-bold' : '' }}" href="{{ route('home') }}">Home</a></li>
                        <li><a class="{{ Route::is('blog') ? 'text-white font-weight-bold' : '' }}" href="{{ route('blog') }}">Blog</a></li>
                        <li><a class="{{ Route::is('aboutus') ? 'text-white font-weight-bold' : '' }}" href="{{ route('aboutus') }}">Chi siamo</a></li>
                        <li><a class="{{ Route::is('contacts') ? 'text-white font-weight-bold' : '' }}" href="{{ route('contacts') }}">Contatti</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <ul class="fh5co-footer-links">
                        <li><h3>Categorie</h3></li>
                        <li><a href="#">PC</a></li>
                        <li><a href="#">Smartphone</a></li>
                        <li><a href="#">Audio</a></li>
                        <li><a href="#">Gaming</a></li>
                        <li><a href="#">IOT</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <ul class="fh5co-footer-links">
                        <li><h3>Follow us</h3></li>
                        <li><a href="#"><i class="fab fa-facebook-f pr-1"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-twitter pr-1"></i> Twitter</a></li>
                        <li><a href="#"><i class="fab fa-instagram pr-1"></i> Instagram</a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in pr-1"></i> LinkedIn</a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p pr-1"></i> Pinterest</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row copyright">
            <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; 2020 | All Rights Reserved.</small>
                </p>
            </div>
        </div>

    </div>
</footer>
