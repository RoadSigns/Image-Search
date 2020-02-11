@if ($type === 'video/mp4')
    <video width="300" height="300" controls>
        <source src="{{$src}}" type="video/mp4">
    </video>
@else
    <img width="300" height="300" alt="picture" style="object-fit: cover;" src="{{$src}}" class="" />
@endif
