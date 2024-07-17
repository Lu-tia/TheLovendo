<x-layouts.main>

    <!-- Start Dashboard Section -->
    <section class="dashboard section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <!-- Start Dashboard Sidebar -->
                    <x-user.sidebar />
                </div>
                <!-- Start Dashboard Sidebar -->
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="main-content">
                        <!-- Start Profile Settings Area -->
                        <div class="dashboard-block mt-0 profile-settings-block">
                            <h3 class="block-title">{{ __('ui.Impostazioni profilo')}}</h3>
                            <div class="inner-block">
                                <div class="image">
                                    <img src="{{Storage::url(auth()->user()->avatar) }}"
                                        alt="#">
                                </div>
                                <form class="profile-setting-form" action="{{route('users.updateProfile')}}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>{{ __('ui.Nome')}}</label>
                                                <input name="firstName" type="text"
                                                    value="{{ auth()->user()->firstName }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>{{ __('ui.Cognome')}}</label>
                                                <input name="lastName" type="text"
                                                    value="{{ auth()->user()->lastName }}">
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="form-group upload-image">
                                                <img width="200" src="" class="img-responsive">
                                                <label for="image">{{ __('ui.Immagine profilo')}}</label>
                                                <input name="image" id="image" type="file"
                                                    placeholder="Upload Image">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group button mb-0">
                                                <button type="submit" class="btn ">{{ __('ui.Aggiorna profilo')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Profile Settings Area -->
                    </div>
                </div>

            </div>
    </section>
    <!-- End Dashboard Section -->
</x-layouts.main>
