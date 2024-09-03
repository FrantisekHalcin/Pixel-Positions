<x-layout>
    <div class="space-y-5">
        <section class="text-center pt-10">
            <h1 class="text-4xl my-4">Let's Find an Awesome Job</h1>
            <form action="">
                <input
                    class="border-transparent border-2 hover:border-2 hover:border-prime hover:bg-white/20 focus:bg-white/20 px-6 py-4
                        bg-white/10 rounded-2xl w-full max-w-2xl transition-colors duration-500"
                    type="text"
                    placeholder="Web Developer...">
            </form>
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
            <div class="space-x-1">
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
                @endforeach
            </div>
        </section>

    </div>
</x-layout>
