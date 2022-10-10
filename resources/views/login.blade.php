<x-layout>
    <form method="POST" action="/login" id="loginForm">
        <div id="errorContainer" style="color: red"></div>
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

    @push('scripts')
        <script type="text/javascript">
            const form = document.getElementById('loginForm');
            loginForm.addEventListener('submit', function(event) {
                event.preventDefault();

                document.getElementById('errorContainer').innerHTML = '';

                const items = {
                    email : document.getElementById('email').value,
                    password : document.getElementById('password').value
                };

                const rules = {
                    email : ['required', 'string', 'email'],
                    password: ['required', 'string', 'minLength:6']
                };

                let form = Iodine.assert(items, rules);

                console.log(form);

                if (! form.valid) {
                    for (let key in form.fields) {
                        if (! form.fields[key].valid) {
                            let errorPara = document.createElement('p');
                            let errorText = document.createTextNode(`${key} - ${form.fields[key].error}. `);
                            errorPara.appendChild(errorText);
                            document.getElementById('errorContainer').appendChild(errorPara);
                        }
                    }
                } else {
                    this.submit();
                }
            });
        </script>
    @endpush
</x-layout>