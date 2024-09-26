@props(['job'])

<x-panel>
    <div class="flex flex-col justify-between h-full">
        <div class="flex justify-between items-center">
            <div>{{ $job->employer->name }}</div>
            <x-employer-logo :employer="$job->employer"></x-employer-logo>
        </div>
        <div class="space-y-2">
            <h3 class="text-center text-2xl group-hover:text-emerald-300 transition-colors duration-300">
                <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
            </h3>
            <div class="flex items-center justify-between">
                <p class="opacity-60 text-sm">{{ $job->salary }}</p>
                @can('updateJob', $job)
                    <div class="text-end flex gap-2">
                        <a href="/jobs/{{ $job->id }}/edit" class="bg-emerald-800 px-2 py-0.5 hover:bg-emerald-600
                rounded transition-colors duration-300">Edit</a>
                        <form method="POST" action="/jobs/{{ $job->id }}">
                            @csrf
                            @method('DELETE')

                            <button class="bg-red-800 px-2 py-0.5 hover:bg-red-600 rounded transition-colors
                        duration-300" onclick="return confirm('Are you sure you want to delete this job?');
                        ">Delete</button>
                    </div>
                @endcan
                <a href="/jobs/{{ $job->id }}/pdf" class="bg-blue-800 text-sm px-1 hover:bg-emerald-600
                rounded transition-colors duration-300">save PDF</a>
            </div>

        </div>
        <div class="flex flex-wrap gap-x-3 gap-y-2 mt-4">
            @foreach($job->tags as $tag)
                <x-tag :size="'small'" :$tag ></x-tag>
            @endforeach
        </div>
    </div>

</x-panel>

