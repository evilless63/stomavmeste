<x-client-layout :entity="$entity">
    <div class="bg-white">
        <main>


            <div class="py-16 xl:py-36 px-4 sm:px-6 lg:px-8 bg-white overflow-hidden">
                <div class="max-w-max lg:max-w-7xl mx-auto">
                    <div class="relative z-10 mb-8 md:mb-2 md:px-6">
                        <div class="text-base max-w-prose lg:max-w-none">
                            <h2 class="leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Вакансии</h2>
                            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Приглашаем стать частью команды «Стома Вместе»!</p>
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
                            @forelse($vacancies as $vacancy)
                                <div class="flex @if($loop->iteration > 1) mt-12 @endif">
                                    <div class="mr-4 flex-shrink-0 self-center">
                                        <svg class="h-16 w-16 border border-gray-300 bg-white text-gray-300" preserveAspectRatio="none" stroke="currentColor" fill="none" viewBox="0 0 200 200" aria-hidden="true">
                                            <path vector-effect="non-scaling-stroke" stroke-width="1" 	d="M429.248,141.439C429.248,63.33,365.985,0,287.808,0c-78.109,0-141.439,63.33-141.439,141.439
			c0,78.11,63.33,141.439,141.439,141.439C365.988,282.878,429.248,219.549,429.248,141.439z M181.727,144.499
			c0,0-4.079-40.12,24.82-70.72c20.34,20.389,81.261,70.72,187.342,70.72c0,58.498-47.586,106.081-106.081,106.081
			S181.727,202.994,181.727,144.499z"
                                             />

                                            <path d="M45.049,391.68v62.559v80.919c0,22.365,18.136,40.459,40.459,40.459h404.6c22.365,0,40.459-18.097,40.459-40.459v-80.919
			V391.68c0-44.688-36.193-80.919-80.919-80.919H377.91c-5.07,0-11.46,3.422-14.271,7.639l-70.735,99.982
			c-2.812,4.22-7.372,4.22-10.184,0l-70.738-99.986c-2.812-4.22-9.202-7.638-14.272-7.638h-71.742
			C81.319,310.758,45.049,346.991,45.049,391.68z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold">{{$vacancy->title}}</h4>
                                        <p class="mt-1">
                                            {{$vacancy->about}}
                                        </p>
                                    </div>
                                </div>
                            @empty
                                <h3>
                                    <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Вакансий пока что нет</span>
                                </h3>
                            @endforelse
                            <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mt-12">
                                <p>Подробное описание и условия работы по телефону <span class="font-bold">+7-917-810-56-22</span> (Viber, WhatsApp)</p>
                                <p>Резюме можно отправлять на электронную почту c пометкой «Резюме» <span class="font-bold">vmestesmr@gmail.com</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <x-footer/>
    </div>
</x-client-layout>

