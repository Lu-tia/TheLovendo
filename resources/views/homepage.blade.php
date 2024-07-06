<x-layouts.main>
    @if (session()->has('success','errorMessage'))
        <div class="alert alert-warning">
            {{ session('success') }}
        </div>
    @endif
    <!-- Start Hero Area -->
    <section class="hero-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="hero-text text-center">
                        <!-- Start Hero Text -->
                        <div class="section-heading">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Amore a prima vista, acquisto a seconda!</h2>
                            <p class="wow fadeInUp" data-wow-delay=".5s">Compra e Vendi da macchine usate
                                a telefoni e computer, <br> oppure cerca proprietà, lavori e altro.</p>
                        </div>
                        <!-- End Search Form -->
                       @livewire('global-search')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Categories Area -->
    <section class="categories">
        <div class="container">
            <div class="cat-inner">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="category-slider">
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="assets/images/categories/car.svg" alt="#">
                                </div>
                                <h3>Veicoli</h3>
                                <h5 class="total">35</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="assets/images/categories/laptop.svg" alt="#">
                                </div>
                                <h3>Elettronica</h3>
                                <h5 class="total">22</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="assets/images/categories/matrimony.svg" alt="#">
                                </div>
                                <h3>Matrimoni</h3>
                                <h5 class="total">55</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="assets/images/categories/furniture.svg" alt="#">
                                </div>
                                <h3>Forniture</h3>
                                <h5 class="total">21</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="assets/images/categories/jobs.svg" alt="#">
                                </div>
                                <h3>Lavori</h3>
                                <h5 class="total">44</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="assets/images/categories/real-estate.svg" alt="#">
                                </div>
                                <h3>Case Vacanze</h3>
                                <h5 class="total">65</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->

                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="assets/images/categories/hospital.svg" alt="#">
                                </div>
                                <h3>Salute e Bellezza</h3>
                                <h5 class="total">22</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="assets/images/categories/tshirt.svg" alt="#">
                                </div>
                                <h3>Moda</h3>
                                <h5 class="total">25</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="assets/images/categories/education.svg" alt="#">
                                </div>
                                <h3>Formazione</h3>
                                <h5 class="total">42</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="assets/images/categories/controller.svg" alt="#">
                                </div>
                                <h3>Gadgets</h3>
                                <h5 class="total">32</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="assets/images/categories/travel.svg" alt="#">
                                </div>
                                <h3>Zaini</h3>
                                <h5 class="total">15</h5>
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="assets/images/categories/watch.svg" alt="#">
                                </div>
                                <h3>Orologi</h3>
                                <h5 class="total">65</h5>
                            </a>
                            <!-- End Single Category -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Categories Area -->

    @guest
        <!-- Start How Works Area -->
        <section class="items-grid section custom-padding how-works section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Come funziona</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure recusandae, natus odit
                                asperiores, nihil quibusdam laudantium aliquid fuga provident unde quidem consequatur
                                consequuntur. Ullam, voluptatem tenetur cum repudiandae totam ratione?</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Start Single Work -->
                        <div class="single-work wow fadeInUp" data-wow-delay=".2s">
                            <span class="serial">01</span>
                            <h3>Crea Account</h3>
                            <p>Lorem ipsum dolor sit amet constur adipisicing sed do eiusmod tempor incididunt labore.</p>
                        </div>
                        <!-- End Single Work -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Start Single Work -->
                        <div class="single-work wow fadeInUp" data-wow-delay=".4s">
                            <span class="serial">02</span>
                            <h3>Posta il tuo annuncio!</h3>
                            <p>Lorem ipsum dolor sit amet constur adipisicing sed do eiusmod tempor incididunt labore.</p>
                        </div>
                        <!-- End Single Work -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Start Single Work -->
                        <div class="single-work wow fadeInUp" data-wow-delay=".6s">
                            <span class="serial">03</span>
                            <h3>Vendi i tuoi oggetti</h3>
                            <p>Lorem ipsum dolor sit amet constur adipisicing sed do eiusmod tempor incididunt labore.</p>
                        </div>
                        <!-- End Single Work -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End How Works Area -->
    @endguest


    <!-- Start Items Grid Area -->
    <section class="items-grid section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Ultimi Prodotti</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Necessitatibus nam laborum amet impedit quod ducimus fugiat esse ullam
                            eaque adipisci, voluptate ratione enim repellendus facere dolore aut ipsa. Nisi, iste.</p>
                    </div>
                </div>
            </div>
            <div class="single-head">
                <div class="row">


                    @foreach ($articles as $article)
                        <x-card :article=$article />
                    @endforeach



                </div>
            </div>
        </div>
    </section>
    <!-- /End Items Grid Area -->


    <!-- Start Testimonials Area -->
    <section class="testimonials section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title align-center gray-bg">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Cosa dicono di Noi!</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            Esistono molte varianti dei passaggi di TheLovendo disponibile, ma la maggior parte ha
                            subito alterazioni in qualche forma.</p>
                    </div>
                </div>
            </div>
            <div class="row testimonial-slider">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="quote-icon">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="author">
                            <img src="https://via.placeholder.com/300x300" alt="#">
                            <h4 class="name">
                                Jane Anderson
                                <span class="deg">Founder & CEO</span>
                            </h4>
                        </div>
                        <div class="text">
                            <p>"È incredibile quanto sia stato più facile incontrare nuove persone e creare
                                istantaneamente
                                connessioni. Ho la stessa identica personalità, l'unica cosa che è cambiata è la mia
                                mentalità e alcuni comportamenti."</p>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="quote-icon">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="author">
                            <img src="https://via.placeholder.com/300x300" alt="#">
                            <h4 class="name">
                                Devid Samuyel
                                <span class="deg">Web Developer</span>
                            </h4>
                        </div>
                        <div class="text">
                            <p>"È incredibile quanto sia stato più facile incontrare nuove persone e creare
                                istantaneamente
                                connessioni. Ho la stessa identica personalità, l'unica cosa che è cambiata è la mia
                                mentalità e alcuni comportamenti."</p>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="quote-icon">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="author">
                            <img src="https://via.placeholder.com/300x300" alt="#">
                            <h4 class="name">
                                Jully Sulli
                                <span class="deg">Ui/Ux Designer</span>
                            </h4>
                        </div>
                        <div class="text">
                            <p>"È incredibile quanto sia stato più facile incontrare nuove persone e creare
                                istantaneamente
                                connessioni. Ho la stessa identica personalità, l'unica cosa che è cambiata è la mia
                                mentalità e alcuni comportamenti."</p>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Area -->

</x-layouts.main>
