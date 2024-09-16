@php
$segments = Request::segments();
$titlesArray = [];
$url = '';
foreach ($segments as $index => $segment) {
$url = $url . '/' . $segment;
$titlesArray[] = [
'title' => ucfirst(str_replace('-', ' ', $index !== 0 && isset($titles[$index - 1]) ? $titles[$index - 1] : $segment)),
'link' => $index < count($segments) - 1 ? url($url) : ''
  ];

  }
  @endphp

  <div class="col-xl-12">
  <div class="page-titles">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        @foreach ($titlesArray as $index => $item)
        @php
        if ($index === 0 || is_numeric($segments[$index]))
        continue;
        @endphp
        @if ($index === count($titlesArray) - 1)
        <li class="breadcrumb-item active" aria-current="page">
          {{ $item['title'] }}
        </li>
        @else
        <li class="breadcrumb-item">
          <a href="{{ $item['link'] }}">{{ $item['title'] }}</a>
        </li>
        @endif
        @endforeach
      </ol>
    </nav>
  </div>
  </div>