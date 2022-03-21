<x-client-layout :entity="$entity">
    <div class="bg-white">
        <main>
{{--            <!-- Hero section -->--}}
{{--            <div class="relative">--}}
{{--                <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100"></div>--}}
{{--                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--                <div class="mx-auto sm:px-6 lg:px-8">--}}
{{--                    <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">--}}
{{--                        <div class="absolute inset-0">--}}
{{--                            <img class="h-full w-full object-cover" src="{{asset('images/header-slider.jpg')}}" alt="People working on laptops">--}}
{{--                            <div class="absolute inset-0 bg-gradient-to-r from-purple-800 to-indigo-700 mix-blend-multiply"></div>--}}
{{--                        </div>--}}
{{--                        <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">--}}
{{--                            <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">--}}
{{--                                <span class="block text-white">Тут будет слайдер)))</span>--}}
{{--                                <span class="block text-indigo-200">Тут будет слайдер)))</span>--}}
{{--                            </h1>--}}
{{--                            <p class="mt-6 max-w-lg mx-auto text-center text-xl text-indigo-200 sm:max-w-3xl">--}}
{{--                                Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.--}}
{{--                            </p>--}}
{{--                            <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">--}}
{{--                                <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">--}}
{{--                                    <a href="#" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50 sm:px-8">--}}
{{--                                        Сделать пожертование--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <header>
                <div class="owl-carousel owl-theme">
                    @foreach($banners as $banner)
                    <div class="item">
                        <img src="{{asset('images/banners/'.$banner->image)}}" alt="{{$banner->title}}">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line"></div>
                                    <h2>{{ $banner->title_description }}</h2>
                                    <h1>{{$banner->title}}</h1>
                                    @if($banner->help_link)
                                    <h4>
                                        <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                                            Помочь
                                        </a>
                                    </h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </header>

            <!-- Logo Cloud -->
            <div class="bg-white">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                        <div>
                            <h2 class="text-3xl font-extrabold text-gray-900">
                                Нас поддерживают
                            </h2>
                            <p class="mt-3 max-w-3xl text-lg text-gray-500">
                               Многие компании откликнулись на наш призыв о помощи, вот некоторые из них
                            </p>
                        </div>
                        <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Workcation">
                            </div>
                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
                            </div>
                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
                            </div>
                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel">
                            </div>
                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                            </div>
                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/statamic-logo-gray-400.svg" alt="Statamic">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alternating Feature Sections -->
            <div class="relative pt-16 overflow-hidden">
                <div aria-hidden="true" class="absolute inset-x-0 top-0 h-48 bg-gradient-to-b from-gray-100"></div>
                <div class="relative">
                    <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                        <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                            <div>
                                <div class="mt-6">
                                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                                        Промо текст
                                    </h2>
                                    <p class="mt-4 text-lg text-gray-500">
                                        Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.
                                    </p>
                                    <div class="mt-6">
                                        <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                                            Помочь
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8 border-t border-gray-200 pt-6">
                                <blockquote>
                                    <div>
                                        <p class="text-base text-gray-500">
                                            &ldquo;Cras velit quis eros eget rhoncus lacus ultrices sed diam. Sit orci risus aenean curabitur donec aliquet. Mi venenatis in euismod ut.&rdquo;
                                        </p>
                                    </div>
                                    <footer class="mt-3">
                                        <div class="flex items-center space-x-3">
                                            <div class="flex-shrink-0">
                                                <img class="h-6 w-6 rounded-full" src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                                            </div>
                                            <div class="text-base font-medium text-gray-700">
                                                Лидия ивановна, волонтер
                                            </div>
                                        </div>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="mt-12 sm:mt-16 lg:mt-0">
                            <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                                <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="{{asset('images/bg.jpg')}}" alt="Inbox user interface">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats section -->
                <div class="relative bg-gray-900 mt-24">
                    <div class="h-80 absolute inset-x-0 bottom-0 xl:top-0 xl:h-full">
                        <div class="h-full w-full xl:grid xl:grid-cols-2">
                            <div class="h-full xl:relative xl:col-start-2">
                                <img class="h-full w-full object-cover opacity-25 xl:absolute xl:inset-0" src="{{asset('images/foto-9.jpg')}}" alt="People working on laptops">
                                <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-gray-900 xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-cols-2 xl:grid-flow-col-dense xl:gap-x-8">
                        <div class="relative pt-12 pb-64 sm:pt-24 sm:pb-64 xl:col-start-1 xl:pb-24">
                            <h2 class="text-sm font-semibold tracking-wide uppercase">
                                <span class="bg-gradient-to-r from-purple-300 to-indigo-300 bg-clip-text text-transparent">Промо (метрика достижений)</span>
                            </h2>
                            <p class="mt-3 text-3xl font-extrabold text-white">Rhoncus sagittis risus arcu erat lectu</p>
                            <p class="mt-5 text-lg text-gray-300">Rhoncus sagittis risus arcu erat lectus bibendum. Ut in adipiscing quis in viverra tristique sem. Ornare feugiat viverra eleifend fusce orci in quis amet. Sit in et vitae tortor, massa. Dapibus laoreet amet lacus nibh integer quis. Eu vulputate diam sit tellus quis at.</p>
                            <div class="mt-12 grid grid-cols-1 gap-y-12 gap-x-6 sm:grid-cols-2">
                                <p>
                                    <span class="block text-2xl font-bold text-white">80+</span>
                                    <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Человек</span>  опрошенных имеют пожизненную стому</span>
                                </p>

                                <p>
                                    <span class="block text-2xl font-bold text-white">25K+</span>
                                    <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Человек</span> lacus nibh integer quis.</span>
                                </p>

                                <p>
                                    <span class="block text-2xl font-bold text-white">98%</span>
                                    <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Человек</span> laoreet amet lacus nibh integer quis.</span>
                                </p>

                                <p>
                                    <span class="block text-2xl font-bold text-white">12M+</span>
                                    <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Человек</span> lacus nibh integer quis.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-24">
                    <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                        <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                            <div>
                                <div class="mt-6">
                                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                                        Промо текст
                                    </h2>
                                    <p class="mt-4 text-lg text-gray-500">
                                        Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.
                                    </p>
                                    <div class="mt-6">
                                        <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                                            Помочь
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                            <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                                <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="{{asset('images/bg.jpg')}}" alt="Customer profile user interface">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Gradient Feature Section -->
            <div class="bg-gradient-to-r from-blue-50-800 to-indigo-400">
                <div class="max-w-4xl mx-auto px-4 py-16 sm:px-6 sm:pt-20 sm:pb-24 lg:max-w-7xl lg:pt-24 lg:px-8">
                    <h2 class="text-3xl font-extrabold text-black tracking-tight">
                        Новости и проекты
                    </h2>

                        <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                            @forelse($articles as $article)
                            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                                <div class="flex-shrink-0">
                                    <img class="h-48 w-full object-cover"
                                         src="{{asset('images/articles/'.$article->image)}}"
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
                            @empty
                                <h3>
                                    <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900">Новостей пока что нет</span>
                                </h3>
                            @endforelse
                        </div>
                    <a href="{{route('articles')}}"  class="mt-12 group relative w-full flex justify-center py-2 px-4 border border-transparent text-lg font-bold rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Смотреть все новости
                    </a>
                </div>
            </div>



            <!-- CTA Section -->

        </main>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script><script  src="./script.js"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                dots:false,
                nav:true,
                mouseDrag:false,
                autoplay:true,
                animateOut: 'slideOutUp',
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
        </script>
        <x-footer/>
    </div>
</x-client-layout>
