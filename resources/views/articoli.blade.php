<x-layout>

    <h1 class="mt-5 mb-5 text-center">articoli</h1>


    <div class="container">
        <div class="row">
            @foreach ($elements as $item)
                <x-articolCard
                name="{{$item['name']}}"
                price="{{$item['price']}}"
                img="{{$item['img']}}"
                />
            @endforeach

        </div>
    </div>

</x-layout>
                    

