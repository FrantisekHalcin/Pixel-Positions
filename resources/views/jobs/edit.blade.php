<x-layout>
    <x-heading-form>Edit Job {{ $job->title }}</x-heading-form>
    <x-forms.form method="POST" action="/jobs/{{ $job->id }}">
        @method('PATCH')
        <x-forms.input label="Title" name="title" placeholder="CEO Manager" value="{{ $job->title }}" />
        <x-forms.input label="Salary" name="salary" placeholder="€220.000 per year" value="{{ $job->salary }}" />
        <x-forms.input label="Location" name="location" placeholder="Winter-Garden, Detroit" value="{{ $job->location
        }}" />
        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" value="{{ $job->url }}"/>

        <x-forms.select label="Type" name="type" value="{{ $job->type }}">
            <option>Part Time</option>
            <option>Full Time</option>
            <option>Freelance</option>
        </x-forms.select>

        <x-forms.checkbox label="Featured (costs extra)" name="featured" checkLabel="Featured"
                          :checked="(bool) $job->featured"></x-forms.checkbox>

        <x-forms.divider></x-forms.divider>

        <x-forms.input label="Tags (coma separated)" name="tags" placeholder="sport, video, team-work"
                       value="{{ $tags }}"/>

        <x-forms.button>Update</x-forms.button>
    </x-forms.form>
</x-layout>
