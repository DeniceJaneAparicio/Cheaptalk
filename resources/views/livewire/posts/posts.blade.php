<div>
    <div class="body">
        <div class="container" style="width: 1000px;">
            <div class="float-end mt-3">
                <h1>New Post</h1>
            </div>

            <div class="">
                <input type="text" class="form-control mb-2" placeholder="Author" wire:model="author">
                <input type="text" class="form-control" placeholder="Title" wire:model="title">
            </div>
            <div class="d-flex mt-2">
                <select class="form-select" wire:model="category_id">
                    <option value="">Select a Category</option>
                    @foreach ($categories as $category )
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group input-group-lg mt-3">
                <textarea class="form-control form-control-lg createcolor" placeholder="What's on your mind?" wire:model="content"></textarea>
            </div>
            <a class="mt-3 float-end btn btn-success pt-2 pb-2 pe-5 ps-5 text-white" wire:click.prevent="store()" href="/">Post</a>      <br> <br> <br>

        </div>
        <style>
            .body{
                display: grid;
                place-content: center;
            }


        </style>

    </div>

</div>







