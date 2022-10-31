<div>
    <form wire:submit.prevent="createContactMessage">
        <div class="flex flex-col">
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" placeholder="Họ và tên" autofocus />
                    <x-input-error for="name" class="mt-2" />
                </div>
                <div>
                    <x-input id="phone" type="text" class="mt-1 block w-full" wire:model.defer="state.phone" placeholder="Điện thoại" />
                    <x-input-error for="phone" class="mt-2" />
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6 mt-6">
                <div>
                    <x-input id="email" type="text" class="mt-1 block w-full" wire:model.defer="state.email" placeholder="Email" />
                    <x-input-error for="email" class="mt-2" />
                </div>
                <div>
                    <x-input id="address" type="text" class="mt-1 block w-full" wire:model.defer="state.address" placeholder="Địa chỉ liên hệ" />
                    <x-input-error for="address" class="mt-2" />
                </div>
            </div>

            <div class="mt-6">
                <textarea class="w-full px-4 py-2" rows="10" wire:model.defer="state.content" placeholder="Bạn cần chúng tôi hỗ trợ gì?"></textarea>
            </div>

            <div class="mt-6">
                <x-button>Gửi tin</x-button>
            </div>
        </div>
    </form>
</div>
