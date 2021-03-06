<x-client-layout :entity="$entity">
    <div class="bg-white">
        <main>
            <div class="relative py-16 bg-white overflow-hidden">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-4">
                        <li>
                            <div>
                                <a href="{{route('index')}}" class="text-gray-400 hover:text-gray-500">
                                    <!-- Heroicon name: solid/home -->
                                    <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                    </svg>
                                    <span class="sr-only">Главная</span>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center">
                                <!-- Heroicon name: solid/chevron-right -->
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                                @if($entity->enum == 'NEWS')
                                <a href="{{route('articles')}}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Новости</a>
                                @else
                                <a href="{{route('patients')}}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Пациентам</a>
                                @endif
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center">
                                <!-- Heroicon name: solid/chevron-right -->
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                                <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">{{$entity->title}}</a>
                            </div>
                        </li>
                    </ol>
                </nav>
                <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
                    <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
                        <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                            <defs>
                                <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
                        </svg>
                        <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                            <defs>
                                <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
                        </svg>
                        <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                            <defs>
                                <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
                        </svg>
                    </div>
                </div>
                <div class="relative px-4 sm:px-6 lg:px-8">
                    <div class="text-lg max-w-prose mx-auto">
                        <h1>
                            <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900">{{$entity->title}}</span>
                        </h1>
{{--                        <p class="mt-8 text-xl text-gray-500 leading-8"></p>--}}
                    </div>
                    <div class="mt-6 mt-6 text-gray-500 mx-auto max-w-prose mx-auto">
                        <figure>
                            <img class="w-full rounded-lg" src="{{asset('images/articles/'. $entity->image )}}" alt="" width="1310" height="873">
                        </figure>

                        {!! $entity->description !!}
                    </div>
                </div>
            </div>
        </main>

        <x-footer/>
    </div>
</x-client-layout>

