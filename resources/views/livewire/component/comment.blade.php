<form class="w-full mx-auto mb-4 mt-4 " wire:submit.prevent='create()'>
    <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
        <div class="py-2 px-4 bg-white rounded-t-lg dark:bg-gray-800">
            <label for="comment" class="sr-only">Your comment</label>
            <textarea id="comment" rows="4" wire:model.defer="comment"
                class=" {{ $errors->has('comment' ? 'border-red-500' : '') }} px-0 w-full text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                placeholder="Write a comment..." required="">
            </textarea>
        </div>
        <div class="flex justify-end items-center py-2 px-3 border-t dark:border-gray-600">
            <div class="flex pl-0 space-x-1 sm:pl-2">
                <x-buttonn type="submit"
                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center rounded-lg">
                    Comment
                </x-buttonn>
            </div>
        </div>
    </div>
    @error('comment')
        <div class="text-red-500 text-sm">{{ $message }}</div>
    @enderror
</form>
