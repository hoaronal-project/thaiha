<div>
    <form wire:submit.prevent="createContactMessage" class="mt-6 text-sm font-normal">
        <div class="flex flex-col">
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" placeholder="Họ và tên" />
                    <x-input-error for="name" class="mt-1" />
                </div>
                <div>
                    <x-input id="phone" type="text" class="mt-1 block w-full" wire:model.defer="state.phone" placeholder="Điện thoại" />
                    <x-input-error for="phone" class="mt-1" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6 mt-4">
                <div>
                    <x-input id="email" type="text" class="mt-1 block w-full" wire:model.defer="state.email" placeholder="Email" />
                    <x-input-error for="email" class="mt-2" />
                </div>
                <div>
                    <x-input id="address" type="text" class="mt-1 block w-full" wire:model.defer="state.address" placeholder="Địa chỉ liên hệ" />
                    <x-input-error for="address" class="mt-2" />
                </div>
            </div>

            <div class="mt-4 border rounded border-neutral-600 text-zinc-400 text-sm font-normal">
                <div class="grid grid-cols-2 grid-col-set gap-y-4 px-6 py-4">
                    <label class="flex items-center">
                        <x-checkbox wire:model.defer="state.categories" value="Tin tức" />
                        <span class="ml-2 text-zinc-400 text-sm font-normal">Tin tức</span>
                    </label>
                    <label class="flex items-center">
                        <x-checkbox wire:model.defer="state.categories" value="Giải pháp mới" />
                        <span class="ml-2 text-zinc-400 text-sm font-normal">Giải pháp mới</span>
                    </label>
                    <label class="flex items-center">
                        <x-checkbox wire:model.defer="state.categories" value="Tiện ích" />
                        <span class="ml-2 text-zinc-400 text-sm font-normal">Tiện ích</span>
                    </label>
                    <label class="flex items-center">
                        <x-checkbox wire:model.defer="state.categories" value="Tiện ích" />
                        <span class="ml-2 text-zinc-400 text-sm font-normal">Tiện ích</span>
                    </label>
                </div>
            </div>

            <div class="mt-4">
                <x-button>Gửi</x-button>
            </div>
        </div>
    </form>
</div>
