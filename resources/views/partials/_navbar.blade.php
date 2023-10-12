<div class="header-wrapper">
  <div class="header-container container g-0">
    <img src="" alt="">
    <nav>
      <ul  class="h-100">
        @foreach ($header['links'] as $link)
            
        <li >
          <a href="{{$link['link']}}">{{ $link['name'] }}</a>
        </li>
        @endforeach
      </ul>
    </nav>
  </div>

</div>