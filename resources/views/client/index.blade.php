<x-client-layout :entity="$entity">
    <div class="bg-white">
        <main>
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
                                Статистика
                            </h2>
                            <p class="mt-3 max-w-3xl text-lg text-gray-500">
                                На протяжении последних 2х лет мы проводили опросы, и вот небольшая статистика по ним:
                            </p>
                        </div>
                        <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <p>
                                    <span class="block text-2xl font-bold text-gray-900">60%</span>
                                    <span class="mt-1 block text-base text-gray-900"><span class="font-medium text-gray-900">Опрошенных</span> имеют пожизненную стому.</span>
                                </p>
                            </div>
                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <p>
                                    <span class="block text-2xl font-bold text-gray-900">76%</span>
                                    <span class="mt-1 block text-base text-gray-900"><span class="font-medium text-gray-900">Опрошенных</span> сталкивались с проблемами после операции.</span>
                                </p>
                            </div>
                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <p>
                                    <span class="block text-2xl font-bold text-gray-900">31%</span>
                                    <span class="mt-1 block text-base text-gray-900"><span class="font-medium text-gray-900">Опрошенных</span> стомированных были проинформированы куда обращаться по вопросам реабилитации.</span>
                                </p>
                            </div>
                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <p>
                                    <span class="block text-2xl font-bold text-gray-900">47%</span>
                                    <span class="mt-1 block text-base text-gray-900"><span class="font-medium text-gray-900">Опрошенных</span> признались, что стома влияет на психологическое состояние.</span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Alternating Feature Sections -->
            <div class="relative pt-16 overflow-hidden">
                <div aria-hidden="true" class="absolute inset-x-0 top-0 h-48 bg-gradient-to-b from-gray-100"></div>
                <div class="relative">
                    <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense">
                        <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                            <div>
                                <div class="mt-6">
                                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                                        КАК ВСЕ НАЧИНАЛОСЬ
                                    </h2>
                                    <h3 class="text-3xl font-extrabold tracking-tight text-gray-900">Создание «Стома Вместе»</h3>
                                    <p class="mt-4 text-lg text-gray-500">
                                        В, теперь уже далеком, 2012 году наш Исполнительный директор столкнулась с осложнениями вокруг илеостомы. Куда только не обращалась за помощью, но оказалось, что найти помощь и поддержку с подобным диагнозом не так-то просто. В итоге она попадает в ФГБУ «НМИЦ колопроктологии имени А.Н. Рыжих», где был кабинет стомированных, там ей и оказали квалифицированную помощь, а так же подобрали технические средства реабилитации. После операции по закрытию стомы Татьяна Борисова привезла в Самару новинки технических средств, которых не было в Самаре, для стомированных, передала их в Клиники СамГМУ, а после, не долго думая, поставила цель - создать доступную реабилитацию для стомированных. Так, с 2013 года, она с волонтером Надеждой Блохиной начали ходить по палатам Клиник, и рассказывать об уходе за стомой, раздавая брошюры и средства ухода за стомой на первое время, бесплатно. В 2016 году, благодаря помощи волонтеров: Дмитрия Кайорова, Надежды Блохиной и Милы Кадымовой, появился проект "Стома Вместе", направленный на информационную и психологическую поддержку стомированных. Проект существует и развивается по сей день, так же не без волонтерской помощи.
                                    </p>
                                    <div class="mt-6">
{{--                                        <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">--}}
{{--                                            Помочь--}}
{{--                                        </a>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8 border-t border-gray-200 pt-6">
                                <blockquote>
                                    <div>
                                        <p class="text-base text-gray-500">
                                            &ldquo;Стома – не приговор, а стимул к новой жизни&rdquo;
                                        </p>
                                    </div>
                                    <footer class="mt-3">
                                        <div class="flex items-center space-x-3">
{{--                                            <div class="flex-shrink-0">--}}
{{--                                                <img class="h-6 w-6 rounded-full" src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">--}}
{{--                                            </div>--}}
                                            <div class="text-base font-medium text-gray-700">
                                                Исполнительный директор – Татьяна Борисова
                                            </div>
                                        </div>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="mt-12 sm:mt-16 lg:mt-0">
                            <div class="pl-4 lg:-mr-48 mr-4 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                                <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:w-auto lg:max-w-none" src="{{asset('images/promo-1.jpg')}}" alt="Inbox user interface">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats section -->
                <div class="relative bg-gray-900 mt-24">
                    <div class="h-80 absolute inset-x-0 bottom-0 xl:top-0 xl:h-full">
                        <div class="h-full w-full xl:grid xl:grid-cols-2">
                            <div class="h-full xl:relative xl:col-start-2">
                                <img class=" w-full object-cover opacity-25 xl:absolute xl:inset-0" src="{{asset('images/metrika.jpg')}}" alt="People working on laptops">
                                <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-gray-900 xl:inset-y-0 xl:left-0 xl:w-32 xl:bg-gradient-to-r"></div>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-cols-2 xl:grid-flow-col-dense xl:gap-x-8">
                        <div class="relative pt-12 pb-64 sm:pt-24 sm:pb-64 xl:col-start-1 xl:pb-24">
                            <h2 class="text-sm font-semibold tracking-wide uppercase">
                                <span class="bg-gradient-to-r from-purple-300 to-indigo-300 bg-clip-text text-transparent">Метрика достижений</span>
                            </h2>
                            <p class="mt-3 text-3xl font-extrabold text-white">Метрика достижений</p>
                            <p class="mt-5 text-lg text-gray-300">Взаимопомощь - это одна из главных составляющих хорошей реабилитации людей после сложной операции на жизненно важных органах.</p>
                            <div class="mt-12 grid grid-cols-1 gap-y-12 gap-x-6 sm:grid-cols-2">
                                <p>
                                    <span class="block text-2xl font-bold text-white">457+</span>
                                    <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Человек</span> получили специализированные средства бесплатно.</span>
                                </p>

                                <p>
                                    <span class="block text-2xl font-bold text-white">3285+</span>
                                    <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Рекомендаций</span> было сделано в чатах поддержки.</span>
                                </p>

                                <p>
                                    <span class="block text-2xl font-bold text-white">42+</span>
                                    <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Региона</span> - география обращений за помощью.</span>
                                </p>

                                <p>
                                    <span class="block text-2xl font-bold text-white">2+</span>
                                    <span class="mt-1 block text-base text-gray-300"><span class="font-medium text-white">Человека</span> в данный момент получают помощь профессионального психолога.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-24">
                    <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense">
                        <div class="px-4 max-w-xl mx-auto sm:px-6 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                            <div>
                                <div class="">
                                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                                        Помогать легко, если знаешь чем и как помочь
                                    </h2>
                                    <p class="mt-4 text-lg text-gray-500">
                                        Наш проект создан не просто так, ведь мы прекрасно знаем, что стомированные люди очень нуждаются в помощи. Особенно в первое время после операции. Мир переворачивается с ног на голову, учишься жить иначе. Помощь, зачастую, нужна абсолютно любая, будь-то совет людей, кто все это уже прошел, и научился жить по-новому, радуясь каждому дню, будь-то подсказки по уходу за стомой, или помощь в приобретении средств реабилитации.
                                    </p>
                                    <p class="mt-4 text-lg text-gray-500">
                                        К нам обращаются с абсолютно разными вопросами, и не только стомированные пациенты, но и их родственники. Мы всегда рады помочь, по мере возможности!
                                    </p>
                                    <p class="mt-4 text-lg text-gray-500">
                                        Если вы стомированный и нуждаетесь в помощи, то можете написать ниже свои координаты.
                                    </p>
                                    <div class="mt-6">
{{--                                        <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">--}}
{{--                                            Получить помощь--}}
{{--                                        </a>--}}
                                        <div>
                                            <button id="mail-button" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                                                <span>Получить помощь</span>
                                            </button>

                                            <div id="mail-block" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                    <div
                                                         class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40 " id="mailblock-background" aria-hidden="true"
                                                    ></div>

                                                    <div
                                                         class="inline-block w-full max-w-xl p-8 mt-20 mb-40 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
                                                    >
                                                        <div class="flex items-center justify-between space-x-4">
                                                            <h1 class="text-xl font-medium text-gray-800 ">Получить помощь</h1>

                                                            <button  id="close-mail-button" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                </svg>
                                                            </button>
                                                        </div>

                                                        <p class="mt-2 text-sm text-gray-500 " id="helpResult">
                                                            Вы можете написать нам и вместе мы найдем решение
                                                        </p>

                                                        <form class="mt-2">
                                                            <div>
                                                                <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Как к вам обращаться</label>
                                                                <input required id="helpName" placeholder="Фамилия Имя" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>

                                                            <div class="mt-4">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Ваши контакты, как с вами связаться</label>
                                                                <input required id="helpPhone" placeholder="Телефон или другой способ связи" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>

                                                            <div class="mt-4">
                                                                <label for="about" class="block text-sm font-medium text-gray-700">Опишите вашу ситуацию</label>
                                                                <div class="mt-1">
                                                                    <textarea required id="helpAbout" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Начните писать..."></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="flex justify-end mt-6">
                                                                <button type="button" id="close-mail-button-send" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                                    Отправить письмо
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                            <div class="lg:pr-4 lg:ml-20 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                                <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:w-auto" src="{{asset('images/contacts_index.jpg')}}" alt="Customer profile user interface">
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
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

        <script>
            // Grab HTML Elements
            const mailBtn= document.getElementById("mail-button");
            const closeMailBtn= document.getElementById("close-mail-button")
            const mailBlock = document.getElementById("mail-block");
            const resultBlock = document.getElementById("helpResult");
            const backgroundBlock = document.getElementById("mailblock-background");

            // const sendBtn = document.getElementById("close-mail-button-send")

            // Add Event Listeners
            mailBtn.addEventListener("click", () => {
                mailBlock.classList.toggle("hidden");
            });
            backgroundBlock.addEventListener("click", () => {
                mailBlock.classList.toggle("hidden");
            });
            closeMailBtn.addEventListener("click", () => {
                mailBlock.classList.toggle("hidden");
                resultBlock.innerHTML = 'Вы можете написать нам и вместе мы найдем решение'
            });
            // sendBtn.addEventListener("click", () => {
            //     mailBlock.classList.toggle("hidden");
            // })
        </script>
        <x-footer/>
    </div>
</x-client-layout>
