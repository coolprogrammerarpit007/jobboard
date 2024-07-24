<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (count($listings) > 0):
        <h2>There are Job Listings</h2>
    @endif
    <h1>Listings: {{$heading}}</h1>
    {{-- <?php foreach ($listings as $listing): ?>
        <h2><?php echo $listing['title']; ?></h2>
        <p><?php echo $listing['description']; ?></p>
    <?php endforeach; ?> --}}

    @foreach ($listings as $listing):
        <h3>{{$listing['title']}}</h3>
        <p>{{$listing['description']}}</p>   
    @endforeach
</body>
</html>