<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="max-w-7xl mx-auto">
    <div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="images" data-preview="preview" class="btn btn-outline btn-sm btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
    <input id="images" type="text" name="images">
    </div>
    <div id="preview" class="flex gap-2"></div>
</div>
</body>
<script type="module">
    const fileManager = new FileManager($('#lfm'));
    fileManager.preview = (item)=>{
        return $(`
      <div class="card-image relative w-50 h-50 bg-gray-100 rounded-md overflow-hidden border-2 rounded-2">
        <img src="${item.thumb_url}" alt="" class="w-full h-full object-cover">
        <div class="close-icon absolute top-2 right-2 text-gray-500 hover:text-gray-800">
          <i class="fa-regular fa-trash-can"></i>
        </div>
      </div>
    `);
    }
</script>
</html>
