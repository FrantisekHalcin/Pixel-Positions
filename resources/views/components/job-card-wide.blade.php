@props(['job'])

<x-panel>
    <div class="flex gap-x-5">

        <x-employer-logo :employer="$job->employer" :width="90"></x-employer-logo>

        <div class="flex-1 flex-col justify-between">
            <div class="opacity-60">{{ $job->employer->name }}</div>
            <h3 class="text-2xl mb-4 group-hover:text-emerald-300 transition-colors duration-300">
                <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
            </h3>
            <p class="opacity-60 text-sm">{{ $job->salary }}</p>
        </div>

        <div class="flex flex-col justify-start">
            <div class="flex-0">
                @foreach($job->tags as $tag)
                    <x-tag :size="'small'" :$tag ></x-tag>
                @endforeach
            </div>

        </div>
    </div>

</x-panel>

