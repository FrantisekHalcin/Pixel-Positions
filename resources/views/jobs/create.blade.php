<x-layout>
    <x-heading-form>Create Job</x-heading-form>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO Manager"></x-forms.input>
        <x-forms.input label="Salary" name="salary" placeholder="€220.000 per year"></x-forms.input>
        <x-forms.input label="Location" name="location" placeholder="Winter-Garden, Detroit"></x-forms.input>
        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"></x-forms.input>

        <x-forms.select label="Type" name="type">
            <option>Part Time</option>
            <option>Full Time</option>
            <option>Freelance</option>
        </x-forms.select>

        <x-forms.checkbox label="Featured (costs extra)" name="featured" checkLabel="Featured"></x-forms.checkbox>

        <x-forms.divider></x-forms.divider>

        <x-forms.input label="Tags (coma separated)" name="tags" placeholder="sport, video, team-work" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
