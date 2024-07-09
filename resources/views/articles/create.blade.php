<x-layouts.main>


    <!-- Start Dashboard Section -->
    <section class="dashboard section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <x-user.sidebar />
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="main-content">
                            @livewire('articles.create-article-form')
                            <!-- End Post Ad Block Area -->
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Dashboard Section -->

</x-layouts.main>
