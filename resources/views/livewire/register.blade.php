<form wire:submit.prevent="register">
    @if (session()->has('success'))
        <div style="color: green">
            {{ session('success') }}
        </div>
    @endif
    <div>
        <label for="first_name">First Name : </label>
        <input type="text" id="first_name" wire:model="firstName" />
    </div>
    @error('firstName')
        <p style="color: red; font-size: 14px">{{ $message }}</p>
    @enderror
    <div>
        <label for="last_name">Last Name : </label>
        <input type="text" id="last_name" wire:model="lastName" />
    </div>
    @error('lastName')
        <p style="color: red; font-size: 14px">{{ $message }}</p>
    @enderror
    <div>
        <label for="email">Email Address : </label>
        <input type="text" id="email" wire:model="email" />
    </div>
    @error('email')
        <p style="color: red; font-size: 14px">{{ $message }}</p>
    @enderror
    <div>
        <label for="phone">Contact Number : </label>
        <input type="text" id="phone" wire:model="phone" />
    </div>
    @error('phone')
        <p style="color: red; font-size: 14px">{{ $message }}</p>
    @enderror
    <div>
        <label for="address">Address : </label>
        <input type="text" id="address" wire:model="address" />
    </div>
    @error('address')
        <p style="color: red; font-size: 14px">{{ $message }}</p>
    @enderror
    <div>
        <label for="city">City : </label>
        <input type="text" id="city" wire:model="city" />
    </div>
    @error('city')
        <p style="color: red; font-size: 14px">{{ $message }}</p>
    @enderror
    <div>
        <label for="country">Country : </label>
        <input type="text" id="country" wire:model="country" />
    </div>
    @error('country')
        <p style="color: red; font-size: 14px">{{ $message }}</p>
    @enderror
    <div>
        <label for="password">Password : </label>
        <input type="text" id="password" wire:model="password" />
    </div>
    @error('password')
        <p style="color: red; font-size: 14px">{{ $message }}</p>
    @enderror
    <div>
        <label for="confirm">Confirm Password : </label>
        <input type="text" id="confirm" wire:model="password_confirmation" />
    </div>
    @error('passwordConfirmation')
        <p style="color: red; font-size: 14px">{{ $message }}</p>
    @enderror
    <div>
        <input type="submit" value="Register">
    </div>
</form>