

<x-app-layout>

    <x-container class="py-12">
        <div class="grid gap-6 " style="grid-template-colums: repeat(3,mimax (0,1fr) ): ">
            @foreach ($products as $product)
            <div class="bg-white rounded shadow-lg relative">
                <span class="absolute top-0 left-0 ml-4 bg-white text-blue-800 rounded-full px-2 py-1 text-xs flex items-center shadow">
                    {{$product->price}}GTQ
                </span>

            </div>
            <div class="px-6 py-4">
                <h1 class="text-black  font-semibold text-xl uppercase">
                    {{$product->title}}
                </h1>
                <p>
                    {{Str :: limit ($product->description, 100)}}
                </p>

            </div>
            @endforeach
        </div>
    </x-container>
</x-app-layout>