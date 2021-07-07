
@section('content')
    <form method="POST" action="{{url('login')}}">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="password" placeholder="password">
        <button type="submit" class="addBtn">Login</button>
    </form>
    <div>
        <a href="{{URL::route('/reg')}}">
            <button>Register</button>
        </a>
    </div>
