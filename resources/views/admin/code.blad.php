<!-- Sweet Alert Delete Code -->
<button  data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete "
    class="btn btn-danger deleteBtn"
    data-id="{{ $slider->id }}">
    <i class="fa fa-trash-o" aria-hidden="true"></i>
</button>
<form id="delete-form-{{ $slider->id }}" 
    action="{{ route('admin.hero-sliders.delete', $slider->id) }}" 
    method="POST" 
    style="display:none;">
    @csrf
    @method('DELETE')
</form>