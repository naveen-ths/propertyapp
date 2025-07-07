<form method="post" action="{{ route('password.update') }}">
    @csrf
    @method('put')

    <div class="form-group">
        <label for="update_password_current_password">Current Password *</label>
        <input type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" 
               id="update_password_current_password" name="current_password" 
               autocomplete="current-password">
        @error('current_password', 'updatePassword')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="update_password_password">New Password *</label>
        <input type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror" 
               id="update_password_password" name="password" 
               autocomplete="new-password">
        @error('password', 'updatePassword')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="update_password_password_confirmation">Confirm Password *</label>
        <input type="password" class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror" 
               id="update_password_password_confirmation" name="password_confirmation" 
               autocomplete="new-password">
        @error('password_confirmation', 'updatePassword')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-warning">
            <i class="fas fa-key mr-1"></i> {{ __('Update Password') }}
        </button>

        @if (session('status') === 'password-updated')
            <span class="text-success ml-2">
                <i class="fas fa-check-circle"></i> {{ __('Password Updated.') }}
            </span>
        @endif
    </div>
</form>
