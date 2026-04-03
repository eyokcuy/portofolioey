<x-layouts.app>
    <x-slot:title>Landing Page</x-slot:title>
    
    <x-slot:header>
        <x-navbar />
    </x-slot:header>

    <x-slot:herosection>
        <x-herosection />
    </x-slot:herosection>

    <x-skills />

    <x-about />

    <x-feedback :feedbacks="$feedbacks" />
    
    <x-feedbackform />

    <x-slot:footer>
        <x-footer />
    </x-slot:footer>
</x-layouts.app>