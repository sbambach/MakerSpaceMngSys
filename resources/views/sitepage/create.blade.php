@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create sitepage
    </h1>
    <form method = 'get' action = '{!!url("sitepage")!!}'>
        <button class = 'btn btn-danger'>sitepage Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("sitepage")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="PageTitle">PageTitle</label>
            <input id="PageTitle" name = "PageTitle" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="PageContent">PageContent</label>
            <input id="PageContent" name = "PageContent" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="PagePublishDate">PagePublishDate</label>
            <input id="PagePublishDate" name = "PagePublishDate" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="PageStub">PageStub</label>
            <input id="PageStub" name = "PageStub" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="PageCSS">PageCSS</label>
            <input id="PageCSS" name = "PageCSS" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="PageJavaScript">PageJavaScript</label>
            <input id="PageJavaScript" name = "PageJavaScript" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="PageKeywords">PageKeywords</label>
            <input id="PageKeywords" name = "PageKeywords" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection