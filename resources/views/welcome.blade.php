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
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>

        <section>
            <x-heading-section>Tags</x-heading-section>
            <div class="space-x-1">
                <x-tag href="#" :size="'base'">Stress</x-tag>
                <x-tag href="#" :size="'base'">Loyalty</x-tag>
                <x-tag href="#" :size="'base'">Pressure</x-tag>
                <x-tag href="#" :size="'base'">Sport</x-tag>
                <x-tag href="#" :size="'base'">Improvement</x-tag>
            </div>
        </section>

        <section>
            <x-heading-section>Recent Jobs</x-heading-section>
            <div class="space-y-5">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </div>
        </section>

    </div>
</x-layout>
