<x-layouts.main>


    <!-- Start Dashboard Section -->
    <section class="dashboard section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <!-- Start Dashboard Sidebar -->
                    <x-user.sidebar />
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="main-content">
                        @livewire('users.my-items-index')
                    </div>

                </div>
            </div>
    </section>
    <!-- End Dashboard Section -->
</x-layouts.main>
