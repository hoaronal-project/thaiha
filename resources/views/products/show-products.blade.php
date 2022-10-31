<div>
    <div class="flex justify-center auto-cols-auto gap-10 product-list pd-x-9">
        <div wire:click="showAll" class="font-medium text-base  {{ $selectedCategory ? 'text-neutral-800 cursor-pointer' : 'text-sky-800 underline' }}">
            All
        </div>
        @foreach ($categories as $category)
        <div class="font-medium text-base {{ $selectedCategory && $selectedCategory->id == $category->id ? 'text-sky-800 underline' : 'text-neutral-800 cursor-pointer hover:text-sky-800 hover:underline' }}" wire:click="selectCategory({{ $category }})">
            {{ $category->name }}
        </div>
        @endforeach
    </div>

    <div class="flex grid-cols-2 product gap-6 mt-12">
        @foreach ($products as $product)
        <div class="w-full product-item" style="height: 302px;">
            <div class="pb-4 border-b border-stone-300 font-bold text-xl text-neutral-800 product-item__name">{{ $product->name }}</div>
            <div class="mt-4 flex product-item-flex">
                <div style="width: 200px;" class="shrink-0 product-item__img">
                    <img src="{{ $product->image_url ?? '/img/thang-may.jpg' }}" class="bg-cover" />
                </div>
                <div class="flex flex-grow flex-col justify-between ml-6 product-item__information">
                    <div class="flex flex-col font-normal text-base text-zinc-500">
                        <ul class="flex justify-between">
                            <li>Tải trọng đình mức (kg)</li>
                            <li class="text-neutral-800">630 - 1600</li>
                        </ul>
                        <ul class="flex justify-between">
                            <li>Tốc độ định mức (m / giây)</li>
                            <li class="text-neutral-800">1.0 - 1.75</li>
                        </ul>
                        <ul class="flex justify-between">
                            <li>Số điểm dừng tối đa</li>
                            <li class="text-neutral-800">25</li>
                        </ul>
                        <ul class="flex justify-between">
                            <li>Khoảng cách di chuyển tối đa (m)</li>
                            <li class="text-neutral-800">80</li>
                        </ul>
                        <ul class="flex justify-between">
                            <li>Korea Factory Products</li>
                            <li class="text-neutral-800"></li>
                        </ul>
                    </div>
                    <div class="flex justify-between font-normal text-lg text-neutral-800">
                        <div>Bảng giá tham khảo</div>
                        <div class="flex items-center w-icon-custom">
                            <svg id="file_download_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="Group_500" data-name="Group 500">
                                <rect id="Rectangle_473" data-name="Rectangle 473" width="24" height="24" fill="none"/>
                            </g>
                            <g id="Group_501" data-name="Group 501">
                                <path id="Path_531" data-name="Path 531" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#00548b"/>
                            </g>
                            </svg>
                            Tải xuống
                        </div>
                    </div>
                    <x-button class="w-full btn-product justify-center">Xem chi tiết sản phẩm</x-button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
