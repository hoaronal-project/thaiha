<x-app-layout>
    <x-page-heading title="{{ $staticPage->title }}" />

    <div class="bg-zinc-50">
        <div class="max-w-7xl mx-auto">
            <div class="py-24">
                {!! $staticPage->body !!}
            </div>
        </div>
    </div>
</x-app-layout>
