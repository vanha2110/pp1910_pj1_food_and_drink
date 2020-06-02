@extends('admin.layout.app')

@section('stylesheets')
<script src="https://cdn.tiny.cloud/1/jt1iofy4vnbrg7j9jpq89yiesdbct3t40pj3lhzne6lqtmum/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'table emoticons template paste help'
        ],
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print preview media fullpage | ' +
        'forecolor backcolor emoticons | help',
        menu: {
        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | spellchecker | emoticons'}
        },
        menubar: 'favs file edit view insert format tools table help',
    });
</script>
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{__('Posts')}}</h1>
</div>
<form>
    <div class="form-group">
        <input class="form-control" id="title" name="title" type="text" placeholder="Title">
    </div>
    <div class="form-group">
        <textarea></textarea>
    </div>
    <div>
        <input class='btn btn-primary' onclick="" id='cancle' name='cancle' type='submit' value='Cancle'>
        <input class='btn btn-primary' onclick="" id='submit' name='submit' type='submit' value='Save'>
    </div>
</form>
@endsection