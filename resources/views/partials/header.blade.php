<header>
    <ul class="nav bg-black fixed-top">
        <li class="nav-item">
          <a class="nav-link active text-warning" aria-current="page" href="{{route('home')}}"><strong>Home</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="{{route('comics.index')}}">I miei fumetti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="{{route('comics.create')}}">Nuovo fumetto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger disabled" aria-disabled="true">Disabled</a>
        </li>
    </ul>
</header>
