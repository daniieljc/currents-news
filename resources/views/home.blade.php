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
                                <button
                                    class="font-medium px-4 py-2 bg-white hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 shadow transition duration-150 ease-in-out rounded-full inline-flex items-center justify-center m-1"
                                    @click="category = ''"
                                >
                                    <svg class="w-4 h-4 flex-shrink-0 mr-2" viewBox="0 0 16 16"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-current text-gray-400"
                                              d="M11 7H1a1 1 0 000 2h10v3l5-4-5-4v3zM8 3H1a1 1 0 010-2h7a1 1 0 010 2zM8 15H1a1 1 0 010-2h7a1 1 0 010 2z"/>
                                    </svg>
                                    <span class="text-gray-600 dark:text-gray-300 transition duration-150 ease-in-out">View All</span>
                                </button>
                                <button
                                    class="font-medium px-4 py-2 bg-white hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 shadow transition duration-150 ease-in-out rounded-full inline-flex items-center justify-center m-1"
                                    :class="{ 'bg-teal-500 hover:bg-teal-500 dark:bg-teal-600 dark:hover:bg-teal-600 dark:bg-opacity-25 dark:hover:bg-opacity-25': category === '1' }"
                                    @click="category = '1'"
                                >
                                    <svg class="w-4 h-4 flex-shrink-0 mr-2" viewBox="0 0 16 16"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-current"
                                              :class="category === '1' ? 'text-teal-200 dark:text-teal-400' : 'text-teal-500'"
                                              d="M5 16H4a4 4 0 01-4-4v-1h2v1a2 2 0 002 2h1v2zM13 10h-1.586l-1.207-1.207L14.37 4.63a2.121 2.121 0 00-3-3L7.207 5.793 5.99 4.576 5.98 3.02 3.038.079 0 3.117 3 6h1.586l1.207 1.207L4 9l3 3 1.793-1.793L10 11.414V13l3.01 3.01 2.98-2.979L13 10z"/>
                                    </svg>
                                    <span class="transition duration-150 ease-in-out"
                                          :class="category === '1' ? 'text-white dark:text-teal-400' : 'text-gray-600 dark:text-gray-300'">Getting Started</span>
                                </button>
                                <button
                                    class="font-medium px-4 py-2 bg-white hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 shadow transition duration-150 ease-in-out rounded-full inline-flex items-center justify-center m-1"
                                    :class="{ 'bg-purple-500 hover:bg-purple-500 dark:bg-purple-600 dark:hover:bg-purple-600 dark:bg-opacity-25 dark:hover:bg-opacity-25': category === '2' }"
                                    @click="category = '2'"
                                >
                                    <svg class="w-4 h-4 flex-shrink-0 mr-2" viewBox="0 0 16 16"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-current"
                                              :class="category === '2' ? 'text-purple-200 dark:text-purple-400' : 'text-purple-500'"
                                              d="M12.071 0L15 2.929v4.142L12.071 10H12V7.101L7.9 3H5v-.071L7.929 0h4.142zm-5 5L10 7.929v4.142L7.071 15H2.929L0 12.071V7.929L2.929 5h4.142z"/>
                                    </svg>
                                    <span class="transition duration-150 ease-in-out"
                                          :class="category === '2' ? 'text-white dark:text-purple-400' : 'text-gray-600 dark:text-gray-300'">Layout & Design</span>
                                </button>
                                <button
                                    class="font-medium px-4 py-2 bg-white hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 shadow transition duration-150 ease-in-out rounded-full inline-flex items-center justify-center m-1"
                                    :class="{ 'bg-indigo-500 hover:bg-indigo-500 dark:bg-indigo-600 dark:hover:bg-indigo-600 dark:bg-opacity-25 dark:hover:bg-opacity-25': category === '3' }"
                                    @click="category = '3'"
                                >
                                    <svg class="w-4 h-4 flex-shrink-0 mr-2" viewBox="0 0 16 16"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-current"
                                              :class="category === '3' ? 'text-indigo-200 dark:text-indigo-400' : 'text-indigo-500'"
                                              d="M1 0h8a1 1 0 011 1v10a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm14.124 4.085v-.001a1 1 0 01.868 1.116l-1.243 9.932a1 1 0 01-1.117.868l-7.938-1 .248-1.988 6.946.871.995-7.938-2.007-.251.248-1.984 3 .375z"/>
                                    </svg>
                                    <span class="transition duration-150 ease-in-out"
                                          :class="category === '3' ? 'text-white dark:text-indigo-400' : 'text-gray-600 dark:text-gray-300'">Templates</span>
                                </button>
                                <button
                                    class="font-medium px-4 py-2 bg-white hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 shadow transition duration-150 ease-in-out rounded-full inline-flex items-center justify-center m-1"
                                    :class="{ 'bg-pink-500 hover:bg-pink-500 dark:bg-pink-600 dark:hover:bg-pink-600 dark:bg-opacity-25 dark:hover:bg-opacity-25': category === '4' }"
                                    @click="category = '4'"
                                >
                                    <svg class="w-4 h-4 flex-shrink-0 mr-2" viewBox="0 0 16 16"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-current"
                                              :class="category === '4' ? 'text-pink-200 dark:text-pink-400' : 'text-pink-500'"
                                              d="M13.172 5.178l-2.39-2.39 2.39-2.39C12.674.1 12.076 0 11.479 0a4.462 4.462 0 00-4.481 4.48c0 .499.1.897.199 1.395l-6.572 4.88c-.797.597-.797 1.692-.2 2.389l2.291 2.39c.697.697 1.792.597 2.39-.2l4.88-6.571c.497.1.995.199 1.493.199 2.49 0 4.48-1.992 4.48-4.481 0-.598-.099-1.195-.298-1.693l-2.49 2.39z"/>
                                    </svg>
                                    <span class="transition duration-150 ease-in-out"
                                          :class="category === '4' ? 'text-white dark:text-pink-400' : 'text-gray-600 dark:text-gray-300'">Project Settings</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative border-t border-transparent dark:border-gray-800">
        <!-- Background gradient (dark version only) -->
        <div
            class="absolute inset-0 opacity-25 bg-gradient-to-b from-gray-800 to-gray-900 pointer-events-none hidden dark:block"
            aria-hidden="true"></div>
        <!-- End background gradient (dark version only) -->
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
