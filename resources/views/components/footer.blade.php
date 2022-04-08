<footer class="bg-blue-50" aria-labelledby="footerHeading">
    <h2 id="footerHeading" class="sr-only">Footer</h2>
    <div class="max-w-7xl mx-auto pt-16 pb-8 px-4 sm:px-6 lg:pt-24 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                            Меню
                        </h3>
                        <ul class="mt-4 space-y-4">
                            <li>
                                <a href="{{route('index')}}" class="text-base text-gray-500 hover:text-gray-900">
                                    Главная
                                </a>
                            </li>

                            <li>
                                <a href="{{route('help')}}" class="text-base text-gray-500 hover:text-gray-900">
                                    Как помочь
                                </a>
                            </li>

                            <li>
                                <a href="{{route('deals')}}" class="text-base text-gray-500 hover:text-gray-900">
                                    Что мы делаем
                                </a>
                            </li>

                            <li>
                                <a href="{{route('articles')}}" class="text-base text-gray-500 hover:text-gray-900">
                                    Новости
                                </a>
                            </li>

                            <li>
                                <a href="{{route('patients')}}" class="text-base text-gray-500 hover:text-gray-900">
                                    Пациентам
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                            Информация
                        </h3>
                        <ul class="mt-4 space-y-4">
                            <li>
                                <a href="{{route('organisations')}}" class="text-base text-gray-500 hover:text-gray-900">
                                    Организациям
                                </a>
                            </li>

                            <li>
                                <a href="{{route('about')}}" class="text-base text-gray-500 hover:text-gray-900">
                                    О нас
                                </a>
                            </li>

                            <li>
                                <a href="{{route('vacancy')}}" class="text-base text-gray-500 hover:text-gray-900">
                                    Вакансии
                                </a>
                            </li>

                            <li>
                                <a href="{{route('smi')}}" class="text-base text-gray-500 hover:text-gray-900">
                                    СМИ о нас
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>

                    </div>
                    <div class="mt-12 md:mt-0">

                    </div>
                </div>
            </div>
            <div class="mt-12 xl:mt-0">
                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase" id="mailingHeader">
                    Оформите подписку
                </h3>
                <p class="mt-4 text-base text-gray-500">
                    оформите подписку, чтобы получать свежие новости по работе нашей организации
                </p>
                <form class="mt-4 sm:flex sm:max-w-md">
                    <label for="emailAddress" class="sr-only">Email address</label>
                    <input type="email" name="emailAddress" id="emailAddress" autocomplete="email" required class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:placeholder-gray-400" placeholder="Укажите ваш email">
                    <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                        <button id="mailing" class="w-full flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700">
                            Подписаться
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-12 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between lg:mt-16">
            <div class="flex space-x-6 md:order-2">
                <a href="https://vk.com/vmestestomareabilitacia" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Vkontakte</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M13.162 18.994c.609 0 .858-.406.851-.915-.031-1.917.714-2.949 2.059-1.604 1.488 1.488 1.796 2.519 3.603 2.519h3.2c.808 0 1.126-.26 1.126-.668 0-.863-1.421-2.386-2.625-3.504-1.686-1.565-1.765-1.602-.313-3.486 1.801-2.339 4.157-5.336 2.073-5.336h-3.981c-.772 0-.828.435-1.103 1.083-.995 2.347-2.886 5.387-3.604 4.922-.751-.485-.407-2.406-.35-5.261.015-.754.011-1.271-1.141-1.539-.629-.145-1.241-.205-1.809-.205-2.273 0-3.841.953-2.95 1.119 1.571.293 1.42 3.692 1.054 5.16-.638 2.556-3.036-2.024-4.035-4.305-.241-.548-.315-.974-1.175-.974h-3.255c-.492 0-.787.16-.787.516 0 .602 2.96 6.72 5.786 9.77 2.756 2.975 5.48 2.708 7.376 2.708z" />
                    </svg>
                </a>

                <a href="https://ok.ru/group/51931658715215" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Dribbble</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 48 48" aria-hidden="true">
                        <path  fill-rule="evenodd"  d="M 24 2 C 17.925 2 13 6.925 13 13 C 13 19.075 17.925 24 24 24 C 30.075 24 35 19.075 35 13 C 35 6.925 30.075 2 24 2 z M 24 8.9472656 C 26.238 8.9472656 28.052734 10.761 28.052734 13 C 28.052734 15.238 26.238 17.052734 24 17.052734 C 21.762 17.052734 19.947266 15.239 19.947266 13 C 19.947266 10.762 21.761 8.9472656 24 8.9472656 z M 33.185547 24.046875 C 32.402922 24.009469 31.6245 24.203187 30.9375 24.617188 C 26.7875 27.116187 21.2115 27.116187 17.0625 24.617188 C 15.1725 23.478188 12.710266 24.090469 11.572266 25.980469 C 11.021266 26.896469 10.858234 27.970813 11.115234 29.007812 C 11.373234 30.044812 12.019547 30.920703 12.935547 31.470703 C 14.396547 32.350703 15.959516 33.049594 17.603516 33.558594 L 12.009766 39.339844 C 11.300766 40.138844 10.942859 41.165422 11.005859 42.232422 C 11.068859 43.299422 11.542797 44.276328 12.341797 44.986328 C 13.105797 45.665328 14.060812 45.998047 15.007812 45.998047 C 16.103813 45.998047 17.189938 45.552547 17.960938 44.685547 L 24 38.443359 L 30.013672 44.652344 C 30.771672 45.506344 31.861906 45.994141 33.003906 45.994141 C 33.982906 45.994141 34.926156 45.635375 35.660156 44.984375 C 37.308156 43.519375 37.458844 40.986641 35.964844 39.306641 L 30.396484 33.558594 C 32.040484 33.048594 33.605406 32.34875 35.066406 31.46875 C 35.981406 30.91775 36.627766 30.044813 36.884766 29.007812 C 37.141766 27.970813 36.978734 26.895469 36.427734 25.980469 C 35.876734 25.065469 35.003797 24.419109 33.966797 24.162109 C 33.707797 24.097609 33.446422 24.059344 33.185547 24.046875 z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
                &copy; АНО «Стома Вместе». Все права защищены.
            </p>
        </div>
    </div>
</footer>
