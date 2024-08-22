<form method="POST" action="{{ route('user.register') }}">
    @csrf
    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="phone">Phone</label>
        <input id="phone" type="text" name="phone" value="{{ old('phone') }}" required>
    </div>

    <div>
        <label for="address">Address</label>
        <input id="address" type="text" name="address" value="{{ old('address') }}" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <label for="password-confirm">Confirm Password</label>
        <input id="password-confirm" type="password" name="password_confirmation" required>
    </div>

    <!-- Agree to Terms and Conditions Checkbox -->
    <div>
        <input type="checkbox" name="terms" id="terms" required>
        <label for="terms">I agree to the <a href="#">terms and conditions</a></label>
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
