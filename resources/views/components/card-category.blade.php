<div class="bg-gray-100 pl-8">
    <div class="mx-auto px-4 sm:px-6">
        <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">
            <h2 class="text-2xl font-extrabold text-gray-900">Explore events in Kosovo by category</h2>

            <div class="mt-6 lg:space-y-0 flex flex-wrap">
                @for ($i = 1; $i < 10; $i++)
                    <div class="group relative mr-4 mt-0 mb-4">
                        <div
                            class="relative h-44 w-48 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 lg:aspect-w-1 lg:aspect-h-1">
                            <img
                                src="https://media.istockphoto.com/photos/cheering-crowd-of-unrecognized-people-at-a-rock-music-concert-concert-picture-id1189205501?k=20&m=1189205501&s=612x612&w=0&h=fexl_Cmu6AdLatIasGg_XYTkLSeWHCtvhMw1nK5_uDc="
                                alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="text-base pt-2 font-semibold text-gray-900">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Music
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">Concerts, festivals,<br>live music, DJ</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
