<x-layouts.main>
       <!-- Start Breadcrumbs -->
       <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Profile Settings</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Profile Settings</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
        <!-- Start Dashboard Section -->
        <section class="dashboard section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <!-- Start Dashboard Sidebar -->
                       <x-user.sidebar/>
                        <!-- Start Dashboard Sidebar -->
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="main-content">
                            <!-- Start Profile Settings Area -->
                            <div class="dashboard-block mt-0 profile-settings-block">
                                <h3 class="block-title">Impostazioni profilo</h3>
                                <div class="inner-block">
                                    <div class="image">
                                        <img src="{{$user->providers[0]->social_avatar}}" alt="#">
                                    </div>
                                    <form class="profile-setting-form" method="post" action="#">
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <div class="form-group">
                                                    <label>Nome</label>
                                                    <input name="first-name" type="text" value="{{$user->name}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="form-group">
                                                    <label>Cognome</label>
                                                    <input name="last-name" type="text" value="{{$user->name}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="form-group">
                                                    <label>Username*</label>
                                                    <input name="usernames" type="text" placeholder="@username">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="form-group">
                                                    <label>Email Address*</label>
                                                    <input name="email" type="email" placeholder="username@gmail.com">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group upload-image">
                                                    <label>Profile Image*</label>
                                                    <input name="profile-image" type="file" placeholder="Upload Image">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group message">
                                                    <label>About You*</label>
                                                    <textarea name="message" placeholder="Enter about yourself"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group button mb-0">
                                                    <button type="submit" class="btn ">Update Profile</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Profile Settings Area -->
                            <!-- Start Password Change Area -->
                            <div class="dashboard-block password-change-block">
                                <h3 class="block-title">Change Password</h3>
                                <div class="inner-block">
                                    <form class="default-form-style" method="post" action="#">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Current Password*</label>
                                                    <input name="current-password" type="password"
                                                        placeholder="Enter old password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>New Password*</label>
                                                    <input name="new-password" type="password"
                                                        placeholder="Enter new password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Retype Password*</label>
                                                    <input name="retype-password" type="password"
                                                        placeholder="Retype password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group button mb-0">
                                                    <button type="submit" class="btn ">Update Password</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Password Change Area -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Dashboard Section -->
</x-layouts.main>