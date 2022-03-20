<x-client-layout :entity="$entity">
    <div class="bg-white">
        <main>


            <div class="py-16 xl:py-36 px-4 sm:px-6 lg:px-8 bg-white overflow-hidden">
                <div class="max-w-max lg:max-w-7xl mx-auto">
                    <div class="relative z-10 mb-8 md:mb-2 md:px-6">
                        <div class="text-base max-w-prose lg:max-w-none">
                            <h2 class="leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Пресса о нас</h2>
                            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Что говорят в СМИ о нас</p>
                        </div>
                    </div>
                    <div class="relative">
                        <svg class="hidden md:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                            <defs>
                                <pattern id="95e8f2de-6d30-4b7e-8159-f791729db21b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#95e8f2de-6d30-4b7e-8159-f791729db21b)" />
                        </svg>
                        <svg class="hidden md:block absolute bottom-0 left-0 -mb-20 -ml-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                            <defs>
                                <pattern id="7a00fe67-0343-4a3c-8e81-c145097a3ce0" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#7a00fe67-0343-4a3c-8e81-c145097a3ce0)" />
                        </svg>
                        <div class="relative md:bg-white md:p-6">
                            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                                @forelse($links as $link)
                                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                                    <div class="flex-shrink-0">
                                        <img class="h-48 w-full object-cover"
                                             src="{{asset('images/links/'. $link->image)}}"
                                             alt="{{$link->info}}">
                                    </div>
                                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                        <div class="flex-1">
                                            <a href="{{$link->link}}" class="block mt-2" target="_blank">
                                                <p class="text-xl font-semibold text-gray-900">
                                                    {{$link->title}}
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
                </div>
            </div>

        </main>

        <x-footer/>
    </div>
</x-client-layout>

