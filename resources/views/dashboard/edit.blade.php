
    <div id="main-content" class="h-full lg:ml-64">
        <main>
            <!-- component -->
<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
      <form action="/dashboard/{{ $data->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-5">
          <label
            for="name"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Judul
          </label>
          <input
            type="text"
            name="judul"
            id="judul"
            placeholder="tuliskan judul"
            value="{{ old('judul', $data->judul) }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
          <label
            for="name"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Kategori
          </label>
          <input
            type="text"
            name="kategori"
            id="kategori"
            placeholder="tuliskan judul"
            value="{{ old('kategori', $data->kategori) }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
          <label
            for="text"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Deskripsi
          </label>
          <input
            type="text"
            name="deskripsi"
            id="deskripsi"
            value="{{ old('deskripsi', $data->deskripsi) }}"
            placeholder="tuliskan deskripsi"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-8 bg-white">
          <div class="flex w-full justify-center">
              @if ($data->gambar)
                <img src="{{ asset('storage/'.$data->gambar) }}" class="img-preview w-1/2">
                @else
                <img class="img-preview w-1/2">
                @endif
            </div>
            <input type="file" name="gambar" id="gambar" class="sr-only" onchange="previewImage()" />
            <label
              for="gambar"
              class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center"
            >
              <div>
                <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                  Drop files here
                </span>
                <span class="mb-2 block text-base font-medium text-[#6B7280]">
                  Or
                </span>
                <span
                  class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]"
                >
                  Browse
                </span>
              </div>
            </label>
          </div>
        <div class="mb-5">
          <label
            for="message"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Isi
          </label>
          <input
            name="isi"
            id="isi"
            value="{{ old('isi', $data->isi) }}"
           
            class="w-full h-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          ></input>
        </div>
        <div>
          <button
            class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none" type="submit"
          >
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
        </main>
    </div>
    <script>
      function previewImage(){
  const gambar = document.querySelector('#gambar');
  const imgPreview = document.querySelector('.img-preview');

  imgPreview.style.display = 'block';
  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function(oFREvent){
    imgPreview.src = oFREvent.target.result;
  }
}
    </script>
    <script src="https://cdn.tailwindcss.com"></script> 
