
                                <!-- Post Items Title Start -->
                                <div class="post--items-title">
                                    <h2 class="h4">{{count($comments)}} Commentaires</h2>

                                    <i class="icon fa fa-comments-o"></i>
                                </div>
                                <!-- Post Items Title End -->

                                <ul class="comment--items nav">

                                @foreach($comments as $comment)
                                    <li>
                                        <!-- Comment Item Start -->
                                        <div class="comment--item clearfix">
                                            

                                            <div class="comment--info">
                                                <div class="comment--header clearfix">
                                                    <p class="name">{{$comment->name}}</p>
                                                    <p class="date">{{$comment->created_at}}</p>

                                                    <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                                </div>

                                                <div class="comment--content">
                                                    <p>{{$comment->body}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Comment Item End -->
                                    </li>
                           
                           @endforeach
                                    
                                </ul>
                            