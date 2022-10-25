<x-app-layout>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.esm.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js"></script>

    <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div>

    <div class=" flex items-center bg-cover  md:py-10 md:px-16 hero-section "
        style="background-image:url('images/pexels.jpg');">
        <form class=" container mx-auto  p-6 md:p-10 rounded w-full  ">
            <h1
                class="max-w mb-4 text-4xl font-mono uppercase overline not-italic hover:italic tracking-tight leading-none md:text-5xl xl:text-6xl text-white">
                {{ $setting->home_words }}
            </h1>
            <livewire:event.search />
        </form>
    </div>

    <x-header-section />

    {{-- <x-all-events /> --}}
    <br>
    <div class="mx-auto">
        <x-event-section href="{{ route('event.show') }}" text='Incoming Events'>
            {{-- @dd($events) --}}
            @forelse ($events as $e)
                <x-card-event :event='$e' />
            @empty
                <strong><span class="text-red-700">{{ __('No Events') }}</span></strong>
            @endforelse
        </x-event-section>
        <br>


        <livewire:category.show />

        <br>
        <br>
        <br>
        <div class="container mx-auto pt-16">
            <div class="w-11/12 xl:w-2/3 lg:w-2/3 md:w-2/3 mx-auto sm:mb-10 mb-16">
                <h1 tabindex="0"
                    class="focus:outline-none xl:text-5xl md:text-3xl text-xl dark:text-white text-center text-cyan-500 font-extrabold mb-5 pt-4">
                    Partnerships with StarLords</h1>
                <p tabindex="0"
                    class="focus:outline-none text-base md:text-lg lg:text-xl dark:text-gray-200 text-center text-gray-600 font-normal xl:w-10/12 xl:mx-auto">
                    Our success has come from being committed to the property and investing in the development of the
                    product to maximize sales. At the same time and maintaining the integrity.</p>
            </div>
            <div class="xl:py-16 lg:py-16 md:py-16 sm:py-16 px-15 flex flex-wrap">
                <div
                    class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b xl:border-r lg:border-r :border-r border-cyan-500 xl:pb-10 pb-16 items-center">
                    <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/adidas-dark.png"
                        alt="Adidas" role="img" />
                </div>
                <div
                    class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b xl:border-r lg:border-r border-cyan-500 xl:pb-10 pb-16 items-center">
                    <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/channel-dark.png"
                        alt="Chanel" role="img" />
                </div>
                <div
                    class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b border-cyan-500 xl:pb-10 pb-16 pt-4 items-center">
                    <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/nike-dark.png"
                        alt="Nike" role="img" />
                </div>
                <div
                    class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center lg:border-b xl:border-b lg:border-l xl:border-l border-cyan-500 xl:pb-10 pb-16 items-center">
                    <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/toyota-dark.png"
                        alt="Toyota" role="img" />
                </div>
                <div
                    class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-r lg:border-r border-cyan-500 xl:pt-10 items-center">
                    <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/gs1-dark.png"
                        alt="GS1" role="img" />
                </div>
                <div
                    class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-r lg:border-r border-cyan-500 xl:pt-10 items-center">
                    <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/berry-dark.png"
                        alt="BlackBerry" role="img" />
                </div>
                <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:pt-10 lg:pt-10 md:pt-2 pt-16">
                    <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/min-dark.png"
                        alt="Mini" role="img" />
                </div>
                <div
                    class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-l lg:border-l border-cyan-500 xl:pt-10 lg:pt-10 md:pt-2 pt-16">
                    <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/honda-dark.png"
                        alt="Honda" role="img" />
                </div>
            </div>

        </div>
        <br>
        <br>
        <br>

        @push('scripts')
            <style>
                .hero-section {
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    height: 100vh;
                    width: 100%;
                }

                #progress {
                    position: fixed;
                    bottom: 100px;
                    right: 40px;
                    height: 60px;
                    width: 60px;
                    display: none;
                    place-items: center;
                    border-radius: 50%;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                    cursor: pointer;
                }

                #progress-value {
                    display: block;
                    height: calc(100% - 15px);
                    width: calc(100% - 15px);
                    background-color: #ffffff;
                    border-radius: 50%;
                    display: grid;
                    place-items: center;
                    font-size: 35px;
                    color: #1aa3ff;
                }

                /* width */
                ::-webkit-scrollbar {
                    width: 20px;
                }

                /* Track */
                ::-webkit-scrollbar-track {
                    box-shadow: inset 0 0 5px grey;
                    border-radius: 10px;
                }

                /* Handle */
                ::-webkit-scrollbar-thumb {
                    background: #00ccff;
                    border-radius: 10px;
                }

                /* Handle on hover */
                ::-webkit-scrollbar-thumb:hover {
                    background: #00a3cc;
                }
            </style>

            <script>
                let calcScrollValue = () => {
                    let scrollProgress = document.getElementById("progress");
                    let progressValue = document.getElementById("progress-value");
                    let pos = document.documentElement.scrollTop;
                    let calcHeight =
                        document.documentElement.scrollHeight -
                        document.documentElement.clientHeight;
                    let scrollValue = Math.round((pos * 100) / calcHeight);
                    if (pos > 100) {
                        scrollProgress.style.display = "grid";
                    } else {
                        scrollProgress.style.display = "none";
                    }
                    scrollProgress.addEventListener("click", () => {
                        document.documentElement.scrollTop = 0;
                    });
                    scrollProgress.style.background = `conic-gradient(#1aa3ff ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
                };
                window.onscroll = calcScrollValue;
                window.onload = calcScrollValue;
            </script>
        @endpush
</x-app-layout>
