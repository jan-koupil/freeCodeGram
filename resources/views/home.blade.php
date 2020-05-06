@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-otp1-1.cdninstagram.com/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=scontent-otp1-1.cdninstagram.com&_nc_ohc=7SivNZVyttkAX_9BFww&oh=c69b90ebe9a5d488567f240c3b546ae4&oe=5ED1E446" alt="FCC Logo" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-otp1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/95224410_237873460790480_2374979867183673557_n.jpg?_nc_ht=scontent-otp1-1.cdninstagram.com&_nc_cat=108&_nc_ohc=FfvHtrIvI7MAX_NQVpF&oh=a6a655bd4121e8e8f61885102e3ce26a&oe=5ED39EA8" class="w-100" alt="fcc">
        </div>
        <div class="col-4">
            <img src="https://scontent-otp1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/94892216_228412868421097_4113969397730546378_n.jpg?_nc_ht=scontent-otp1-1.cdninstagram.com&_nc_cat=101&_nc_ohc=NaBk0OlvCYQAX-sByl8&oh=0ad811fed010b0e99346a9827ec2fe0e&oe=5ED2D04E" class="w-100" alt="fcc">
        </div>
        <div class="col-4">
            <img src="https://scontent-otp1-1.cdninstagram.com/v/t51.2885-15/e35/c94.0.561.561a/94219713_705997580137437_6728704239228889450_n.jpg?_nc_ht=scontent-otp1-1.cdninstagram.com&_nc_cat=109&_nc_ohc=6jd-Tst18KIAX-0pq12&oh=acf74b7b29637e41aff868b1ed5e42be&oe=5ED2C48F" class="w-100" alt="fcc">
        </div>
    </div>
</div>
@endsection
