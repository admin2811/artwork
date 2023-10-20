@extends('layouts.app')
@section('main')
@section('title','Artwork')

<div class="card">
    <div class="card-header">
        <h3><strong>Add Artworks</strong></h3>
    </div>
    <div class="card-body">
        <form action="{{ route('artworks.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="artist_name">Artist_Name:</label>
                <input type="text" name="artist_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" class="form-control" required>
            </div>
            <div class="form-group">

                <label for="art_type">Art Type:</label>
                <select name="art_type" class="form-control" required>
                    <option value="hội họa">Hội họa</option>
                    <option value="âm nhạc">Âm nhạc</option>
                    <option value="văn học">Văn học</option>
                </select>
            </div>
            <div class="form-group">
                <label for="media_link">Media_Link:</label>
                <input type="text" name="media_link" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cover_image">Cover_Image:</label>
                <input type="text" name="cover_image" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>

    </div>
</div>

@stop