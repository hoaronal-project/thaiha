<x-app-layout>
    <x-page-heading title="Giải pháp" />

    <div class="bg-zinc-50">
        <div class="max-w-7xl mx-auto">
            <div class="py-24 flex flex-col items-center font-normal solution pd-x-9">
                <div class="font-bold text-2xl flex items-baseline cooperate__items-baseline">
                    <hr class="w-20 border-sky-800 border" />
                    <div class="ml-5 mr-5 text-sky-800 font-bold uppercase fs-22 typical-projects__title">CÁC SẢN PHẨM CUNG CẤP BỞI THÁI HÀ GROUP</div>
                    <hr class="w-20 border-sky-800 border" />
                </div>
                <div class="text-4xl text-neutral-800 font-black mt-2.5">THANG MÁY</div>
                <div class="mt-14 w-full">
                    @livewire('products.show-products')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
