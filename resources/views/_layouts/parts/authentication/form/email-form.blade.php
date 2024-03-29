<form id="login-form" action="{{ route('login') }}" method="POST" novalidate>
    @csrf
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit" value="Login">
</form>
