<x-guestLayout>
    <div x-data class="">
        <section class="py-8 px-4 sm:px-6">
            <div class="max-w-7xl mx-auto">
                <div class="md:grid md:grid-cols-12 md:items-center md:gap-4">
                    <div class="text-center px-4 md:col-span-6 lg:col-span-5 md:text-left">
                        <h1 class="text-4xl md:text-5xl font-bold" 
                        x-intersect="$el.classList.add('fadeInUp')">
                            Best Analytics for your App
                        </h1>
                        <p class="mt-6 text-lg"  x-intersect="$el.classList.add('fadeInUp')">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Ut dignissim, neque ut ultrices sollicitudin
                        </p>
                        <a href="#" class="inline-block text-white font-semibold  mt-6 px-9 py-3 bg-[#82498C] rounded-full"
                        x-intersect="$el.classList.add('fadeInUp')">
                            Learn more
                        </a>
                    </div>
                    <img src="images/analytics.svg" alt="Analytics Illustration" class="
                            mt-6
                            md:mt-0 md:max-h-[36rem] md:col-span-6 md:ml-auto
                            lg:col-span-7
                        " x-intersect="$el.classList.add('scale')"/>
                </div>
            </div>
        </section>
        <section class="py-16 px-4 sm:px-6 bg-fuchsia-100">
            <div class="max-w-7xl mx-auto">
                <div class="mt-8 md:grid md:grid-cols-2 md:items-center md:gap-8">
                    <img src="images/why.png" alt="Analytics Illustration" class="md:max-h-[36rem]"
                    x-intersect="$el.classList.add('scale')"/>
                    <div>
                        <h2 class="text-3xl sm:text-4xl font-bold"
                        x-intersect="$el.classList.add('fadeInUp')">
                            Why Choose Analytics
                        </h2>
                        <p class="mt-6"  x-intersect="$el.classList.add('fadeInUp')">
                            Morbi in sem quis dui placerat ornare. Pellentesque
                            odio nisi, euismod in, pharetra a, ultricies in,
                            diam. Praesent dapibus, neque id cursus faucibus,
                            tortor neque egestas augue.
                        </p>
                        <p class="mt-6"  x-intersect="$el.classList.add('fadeInUp')">
                            Phasellus ultrices nulla quis nibh. Quisque a
                            lectus. Donec consectetuer ligula vulputate sem
                            tristique cursus. Pellentesque fermentum dolor.
                            Aliquam quam lectus, facilisis auctor.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-guestLayout>