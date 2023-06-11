<x-guest-layout>

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card ">
                    <div class="card-body">

                        <!-- Logo -->

                        <h4 class="mb-2">Welcome to My Site</h4>

                        <!-- /Logo -->
                            <p class="mb-4">Please sign-in to your account and start the adventure</p>
                            @if ($errors->any())
                                <div>
                                    <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

                                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email or Username</label>

                                    <input type="text" class="form-control" type="email" name="email"
                                        :value="old('email')" required autofocus autocomplete="email" />
                                </div>


                                <div class="mb-3 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password">Password</label>
                                        <a href="{{ route('password.request') }}">
                                            <small>Forgot Password?</small>
                                        </a>
                                    </div>

                                    <div class="input-group input-group-merge">
                                        <input id="password" class="form-control" type="password" name="password"
                                            required autocomplete="current-password" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember-me" />
                                        <label class="form-check-label" for="remember-me"> Remember Me </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                                </div>
                            </form>

                            <p class="text-center">
                                <span>New on our platform?</span>
                                <a href="{{ route('register') }}">
                                    <span>Create an account</span>
                                </a>
                            </p>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>
</x-guest-layout>
