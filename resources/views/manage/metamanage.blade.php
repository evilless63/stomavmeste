<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Заполнение мета тегов страниц
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Здесь можно заполнить мета теги всех существующих страниц сайта (кроме новостей, для них заполнение происходит непосредственно при создании и редактировании новости
                </div>
            </div>

            @foreach($metas as $meta)
            <form action="{{route('manage.meta.update')}}" method="POST">
                <h4 class="font-semibold text-xl text-gray-800 leading-tight mt-4 mb-2">{{$meta['name']}}</h4>
                @csrf
                {{ method_field('PATCH') }}
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        @foreach($meta['info'] as $k => $v)
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="{{$k}}" class="block text-sm font-medium text-gray-700">
                                    Мета заголовок страницы (title)
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="meta_title" value="{{$v->meta_title}}"
                                           class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                           placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="{{$k}}" class="block text-sm font-medium text-gray-700">
                                    Мета ключевые слова страницы (keywords)
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="meta_keywords" value="{{$v->meta_keywords}}"
                                           class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                           placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="{{$k}}" class="block text-sm font-medium text-gray-700">
                                    Мета описание страницы (description)
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="meta_description" value="{{$v->meta_description}}"
                                           class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                           placeholder="">
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <input type="hidden" name="page" value="{{$meta['page']}}">
                        <div class="px-4 py-3 bg-gray-50 sm:px-6">
                            <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </div>

    </div>
</x-app-layout>
