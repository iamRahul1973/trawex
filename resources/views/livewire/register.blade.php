<div>
    <h2>Register</h2>
    <form wire:submit.prevent="register">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name : </label>
                    <input type="text" id="first_name" wire:model="firstName" class="form-control" />
                    @error('firstName')
                        <p class="text-danger small pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="last_name">Last Name : </label>
                    <input type="text" id="last_name" wire:model="lastName" class="form-control" />
                    @error('lastName')
                        <p class="text-danger small pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email Address : </label>
                    <input type="text" id="email" wire:model="email" class="form-control" />
                    @error('email')
                        <p class="text-danger small pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Contact Number : </label>
                    <input type="text" id="phone" wire:model="phone" class="form-control" />
                    @error('phone')
                        <p class="text-danger small pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="address">Address : </label>
                    <input type="text" id="address" wire:model="address" class="form-control" />
                    @error('address')
                        <p class="text-danger small pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="city">City : </label>
                    <input type="text" id="city" wire:model="city" class="form-control" />
                    @error('city')
                        <p class="text-danger small pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="country">Country : </label>
                    <input type="text" id="country" wire:model="country" class="form-control" />
                    @error('country')
                        <p class="text-danger small pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password : </label>
                    <input type="text" id="password" wire:model="password" class="form-control" />
                    @error('password')
                        <p class="text-danger small pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="confirm">Confirm Password : </label>
                    <input type="text" id="confirm" wire:model="password_confirmation" class="form-control" />
                    @error('passwordConfirmation')
                        <p class="text-danger small pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <input class="form-label" type="submit" value="Register">
                </div>
            </div>
        </div>
    </form>
</div>