<x-layout>
    <div class="space-y-5">
        <section class="text-center pt-10">
            <h1 class="text-4xl my-4">Let's Find an Awesome Job</h1>
            <x-forms.form method="GET" action="/search">
                <x-forms.input placeholder="Web Developer..." :label="false" type="text" name="q"></x-forms.input>
                <x-forms.button>Search</x-forms.button>
            </x-forms.form>
        </section>
        <section class="pt-5">
            <x-heading-section>Top Jobs</x-heading-section>
            <div class="grid sm:grid-cols-3 gap-4 w-full">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job ></x-job-card>
                @endforeach
            </div>
        </section>

        <section>
            <x-heading-section>Tags</x-heading-section>
            <div class="flex flex-wrap justify-start gap-2">
                @foreach($tags as $tag)
                    <x-tag :size="'base'" :$tag></x-tag>
                @endforeach
            </div>
        </section>

        <section>
            <x-heading-section>Recent Jobs</x-heading-section>
            <div class="space-y-5">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job ></x-job-card-wide>
                @endforeachgaps
            </div>
        </section>

    </div>
</x-layout>
