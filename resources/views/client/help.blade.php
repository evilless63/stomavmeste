<x-client-layout :entity="$entity">
    <div class="bg-white">
        <main>
            <div class="mt-24">
                <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                    <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                        <div>
                            <div class="mt-6">
                                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                                    Помощь
                                </h2>
                                <p class="mt-4 text-lg text-gray-500">
                                    Когда индивид сталкивается с необходимостью выведения стомы, это может очень дестабилизировать, выбить из привычного уклада жизни. Человек сталкивается с неизвестностью, страхами, финансовыми и другими сложностями. Справиться с таким в одиночку очень сложно. Хорошо, когда есть рядом близкие люди, друзья, но они так же сталкиваются с этим впервые и не знают, что делать. В такие моменты стомированному очень важно узнать, что он не одинок и есть люди, которые преодолели подобное. А еще важнее знать, что есть люди готовые помочь. Ощущение единения очень помогает морально и эмоционально, даёт ресурс справиться со сложной ситуацией. Мы с гордостью можем утверждать, что «Стома Вместе» является таким ресурсным пространством!
                                </p>
                                <div class="mt-6">
                                    <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                                        Сделать пожертование
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                        <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                            <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="{{asset('images/help.jpg')}}" alt="Customer profile user interface">
                        </div>
                    </div>
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
