@props(['job'])

<x-panel>
    <div class="flex flex-col justify-between h-full">
        <div class="flex justify-between items-center">
            <div>{{ $job->employer->name }}</div>
            <x-employer-logo></x-employer-logo>
        </div>
        <div class="space-y-2">
            <h3 class="text-center text-2xl group-hover:text-emerald-300 transition-colors duration-300">{{ $job->title
        }}</h3>
            <p class="opacity-60 text-sm">{{ $job->salary }}</p>
        </div>
        <div class="flex space-x-3 mt-4">
            @foreach($job->tags as $tag)
                <x-tag :size="'small'" :$tag ></x-tag>
            @endforeach
        </div>
    </div>

</x-panel>

