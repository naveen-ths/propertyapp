
<form method="post" action="{{ route('profile.update') }}">
    @csrf
    @method('patch')

    <div class="form-group">
        <label for="name">Name *</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" 
               id="name" name="name" value="{{ old('name', $user->name) }}" 
               required autofocus autocomplete="name">
        @error('name')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Email Address *</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" 
               id="email" name="email" value="{{ old('email', $user->email) }}" 
               required autocomplete="username">
        @error('email')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="mt-2">
                <small class="text-warning">
                    {{ __('Your email address is unverified.') }}
                    <button form="send-verification" class="btn btn-link p-0 btn-sm text-primary">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </small>

                @if (session('status') === 'verification-link-sent')
                    <div class="alert alert-success mt-2">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </div>
                @endif
            </div>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save mr-1"></i> {{ __('Save Changes') }}
        </button>

        @if (session('status') === 'profile-updated')
            <span class="text-success ml-2">
                <i class="fas fa-check-circle"></i> {{ __('Saved.') }}
            </span>
        @endif
    </div>
</form>

<form id="send-verification" method="post" action="{{ route('verification.send') }}" style="display: none;">
    @csrf
</form>

