<x-panel>
    <div class="flex gap-x-5">

        <x-employer-logo :width="90"></x-employer-logo>

        <div class="flex-1 flex-col justify-between">
            <div class="opacity-60">Chelsea FC</div>
            <h3 class="text-2xl mb-4 group-hover:text-emerald-300 transition-colors duration-300">Head Coach</h3>
            <p class="opacity-60 text-sm">full-time from € 80.000</p>
        </div>

        <div class="flex flex-col justify-between">
            <div class="flex-0">
                <x-tag href="#" :size="'base'">Frontend</x-tag>
                <x-tag href="#" :size="'base'">Backend</x-tag>
                <x-tag href="#" :size="'base'">Fun</x-tag>
            </div>

            <div class="flex-0">
                <x-tag href="#" :size="'base'">Manager</x-tag>
                <x-tag href="#" :size="'base'">Teamwork</x-tag>
            </div>

        </div>
    </div>

</x-panel>

