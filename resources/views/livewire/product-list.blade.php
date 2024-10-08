<div class="my-20">
    <ul class="flex flex-wrap items-center justify-center gap-5 my-3">
        <li wire:click="setCategoryFilter(null)"
            class="btn {{ $categoryFilter === null ? 'btn-active' : '' }}">
            All
        </li>
        @foreach($categories as $category)
            <li wire:key="{{ $category->id }}"
                wire:click="setCategoryFilter({{ $category->id }})"
                class="btn {{ $categoryFilter === $category->id ? 'btn-active' : '' }}">
                @if($category->icon_path)
                    <figure class="h-6 w-6">
                        <img src="{{ Storage::url($category->icon_path) }}" alt="{{ $category->name }}"/>
                    </figure>
                @endif

                {{ $category->name }}
            </li>
        @endforeach
    </ul>

    <label class="input input-bordered flex items-center my-3">
        <input wire:model.live.debounce.100ms="textFilter" type="text" class="grow"
               placeholder="Search Product"/>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 16 16"
            fill="currentColor"
            class="h-5 w-5 opacity-70">
            <path
                fill-rule="evenodd"
                d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                clip-rule="evenodd"/>
        </svg>
    </label>

    <ul class="grid grid-cols-4 gap-10 my-20">
        @foreach($products as $product)
            <li wire:key="{{ $product->id }}"
                class="card card-compact bg-base-100 shadow-xl">
                @if($product->image_path)
                    <figure>
                        <img src="{{ Storage::url($product->image_path) }}" alt="{{ $product->name }}"/>
                    </figure>
                @endif
                <div class="card-body">
                    <h2 class="card-title">{{ $product->name }}</h2>
                    @if($product->hasAdditionalData('description'))
                        <p>{{ $product->getAdditionalData('description') }}</p>
                    @endif
                    @if($categoryFilter === null && $product->categories->isNotEmpty())
                        <ul class="card-actions justify-start">
                            @foreach($product->categories as $category)
                                <li wire:key="{{ $category->id }}"
                                    wire:click="setCategoryFilter({{ $category->id }})"
                                    class="badge badge-outline cursor-pointer">{{ $category->name }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @if($product->price)
                        <div class="card-actions justify-end">
                            <!-- TODO Will be a button in the future, so we keep it for now -->
                            <div class="btn btn-primary cursor-default">{{ $product->price }} €</div>
                        </div>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
</div>
