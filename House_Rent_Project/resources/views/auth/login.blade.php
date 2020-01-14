    @include('frontend.includes.header-link')

    <!--========================================================
                    Form-Section Start
    ==========================================================-->
    <section class="form-section">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="form-content-box">
                    <div class="form-details">
                        <!-- Main title -->
                        <div class="form-title">
                            <h1>Login</h1>
                        </div>
                        <!-- Form start -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="checkbox">
                                <div class="pull-left">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </label>
                                </div>
                                <a href="" class="pull-right">Forgot Password</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit">login</button>
                            </div>
                        </form><!-- /form -->
                    </div>
                    <div class="footer">
                    <span>
                        <a href="{{url('register ')}}">Sign Up Now</a>
                    </span>
                    </div>
                </div><!-- /.form-content-box -->
            </div><!-- /.display-table-cell -->
        </div><!-- /.display-table -->
    </section><!-- /.form-section -->
@include('frontend.includes.footer-script')