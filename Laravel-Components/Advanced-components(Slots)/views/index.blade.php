<div>
    <x-alert>
        {{-- Here we are showing slot's dynamic heading --}}
        {{-- <x-slot name='title'>
            That's Heading
        </x-slot> --}}

        {{-- You can also show like this --}}
        <x-slot:title class="font-bold" id="heading">
            That's Heading
        </x-slot>
        {{-- Here we are seeting a dynamic link --}}
            <p class="mb-0">Whenever you need anything
                {{$component->link('Just go there')}}
            </p>
    </x-alert>

    {{--
        Here this is an inline component.
        Inline component is also like component but here u don't have to create a blade file for that component
        To make a inline component u have to use this command 'php artisan make:component componentName --inline'
    --}}
    <x-card/>
</div>
