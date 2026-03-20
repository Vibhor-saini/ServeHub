<form method="POST" action="/login">
    @csrf
    @if(session('error'))
    <p style="color:red;">{{ session('error') }}</p>
    @endif
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">

    <button type="submit">Login</button>
</form>
