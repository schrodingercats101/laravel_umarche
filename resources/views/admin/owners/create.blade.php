<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('オーナー登録') }}
        </h2>
    </x-slot>
</x-app-layout>
<section class="text-gray-600 body-font relative">
    <div class="container px-5 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">オーナー登録</h1>
      </div>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class=" -m-2">
          <div class="p-2 w-1/2 mx-auto" >
            <div class="relative">
              <label for="name" class="leading-7 text-sm text-gray-600">オーナー名</label>
              <input type="text" id="name" name="name" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="p-2 w-1/2 mx-auto">
            <div class="relative">
              <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
              <input type="email" id="password" name="password" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="p-2 w-1/2 mx-auto">
            <div class="relative">
              <label for="password" class="leading-7 text-sm text-gray-600">パスワード</label>
              <input type="password " id="email" name="email" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="p-2 w-1/2 mx-auto">
            <div class="relative">
              <label for="password_confirmation" class="leading-7 text-sm text-gray-600">パスワード確認</label>
              <input type="password" id="assword_confirmation" name="assword_confirmation" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="flex justify-around p-2 w-full mt-4">
            <button onclick="location.href='{{ route('admin.owners.index') }}'" class=" flex mx-auto text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-gray-400 rounded text-lg">戻る</button>
            <button class="flex mx-auto text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">登録する</button>
          </div>
        </div>
    </div>
    </div>
  </section>
