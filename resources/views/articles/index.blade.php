@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="mainarticle">
            @foreach ($articles as $article)
                <div class="articlecard">
                    <img src="images/memes.png" alt="article-images" class="h-[300px]">
                    <div class="tag">
                        <h1 class="text-sky-600" style="font-family: 'Plus Jakarta Sans',sans-serif">#Random-Thought</h1>
                    </div>
                    <div class="article-title">
                        <h1 class="font-bold text-[30px]">{{ Str::limit($article->title, 50) }}</h1>
                    </div>
                    <div class="article-caption">
                        <p>{{ Str::limit($article->description, 90) }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="latest-article ml-[40px]">
            <div class="latest-article-title">
                <h1 class="font-bold text-[20px]">LATEST ARTICLES</h1>
            </div>
            @foreach ($articles as $article)
                <div class="latest-article-card mt-[10px]">
                    <div class="card-image">
                        <img src="images/rumahraya.jpg" alt="rayahouse" class="h-[100px] rounded-[10px]">
                    </div>
                    <div class="card-text">
                        <div class="card-title ml-[10px]">
                            <h1 class="font-bold text-[18px] -my-[5px]">{{ Str::limit($article->title, 50) }}</h1>
                        </div>
                        <div class="card-category-tag ml-[10px] mt-[7px]">
                            <h1 class="text-slate-400 font-normal" style="font-family: 'Plus Jakarta Sans',sans-serif">
                                In<span class="font-semibold text-slate-500"> Jalan-Jalan</span></h1>
                        </div>
                        <div class="card-post-date ml-[10px]">
                            <h4 class="text-[13px]" style="font-family: 'Plus Jakarta Sans',sans-serif">May 23,2022</h4>
                        </div>
                    </div>

                </div>
            @endforeach
            <div class="latest-article-card mt-[10px]">
                <div class="card-image">
                    <img src="images/harimau-tidur.jpg" alt="rayahouse" class="h-[100px] rounded-[10px]">
                </div>
                <div class="card-text">
                    <div class="card-title ml-[10px]">
                        <h1 class="font-bold text-[18px] -my-[5px]">Mengapa Diam Itu Emas? Apakah Terlalu Diam Itu Baik?
                        </h1>
                    </div>
                    <div class="card-category-tag ml-[10px] mt-[7px]">
                        <h1 class="text-slate-400 font-normal" style="font-family: 'Plus Jakarta Sans',sans-serif">
                            In<span class="font-semibold text-slate-500"> My Opinion</span></h1>
                    </div>
                    <div class="card-post-date ml-[10px]">
                        <h4 class="text-[13px]" style="font-family: 'Plus Jakarta Sans',sans-serif">May 23,2022</h4>
                    </div>
                </div>

            </div>
            <div class="latest-article-card mt-[10px]">
                <div class="card-image">
                    <img src="images/soekarno.jpg" alt="rayahouse" class="h-[100px] w-[160px] rounded-[10px]">
                </div>
                <div class="card-text">
                    <div class="card-title ml-[10px]">
                        <h1 class="font-bold text-[18px] -my-[5px]">Belajarlah Dari Barat Tapi Jangan Jadi Peniru Barat</h1>
                    </div>
                    <div class="card-category-tag ml-[10px] mt-[7px]">
                        <h1 class="text-slate-400 font-normal" style="font-family: 'Plus Jakarta Sans',sans-serif">
                            In<span class="font-semibold text-slate-500"> Sejarah Dan Politik</span></h1>
                    </div>
                    <div class="card-post-date ml-[10px]">
                        <h4 class="text-[13px]" style="font-family: 'Plus Jakarta Sans',sans-serif">May 23,2022</h4>
                    </div>
                </div>

            </div>

        </div>



    </div>
@endsection
