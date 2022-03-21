<x-client-layout :entity="$entity">
    <div class="bg-white">
        <main>
            <div class="relative bg-white">
                <div class="lg:absolute lg:inset-0">
                    <div class="lg:absolute lg:inset-y-0 lg:left-0 lg:w-1/2">
                        <img class="h-56 w-full object-cover lg:absolute lg:h-full" src="{{asset('images/foto-9.jpg')}}" alt="">
                    </div>
                </div>
                <div class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
                    <div class="lg:col-start-2 lg:pl-8">
                        <div class="text-base max-w-prose mx-auto lg:max-w-lg lg:ml-auto lg:mr-0">

                            <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900">Что мы делаем</h3>
                            <h2 class="leading-6 mt-8 text-blue-600 font-semibold tracking-wide uppercase">Помощь техническими средствами реабилитации</h2>
                            <p class="mt-4 text-lg text-gray-500">Мы рады принять технические средства реабилитации и уходовые средства для передачи их нуждающимся. Если у вас скапливается экономия средств делитесь ими с нуждающимися. Если вам не подошли средства вы тоже их можете передать в «Стома Вместе» и мы обязательно найдем кому их передать.</p>
                            <h3 class="leading-6 mt-8 text-blue-600 font-semibold tracking-wide uppercase">Формируем толерантное отношение общества</h3>
                            <div class="mt-4 prose prose-indigo text-gray-500">
                                <p>Люди со стомой с непростой судьбой и тяжелыми заболеваниями, рассказывают о своем преодолении, о целях и своей повседневности, мотивируя слушателей не сдаваться и быть благодарными за все, что у них есть! Мы меняем мир «Вместе», ты с нами?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <x-footer/>
    </div>
</x-client-layout>

