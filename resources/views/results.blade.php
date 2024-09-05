<x-layout>
    <section class="text-center pt-10">
        <h1 class="text-4xl my-4">Results</h1>
        <x-forms.form method="GET" action="/search">
            <x-forms.input placeholder="Web Developer..." :label="false" type="text" name="q"></x-forms.input>
            <x-forms.button>Search</x-forms.button>
        </x-forms.form>
    </section>

    <section>
        <x-forms.divider></x-forms.divider>
        <div class="mt-8 space-y-5">
            @if($jobs->isEmpty())
                <div class="text-4xl text-center opacity-20 pt-10">No results for this query...</div>
            @else
                @foreach($jobs as $job)
                    <x-job-card-wide :$job ></x-job-card-wide>
                @endforeach
            @endif

        </div>
    </section>
</x-layout>
