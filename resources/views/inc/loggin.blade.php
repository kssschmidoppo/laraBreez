@section('loggin')

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand"><h3> Wi_Opp Blog</h3></a>
      <form class="d-flex" action="/create" method="post">
          <input class="form-control me-2" type="email" placeholder="Email" aria-label="Email">
          <input class="form-control me-2" type="password" placeholder="Password" aria-label="Password">
          <button class="btn" type="submit" aria-label="Login">Login</button>
      </form>
</nav>