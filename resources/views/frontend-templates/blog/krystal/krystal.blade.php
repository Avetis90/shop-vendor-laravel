@extends('layouts.frontend.krystal')

@section('content')
    <main class="site-main blog-single">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 float-none float-right">
                    <div class="main-content">
                        <div class="post-list post-items">
                            @foreach($blogs_all_data as $row)
                                <div class="post-item">
                                    <div class="post-thumb">
                                        <a href="/blog/{{$row['post_slug']}}"><img
                                                    src="{{asset($row['featured_image'])}}" alt="post-image"></a>
                                        <span class="date">{{ Carbon\Carbon::parse($row['created_at'])->format('d F') }}</span>
                                    </div>
                                    <div class="post-item-info">
                                        <h3 class="post-name"><a
                                                    href="/blog/{{$row['post_slug']}}">{!! $row['post_title'] !!}</a>
                                        </h3>
                                        <div class="post-metas">
                                            <span class="author">Post by: <span>Admin</span></span>
                                            <span class="news">{{$row['post_type']}}</span>
                                            <span class="comment"><i class="fa fa-comment"
                                                                     aria-hidden="true"></i>{{$row['comments_details']['total']}}</span>
                                        </div>
                                        <div class="post-content">
                                            <p>{!! html_entity_decode($row['post_content'])!!}</p>
                                            <a href="/blog/{{$row['post_slug']}}" class="read-more">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="sidebar-left">
                        <div class="block-recent-post-blog">
                            @if(count($advanced_data['latest_items']) > 0)
                                <div class="block-title">Recent Post</div>
                                <ul>
                                    @foreach($advanced_data['latest_items'] as $post)
                                        <li class="recent-post-item"><a
                                                    href="/blog/{{$row['post_slug']}}">{{$post['post_title']}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="block-categories-blog">
                            <div class="block-title">Blog categories</div>
                            <ul>
                                @if(count($categoriesTree) > 0)
                                    @foreach($categoriesTree as $cat)
                                    <li class="categories-item"><a href="/categories/blog/{{$cat['slug']}}">{{$cat['name']}}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection