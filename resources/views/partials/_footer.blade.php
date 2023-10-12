<div class="map-wrapper">
  <div class="container g-0">
    <div class="map-container py-4">
      @foreach($footer['map'] as $element)
      <div class="list">
        <h6>
          {{ $element['listName'] }}
        </h6>
        <ul class="me-2">
          @foreach($element['listLinks'] as $link)
          <li>
            {{ $link }}
          </li>
          @endforeach
        </ul>
      </div>
      @endforeach
    </div>
    <img src="" alt="">
  </div>
</div>
<div class="footer-wrapper">
  <div class="container d-flex justify-content-between align-items-center footer-container">
    <div>
      <button class="sign-up-btn">
        sign up now!
      </button>
    </div>
    <div class="d-flex justyfy-content-center align-items-center">
      <h4 class="text-uppercase m-0">
        follow us
      </h4>
      <ul class="d-flex m-0 p-0">
        @foreach ($footer['linkIcons'] as $item)
        <li class="m-1">
          <img src="" alt="img">
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>