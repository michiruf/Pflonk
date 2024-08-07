<div>
    <label class="input input-bordered flex items-center gap-2">
        <input wire:model="textFilter" type="text" class="grow" placeholder="Search Product"/>
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

    <ul>
        @foreach($categories as $category)
            <li wire:click="$set('categoryFilter', {{ $category->id }})">{{ $category->name }}</li>
        @endforeach
    </ul>

    <br><br>

    <ul class="grid grid-cols-4 gap-10">
        @foreach($products as $product)
            <li class="card card-compact bg-base-100 shadow-xl">
                @if($product->image_path)
                    <figure>
                        <img src="{{ Storage::url($product->image_path) }}" alt="{{ $product->name }}" />
                    </figure>
                @endif
                <div class="card-body">
                    <h2 class="card-title">{{ $product->name }}</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </li>

        @endforeach
    </ul>
</div>
