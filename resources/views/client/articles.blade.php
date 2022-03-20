<x-client-layout :entity="$entity">
    <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-lg max-w-prose mx-auto">
                <h1>
                    <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Новости</span>
                </h1>
            </div>
            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                @forelse($articles as $article)
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover"
                             src="{{asset('images/articles/'. $article->image)}}"
                             alt="{{$article->title}}">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-blue-600">
                                <a href="{{route('article', $article->slug)}}" class="hover:underline">
                                    {{$article->title}}
                                </a>
                            </p>
                            <a href="{{route('article', $article->slug)}}" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">
                                    {{mb_strimwidth($article->short_description, 0, 97, '...')}}
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                @if($loop->iteration % 3 == 0)
                </div>
                <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                @endif
                @empty
                <h3>
                    <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Новостей пока что нет</span>
                </h3>
                @endforelse

            </div>
        </div>
    </div>
    <x-footer/>
</x-client-layout>
