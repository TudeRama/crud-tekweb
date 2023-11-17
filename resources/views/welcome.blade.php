

    <div class="flex flex-wrap justify-between pt-12 container mx-auto">


        @if ($data->count())
            @foreach ($data as $item)
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        @if ($item->gambar)
                        <img src="{{ asset('./storage/app/gambar-post/' . $item->gambar) }}" class="h-64 w-full rounded-t pb-6">
                        @else
                        <img src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6">
                        @endif
                        
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $item->judul }}</p>
                        <div class="w-full font-bold text-xl text-gray-900 px-6">{{ $item->deskripsi }}</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            {{ $item->isi }}
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex">
                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
           <div class="text-center w-full">Masukan data untuk melihat tampilan</div> 
        @endif
        <script src="https://cdn.tailwindcss.com"></script>        

