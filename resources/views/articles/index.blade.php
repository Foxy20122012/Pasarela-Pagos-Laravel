
<x-app-layout>

    <x-container class="py-12">
        <div class="grid gap-6 " style="grid-template-colums: repeat(3,mimax (0,1fr) ): ">
            @foreach ($articles as $article)
            <div class="bg-white rounded shadow-lg relative">
            <img class="h-72 w-full object-cover object-center" src= "{{$artitle->image}}" alt="">

            <div class="px-6 py-4">
                <h1 class="text-gray-900 font-semibold text-xl uppercase">
                    {{$artitle->title}}
                </h1>
                <p>
                    {{Str :: limit ($artitle->extract, 50)}}
                </p>
            </div>
            </div>
            @endforeach
        </div>
    </x-container>
</x-app-layout>