<x-guest-layout>
    <section class="relative">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-100 to-white pointer-events-none dark:hidden"
             aria-hidden="true"></div>
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                <div class="max-w-3xl mx-auto text-center">
                    <div class="max-w-2xl mx-auto md:px-4">
                        <div class="mb-10">
                            <div class="flex flex-wrap justify-center -m-1">
                                @foreach($topics as $topic)
                                    <a href="{{route('topic', $topic->id)}}"
                                        class="font-medium px-4 py-2 bg-white hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 shadow transition duration-150 ease-in-out rounded-full inline-flex items-center justify-center m-1"
                                        :class="{ 'bg-teal-500 hover:bg-teal-500 dark:bg-teal-600 dark:hover:bg-teal-600 dark:bg-opacity-25 dark:hover:bg-opacity-25': category === '1' }"
                                        @click="category = '1'"
                                    >
                                    <span class="transition duration-150 ease-in-out"
                                          :class="category === '1' ? 'text-white dark:text-teal-400' : 'text-gray-600 dark:text-gray-300'">{{ucfirst($topic->title)}}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative border-t border-transparent dark:border-gray-800">
        <div
            class="absolute inset-0 opacity-25 bg-gradient-to-b from-gray-800 to-gray-900 pointer-events-none hidden dark:block"
            aria-hidden="true"></div>
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12">
                <div data-aos="fade-up" data-aos-delay="450">
                    @foreach($news as $new)
                        <article class="mb-5">
                            <div
                                class="flex pr-6 py-5 bg-white dark:bg-gray-800 divide-x divide-gray-200 dark:divide-gray-700 shadow-2xl">

                                <div class="pl-6">
                                    <header>
                                        <h3 class="font-red-hat-display text-xl tracking-tighter mb-1">
                                            <a href="#0">{{$new->title}}</a>
                                        </h3>
                                    </header>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        {{$new->excerpt}}
                                    </p>
                                    <a class="inline-flex items-center font-medium text-teal-500 hover:underline mt-2"
                                       href="#0">
                                        <span>Leer Más</span>
                                        <svg class="w-3 h-3 flex-shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-current"
                                                  d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z"/>
                                        </svg>
                                    </a>
                                    <footer class="text-sm flex items-center mt-3">
                                        <div class="text-gray-500">
                                            <span>Escrito por </span>
                                            <a class="font-medium text-gray-800 dark:text-gray-400 hover:underline"
                                               target="_blank"
                                               href="{{$new->link}}">{{$new->author}}</a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </article>
                    @endforeach

                    <nav class="flex justify-center sm:justify-between mt-12">
                    <span class="hidden sm:inline-flex items-center font-medium text-gray-400 dark:text-gray-500"
                          href="#0">
                        <svg class="w-3 h-3 flex-shrink-0 mt-px mr-2" viewBox="0 0 12 12"
                             xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current"
                                  d="M5.091 11L0 5.909 5.091.818l.875.875-3.602 3.591h9.329v1.25H2.364l3.602 3.602z"/>
                        </svg>
                        <span>Previous</span>
                    </span>
                        <ul class="flex">
                            <li class="mx-1">
                                <a class="inline-flex text-teal-500 px-1 border-b border-teal-500 transition duration-150 ease-in-out"
                                   href="#0">1</a>
                            </li>
                            <li class="mx-1">
                                <a class="inline-flex text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 px-1 transition duration-150 ease-in-out"
                                   href="#0">2</a>
                            </li>
                            <li class="mx-1">
                                <a class="inline-flex text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 px-1 transition duration-150 ease-in-out"
                                   href="#0">3</a>
                            </li>
                            <li class="mx-1">
                                <span class="inline-flex text-gray-600 dark:text-gray-400" href="#0">…</span>
                            </li>
                            <li class="mx-1">
                                <a class="inline-flex text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 px-1 transition duration-150 ease-in-out"
                                   href="#0">7</a>
                            </li>
                            <li class="mx-1">
                                <a class="inline-flex text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 px-1 transition duration-150 ease-in-out"
                                   href="#0">8</a>
                            </li>
                            <li class="mx-1">
                                <a class="inline-flex text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 px-1 transition duration-150 ease-in-out"
                                   href="#0">9</a>
                            </li>
                        </ul>
                        <a class="hidden sm:inline-flex items-center font-medium text-teal-500 hover:underline"
                           href="#0">
                            <span>Next</span>
                            <svg class="w-3 h-3 flex-shrink-0 mt-px ml-2" viewBox="0 0 12 12"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-current"
                                      d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z"/>
                            </svg>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
