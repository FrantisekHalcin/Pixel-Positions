<x-layout>
    <x-heading-form>Register User</x-heading-form>
    <x-forms.form method="post" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Your name" name="name" />
        <x-forms.input label="Your email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Confirm password" name="password_confirmation" type="password" />

        <x-forms.divider></x-forms.divider>

        <x-forms.input label="Employer name" name="employer" />
        <x-forms.input label="Employer logo" name="logo" type="file" />

        <x-forms.button>Register</x-forms.button>
    </x-forms.form>
</x-layout>
