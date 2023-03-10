<div>
    <h1>Edit Post</h1>
    <div class="card offset-5" id="post-create">
        
    @if (session('message'))
        <div class="alert alert-success text-center">{{ session('message') }}</div>
    @endif
        <div class="card-header bg-info">
            <h5 class="text-center mt-2">Select Category</h5>
            <select name="category" id="select-cat" class="text-center" wire:model.defer="category">
                <option hidden="true">Category</option>
                <option selected disabled>Category</option>
                <option value="drama">Samsung</option>
                <option value="action">Panasonic</option>
                <option value="sweet">LG</option>
                <option value="comedy">Haier</option>
                <option value="horror">Cherry</option>
            </select>
                @error('category')
                    <p class="text-danger text-center">{{ $message }}</p>
                @enderror
        </div>
        <div class="card-body">
            <textarea name="remarks" id="" cols="55" rows="5" wire:model.defer="remarks"></textarea>
        </div>
        
            @error('remarks')
                <p class="text-danger text-center">{{ $message }}</p>
            @enderror
        <button class="btn btn-primary" wire:click="editRecentPost()">Update</button>
        <button class="btn btn-info" wire:click="back2()">
            Cancel
        </button>
    </div>
</div>


<style>
    #post-create {
        width: 470px;
    }
    #select-cat {
        width: 120px;
        height: 50px;
        margin-left: 37%;
    }
</style>