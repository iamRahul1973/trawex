<x-layout>
    <form method="POST" action="/login">
        <div>
            <label for="email">Username : </label>
            <input type="text" name="email" id="email" required />
        </div>
        @error('email')
            <p style="color: red; font-size: 14px">{{ $message }}</p>
        @enderror
        <div>
            <label for="password">Password : </label>
            <input type="text" name="password" id="password" required />
        </div>
        @error('password')
            <p style="color: red; font-size: 14px">{{ $message }}</p>
        @enderror
        <div>
            @csrf
            <input type="submit" value="Login">
        </div>
    </form>
</x-layout>