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
                        <h1>Signup</h1>
                    </div>
                    <!-- Form start -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="role_id" value="2" >
                            <input id="name" type="text" class="input-text @error('name') is-invalid @enderror"  placeholder="Full Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="email" placeholder="Email Address" type="email" class="input-text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" placeholder="Password" type="password" class="input-text @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="input-text" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <button type="submit">signup</button>
                        </div>
                    </form><!-- /form -->
                </div>
                <div class="footer">
                    <span>
                        <a href="{{url('login')}}">Return to Login</a>
                    </span>
                </div>
            </div><!-- /.form-content-box -->
        </div><!-- /.display-table-cell -->
    </div><!-- /.display-table -->
</section><!-- /.form-section -->
@include('frontend.includes.footer-script')

