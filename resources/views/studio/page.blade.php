@extends('layouts.sidebar')

@section('content')

        <h2 class="mb-4"><i class="bi bi-file-earmark-break"> Littlelink Page</i></h2>

        <form action="{{ route('editPage') }}" enctype="multipart/form-data" method="post">
          @csrf
          @foreach($pages as $page)
          {{-- Hides option to upload profile image if no page name is set --}}
          @if($page->littlelink_name != '')
          <div class="form-group col-lg-8">
            <label>Logo</label>
            <input type="file" class="form-control-file" name="image">
          </div>
          @endif
          <div class="form-group col-lg-8">
            <label>Littlelink name</label>
            <input type="text" class="form-control" name="pageName" value="{{ $page->littlelink_name ?? '' }}">
          </div>
          <div class="form-group col-lg-8">
            <label>Littlelink description</label>
            <textarea class="form-control" name="pageDescription" rows="3">{{ $page->littlelink_description ?? '' }}</textarea>
          </div>
          @endforeach
          <button type="submit" class="mt-3 ml-3 btn btn-info">Submit</button>
        </form>

@endsection
