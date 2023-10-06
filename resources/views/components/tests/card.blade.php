@props([
    'message' => '初期値',
    'title' => 'タイトル初期値',
    'content' => '本文初期値'
    ])

<div class="border shadow-md w-1/4 p-2">
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>