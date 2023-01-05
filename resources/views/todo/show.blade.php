<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SHOW') }}
        </h2>
    </x-slot>
    <div class="jumbotron text-center">
            <h1 class="display-4">
            <i class="fas fa-tags"></i>
                超 Do!
            </h1>
            <p class="lead">TASK MANAGER APP</p>
            <hr class="my-4">
            <p>TODO管理webアプリ 超 Do! へようこそ！<br>
                TASKを登録しましょう。</p>
        </div> 

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title text-center">{{ $todo->title }}</h5>
                <p class="card-text">{!! nl2br($todo->content) !!}</p>
                <p class="card-text text-center"><small class="text-muted">期限は {{ $todo->due_date }}です。</small></p> 
                <button type="button" class="btn btn-outline-secondary btn-lg btn-block mt-3 mx-auto w-100" onclick="history.back()">戻る</button>
            </div>
        </div>
</x-admin-layout>