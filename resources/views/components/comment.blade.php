<form class="w-full mx-auto mb-4 mt-4 ">
    <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
        <div class="py-2 px-4 bg-white rounded-t-lg dark:bg-gray-800">
            <label for="comment" class="sr-only">Your comment</label>
            <textarea id="comment" rows="4"
                class="px-0 w-full text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                placeholder="Write a comment..." required=""></textarea>
        </div>
        <div class="flex justify-end items-center py-2 px-3 border-t dark:border-gray-600">
            <div class="flex pl-0 space-x-1 sm:pl-2">
                <button type="submit"
                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Post comment
                </button>
            </div>
        </div>
    </div>
</form>


<div class="antialiased mx-auto w-full p-2">
    {{-- antialiased mx-auto max-w-screen-sm --}}
    <h3 class="mb-4 text-lg font-semibold text-gray-900">Comments (4)</h3>

    <div class="space-y-4">
        <div class="flex">
            <div class="flex-shrink-0 mr-3">
                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                    src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                    alt="">
            </div>
            <div class="flex-1 border bg-white rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                <p class="text-sm">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                    magna aliquyam erat, sed diam voluptua.
                </p>
                <div class="mt-4 flex items-center">
                    <div class="flex -space-x-2 mr-2">
                        <img class="rounded-full w-6 h-6 border border-white"
                            src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                            alt="">
                        <img class="rounded-full w-6 h-6 border border-white"
                            src="https://images.unsplash.com/photo-1513956589380-bad6acb9b9d4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                            alt="">
                    </div>
                    <div class="text-sm text-gray-500 font-semibold">
                        5 Replies
                    </div>
                </div>
            </div>
        </div>

        <div class="flex">
            <div class="flex-shrink-0 mr-3">
                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                    src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                    alt="">
            </div>
            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed bg-white">
                <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                <p class="text-sm">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                    magna aliquyam erat, sed diam voluptua.
                </p>

                <h4 class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">Replies</h4>

                <div class="space-y-4">
                    <div class="flex">
                        <div class="flex-shrink-0 mr-3">
                            <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                                src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                                alt="">
                        </div>
                        <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                            <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                            <p class="text-xs sm:text-sm">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                magna aliquyam erat, sed diam voluptua.
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-shrink-0 mr-3">
                            <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                                src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                                alt="">
                        </div>
                        <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                            <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                            <p class="text-xs sm:text-sm">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                magna aliquyam erat, sed diam voluptua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
