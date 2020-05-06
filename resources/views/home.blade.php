@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://scontent-mia3-1.cdninstagram.com/v/t51.2885-19/s150x150/46289421_615082208920846_6106451142718259200_n.jpg?_nc_ht=scontent-mia3-1.cdninstagram.com&_nc_ohc=e6YbzrpKKn8AX_9iX-O&oh=f574fe58c9384aa4581630e0bcc82f9f&oe=5ECFCE81" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="#">Add new Post</a>
            </div>

            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>32k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div>
                <a href="#">{{$user->profile->url}}</a>
            </div>

        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img class="w-100" src="https://scontent-mia3-1.cdninstagram.com/v/t51.2885-15/e35/c224.0.576.576a/s320x320/27881044_554161054958677_7961942126294466560_n.jpg?_nc_ht=scontent-mia3-1.cdninstagram.com&_nc_cat=101&_nc_ohc=OObAHFtBLHkAX-HeEpd&oh=ef57c25e32a14ad5bf01d0f8d90fc82d&oe=5ECD570E" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://scontent-mia3-1.cdninstagram.com/v/t51.2885-15/e35/c224.0.576.576a/s320x320/27881044_554161054958677_7961942126294466560_n.jpg?_nc_ht=scontent-mia3-1.cdninstagram.com&_nc_cat=101&_nc_ohc=OObAHFtBLHkAX-HeEpd&oh=ef57c25e32a14ad5bf01d0f8d90fc82d&oe=5ECD570E" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://scontent-mia3-1.cdninstagram.com/v/t51.2885-15/e35/c224.0.576.576a/s320x320/27881044_554161054958677_7961942126294466560_n.jpg?_nc_ht=scontent-mia3-1.cdninstagram.com&_nc_cat=101&_nc_ohc=OObAHFtBLHkAX-HeEpd&oh=ef57c25e32a14ad5bf01d0f8d90fc82d&oe=5ECD570E" alt="">
        </div>

    </div>
</div>
@endsection
