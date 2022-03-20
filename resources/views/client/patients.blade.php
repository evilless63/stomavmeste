<x-client-layout :entity="$entity">
    <div class="bg-white">
        <main>

                <div class="max-w-max lg:max-w-7xl mx-auto">
                    <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                        <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
                            <div>
                                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                                    Пациентам
                                </h2>
                                <div class="mt-3 sm:mt-4 lg:grid lg:grid-cols-2 lg:gap-5 lg:items-center">
                                    <p class="text-xl text-gray-500">
                                        Мы понимаем как это тра тра тра
                                    </p>
                                </div>
                            </div>
                            <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
                                @forelse($articles as $article)
                                <div>
                                    <p class="text-sm text-gray-500">
                                        <time datetime="2020-03-16">{{$article->updated_at}}</time>
                                    </p>
                                    <a href="#" class="mt-2 block">
                                        <p class="text-xl font-semibold text-gray-900">
                                            {{$article->title}}
                                        </p>
                                        <p class="mt-3 text-base text-gray-500">
                                            {{mb_strimwidth($article->short_description, 0, 97, '...')}}
                                        </p>
                                    </a>
                                    <div class="mt-3">
                                        <a href="{{route('article', $article->slug)}}" class="text-base font-semibold text-indigo-600 hover:text-indigo-500">
                                            Ознакомьтесь со статьей полностью
                                        </a>
                                    </div>
                                </div>
                                @empty
                                    <h3 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                                        Информации для пациентов пока что нет
                                    </h3>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>

        </main>

        <x-footer/>
    </div>
</x-client-layout>

