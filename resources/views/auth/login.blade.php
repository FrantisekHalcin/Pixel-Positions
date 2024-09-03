<x-layout>
    <x-heading-form>Please Sign Up</x-heading-form>
    <x-forms.form method="post" action="/login" enctype="multipart/form-data">
        <x-forms.input label="Your email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />

        <x-forms.button>Login</x-forms.button>
    </x-forms.form>
</x-layout>
