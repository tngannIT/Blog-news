<div class="bg-white border border-top-0 p-4">
    {{-- <div class="media mb-4">
        <img src="https://ui-avatars.com/api/?name={{ $comment->user->name }}&background=random" alt="Image"
            class="img-fluid mr-3 mt-1" style="width: 45px;">
        <div class="media-body">
            <h6><a class="text-secondary font-weight-bold" href="">{{ $comment->user->name }}</a> <small><i>
                        {{ $comment->created_at }}</i></small></h6>
            <p>{{ $comment->content }}
            </p>
            <button class="btn btn-sm btn-outline-secondary">Trả lời</button>
        </div>
    </div> --}}
    <div class="media">
        <img src="https://ui-avatars.com/api/?name={{ $comment->user->name }}&background=random" alt="Image"
            class="img-fluid mr-3 mt-1" style="width: 45px;">
        <div class="media-body">
            <h6><a class="text-secondary font-weight-bold" href="">{{ $comment->user->name }}</a> <small><i>
                        {{ $comment->created_at }}</i></small></h6>
            <p>{{ $comment->content }}
            </p>

            @auth
                <a data-bs-toggle="collapse" href="#collapseRep_{{ $comment->id }}" role="button" aria-expanded="false"
                    aria-controls="collapseRep_{{ $comment->id }}" class="btn btn-sm btn-outline-secondary"><i
                        class="bi bi-reply"></i></a>
                @if (Auth()->user()->id == $comment->user->id)
                    <a data-bs-toggle="collapse" href="#collapseEdit_{{ $comment->id }}" role="button"
                        aria-expanded="false" aria-controls="collapseEdit_{{ $comment->id }}"
                        class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil-square"></i></a>
                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này không?')"
                        class="btn btn-outline-success btn-sm" href="{{ route('comment.destroy', $comment->id) }}"><i class="bi bi-trash"></i></a>
                @endif


                <div class="collapse" id="collapseEdit_{{ $comment->id }}">
                    <div class="card card-body">
                        <form action="{{ route('comment.update') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $comment->id }}">
                            <div class="form-group">
                                <label for="message">Bình luận của bạn</label>
                                <textarea name="content" id="message" cols="30" rows="5" class="form-control">{{ $comment->content }}</textarea>
                                @error('content')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-3">

                                <button class="btn btn-outline-danger" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEdit_{{ $comment->id }}" aria-expanded="false"
                                    aria-controls="collapseEdit_{{ $comment->id }}" type="button">Hủy</button>
                                <button class="btn btn-outline-primary" type="submit">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="collapse" id="collapseRep_{{ $comment->id }}">
                    <div class="card card-body">
                        <form action="{{ route('comment.reply') }}" method="POST">
                            @csrf
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <div class="form-group">
                                <label for="reply">Phản hồi của bạn</label>
                                <textarea name="content" id="reply" cols="30" rows="5" class="form-control"></textarea>
                                @error('content')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button class="btn btn-outline-primary mt-3" type="submit">Gửi</button>
                        </form>
                    </div>
                </div>
                
            @endauth

            @foreach ($comment->replies as $reply)
                @include('client.pages.components.comment', [
                    'comment' => $reply,
                    'post' => $post,
                ])
            @endforeach

        </div>

    </div>

</div>
