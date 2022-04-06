<x-guest-layout>
    <section class="relative">
        <div class="absolute inset-0 h-128 pt-16 box-content">
            <img class="absolute inset-0 w-full h-full object-cover opacity-25" src="{{$news->media}}" width="1440"
                 height="577" alt="About"/>
            <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-gray-900" aria-hidden="true"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                <div class="max-w-3xl mx-auto">
                    <article>
                        <header class="mb-8">
                            <!-- Title and excerpt -->
                            <div class="text-center md:text-left">
                                <h2 class="h2 font-red-hat-display mb-4" data-aos="fade-down">{{$news->title}}</h2>
                            </div>
                            <!-- Article meta -->
                            <div class="md:flex md:items-center md:justify-between mt-5">
                                <!-- Author meta -->
                                <div class="flex items-center justify-center" data-aos="fade-down" data-aos-delay="300">
                                    <div>
                                        <span class="text-gray-600 dark:text-gray-400">Escrito por </span>
                                        <a class="font-medium text-gray-800 dark:text-gray-300 hover:underline"
                                           href="#0">{{$news->author}}</a>
                                        <span
                                            class="text-gray-600 dark:text-gray-400"> · {{ucfirst(\Carbon\Carbon::parse($news->created_at)->diffForHumans())}}</span>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <hr class="w-5 h-px pt-px bg-gray-400 dark:bg-gray-500 border-0 mb-8" data-aos="fade-down"
                            data-aos-delay="450"/>

                        <!-- Article content -->
                        <div class="text-lg text-gray-600 dark:text-gray-400" data-aos="fade-up" data-aos-delay="450">
                            <p class="mb-8">
                                {!! $news->summary !!}
                            </p>
                        </div>

                        <!-- Article footer -->
                        <footer>
                            <!-- Newsletter module -->
                            <div class="dark bg-gray-800 py-8 px-8 md:py-12 md:px-12 text-center text-gray-100"
                                 data-aos="fade-down">
                                <div class="text-xl font-medium mb-6">Sign up to our newsletter for more articles like
                                    this.
                                </div>
                                <form>
                                    <div
                                        class="relative flex flex-col sm:flex-row justify-center max-w-xs mx-auto sm:max-w-sm sm:px-4">
                                        <input type="email" class="form-input w-full px-4 py-2 mb-2 sm:mb-0 sm:mr-2"
                                               placeholder="Your email" aria-label="Your email"/>
                                        <a class="btn-sm text-white bg-teal-500 hover:bg-teal-400 flex-shrink-0"
                                           href="#0">Subscribe</a>
                                        <svg class="hidden sm:block absolute left-full -mt-3" width="42" height="44"
                                             viewBox="0 0 42 44" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path class="fill-current text-gray-600"
                                                  d="M6.226 39.073l9.71 2.172-.436 1.951-13.436-3.004-1.735-.388 1.232-1.281 9.545-9.923 1.441 1.387-6.898 7.171 7.737-2.329C25.946 29.254 34.831 17.909 40.043.71l1.914.58c-5.378 17.746-14.651 29.572-27.818 35.393l-.117.043-7.796 2.347z"/>
                                        </svg>
                                    </div>
                                    <!-- Success message -->
                                    <!-- <p class="text-sm mt-2 opacity-80">Thanks for subscribing!</p> -->
                                    <p class="text-sm text-gray-400 italic mt-3">No spam. No ads. Only great
                                        content.</p>
                                </form>
                            </div>
                        </footer>

                    </article>

                </div>

            </div>
        </div>
    </section>
</x-guest-layout>
