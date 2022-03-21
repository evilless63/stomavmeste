<x-client-layout :entity="$entity">
    <div class="bg-white">
        <main>
            <!-- Hero section -->
            <div class="relative">
                <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
                    <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
                            <span class="block xl:inline">Помочь</span>
                            <span class="block text-blue-600 xl:inline">сейчас</span>
                        </h1>
                        <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
                            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
                        </p>
                        <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Сделать пожертование
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
                    <img class="absolute inset-0 w-full h-full object-cover" src="{{asset('images/foto-9.jpg')}}" alt="">
                </div>
            </div>

            <!-- CTA Section -->
            <div class="bg-white overflow-hidden">
                <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                    <div class="hidden lg:block bg-blue-50 absolute top-0 bottom-0 left-3/4 w-screen"></div>
                    <div class="mx-auto text-base max-w-prose lg:grid lg:grid-cols-2 lg:gap-8 lg:max-w-none">
                        <div>
                            <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900">Стать другом Стома Вместе</h3>
                        </div>
                    </div>
                    <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
                        <div class="relative lg:row-start-1 lg:col-start-2">
                            <svg class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                                <defs>
                                    <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
                            </svg>
                            <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
                                <figure>
                                    <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                                        <img class="rounded-lg shadow-lg object-cover object-center" src="https://images.unsplash.com/photo-1546913199-55e06682967e?ixlib=rb-1.2.1&auto=format&fit=crop&crop=focalpoint&fp-x=.735&fp-y=.55&w=1184&h=1376&q=80" alt="Whitney leaning against a railing on a downtown street" width="1184" height="1376">
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="mt-8 lg:mt-0">
                            <div class="text-base max-w-prose mx-auto lg:max-w-none">
                                <p class="text-lg text-gray-500">В благотворительности важна ответственность каждого человека. Поэтому так значимы люди, которые помогают нуждающимся не от имени организации, а от собственной души.</p>
                            </div>
                            <div class="mt-5 prose prose-indigo text-gray-500 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1">
                                <p>Друг НКО – это человек, привлекающий средства на проекты «Стома Вместе».</p>
                            </div>
                            <div class="mt-5 prose prose-indigo text-gray-500 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1">
                                <p>Вы можете повлиять на количество помощи людей со стомой, обеспечить их техническими средствами реабилитации, увеличить количество консультаций у психолога, помочь создать и напечатать информационную брошюру.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <x-footer/>
    </div>
</x-client-layout>
